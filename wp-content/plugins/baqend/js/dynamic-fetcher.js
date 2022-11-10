!function(e,t,r,n,i,o,c){"use strict";function a(t,r){var n=r.querySelectorAll("noscript");Array.prototype.forEach.call(n,function(t){for(var r=e.createElement("noscript"),n=0;n<t.attributes.length;n+=1){var i=t.attributes.item(n);r.setAttribute(i.nodeName,i.nodeValue||"")}r.innerHTML=t.innerHTML,t.parentNode&&t.parentNode.replaceChild(r,t)}),t.parentNode&&t.parentNode.replaceChild(r,t)}function s(e){return"string"==typeof e?function(t,r){return t.hasAttribute(e)?t.getAttribute(e):"speed-kit-index-"+r}:e}function u(t,r){SpeedKit.dynamicBlocks.complete=Date.now(),setTimeout(function(){var n,i,o,a;c.add(r.sc+"-loaded"),c.remove(r.sc+"-loading"),n="speed-kit-loaded",i=e,void 0===(o={active:t})&&(o={}),"function"==typeof CustomEvent?a=new CustomEvent(n,{detail:o}):(a=e.createEvent("CustomEvent")).initCustomEvent(n,!0,!0,o),i.dispatchEvent(a)})}function d(e,t,r,n){if(n<0)return r();var i=new XMLHttpRequest;i.withCredentials=!0;var o=!1;i.addEventListener("readystatechange",function(){4!==i.readyState||o||(o=!0,SpeedKit.dynamicBlocks.status=i.status,l(e,t,i,r,n))}),i.addEventListener("error",function(){o||(o=!0,l(e,t,i,r,n))}),i.open(e.method||"GET",e.url,!0),e.headers&&Object.keys(e.headers).forEach(function(t){i.setRequestHeader(t,e.headers[t])}),e.timeout&&(i.timeout=e.timeout),i.responseType="document",i.send()}function l(t,r,n,i,o){var c=o-1,a=n.status>=200&&n.status<300,s=!1;try{s=r.rvc(e,n.response)}catch(u){}return a&&(s||c<0)?i(n.response):c<0&&!a?function(e,t,r,n){if(!r.dep||304===t)return n();if(!e)return void p("Fetch error");p(""+(e.doctype?(new XMLSerializer).serializeToString(e.doctype):"")+e.documentElement.outerHTML)}(n.response,n.status,r,i):void d(t,r,i,c)}function p(t){e.open(),e.write(t),e.close()}var f="baqend-force-request";function m(e,t){var r=Object.create(null),n=t.querySelectorAll(e.selector),i=!0;return Array.prototype.forEach.call(n,function(t,n){var o=null;try{o=e.idFunction(t,n)}catch(a){}if(o){var c=r[o]?o+"-"+n:o;r[c]=t,i=!1}}),i?null:r}function v(r){if(r.localElement.querySelector("#speed-kit-df-config")&&r.block.mergeFunction===a)return SpeedKit.track&&SpeedKit.track("InvalidHTMLError",t.href,Date.now()),!1;if(r.remoteElement.ownerDocument===e)return SpeedKit.dynamicBlocks.mergedBlocks+=1,!0;try{return r.block.mergeFunction(r.localElement,r.remoteElement),SpeedKit.dynamicBlocks.mergedBlocks+=1,!0}catch(i){var n={id:r.id,message:i.message,stack:i.stack};SpeedKit.dynamicBlocks.errors.push(n)}return!1}var h=function(){function r(){this.remoteScripts=[],this.safeScripts=[],this.scriptsIdentified=!1}return r.prototype.processScriptQueue=function(n){!this.scriptsIdentified&&SpeedKit.track&&SpeedKit.track("DOMDelayFailed",t.href+": "+n,Date.now());var i=e.currentScript&&e.currentScript.parentNode||e.body,o=this.remoteScripts.shift();if(o&&(!n||r.getSource(o)!==r.getFullPath(n)))if(o.src||this.safeScripts.includes(o))this.processScriptQueue(n);else{var c=function(t){for(var r=e.createElement("script"),n=0,i=t.attributes.length;n<i;n+=1){var o=t.attributes.item(n);r.setAttribute(o.nodeName,o.nodeValue)}return r.async=!!t.async,!r.src&&t.firstChild&&r.appendChild(t.firstChild.cloneNode(!0)),r}(o);i.appendChild(c),this.processScriptQueue(n)}},r.prototype.identifyRemoteScripts=function(e,t){var n;this.scriptsIdentified=!0;for(var i=0,o=Array.prototype.slice.call(e.querySelectorAll("script"));i<o.length;i++){var c=o[i],a=c.src&&c.src.match(/(speedKit|speed-kit|speedkit|sk-dom-ready)/),s=c.defer&&!c.async;!r.isRelevantScript(c)||a||s||this.remoteScripts.push(c)}t&&(n=this.safeScripts).push.apply(n,Array.prototype.slice.call(e.querySelectorAll(t)))},r.cleanUrl=function(e){if(!e)return e;for(var t=e.replace(/([^?]*\/[^?.]*).*/,"$1"),n=new URL(t),i=[],o=0,c=n.pathname.split("/");o<c.length;o++){var a=c[o],s=a.split(/-|_|\./),u=r.findFirstNonHash(s);s.reverse();var d=r.findFirstNonHash(s);if(u||d){var l=u?a.indexOf(u):0,p=d?a.lastIndexOf(d)+d.length-l:a.length-l;i.push(a.substr(l,p))}}return n.protocol+"//"+n.host+"/"+i.join("/")},r.getSource=function(e){return r.cleanUrl(e.src)},r.isRelevantScript=function(e){return!!(e.type||(e.language?"text/"+e.language:"text/javascript")).match(/(text|application)\/(x-)?(ecma|java|j|live)script/)},r.getFullPath=function(t){return r.cleanUrl(new URL(t,e.baseURI).href)},r.findFirstNonHash=function(e){var t=this;return e.find(function(e){return!t.isHexaHash(e)&&!t.isVersionNumber(e)})},r.isHexaHash=function(e){return e.length>3&&!!e.match(/^[vV]?[a-fA-F0-9]+$/)},r.isVersionNumber=function(e){return!!e.match(/^[vV]?[0-9]*$/)},r}();function y(t,r,n,i){!function(t,r){if(t.ddom||"loading"!==e.readyState)return r();e.addEventListener("DOMContentLoaded",r,{once:!0})}(t,function(){var o=t.b.map(function(t){return function(e,t,r){var n=m(e,t),i=m(e,r);i&&(SpeedKit.dynamicBlocks.remoteBlocks+=Object.keys(i).length);n&&(SpeedKit.dynamicBlocks.localBlocks+=Object.keys(n).length);if(!i||!n)return[];var o=[];for(var c in n){var a=n[c],s=i[c];if(s){var u=c,d=S(a),l={id:u,block:e,level:d,localElement:a,remoteElement:s};o.push(l)}}return o}(t,e,n)}).reduce(function(e,t){return e.concat(t)},[]);r.identifyRemoteScripts(n,t.sis);var c=!1;return o.length&&(c=function(e){e.sort(function(e,t){return e.level-t.level});for(var t=!1,r=0,n=e;r<n.length;r++){var i=v(n[r]);t=t||i}return t}(o)),i(c)})}function g(){k()&&r.serviceWorker.controller.postMessage({type:"dom-ready"})}function k(){var e=r[i];return!(!e||!e.controller)}function S(t){for(var r=0,n=t.parentElement;n&&n!==e.body;)r+=1,n=n.parentElement;return r}if(!window[o]){window[o]=!0;var E={start:Date.now(),errors:[],mergedBlocks:0,localBlocks:0,remoteBlocks:0};(window.SpeedKit=window.SpeedKit||{}).dynamicBlocks=E;var b=function(e){var t,r=e.defaultIdFunction||e.defaultIdAttribute||e.tagAttribute||"data-speed-kit-id",n=a,i={selector:e.defaultSelector||e.blockSelector||".speed-kit-dynamic",idFunction:s(r),mergeFunction:e.defaultMergeFunction||e.customMergeFunction||n};return(t=e.blocks||[],t instanceof Array?t:[t]).map(function(e){return function(e,t){return{selector:e.selector,idFunction:s(e.idFunction||e.idAttribute||t.idFunction),mergeFunction:e.mergeFunction||t.mergeFunction}}(e,i)}).concat(i)}(n),F=n.statusClass,w=void 0===F?"speed-kit-dynamic":F,A=n.requestTransformFunction,B=void 0===A?function(e){return e}:A,C=n.path,K=void 0===C?"":C,L=n.delayDOMLoadedEvent,H=void 0!==L&&L,N=n.displayErrorPage,D=void 0===N||N,M=n.responseValidityCheck,q=void 0===M?function(){return!0}:M,R=n.dynamicFetcherRetryLimit,I=void 0===R?2:R,O=n.safeInlineScripts,T={b:b,sc:w,rt:B,p:K,ddom:H,dep:D,rvc:q,rl:I,sis:void 0===O?null:O};!function(e,r){if(!k())return r(!1);c.add(e.sc+"-loading");var n=new h;SpeedKit.processScriptQueue=function(e){return n.processScriptQueue(e)},function(e,r,n){var i=e.p?t.origin+e.p:t.href,o={"baqend-speed-kit-request":"dynamic","cache-control":"no-cache"};r&&(o[f]="1");var c={url:i,headers:o};try{c=e.rt(c)}catch(a){}d(c,e,n,e.rl)}(e,!1,function(t){t?(SpeedKit.dynamicBlocks.received=Date.now(),g(),y(e,n,t,function(){r(!0)})):(g(),r(!1))})}(T,function(e){u(e,T)})}}(document,location,navigator,"undefined"==typeof dynamicBlockConfig?"undefined"==typeof speedKit?{}:speedKit.dynamicBlock:dynamicBlockConfig,"serviceWorker","DYNAMIC_FETCHER_LOADED",document.documentElement.classList);