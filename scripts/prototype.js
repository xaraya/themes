/*  Prototype: an object-oriented Javascript library, version 1.0.1
 *  (c) 2005 Sam Stephenson <sam@conio.net>
 *
 *  Prototype is freely distributable under the terms of an MIT-style license. 
 *  For details, see http://prototype.conio.net/
 */

var Prototype = {
  Version: '1.1.0'
}

var Class = {
  create: function() {
    return function() { 
      this.initialize.apply(this, arguments);
    }
  }
}

var Abstract = new Object();

Object.prototype.extend = function(object) {
  for (property in object) {
    this[property] = object[property];
  }
  return this;
}

Function.prototype.bind = function(object) {
  var call_method = this;
  return function() {
    call_method.apply(object, arguments);
  }
}

Function.prototype.bindAsEventListener = function(object) {
  var call_method = this;
  return function(event) {
    call_method.call(object, event || window.event);
  }
}

Number.prototype.toColorPart = function() {
  var digits = this.toString(16);
  if (this < 16) return '0' + digits;
  return digits;
}

var Try = {
  these: function() {
    var returnValue;
    
    for (var i = 0; i < arguments.length; i++) {
      var lambda = arguments[i];
      try {
        returnValue = lambda();
        break;
      } catch (e) {}
    }
    
    return returnValue;
  }
}

var Toggle = {
  display: function() {
    for (var i = 0; i < arguments.length; i++) {
      var element = $(arguments[i]);
      element.style.display = 
        (element.style.display == 'none' ? '' : 'none');
    }
  }
}

/*--------------------------------------------------------------------------*/

function $() {
  var elements = new Array();
  
  for (var i = 0; i < arguments.length; i++) {
    var element = arguments[i];
    if (typeof element == 'string')
      element = document.getElementById(element);

    if (arguments.length == 1) 
      return element;
      
    elements.push(element);
  }
  
  return elements;
}

function getElementsByClassName(className) {
  var children = document.getElementsByTagName('*') || document.all;
  var elements = new Array();
  
  for (var i = 0; i < children.length; i++) {
    var child = children[i];
    var classNames = child.className.split(' ');
    for (var j = 0; j < classNames.length; j++) {
      if (classNames[j] == className) {
        elements.push(child);
        break;
      }
    }
  }
  
  return elements;
}

/*--------------------------------------------------------------------------*/

var Ajax = {
  getTransport: function() {
    return Try.these(
      function() {return new ActiveXObject('Msxml2.XMLHTTP')},
      function() {return new ActiveXObject('Microsoft.XMLHTTP')},
      function() {return new XMLHttpRequest()}
    ) || false;
  },
  
  emptyFunction: function() {}
}

Ajax.Base = function() {};
Ajax.Base.prototype = {
  setOptions: function(options) {
    this.options = {
      method:       'post',
      asynchronous: true,
      parameters:   ''
    }.extend(options || {});
  }
}

Ajax.Request = Class.create();
Ajax.Request.Events = 
  ['Uninitialized', 'Loading', 'Loaded', 'Interactive', 'Complete'];

Ajax.Request.prototype = (new Ajax.Base()).extend({
  initialize: function(url, options) {
    this.transport = Ajax.getTransport();
    this.setOptions(options);
  
    try {
      if (this.options.method == 'get')
        url += '?' + this.options.parameters + '&_=';
    
      this.transport.open(this.options.method, url, true);
      
      if (this.options.asynchronous) {
        this.transport.onreadystatechange = this.onStateChange.bind(this);
        setTimeout((function() {this.respondToReadyState(1)}).bind(this), 10);
      }
              
      if (this.options.method == 'post') {
        this.transport.setRequestHeader('Connection', 'close');
        this.transport.setRequestHeader('Content-type',
          'application/x-www-form-urlencoded');
      }
      
      this.transport.send(this.options.method == 'post' ? 
        this.options.parameters + '&_=' : null);
                      
    } catch (e) {
    }    
  },
      
  onStateChange: function() {
    var readyState = this.transport.readyState;
    if (readyState != 1)
      this.respondToReadyState(this.transport.readyState);
  },
  
  respondToReadyState: function(readyState) {
    var event = Ajax.Request.Events[readyState];
    (this.options['on' + event] || Ajax.emptyFunction)(this.transport);
  }
});

Ajax.Updater = Class.create();
Ajax.Updater.prototype = (new Ajax.Base()).extend({
  initialize: function(container, url, options) {
    this.container = $(container);
    this.setOptions(options);
  
    if (this.options.asynchronous) {
      this.onComplete = this.options.onComplete;
      this.options.onComplete = this.updateContent.bind(this);
    }
    
    this.request = new Ajax.Request(url, this.options);
    
    if (!this.options.asynchronous)
      this.updateContent();
  },
  
  updateContent: function() {
    if (!this.options.insertion) {
      this.container.innerHTML = this.request.transport.responseText;
    } else {
      new this.options.insertion(this.container,
        this.request.transport.responseText);
    }

    if (this.onComplete) {
      setTimeout((function() {this.onComplete(this.request)}).bind(this), 10);
    }
  }
});

/*--------------------------------------------------------------------------*/

var Field = {
  clear: function() {
    for (var i = 0; i < arguments.length; i++)
      $(arguments[i]).value = '';
  },

  focus: function(element) {
    $(element).focus();
  },
  
  present: function() {
    for (var i = 0; i < arguments.length; i++)
      if ($(arguments[i]).value == '') return false;
    return true;
  }
}

/*--------------------------------------------------------------------------*/

var Form = {
  serialize: function(form) {
    var elements = Form.getElements($(form));
    var queryComponents = new Array();
    
    for (var i = 0; i < elements.length; i++) {
      var queryComponent = Form.Element.serialize(elements[i]);
      if (queryComponent)
        queryComponents.push(queryComponent);
    }
    
    return queryComponents.join('&');
  },
  
  getElements: function(form) {
    form = $(form);
    var elements = new Array();

    for (tagName in Form.Element.Serializers) {
      var tagElements = form.getElementsByTagName(tagName);
      for (var j = 0; j < tagElements.length; j++)
        elements.push(tagElements[j]);
    }
    return elements;
  }
}

Form.Element = {
  serialize: function(element) {
    element = $(element);
    var method = element.tagName.toLowerCase();
    var parameter = Form.Element.Serializers[method](element);
    
    if (parameter)
      return encodeURIComponent(parameter[0]) + '=' + 
        encodeURIComponent(parameter[1]);                   
  },
  
  getValue: function(element) {
    element = $(element);
    var method = element.tagName.toLowerCase();
    var parameter = Form.Element.Serializers[method](element);
    
    if (parameter) 
      return parameter[1];
  }
}

Form.Element.Serializers = {
  input: function(element) {
    switch (element.type.toLowerCase()) {
      case 'hidden':
      case 'password':
      case 'text':
        return Form.Element.Serializers.textarea(element);
      case 'checkbox':  
      case 'radio':
        return Form.Element.Serializers.inputSelector(element);
    }
    return false;
  },

  inputSelector: function(element) {
    if (element.checked)
      return [element.name, element.value];
  },

  textarea: function(element) {
    return [element.name, element.value];
  },

  select: function(element) {
    var index = element.selectedIndex;
    return [element.name, (index >= 0) ? element.options[index].value : ''];
  }
}

/*--------------------------------------------------------------------------*/

Abstract.TimedObserver = function() {}
Abstract.TimedObserver.prototype = {
  initialize: function(element, frequency, callback) {
    this.frequency = frequency;
    this.element   = $(element);
    this.callback  = callback;
    
    this.lastValue = this.getValue();
    this.registerCallback();
  },
  
  registerCallback: function() {
    setTimeout(this.onTimerEvent.bind(this), this.frequency * 1000);
  },
  
  onTimerEvent: function() {
    var value = this.getValue();
    if (this.lastValue != value) {
      this.callback(this.element, value);
      this.lastValue = value;
    }
    
    this.registerCallback();
  }
}

Form.Element.Observer = Class.create();
Form.Element.Observer.prototype = (new Abstract.TimedObserver()).extend({
  getValue: function() {
    return Form.Element.getValue(this.element);
  }
});

Form.Observer = Class.create();
Form.Observer.prototype = (new Abstract.TimedObserver()).extend({
  getValue: function() {
    return Form.serialize(this.element);
  }
});


/*--------------------------------------------------------------------------*/

Abstract.Insertion = function(adjacency) {
  this.adjacency = adjacency;
}

Abstract.Insertion.prototype = {
  initialize: function(element, content) {
    this.element = $(element);
    this.content = content;
    
    if (this.adjacency && this.element.insertAdjacentHTML) {
      this.element.insertAdjacentHTML(this.adjacency, this.content);
    } else {
      this.range = this.element.ownerDocument.createRange();
      if (this.initializeRange) this.initializeRange();
      this.fragment = this.range.createContextualFragment(this.content);
      this.insertContent();
    }
  }
}

var Insertion = new Object();

Insertion.Before = Class.create();
Insertion.Before.prototype = (new Abstract.Insertion('beforeBegin')).extend({
  initializeRange: function() {
    this.range.setStartBefore(this.element);
  },
  
  insertContent: function() {
    this.element.parentNode.insertBefore(this.fragment, this.element);
  }
});

Insertion.Top = Class.create();
Insertion.Top.prototype = (new Abstract.Insertion('afterBegin')).extend({
  initializeRange: function() {
    this.range.selectNodeContents(this.element);
    this.range.collapse(true);
  },
  
  insertContent: function() {  
    this.element.insertBefore(this.fragment, this.element.firstChild);
  }
});

Insertion.Bottom = Class.create();
Insertion.Bottom.prototype = (new Abstract.Insertion('beforeEnd')).extend({
  initializeRange: function() {
    this.range.selectNodeContents(this.element);
    this.range.collapse(this.element);
  },
  
  insertContent: function() {
    this.element.appendChild(this.fragment);
  }
});

Insertion.After = Class.create();
Insertion.After.prototype = (new Abstract.Insertion('afterEnd')).extend({
  initializeRange: function() {
    this.range.setStartAfter(this.element);
  },
  
  insertContent: function() {
    this.element.parentNode.insertBefore(this.fragment, 
      this.element.nextSibling);
  }
});

/*--------------------------------------------------------------------------*/

var Effect = new Object();

Effect.Highlight = Class.create();
Effect.Highlight.prototype = {
  initialize: function(element) {
    this.element = $(element);
    this.start  = 153;
    this.finish = 255;
    this.current = this.start;
    this.fade();
  },
  
  fade: function() {
    if (this.isFinished()) return;
    if (this.timer) clearTimeout(this.timer);
    this.highlight(this.element, this.current);
    this.current += 17;
    this.timer = setTimeout(this.fade.bind(this), 250);
  },
  
  isFinished: function() {
    return this.current > this.finish;
  },
  
  highlight: function(element, current) {
    element.style.backgroundColor = "#ffff" + current.toColorPart();
  }
}


Effect.Fade = Class.create();
Effect.Fade.prototype = {
  initialize: function(element) {
    this.element = $(element);
    this.start  = 100;
    this.finish = 0;
    this.current = this.start;
    this.fade();
  },
  
  fade: function() {
    if (this.isFinished()) { this.element.style.display = 'none'; return; }
    if (this.timer) clearTimeout(this.timer);
    this.setOpacity(this.element, this.current);
    this.current -= 10;
    this.timer = setTimeout(this.fade.bind(this), 50);
  },
  
  isFinished: function() {
    return this.current <= this.finish;
  },
  
  setOpacity: function(element, opacity) {
    opacity = (opacity == 100) ? 99.999 : opacity;
    element.style.filter = "alpha(opacity:"+opacity+")";
    element.style.opacity = opacity/100;
  }
}

Effect.Scale = Class.create();
Effect.Scale.prototype = {
  initialize: function(element, percent) {
    this.element = $(element);
    this.startScale    = 1.0;
    this.startHeight   = this.element.offsetHeight;
    this.startWidth    = this.element.offsetWidth;
    this.currentHeight = this.startHeight;
    this.currentWidth  = this.startWidth;
    this.finishScale   = (percent/100);
    if (this.element.style.fontSize=="") this.sizeEm = 1.0;
    if (this.element.style.fontSize.indexOf("em")>0)
       this.sizeEm      = parseFloat(this.element.style.fontSize);
    if(this.element.effect_scale) {
      clearTimeout(this.element.effect_scale.timer);
      this.startScale  = this.element.effect_scale.currentScale;
      this.startHeight = this.element.effect_scale.startHeight;
      this.startWidth  = this.element.effect_scale.startWidth;
      if(this.element.effect_scale.sizeEm) 
        this.sizeEm    = this.element.effect_scale.sizeEm;      
    }
    this.element.effect_scale = this;
    this.currentScale  = this.startScale;
    this.factor        = this.finishScale - this.startScale;
    this.options       = arguments[2] || {}; 
    this.scale();
  },
  
  scale: function() {
    if (this.isFinished()) { 
      this.setDimensions(this.element, this.startWidth*this.finishScale, this.startHeight*this.finishScale);
      if(this.sizeEm) this.element.style.fontSize = this.sizeEm*this.finishScale + "em";
      if(this.options.complete) this.options.complete(this);
      return; 
    }
    if (this.timer) clearTimeout(this.timer);
    if (this.options.step) this.options.step(this);
    this.setDimensions(this.element, this.currentWidth, this.currentHeight);
    if(this.sizeEm) this.element.style.fontSize = this.sizeEm*this.currentScale + "em";
    this.currentScale += (this.factor/10);
    this.currentWidth = this.startWidth * this.currentScale;
    this.currentHeight = this.startHeight * this.currentScale;
    this.timer = setTimeout(this.scale.bind(this), 50);
  },
  
  isFinished: function() {
    return (this.factor < 0) ? 
      this.currentScale <= this.finishScale : this.currentScale >= this.finishScale;
  },
  
  setDimensions: function(element, width, height) {
    element.style.width = width + 'px';
    element.style.height = height + 'px';
  }
}

Effect.Squish = Class.create();
Effect.Squish.prototype = {
  initialize: function(element) {
    this.element = $(element);
    new Effect.Scale(this.element, 1, { complete: this.hide.bind(this) } );
  },
  hide: function() {
    this.element.style.display = 'none';
  } 
}

Effect.Puff = Class.create();
Effect.Puff.prototype = {
  initialize: function(element) {
    this.element = $(element);
    this.opacity = 100;
    this.startTop  = this.element.top || this.element.offsetTop;
    this.startLeft = this.element.left || this.element.offsetLeft;
    new Effect.Scale(this.element, 200, { step: this.fade.bind(this), complete: this.hide.bind(this) } );
  },
  fade: function(effect) {
    topd    = (((effect.currentScale)*effect.startHeight) - effect.startHeight)/2;
    leftd   = (((effect.currentScale)*effect.startWidth) - effect.startWidth)/2;
    this.element.style.position='absolute';
    this.element.style.top = this.startTop-topd + "px";
    this.element.style.left = this.startLeft-leftd + "px";
    this.opacity -= 10;
    this.setOpacity(this.element, this.opacity); 
    if(navigator.appVersion.indexOf('AppleWebKit')>0) this.element.innerHTML += ''; //force redraw on safari
  },
  hide: function() {
    this.element.style.display = 'none';
  },
  setOpacity: function(element, opacity) {
    opacity = (opacity == 100) ? 99.999 : opacity;
    element.style.filter = "alpha(opacity:"+opacity+")";
    element.style.opacity = opacity/100;
  }
}

Effect.Appear = Class.create();
Effect.Appear.prototype = {
  initialize: function(element) {
    this.element = $(element);
    this.start  = 0;
    this.finish = 100;
    this.current = this.start;
    this.fade();
  },
  
  fade: function() {
    if (this.isFinished()) return;
    if (this.timer) clearTimeout(this.timer);
    this.setOpacity(this.element, this.current);
    this.current += 10;
    this.timer = setTimeout(this.fade.bind(this), 50);
  },
  
  isFinished: function() {
    return this.current > this.finish;
  },
  
  setOpacity: function(element, opacity) {
    opacity = (opacity == 100) ? 99.999 : opacity;
    element.style.filter = "alpha(opacity:"+opacity+")";
    element.style.opacity = opacity/100;
    element.style.display = '';
  }
}

Effect.ContentZoom = Class.create();
Effect.ContentZoom.prototype = {
  initialize: function(element, percent) {
    this.element = $(element);
    if (this.element.style.fontSize=="") this.sizeEm = 1.0;
    if (this.element.style.fontSize.indexOf("em")>0)
       this.sizeEm = parseFloat(this.element.style.fontSize);
    if(this.element.effect_contentzoom) {
      this.sizeEm = this.element.effect_contentzoom.sizeEm;
    }
    this.element.effect_contentzoom = this;
    this.element.style.fontSize = this.sizeEm*(percent/100) + "em";
    if(navigator.appVersion.indexOf('AppleWebKit')>0) { this.element.scrollTop -= 1; };
  }
}

Event = {
  KEY_BACKSPACE: 8,
  KEY_TAB:       9,
  KEY_RETURN:   13,
  KEY_ESC:      27,
  KEY_LEFT:     37,
  KEY_UP:       38,
  KEY_RIGHT:    39,
  KEY_DOWN:     40,
  KEY_DELETE:   46,

  element: function(event) {
    return event.srcElement || event.currentTarget;
  },
  
  stop: function(event) {
    if(event.preventDefault) 
      { event.preventDefault(); event.stopPropagation(); }
    else 
      event.returnValue = false;
  },
  
  getParentNodeOrSelfByName: function(event, nodeName) {
    element = Event.element(event);
      while(element.nodeName != nodeName && element.parentNode) 
        element = element.parentNode; 
    return element;
  },
  
  observeKeypress: function(element, observer) {
    if(navigator.appVersion.indexOf('AppleWebKit')>0) 
      { $(element).addEventListener("keydown",observer,false); return; }
    if($(element).addEventListener) $(element).addEventListener("keypress",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onkeydown",observer);
  },
  
  observeBlur: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("blur",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onblur",observer);
  },
  
  observeClick: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("click",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onclick",observer);
  },
  
  observeHover: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("mouseover",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onmouseover",observer);
  },
  
  observeMousedown: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("mousedown",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onmousedown",observer);
  },

  observeMouseup: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("mouseup",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onmouseup",observer);
  },
  
  observeMousemove: function(element, observer) {
    if($(element).addEventListener) $(element).addEventListener("mousemove",observer,false)
      else if($(element).attachEvent) $(element).attachEvent("onmousemove",observer);
  }
  
}

var Control = new Object();

Control.HorizontalSlider = Class.create();
Control.HorizontalSlider.prototype = {
  initialize: function(element) {
    this.element    = $(element);
    this.handle     = this.element.firstChild;
    this.resolution = this.element.offsetWidth - this.handle.offsetWidth;
    this.correction = Math.round(this.handle.offsetWidth/2);
    this.options    = arguments[1] || {};
    this.active     = false;
    Event.observeMousedown (this.element, this.setActive.bindAsEventListener(this));
    Event.observeMouseup   (document, this.setInactive.bindAsEventListener(this));
    Event.observeMousemove (this.element, this.change.bindAsEventListener(this));
  },
  setActive: function(event) {
    this.active = true;
    this.change(event);
  },
  setInactive: function(event) {
    this.active = false;
  },
  change: function(event) {
   if(this.active) {
      pos = (event.clientX - this.element.offsetLeft - (this.correction));
      if(pos<0) pos=0;
      if(pos>this.resolution) pos=this.resolution;
      this.handle.style.left = pos + "px";
      if(this.options.change) this.options.change(this.value());
   }
  },
  value: function() {
    return (parseFloat(this.handle.style.left)/this.resolution);
  }
}

Text = {
  stripTags: function(htmlstr) {
    return htmlstr.replace(/<\/?[^>]+>/gi,"");
  },
  decodeHTML: function(htmlstr) {
    return htmlstr.replace(/&lt;/gi,"<").replace(/&gt;/gi,">").replace(/&quot;/gi,'"').replace(/&amp;/gi,"&").replace(/[\n\r]/gi,"");
  }
}

Element = {
  show: function(element) {
    $(element).style.display = '';
  },
  hide: function(element) {
    $(element).style.display = 'none';
  },
  samePositionAs: function(element, aselement) {
    if(navigator.appVersion.indexOf('MSIE')>0) {
      $(element).style.top      = $(aselement).style.top;
      $(element).style.left     = $(aselement).style.left;
      $(element).style.width    = $(aselement).offsetWidth;
      $(element).style.height   = $(aselement).offsetHeight;
    }
  }
}
		     
Ajax.Autocomplete = Class.create();
Ajax.Autocomplete.prototype = (new Ajax.Base()).extend({
  initialize: function(element, update, url, options) {
    this.element     = $(element); 
    this.update      = $(update);  
    this.has_focus   = false; 
    this.changed     = false; 
    this.active      = false; 
    this.index       = 0;     
    this.entry_count = 0;    
    this.url         = url;

    this.setOptions(options);
    this.options.asynchronous = true;
    this.options.onComplete   = this.onComplete.bind(this)
    this.options.frequency    = this.options.frequency || 0.4;
    this.options.min_chars    = this.options.min_chars || 1;
    this.options.method       = 'post';
    
    if(this.options.indicator)
      this.indicator = $(this.options.indicator);
       
    this.observer = null;
    
    Event.observeKeypress (this.element, this.onKeyPress.bindAsEventListener(this));
    Event.observeClick    (document, this.onBlur.bindAsEventListener(this));
  },
  
  show: function() {
    Element.show(this.update);
    if(!this.iefix && (navigator.appVersion.indexOf('MSIE')>0)) {
      new Insertion.Before(this.update, 
       '<iframe id="' + this.update.id + '_iefix" style="display:none;" src="javascript:false;" frameborder="0" scrolling="no"></iframe>');
      this.iefix = $(this.update.id+'_iefix');
      this.iefix.style.position = 'absolute';
      this.iefix.style.zIndex = 1;
      this.update.style.zIndex = 2;
    }
    if(this.iefix) {
      Element.samePositionAs(this.iefix, this.update);
      Element.show(this.iefix);
    }
  },
  
  hide: function() {
    if(this.iefix) Element.hide(this.iefix);
    Element.hide(this.update);
  },
  
  startIndicator: function() {
    if(this.indicator) Element.show(this.indicator);
  },
  
  stopIndicator: function() {
    if(this.indicator) Element.hide(this.indicator);
  },
  
  onObserverEvent: function() {
    this.changed = false;   
    if(this.element.value.length>=this.options.min_chars) {
      this.startIndicator();
      this.options.parameters = this.options.callback ?
        this.options.callback(this.element, Form.Element.getValue(this.element)) :
          Form.Element.getValue(this.element);
      new Ajax.Request(this.url, this.options);
    } else {
      this.active = false;
      this.hide();
    }
  },
  
  onComplete: function(request) {
    if(!this.changed) {
      this.update.innerHTML = request.responseText;

      if(this.update.firstChild && this.update.firstChild.childNodes) {
        this.entry_count = 
          this.update.firstChild.childNodes.length;
        for (var i = 0; i < this.entry_count; i++) {
          entry = this.get_entry(i);
          entry.autocompleteIndex = i;
          Event.observeHover(entry, this.onHover.bindAsEventListener(this));
          Event.observeClick(entry, this.onClick.bindAsEventListener(this));
        }
      } else { 
        this.entry_count = 0;
      }
      
      this.stopIndicator();
      
      this.index = 0;
      this.render();
    }
  },
  
  onKeyPress: function(event) {
    if(this.active)
      switch(event.keyCode) {
       case Event.KEY_TAB:
       case Event.KEY_RETURN:
         this.select_entry();
         Event.stop(event);
       case Event.KEY_ESC:
         this.hide();
         this.active = false;
         return;
       case Event.KEY_LEFT:
       case Event.KEY_RIGHT:
         return;
       case Event.KEY_UP:
         this.mark_previous();
         this.render();
         return;
       case Event.KEY_DOWN:
         this.mark_next();
         this.render();
         return;
      }
     else 
      if(event.keyCode==Event.KEY_TAB || event.keyCode==Event.KEY_RETURN) 
        return;
    
    this.changed = true;
    this.has_focus = true;
    
    if(this.observer) clearTimeout(this.observer);
      this.observer = 
        setTimeout(this.onObserverEvent.bind(this), this.options.frequency*1000);
  },
  
  onHover: function(event) {
    element = Event.getParentNodeOrSelfByName(event, 'LI');
    if(this.index != element.autocompleteIndex) 
    {
        this.index = element.autocompleteIndex;
        this.render();
    }
  },
  
  onClick: function(event) {
    element = Event.getParentNodeOrSelfByName(event, 'LI');
    this.index = element.autocompleteIndex;
    this.select_entry();
  },
  
  onBlur: function(event) {
    element = Event.element(event);
    if(element==this.update) return;
    while(element.parentNode) 
      { element = element.parentNode; if(element==this.update) return; }
    this.hide();
    this.active = false;
  }, 
  
  render: function() {
    if(this.entry_count > 0) {
      for (var i = 0; i < this.entry_count; i++)
        this.get_entry(i).className =
          this.index==i ? 'selected' : '';
        
      if(this.has_focus) { 
        if(this.get_current_entry().scrollIntoView) 
          this.get_current_entry().scrollIntoView(false);
        
        this.show();
        this.active = true;
      }
    } else this.hide();
  },
  
  mark_previous: function() {
    if(this.index > 0) this.index--
      else this.index = this.entry_count-1;
  },
  
  mark_next: function() {
    if(this.index < this.entry_count-1) this.index++
      else this.index = 0;
  },
  
  get_entry: function(index) {
    return this.update.firstChild.childNodes[index];
  },
  
  get_current_entry: function() {
    return this.get_entry(this.index);
  },
  
  select_entry: function() {
    this.hide();
    this.active = false;
    value = Text.decodeHTML(Text.stripTags(this.get_current_entry().innerHTML));
    this.element.value = value;
    this.element.focus();
  }
});