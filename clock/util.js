
if (!window.clock) 
    window.clock = {};

if (window.jQuery) 
    jQuery.noConflict();

//for debug 
(function(){
	function log(){
		var console = window.console;
		if (console && console.log) {
			try{
				console.log.apply(console, arguments);
			}catch(e){
				
			}
		}
	}
	
	function error(error, alert){
		log(error);
		if(alert) window.alert(error.message||error.title||error.details||error);
	}
	
	clock.log = log;
	clock.error = error;
})();


//Util
clock.Util = {
	uuid: (function(){
		var counter = 0;
		return function(){
			return '_'+(counter++)+'_'+new Date().getTime();
		};
	})(),
	
	getRoot: function(url){
		url = url||window.location.toString();
		var i = url.indexOf('://');
		if(i>0) i = url.indexOf('/', i+3);
		else return '/';
		if(i>0) return url.substring(0, i+1);
		return url+'/';
	},

	getDir: function(url){
		url = url||window.location.toString();
		var i = url.lastIndexOf('/');
		if(i>0) return url.substring(0, i+1);
		return '';
	},
	
	query: function(search){
		var query = {};
		var search = search||window.location.search;
		if(!search||search.length==0) return query;
		var ss = search.substring(1).split("&");
		for (i=0;i<ss.length;i++) {
			var p = ss[i].split("=");
			query[p[0]] = p.length==2?p[1]:null;
		}
		return query;
	}
};

//TimeFormater
clock.TimeFormater = Class.create({
	initialize: function(date){
		if(!date) this.date = new Date();
		else if(date instanceof Date) this.date = date;
		else this.date = new Date(date);
		if(!this.date.getTime()) this.date = new Date();
	},
	
	getTime: function(includeSeconds){
		var str = this.fill(this.date.getHours())+':'+this.fill(this.date.getMinutes());
		if(includeSeconds) str += ':'+this.fill(this.date.getSeconds());
		return str;
	},
	
	getDay: function(){
		var y = this.date.getFullYear();
		var m = this.fill(this.date.getMonth()+1);
		var d = this.fill(this.date.getDate());
		return y+'/'+m+'/'+d;
	},
	
	getWeek: function(){
		var w = clock.TimeFormater.Week[this.date.getDay()];
		return w;
	},
	
	fill: function(value, length){
		if(!length) length = 2;
		value = value+'';
		for(var i=0; i<length-value.length; i++){
			value = '0'+value;
		}
		return value;
	}
});

clock.TimeFormater.Week = ['星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];

//IntSequence
clock.IntSequence = Class.create(
{
	initialize: function(start){
		this.current = start;
    },
	
	next: function(){
		return this.current++;
	}
});

//EventDispatcher
clock.EventDispatcher = 
{			
	addEventListener: function(eventName, listener, priority){
		var listeners = this.getEventListeners(eventName);
		if (listeners.indexOf(listener) < 0) {
			listener._event_priority = priority||0;
			listeners.push(listener);
		}
		return this;
	},
	
	onEventOnce: function(name, handler){
		var caller = function(event){
			handler.call(null, event);
			this.removeEventListener(name, caller);
		};
		return this.addEventListener(name, caller);
	},

	removeEventListener: function(eventName, listener){
		if(arguments.length==0){
			this.eventListenerMap = {};
			return this;
		}
		var listeners = this.getEventListeners(eventName);
		if(listener){
			var i = listeners.indexOf(listener);
			if(i>=0) listeners.splice(i, 1);
		}
		else{
			listeners.clear();
		}
		return this;
	},
	
	dispatchEvent: function(event){
		if(Object.isString(event)) event = {name: event};
		event.target = this;
		event.stop = function(){
			event._stop = true;
		};
		var listeners = this.getEventListeners(event.name);
		listeners = listeners.concat(this.getEventListeners('*'));
		listeners = listeners.sortBy(function(listener){
			return -listener._event_priority;
		});
		for(var i=0; i<listeners.length; i++){
			listeners[i].call(null, event);
			if(event._stop) break;
		}
		return this;
	},
	
	getEventListeners: function(eventName){
		if(!this._listenerMap){
			this._listenerMap = {};
		}
		var listeners = this._listenerMap[eventName];
		if(!listeners){
			listeners = [];
			this._listenerMap[eventName] = listeners;
		}
		return listeners;
	}
};

//LoopArray
clock.LoopArray = Class.create(Enumerable, 
{
	initialize: function(array, start){
		this.array = $A(array);
		this.start = start||0;
    },
	
	setStart: function(value){
		this.start = value;
	},
	
	getStart: function(){
		return this.start;
	},
	
	startNext: function(){
		this.startMove(1);
	},
	
	startPrev: function(){
		this.startMove(-1);
	},
	
	startMove: function(value){
		this.start += value
	},
	
	_each: function(iterator) {
		for (var i=0; i<this.size(); i++)
  			iterator(this.get(i));
	},

	get: function(index){
		index = Math.mod(this.start+index, this.array.length);
		return this.array[index];
	},
	
	size: function(){
		return this.array.length;
	}
});


//base class for async request
clock.AsyncRequest = 
{
	invokeCallback: function(){
		var params = $A(arguments);
		var name = 'on'+params.shift().capitalize();
		var callbacks = this.options[name];
		if(!callbacks) return;
		if(!Object.isArray(callbacks)) callbacks = [callbacks];
		if(this.options) params.push(this.options); //append options
		callbacks.each(function(callback){
			try{
				callback.apply(null, params);
			}catch(e){
				clock.log(e);
			}
		});
	},
	
	addSuccessHandler: function(handler){
		return this.addCallback('success', handler);
	},
	
	addFailureHandler: function(handler){
		return this.addCallback('failure', handler);
	},
	
	addCompleteHandler: function(handler){
		return this.addCallback('complete', handler);
	},
	
	addCallback: function(name, handler){
		name = 'on'+name.capitalize();
		var options = this.options;
		if(!options[name]) options[name] = [handler];
		else if(Object.isArray(options[name])) options[name].unshift(handler);
		else options[name] = [handler, options[name]];
		return this;
	}
}

/**
 * cookies
 * @param {Object} path
 * @param {Object} domain
 */
clock.Cookies = Class.create(
{
    initialize: function(path, domain){
        this.path = path || '/';
        this.domain = domain || null;
    },
	
    // Sets a cookie
    set: function(key, value, days){
        if (typeof key != 'string') {
            throw "Invalid key";
        }
        if (typeof value != 'string' && typeof value != 'number') {
            throw "Invalid value";
        }
        if (days && typeof days != 'number') {
            throw "Invalid expiration time";
        }
        var setValue = key + '=' + escape(new String(value));
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var setExpiration = "; expires=" + date.toGMTString();
        }
        else 
            var setExpiration = "";
        var setPath = '; path=' + escape(this.path);
        var setDomain = (this.domain) ? '; domain=' + escape(this.domain) : '';
        var cookieString = setValue + setExpiration + setPath + setDomain;
        document.cookie = cookieString;
    },
    // Returns a cookie value or false
    get: function(key){
        var keyEquals = key + "=";
        var value = false;
        document.cookie.split(';').invoke('strip').each(function(s){
            if (s.startsWith(keyEquals)) {
                value = unescape(s.substring(keyEquals.length, s.length));
                throw $break;
            }
        });
        return value;
    },
    // Clears a cookie
    clear: function(key){
        this.set(key, '', 1);
    },
    // Clears all cookies
    clearAll: function(){
        document.cookie.split(';').collect(function(s){
            return s.split('=').first().strip();
        }).each(function(key){
            this.clear(key);
        }.bind(this));
    }
});


clock.Preloader = Class.create(clock.EventDispatcher, {
	initialize: function(url, options){
		this.url = url;
		this.options = options||{};
		this.request = new Ajax.Request(url, {
			method: 'get',
			onLoaded: this.loadedHandler.bind(this),
			onInteractive: this.interactiveHandler.bind(this),
			onComplete: this.completeHandler.bind(this)
		});
	},
	
	onComplete: function(listener){
		this.addEventListener('complete', listener);
	},
	
	onProgress: function(listener){
		this.addEventListener('progress', listener);
	},
	
	loadedHandler: function(response){
		this.totals = response.getHeader('Content-Length');
		this.result = '';
		this.dispatchEvent({
			name: 'progress',
			loaded: 0,
			totals: this.totals,
			percent: 0
		});
	},
	
	interactiveHandler: function(response){
		var loaded = response.responseText.length;
		this.dispatchEvent({
			name: 'progress',
			loaded: loaded,
			totals: this.totals,
			percent: Math.round(loaded*100/this.totals),
			content: response.responseText
		});
	},
	
	completeHandler: function(response){
		this.result = response.responseText;
		this.dispatchEvent({
			name: 'progress',
			loaded: this.totals,
			totals: this.totals,
			percent: 100,
			content: response.responseText
		});
		this.dispatchEvent({
			name: 'complete',
			content: response.responseText,
			status: response.status
		});
	}
});
	
//extend Element
(function(){	
	Element.addMethods(
	{
	    //style
		setStyle: (function(){
			var _super = Element.setStyle;
			return function(element, styles){
				if (arguments.length==3&&Object.isString(arguments[1])) {
					var name = arguments[1];
					styles = {};
					styles[name] = arguments[2];
				}
				return _super(element, styles);
			}
		})(),
		
		removeStyle: function(element, name){
			return Element.setStyle(element, name, null);
		},
		
	    setStylePx: function(element, name, value){
			if(Object.isNumber(value)) value = value+'px';
	        return Element.setStyle(element, name, value);
	    },
	    
	    getStyleNum: function(element, name){
	        var value = Element.getStyle(element, name);
			if(Object.isString(value)&&value.endsWith('%')) value = '';
	        value = parseFloat(value);
			if(Object.isNumber(value)&&!isNaN(value)) return value;
			return 0;
	    },

		//position
	    getX: function(element){
	        return Element.getStyleNum(element, 'left');
	    },
	    
		setX: function(element, value){
	        return Element.setStylePx(element, 'left', value);
	    },
		
	    getY: function(element){
	        return Element.getStyleNum(element, 'top');
	    },
	    
		setY: function(element, value){
	        return Element.setStylePx(element, 'top', value);
	    },
		
		setPosition: function(element, x, y){
			return $(element).setX(x).setY(y);
		},
		
		getPosition: function(element){
			element = $(element);
			return {x: element.getX(), y: element.getY()};
		},
		
		getZ: function(element){
	        return Element.getStyleNum(element, 'zIndex');
	    },
	    
		setZ: function(element, value){
	        return Element.setStyle(element, 'zIndex', value);
	    },
	    
	    getBottom: function(element){
	        return Element.getStyleNum(element, 'bottom');
	    },
	    
		setBottom: function(element, value){
	        return Element.setStylePx(element, 'bottom', value);
	    },
	    
	    getRight: function(element){
	        return Element.getStyleNum(element, 'right');
	    },
	    
		setRight: function(element, value){
	        return Element.setStylePx(element, 'right', value);
	    },
		
		anchorTo: function(element, target){
			element = $(element);
			target = $(target);
			var container = $(element).getOffsetParent();
			var containerOffset = container.cumulativeOffset();
			var targetOffset = target.cumulativeOffset();
			var offset = {
				left: targetOffset.left-containerOffset.left,
				top: targetOffset.top-containerOffset.top
			};
			//x
			if(element.getWidth()+offset.left<container.getWidth()){
				element.removeStyle('right');
				element.setX(offset.left);
			}else{
				element.removeStyle('left');
				element.setStylePx('right', container.getWidth()-offset.left);
			}
			//y
			if(element.getHeight()+target.getHeight()+offset.top<container.getHeight()){
				element.removeStyle('bottom');
				element.setY(offset.top+target.getHeight());
			}else{
				element.removeStyle('top');
				element.setStylePx('bottom', container.getHeight()-offset.top);
			}
			return element;
		},
		
		//size
		setWidth: function(element, value){
	        element = $(element);
			var boundary = element.getStyleNum('paddingLeft')
				+ element.getStyleNum('paddingRight')
				+ element.getStyleNum('borderLeftWidth')
				+ element.getStyleNum('borderRightWidth');
			element.setStylePx('width', Math.max(0, value)-boundary);
	        return element;
	    },
		
	    setHeight: function(element, value){
	        element = $(element);
			var boundary = element.getStyleNum('paddingTop')
				+ element.getStyleNum('paddingBottom')
				+ element.getStyleNum('borderTopWidth')
				+ element.getStyleNum('borderBottomWidth');
	        element.setStylePx('height', Math.max(0, value-boundary));
	        return element;
	    },
	    
	    setSize: function(element, width, height){
	        element = $(element);
	        element.setWidth(width).setHeight(height);
	        return element;
	    },
	    
		getSize: function(element){
			element = $(element);
	        return {width: element.getWidth(), height: element.getHeight()};
	    },
		
		//insert
		appendTo: function(element, toElement){
			element = $(element);
			$(toElement).insert({
				bottom: element
			});
			return element;
		},

		prependTo: function(element, toElement){
			element = $(element);
			$(toElement).insert({
				top: element
			});
			return element;
		},
		
		//content
		setText: function(element, text){
			element = $(element);
			if(!Object.isValued(text)) return element;
			text = text.toString().escapeHTML();
			return element.update(text);
		},
		
		getText: function(element){
			return $(element).innerHTML.escapeHTML();
		},
		
		setHTML: function(element, html){
			return Element.update(element, html);
		},
		
		getHTML: function(element){
			return $(element).innerHTML;
		},
		
		deepClone: function(element) {
			element = $(element);
			var clone = element.clone(true); //has some bug in ie :(
			//remove id
			clone.removeAttr('id');
			clone.select('*').invoke('removeAttr', 'id');
			return clone;
		},
		 
		//others
	    setSelectable: function(element, enabled){
	        element = $(element);
	        if (enabled) {
				element.setAttr('unselectable', 'off')
					.setStyle('WebkitUserSelect', '')
					.setStyle('MozUserSelect', '');
			}
			else {
				element.setAttr('unselectable', 'on')
					.setStyle('WebkitUserSelect', 'none')
					.setStyle('MozUserSelect', 'none');
			}
	        return element;
	    },
		
		removeAllClass: function(element){
			return Element.setAttr(element, 'class', '');
	    },
		
		removeAttr: function(element, name){
			return Element.setAttr(element, name, null);
		},
		
		setVisible: function(element, value){
			if(value) return Element.show(element, value);
			else return Element.hide(element);
		},
		
		setId: function(element, value){
			return Element.setAttr(element, 'id', value);
		},
		
		getId: function(element){
			return Element.getAttr(element, 'id');
		},
		
		setSrc: function(element, value){
			if(Object.isUndefined(value)||value==null) return $(element);
			return Element.setAttr(element, 'src', value);
		},
		
		getSrc: function(element){
			return Element.getAttr(element, 'src');
		},
		
		setTitle: function(element, value){
			return Element.setAttr(element, 'title', value);
		},
		
		setAlt: function(element, value){
			return Element.setAttr(element, 'alt', value);
		},
		
		setAltSrc: function(element, value){
			element = $(element);
			return element.onError(function(){
				if(element.getAttr('src')==value) return;
				element.setSrc(value);
			});
		},
		
		setAlpha: function(element, value){
			if(Prototype.Browser.IE){
				//need the child elemnet position relative
				element.setStyle({'filter': 'Alpha(Opacity='+value*100+', Style=0)'});
				//element.setStyle({'filter': 'Gradient(StartColorStr=#55FFFFFF, EndColorStr=#55FFFFFF)'});
			}else{
				element.setStyle('background-color: rgba(255, 255, 255, '+value+')');
			}
			return element;
		},
		
		setEnabled: function(element, value){
			return Element.setAttr(element, 'disabled', value?null:'disabled');
		},
		
		setChecked: function(element, value){
			return Element.setAttr(element, 'checked', value?null:'checked');
		},
		
		//for short
		setAttr: Element.writeAttribute,
		getAttr: Element.readAttribute,
		addClass: Element.addClassName,
		hasClass: Element.hasClassName,
		removeClass: Element.removeClassName,
		toggleClass: Element.toggleClassName
	});
})();

//extend Form
(function(){
	var methods = {
		//fix ie null string
		setValue: (function(){
			var _super = Form.Element.Methods.setValue;
			return function(element, value){
				return _super(element, value||"");
			}
		})()
	};
	["INPUT", "TEXTAREA", "SELECT"].each(function(tag){
		Object.extend(Element.Methods.ByTag[tag], methods);
	});
})();

//extend Event
(function(){
	Object.extend(Event, {
		DOC_RESIZE: 'doc:resize',
		SHORT_CLICK: 'doc:shortClick',
		MOUSE_LONG_PRESS: 'doc:mouseLongPress',
		MOUSE_MOVE_TOLERANCE : 36,
		KEY_CODE: 'keycode:'
	});
	
	var methods = {
		fireNative: function(element, name, data){
			element = $(element);
		    if (element == document && document.createEvent && !element.dispatchEvent)
				element = document.documentElement;
		    var event;
		    if (document.createEvent) {
				event = document.createEvent('HTMLEvents');
				event.initEvent(name, true, true);
		    } else {
				event = document.createEventObject();
				event.eventType = 'on'+name;
		    }
		    Object.extend(event, data||{});
		    if (document.createEvent) {
				element.dispatchEvent(event);
			}
			else {
				element.fireEvent(event.eventType, event);
			}
			return element;
		},
		
	    onEvent: function(element, name, handler){
	        return Element.observe(element, name, handler);
	    },
	
		onEventOnce: function(element, name, handler){
			var caller = function(event){
				handler.call(null, event);
				Element.stopObserving(element, name, caller);
			};
			return Element.observe(element, name, caller);
		},
		
	    onMouseMove: function(element, handler){
	        return Element.onEvent(element, 'mousemove', handler);
	    },
	    
		onMouseDown: function(element, handler){
	        return Element.onEvent(element, 'mousedown', handler);
	    },
		
		onMouseLongPress: function(element, handler){
			return Element.onEvent(element, Event.MOUSE_LONG_PRESS, handler);
		},
		
		onMouseUp: function(element, handler){
	        return Element.onEvent(element, 'mouseup', handler);
	    },
		
	    onMouseEnter: function(element, handler){
	        return Element.onEvent(element, 'mouseenter', handler);
	    },
	    
	    onMouseOver: function(element, handler, append){
	        return Element.onEvent(element, 'mouseover', handler);
	    },
	    
	    onMouseOut: function(element, handler, append){
	        return Element.onEvent(element, 'mouseout', handler);
	    },
	    
		onMouseLeave: function(element, handler){
	        return Element.onEvent(element, 'mouseleave', handler);
	    },
		
	    onClick: function(element, handler){
	        return Element.onEvent(element, 'click', handler);
	    },
		
		onShortClick: function(element, handler){
			return Element.onEvent(element, Event.SHORT_CLICK, handler);
		},
		
		onDoubleClick: function(element, handler){
	        return Element.onEvent(element, 'dblclick', handler);
	    },
		
		onKeyPress: function(element, handler){
	        return Element.onEvent(element, 'keypress', handler);
		},
		
		onKeyDown: function(element, handler){
	        return Element.onEvent(element, 'keydown', handler);
		},
		
		onKeyUp: function(element, handler){
	        return Element.onEvent(element, 'keyup', handler);
		},
		
		/*onResize: function(element, handler){
	        return Element.onEvent(element, 'resize', handler);
		},*/
		
		onEnter: function(element, handler){
			return Element.onEvent(element, Event.KEY_CODE+'13', handler);
		},
		
		onError: function(element, handler){
	        return Element.onEvent(element, 'error', handler);
		},
		
		onLoad: function(element, handler){
			return Element.onEvent(element, 'load', handler);
		},
		
		onChange: function(element, handler){
			return Element.onEvent(element, 'change', handler);
		}
	};
	
	Element.addMethods(methods);
	Object.extend(Event, methods);
	
	Object.extend(Event, {
		isRightClick: function(event){
			if(Prototype.Browser.WebKit) {
				return event.button==2;
			}else{
				return event.isRightClick();
			}
		}
	});
	
	//resize event
	Event.observe(document.onresize ? document : window, "resize", function(){
		Event.fire(document, Event.DOC_RESIZE);
	});
	
	//extend document
	Object.extend(document, {
		onLoad : function(handler){
			if(document.body){ //have loaded
				handler.call(null);
			}else{
				document.observe('dom:loaded', handler);
			}
			return document;
		},
		
		onResize : function(handler){
			Event.observe(document, Event.DOC_RESIZE, handler);
			return document;
		}
	});
	
	//extend window
	Object.extend(window, {
		onMessage : function(handler){
			Event.observe(window, "message", handler);
			return window;
		},
		
		onResize : function(handler){
			Event.observe(document, Event.DOC_RESIZE, handler);
			return window;
		}
	});
	
	var MosueMonitor = Class.create({
		initialize: function(){
			this._mouseMove = this.mouseMove.bind(this);
			$(document.body).onMouseDown(this.mouseDown.bind(this));
			$(document.body).onMouseUp(this.mouseUp.bind(this));
			$(document.body).onClick(this.click.bind(this));
		},

		mouseDown: function(event){
			if(Event.isRightClick(event)) return;
			this.targetElement = event.element();
			if(!this.targetElement) return;
			this.downTime = new Date().getTime();
			this.downPointerX = event.pointerX();
			this.downPointerY = event.pointerY();
			this.maxMove = 0;
			this.hasMoved = false;
			$(document.body).onMouseMove(this._mouseMove);
			if(this.downHandler) this.downHandler(event);
		},

		mouseMove: function(event){
			var dx = event.pointerX()-this.downPointerX;
			var dy = event.pointerY()-this.downPointerY;
			var d = Math.pow(dx*dx+dy*dy, 0.5);
			this.maxMove = Math.max(this.maxMove, d);
			this.hasMoved = this.maxMove>Event.MOUSE_MOVE_TOLERANCE;
			if(this.hasMoved&&this.moveHandler) this.moveHandler(event);
		},

		mouseUp: function(event){
			$(document.body).stopObserving('mousemove', this._mouseMove);
			if(!this.targetElement) return;
			if(this.upHandler) this.upHandler(event);
		},
		
		click: function(event){
			if(!this.targetElement) return;
			if(this.clickHandler) this.clickHandler(event);
		}
	});
	
	var ShortClickTrigger = Class.create(MosueMonitor, 
	{
		upHandler: function(){
			if(this.hasMoved) return;
			if(new Date().getTime()-this.downTime>1600) return;
			this.targetElement.fire(Event.SHORT_CLICK);
		}
	});
	
	var MouseLongPressTrigger = Class.create(MosueMonitor, 
	{
		downHandler: function(){
			this.timer = setTimeout(this.fire.bind(this), 2400);
		},
		
		upHandler: function(){
			clearTimeout(this.timer);
		},
		
		moveHandler: function(){
			clearTimeout(this.timer);
		},
		
		fire: function(){
			this.targetElement.fire(Event.MOUSE_LONG_PRESS);
		}
	});
	
	var KeyCodeTrigger = Class.create({
		initialize: function(){
			$(document.body).onKeyDown(function(event){
				var code = event.keyCode;
				var element = event.element();
				element.fire(Event.KEY_CODE+code);
			});
		}
	});
	
	document.onLoad(function(){
		new ShortClickTrigger();
		new MouseLongPressTrigger();
		new KeyCodeTrigger();
	});
})();


//extend Object
Object.extend(Object, 
{
	isObject: function(obj){
		return typeof(obj)==="object";
	},
	
	isNull: function(obj){
		return obj===null;
	},
	
	isValued: function(obj){
		return !Object.isUndefined(obj)&&!Object.isNull(obj);
	},
	
	extend: function(destination, source){
		if(!destination) destination = {};
		if(!source) return destination;
		for (var property in source) {
			var value = source[property];
			if(Object.isValued(value)) destination[property] = value;
		}
		return destination;
	},
	
	delegate: function(host, target, funOnly){
		for(var name in target){
			if(!Object.isUndefined(host[name])) continue;
			var value = target[name];
			if(!Object.isFunction(value)&&funOnly) continue; 
			if(Object.isFunction(value)) value = value.bind(target);
			host[name] = value;
		}
		return host;
	},
	
	deepClone: function(obj){
		if(!Object.isValued(obj)) return obj;
		if(!Object.isObject(obj)) return obj;
		if(Object.isElement(obj)) return obj;
		var clone = Object.isArray(obj)?[]:{};
		for(prop in obj) clone[prop] = arguments.callee(obj[prop]);
		return clone;
	}
});

//extend Class
(function(){
	var defs = {};
	
	Object.extend(Class, 
	{
		singleton: function(clazz, lazzy){
			return (function(){
				var instance = null;
				if(lazzy===false) instance = new clazz();
				clazz.getInstance = function(){
					if(instance==null) instance = new clazz();
					return instance;
				};
				return clazz.getInstance;
			})();
		},
		
		addDef: function(def){
			def.refs = def.refs||{};
			defs[def.name] = def;
		},
		
		getDef: function(name){
			if(!name) return null;
			return defs[name];
		},
		
		inject: function(clazz, obj){
			if(!obj||!Object.isObject(obj)) return;
			var def = Object.isString(clazz)?Class.getDef(clazz):clazz;
			if(!def) return;
			if (Object.isArray(obj)) return obj.each(function(item){
				Class.inject(clazz, item);
			});
			for(var p in obj){
				var refClass = def.refs[p];
				if(refClass) Class.inject(refClass, obj[p]);
			}
			if(!def.clazz) return obj;
			return Object.extend(obj, def.clazz.prototype||def.clazz);
		}
	});
})();

//extend Array
Object.extend(Array.prototype,
{
	remove: function(item){
		var i = this.indexOf(item);
		if(i>=0) this.splice(i, 1);
		return i;
	},
	
	insert: function(){
		var args = $A(arguments);
		args.splice(1, 0, 0);
		this.splice.apply(this, args);
	}
});

//extend Math
Object.extend(Math,
{
	mod: function(value, m){
		return (value%m+m)%m;
	}
});

//touch
(function(){
	var TouchUtil = 
	{
		getLocation: function(event){
			//android 2.2, have not pageX and pageY in touchup event, 
			//so use the last touchmove/touchdown event
			var touches = event.touches;
			if(touches&&touches.length>0){
				return this._lastTouch = touches[0];
			}
			return this._lastTouch||event;
		},
		
		isInputElement: function(element){
			var tag = element.tagName;
			if(tag=='BUTTON') return true;
			if(tag=='INPUT') return true;
			if(tag=='SELECT') return true;
		}
	};
	
	var MouseEventFilter = Class.create(
	{
		initialize: function(){
			this._observe = Event.observe;
			this._stopObserving = Event.stopObserving;
			var observe = this.observe.bind(this);
			var stopObserving = this.stopObserving.bind(this);
			Element.addMethods({
				observe: observe,
				stopObserving: stopObserving
			});
			Object.extend(Event, {
				observe: observe,
				stopObserving: stopObserving
			});
			Object.extend(document, {
				observe: observe.methodize(),
				stopObserving: stopObserving.methodize()
			});
		},
		
		observe: function(element, name, listener){
			name = this.checkEventName(name);
			this._observe(element, name, listener);
			return element;
		},
		
		stopObserving: function(element, name, listener){
			name = this.checkEventName(name);
			this._stopObserving(element, name, listener);
			return element;
		},
		
		checkEventName: function(name){
			if(name&&name.startsWith('mouse')) return 'touch_'+name;
			if(name=='click'||name=='dblclick') return 'touch_'+name;
			return name;
		}
	});
	
	var TouchEventTransform = Class.create(
	{	
		initialize: function(){
			$(document).observe('touchstart', this.start.bind(this));
			$(document).observe('touchmove', this.move.bind(this));
			$(document).observe('touchend', this.end.bind(this));
		},
		
		start: function(event){
			var element = Event.element(event);
			Event.fireNative(element, 'touch_mousedown', this.getMemo(event));
		},
		
		move: function(event){
			var element = event.element();
			Event.fireNative(element, 'touch_mousemove', this.getMemo(event));
			event.stop();
		},
		
		end: function(event){
			var element = event.element();
			var memo = this.getMemo(event);
			Event.fireNative(element, 'touch_mouseup', memo);
			setTimeout(function(){
				Event.fireNative(element, 'touch_click', memo);
			}, 100); 
		},
		
		getMemo: function(event){
			var location = TouchUtil.getLocation(event);
			var memo = {
				which: 1,
				metaKey: null,
				_touch: true,
				pageX: location.pageX,
				pageY: location.pageY
			};
			return memo;
		}
	});
	
	var ClickHighlight = Class.create({
		initialize: function(){
			this._blur = this.blur.bind(this);
			$(document).observe('touchstart', this.focus.bind(this));
		},
		
		focus: function(event){
			var element = this.getFocusTarget(event.element());
			if(!element||element.retrieve('_focus')) return;
			this.focusElement = element;
			//use style property, not getComputedStyle
			this.focusElement.store('_focus', true);
			this.focusElement.store('_bg', this.focusElement.style['backgroundColor']);
			this.focusElement.store('_br', this.focusElement.style['-webkit-border-radius']);
			this.focusElement.setStyle('backgroundColor', '#108BBB');
			this.focusElement.setStyle('-webkit-border-radius', '8px');
			$(document).observe('touchend', this._blur);
			$(document).observe('mousemove', this._blur);
		},
		
		blur: function(){
			this.focusElement.store('_focus', false);
			this.focusElement.setStyle('backgroundColor', this.focusElement.retrieve('_bg'));
			this.focusElement.setStyle('-webkit-border-radius', this.focusElement.retrieve('_br'));
			$(document).stopObserving('touchend', this._blur);
			$(document).stopObserving('mousemove', this._blur);
		},
		
		getFocusTarget: function(element){
			if(element.getAttr('disabled')) return null;
			if(TouchUtil.isInputElement(element)) return null;
			while(element&&element.up){
				var parent = element.up();
				if(this.isPointer(element)){
					//filter inherited style
					if(!parent) return element;
					if(!this.isPointer(parent)) return element;
				}
				element = parent;
			}
		},
		
		isPointer: function(element){
			return element.getStyle('cursor')=='pointer';
		}
	});
	
	//init
	if(!Object.isUndefined(window.ontouchstart)){
		new MouseEventFilter();
		new TouchEventTransform();
		new ClickHighlight();
	}
})();
