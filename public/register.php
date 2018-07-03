<?php 
require 'scripts/connection.inc';
$condition = "job_position_id = 1 or job_position_id = 2 or job_position_id = 3 or job_position_id = 4 or job_position_id = 5";
$employees = mysql_query("select * from employees where $condition order by job_position_id asc");
$data = mysql_query("select * from branch_offices order by id asc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Registro E4e" />
<meta property="og:description" content="Registro E4e" />
<meta property="og:title" content="Registro E4e" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.e4esys.com/register" />
<meta property="og:image" content="images/default.jpg" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"Vg8GWVBXGwoCVlJUAgc="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(19),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,s.now(),!0])}catch(u){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,s.now()])}var i=t("handle"),a=t(20),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(p){"stack"in p&&(t(12),t(11),"addEventListener"in window&&t(6),s.xhrWrappable&&t(13),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){C++,M=y.hash,this[u]=b.now()}function o(){C--,y.hash!==M&&i(0,!0);var t=b.now();this[l]=~~this[l]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=b.now()})}var c="-start",s="-end",f="-body",u="fn"+c,d="fn"+s,p="cb"+c,h="cb"+s,l="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,b=t("loader");if(w[v]&&b.xhrWrappable){var g=t(9),x=t(10),E=t(8),O=t(6),R=t(12),P=t(7),T=t(13),S=t("ee"),N=S.get("tracer");t(14),b.features.spa=!0;var M,j=w[v],C=0;S.on(u,r),S.on(p,r),S.on(d,o),S.on(h,o),S.buffer([u,d,"xhr-done","xhr-resolved"]),O.buffer([u]),R.buffer(["setTimeout"+s,"clearTimeout"+c,u]),T.buffer([u,"new-xhr","send-xhr"+c]),P.buffer([m+c,m+"-done",m+f+c,m+f+s]),E.buffer(["newURL"]),g.buffer([u]),x.buffer(["propagate",p,h,"executor-err","resolve"+c]),N.buffer([u,"no-"+u]),a(T,"send-xhr"+c),a(S,"xhr-resolved"),a(S,"xhr-done"),a(P,m+c),a(P,m+"-done"),E.on("pushState-end",i),E.on("replaceState-end",i),j("hashchange",i,!0),j("load",i,!0),j("popstate",function(){i(0,C>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(12),c=t(11),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",h="-start",l="-end",m="fn"+h,v="fn"+l,w="bstTimer",y="pushState",b=t("loader");b.features.stn=!0,t(8);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=b.now())}),o.on(v,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,b.now()])}),a.on(m,function(t,e,n){this.bstStart=b.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,b.now(),this.bstType])}),c.on(m,function(){this.bstStart=b.now()}),c.on(v,function(t,e){i(w,[e,this.bstStart,b.now(),"requestAnimationFrame"])}),o.on(y+h,function(t){this.time=b.now(),this.startPath=location.pathname+location.hash}),o.on(y+l,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(22)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e){return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(19);e.exports=o;var a=window,c="fetch-",s=c+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,p=a.fetch,h="prototype";u&&d&&p&&(i(f,function(t,e){r(u[h],e,s),r(d[h],e,s)}),r(a,"fetch",c),o.on(c+"end",function(t,e){var n=this;e?e.clone().arrayBuffer().then(function(t){n.rxSize=t.byteLength,o.emit(c+"done",[null,e],n)}):o.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(22)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){var r=t("ee").get("mutation"),o=t(22)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],10:[function(t,e,n){function r(t){var e=a.context(),n=c(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(22),a=t("ee").get("promise"),c=i(a),s=t(19),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;s(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),c=f.resolve(i);return c}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),s(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=c(t[0],"resolve-",this),t[1]=c(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),c.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=c(t[0],"cb-",this),t[1]=c(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],11:[function(t,e,n){var r=t("ee").get("raf"),o=t(22)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],12:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(22)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],13:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",c)}function i(t){b.push(t),l&&(x?x.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<b.length;t++)r([],b[t]);b.length&&(b=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(22)(u),p=NREUM.o,h=p.XHR,l=p.MO,m=p.PR,v=p.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],b=[];e.exports=u;var g=window.XMLHttpRequest=function(t){var e=new h(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(h,g),g.prototype=h.prototype,d.inPlace(g.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),l){var x=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new l(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],14:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=a.now()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var s=t.getResponseHeader("X-NewRelic-App-Data");s&&(e.cat=s.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return l(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(15),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,p=t("id"),h=t(18),l=t(17),m=window.XMLHttpRequest;a.features.xhr=!0,t(13),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=l(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<d;c++)e.addEventListener(u[c],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)})}},{}],15:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],16:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(19),c=t(20),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",h=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var l=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(h+"tracer",[f.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){l[e]=o(h+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],17:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],18:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],19:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],20:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],21:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],22:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(20),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),c=l(n),s=c.length,f=0;f<s;f++)c[f].apply(a,r);var d=u[y[n]];return d&&d.push([b,n,r,a]),a}}function h(t,e){w[t]=l(t).concat(e)}function l(t){return w[t]||[]}function m(t){return d[t]=d[t]||o(n)}function v(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var w={},y={},b={on:h,emit:n,get:m,listeners:l,context:e,buffer:v,abort:a,aborted:!1};return b}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var c="nr@context",s=t("gos"),f=t(19),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!x++){var t=g.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(y,function(e,n){t[e]||(t[e]=n)}),s("mark",["onload",a()+g.offset],null,"api");var n=p.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===p.readyState&&i()}function i(){s("mark",["domContent",a()+g.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(c=Math.max((new Date).getTime(),c))-g.offset}var c=(new Date).getTime(),s=t("handle"),f=t(19),u=t("ee"),d=window,p=d.document,h="addEventListener",l="attachEvent",m=d.XMLHttpRequest,v=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1044.min.js"},b=m&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:c,now:a,origin:w,features:{},xhrWrappable:b};t(16),p[h]?(p[h]("DOMContentLoaded",i,!1),d[h]("load",r,!1)):(p[l]("onreadystatechange",o),d[l]("onload",r)),s("mark",["firstbyte",c],null,"api");var x=0,E=t(21)},{}]},{},["loader",2,14,5,3,4]);</script>
<meta name="format-detection" content="telephone=no"/>
<link rel="shortcut icon" href="favicon/e4e-cumbres-favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/e4e-cumbres-57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/e4e-cumbres-114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/e4e-cumbres-72.png" />
<script type="text/template" id="stripe-field-description">
<div class="stripe-description">
<p><%=price%></p>
<p><%=advice%></p>
<a href="http://www.stripe.com" target="_blank" class="stripe-logo">
<%=stripeBanner%>
</a>
</div>
</script>
<script type="text/template" id="stripe-logo">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
width="81.216px" height="33.225px" viewBox="0 0 81.216 33.225" enable-background="new 0 0 81.216 33.225" xml:space="preserve">
<g>
<defs>
<path id="SVGID_1_" d="M39.262,26.75h6.475V8.69h-6.475V26.75z M0,14.244c0,3.306,2.181,4.533,3.715,5.248l0.818,0.375
c1.056,0.478,1.533,0.785,1.533,1.466c0,0.884-0.75,1.021-1.738,1.021c-0.886,0-2.896-0.477-4.056-0.783v4.668
c1.33,0.408,3.306,0.852,5.18,0.852c2.896,0,6.952-0.682,6.952-6.132c0-3.408-2.215-4.566-3.817-5.282l-0.681-0.307
c-1.125-0.512-1.602-0.75-1.602-1.466c0-0.681,0.579-0.886,1.363-0.886c1.158,0,3.101,0.409,4.055,0.716V9.201
C10.905,8.895,9.337,8.35,6.952,8.35C3.783,8.35,0,9.405,0,14.244 M32.82,10.428l-0.954-1.738H26.72V26.75h6.475v-12.37
c0.341-0.204,1.125-0.613,2.147-0.613c0.886,0,1.738,0.17,2.385,0.341V8.724c-0.307-0.17-0.988-0.374-2.011-0.374
C34.217,8.35,33.195,9.304,32.82,10.428 M54.939,22.387v-8.722c0.408-0.238,1.158-0.545,1.533-0.545
c1.057,0,1.363,0.442,1.363,4.498c0,3.986-0.682,4.941-1.805,4.941C55.791,22.559,55.246,22.491,54.939,22.387 M54.667,9.814
l-0.955-1.125h-5.248v24.536h6.475v-6.51c0.613,0.137,1.465,0.375,2.283,0.375c2.385,0,7.088-0.135,7.088-9.472
c0-8.52-3.135-9.269-5.793-9.269C57.052,8.35,55.656,8.929,54.667,9.814 M73.992,12.2c1.191,0,1.191,1.737,1.191,4.157h-2.725
C72.525,14.21,72.355,12.2,73.992,12.2 M66.017,17.789c0,8.655,4.941,9.301,8.996,9.301c2.25,0,4.533-0.646,5.283-0.92v-4.703
c-0.955,0.169-3.443,0.716-5.283,0.716c-1.602,0-2.555-0.375-2.555-2.317h8.758v-2.146c0-7.225-3.033-9.371-7.225-9.371
C69.902,8.35,66.017,10.155,66.017,17.789 M16.291,4.601l-0.818,4.089h-2.385v4.124h2.385v9.064c0,5.01,3.442,5.213,5.283,5.213
c1.431,0,3.612-0.34,4.6-0.578v-4.602c-0.477,0.068-1.908,0.273-2.317,0.273c-0.716,0-1.091-0.238-1.091-1.464v-7.906h2.556
l0.852-4.124h-3.408V3.237L16.291,4.601z M39.296,3.237c0,1.772,1.397,3.237,3.203,3.237c1.807,0,3.203-1.465,3.203-3.237
C45.702,1.466,44.306,0,42.5,0C40.693,0,39.296,1.466,39.296,3.237"/>
</defs>
<use xlink:href="#SVGID_1_"  overflow="visible"/>
</g>
</svg>
</script>
<script type="text/template" id="stripe-logo-fallback">
<b>Stripe</b>
</script>
<title>Registro E4e</title>
<style>
body{
height:100%;
background-color:#FFFFFF;
overflow:hidden;
}
body.preload *{
visibility: hidden;
}
body.transparent-background.resizing *{
visibility: hidden;
}
body.transparent-background {
background: transparent;
}
body.transparent-background #loader{
background: transparent;
}
#loader{
background-color:#FFFFFF;
position:absolute;
position:fixed;
z-index:999999;
left:0;
top:0;
bottom:0;
right:0;
visibility:visible;
}
#loader *{
visibility:visible;
}
#loader > .wrapper {
position: absolute;
top:50%;
left:50%;
}
#loadingLogo span{
display: block;
position: absolute;
width: 100px;
top: 50px;
left: -50px;
text-align: center;
font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
font-size: 11px;
color: #3D3D3D;
-khtml-opacity: 0.6;
-moz-opacity: 0.6;
opacity: 0.6;
}
#loadingLogo svg{
position: absolute;
top: 64px;
left: -35px;
}
#loadingLogo svg path,#loadingLogo svg rect{
fill:#3D3D3D;
}
@font-face {
font-family: 'typeIconFont';
src: url('//dkl3g0z0k6qzr.cloudfront.net/quickyformadmin/css/fonts/typeform_glyphs.eot');
src: url('//dkl3g0z0k6qzr.cloudfront.net/quickyformadmin/css/fonts/typeform_glyphs.eot?#iefix') format('embedded-opentype'),
url('//dkl3g0z0k6qzr.cloudfront.net/quickyformadmin/css/fonts/typeform_glyphs.woff') format('woff'),
url('//dkl3g0z0k6qzr.cloudfront.net/quickyformadmin/css/fonts/typeform_glyphs.ttf') format('truetype'),
url('//dkl3g0z0k6qzr.cloudfront.net/quickyformadmin/css/fonts/typeform_glyphs.svg#typeform_glyphs') format('svg');
font-weight: normal;
font-style: normal;
}
#loadingLogo span, #loadingLogo svg, #unfixed-footer .content .button-wrapper.submit, #unfixed-footer .content .button-wrapper.review, #unfixed-footer .content .phishing-notice,#fixed-footer .by, .header.type-group, .header.sub.show{ 
display: none !important;
}
#envio{
display: block !important;
cursor: pointer;
background-color: #0E70ED;
width: auto;
height: inherit;
border: none;
line-height: 38px;
padding: 5px 20px;
font-size: 25px;
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
text-align: center;
font-weight: bold;
font-family: "Karla","Helvetica Neue",sans serif;
max-width: 610px;
overflow: hidden;
-moz-transition: background-color ease-out 100ms 0ms;
-webkit-transition: background-color ease-out 100ms 0ms;
-o-transition: background-color ease-out 100ms 0ms;
transition: background-color ease-out 100ms 0ms;
color: #e3effd;
-webkit-box-shadow: 0 3px 12px 0 rgba(0,0,0,0.1);
-moz-box-shadow: 0 3px 12px 0 rgba(0,0,0,0.1);
box-shadow: 0 3px 12px 0 rgba(0,0,0,0.1);
}
.dato, .cita, .matricula, .dato .item, .cita .item, .matricula .item, .idMod, .idRef, .idOs{ display: none !important; }
.group .item{ display: block !important; }
.showdato .dato{ display: block !important; }
.showcita .cita{ display: block !important; }
.showmatricula .matricula{ display: block !important; }
.show{ display: block !important; }
.box-button{ padding-top: 150px; padding-left: 50px; }
.val{ border-color: #ff0000 !important; }
.dropdown .control select{
width: 100%;
-webkit-appearance: none;
-moz-appearance: none;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
padding: 15px;
background: transparent;
font-family: "Karla","Helvetica Neue",sans serif;
border: 2px dashed #1F7FFF;
border: 2px dashed rgba(31,127,255,0.4);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
color: #1F7FFF;
font-size: 17px;
line-height: 19px;
}
#unfixed-footer{ max-height: 60px; }
#typeform .form .questions>li{ opacity: 1 !important; }
.msg{ padding-top: 25px; max-width: 55%; line-height: normal; letter-spacing: 0.1em; font-size: 18px; text-transform: uppercase; }
.exito{ color: #0f6fee; }
.error{ color: #ff0000; }
.link{ display: inline-block; margin-top: 15px; }
</style>
<script type="text/javascript">
var settings = {
browser: "",
uid: "NvIOCm",
language: "es",
paths: {
submit: "https://miguelescobedo.typeform.com/app/form/submit/NvIOCm",
token: ""
},
uniquePath: "https://miguelescobedo.typeform.com/app/form/field/unique/",
uploadPath: "https://miguelescobedo.typeform.com/app/form/0/field/uploadCredentials/",
signupPath: "https://miguelescobedo.typeform.com/signup",
lessPath: "https://miguelescobedo.typeform.com/bundles/quickyformapp/css/",
parent: "",
hiddenFieldsEnabled: false,
hiddenFields: [],
font: 'Karla:400,700',
showLogo: '1',
createdAt: '2017-05-24T21:57:15+0000',
accountId: '2223226',
userId: '2222370',
accountPlan: 'Basic',
stripePublishableKey: '',
showLoadingBranding: true,
colors: {
primary: '#3D3D3D',
secondary: '#1F7FFF'
},
baseAssetPath: '//dkl3g0z0k6qzr.cloudfront.net/',
collect: true,
"featureToggles": {
"retrySubmitEnabled": true,
"isSignupQuestionsFormEnabled": false
},
redirectAfterSubmitEnabled: false,
redirectAfterSubmitUrl: '',
embedCloseAfterSubmitEnabled: false,
formId: '3762901',
lastEditorUserId: '2222370',
appBehaviourKey: '5CHFipOVS715Gu3cR2JtJFPrMHc35h4k'
}
if( screen.width < 1200){ 
    settings.browser= "touch"; settings.token ="https://miguelescobedo.typeform.com/app/form/result/token/NvIOCm/touch"; 
}else{ settings.browser= "default"; settings.token ="https://miguelescobedo.typeform.com/app/form/result/token/NvIOCm/default"; }
</script>
<script type="text/template" id="component-opinion-scale">
<div class="component-choices"></div>
<ul class="labels layout-thee-columns layout-columns color-secondary text-subpixel-antialiased">
<li class="first text-size-m text-align-left negativeLabel"></li>
<li class="second text-size-m text-align-center neutralLabel"></li>
<li class="third text-size-m text-align-right positiveLabel"></li>
</ul>
</script>
<script type="text/template" id="component-choice-simple">
<input <%=checked%> type="radio" value="<%=value%>"/><br/>
<span><%=label%></span>
</script>
<script type="text/template" id="component-choice-square">
<div class="choice-wrapper">
<div class="label"><%=label%></div>
<div class="line"></div>
<div class="aux">
<div class="bg"></div>
<div class="bd"></div>
</div>
<div class="background"></div>
</div>
</script>
<script type="text/template" id="icon-cloud">
<svg class="icon-cloud" width="132px" height="85px" viewBox="0 0 132 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
<g id="Artboard-3" sketch:type="MSArtboardGroup" fill="#000000">
<path d="M79,85 L108,85 L108,84.9566146 C121.385069,84.1801879 132,73.0797189 132,59.5 C132,46.906961 122.871557,36.445984 110.870729,34.373127 C110.956288,33.426871 111,32.4685402 111,31.5 C111,14.1030304 96.8969696,0 79.5,0 C65.9387999,0 54.3791415,8.56961829 49.9409394,20.5889401 L49.9409394,20.5889401 C47.0317445,16.5954404 42.3189711,14 37,14 C28.163444,14 21,21.163444 21,30 C21,31.4892152 21.2034561,32.9309107 21.5840885,34.2988067 C9.35984257,36.1828033 0,46.7483475 0,59.5 C0,73.4162144 11.1475089,84.7287886 25,85 L59,85 L59,66 L43,66 L69,32 L95,66 L79,66 L79,85 Z" id="Oval-6" sketch:type="MSShapeGroup"></path>
</g>
</g>
</svg>
</script>
<script type="text/template" id="icon-file">
<svg class="icon-file" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="85px" viewBox="0 0 65 85" enable-background="new 0 0 65 85" xml:space="preserve">
<g id="Page-1" sketch:type="MSPage">
<g id="Artboard-1" transform="translate(97.000000, 0.000000)" sketch:type="MSArtboardGroup">
<g id="Rectangle-4-_x2B_-Line-_x2B_-Line" transform="translate(3.000000, 1.000000)" sketch:type="MSLayerGroup">
<path id="Rectangle-4" sketch:type="MSShapeGroup" fill="none" stroke="#000000" stroke-width="3" d="M-55.333,1
c0.457,0-42,0-42,0v79h61V18C-36.333,18-54.876,1-55.333,1z"/>
<path id="Line" sketch:type="MSShapeGroup" fill="none" stroke="#000000" stroke-width="2.837" stroke-linecap="square" d="
M-55.833,1.579V18.5"/>
<path id="Line_1_" sketch:type="MSShapeGroup" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="square" d="
M-55.333,18.5h19"/>
</g>
</g>
</g>
</svg>
</script>
<script type="text/template" id="component-file-upload-box">
<div class="box">
<div class="box-cancel">
<svg viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="14px" height="14px">
<g>
<path id="Line" d="M 11.5 1.5 L 1.5 11.5 " stroke="#000000" stroke-width="2" fill="none"/>
<path id="Line2" d="M 1.5 1.5 L 11.5 11.5 " stroke="#000000" stroke-width="2" fill="none"/>
</g>
</svg>
<div class="cancel-background"></div>
</div>
<span class="tick"></span>
<input type="file" name="file"/>
<div class="box-content-wrapper">
<div class="box-content">
<div class="box-image"></div>
<div class="box-text"></div>
</div>
</div>
<div class="aux">
<div class="bg"></div>
<div class="bd"></div>
</div>
<div class="background"></div>
</div>
</script>
<script type="text/template" id="component-file-upload-box-simple">
<input type="file" name="file"/>
<p class="box-text"></p>
<div class="progress-bar-target"></div>
</script>
<script type="text/template" id="component-file-upload-progress-bar">
<div class="progress-bar">
<div class="bar"></div>
</div>
</script>
<script type="text/template" id="component-file-upload-text-start">
<p>
<%= textChoose %>
</p>
<p>
<%= textSizeLimit %>: <%= maxFileSize %> MB
</p>
</script>
<script type="text/template" id="component-file-upload-text-uploading">
<p>
<b><%= textUploading %></b>
</p>
<p>
<%= fileName %>
</p>
</script>
<script type="text/template" id="component-file-upload-text-preview">
<p>
<b><%= fileName %></b>
</p>
</script>
<script type="text/template" id="component-confirm-button">
<div class="button-wrapper confirm">
</div>
<div class="text"></div>
</script>
                <script type="text/javascript">
            var serializedForm = {"fields":[{"id":"51908710","question":"Nombre asesor E4e","label":"Nombre asesor E4e","type":"textfield","required":false,"attachment_type":"","position":0,"calculations":[]},{"id":"54232968","question":"Registro","label":"Registro","type":"list-image","required":false,"attachment_type":"","position":1,"calculations":[],"multiple":true,"choices":{"68194813":{"id":"68194813","label":"DATO","position":0,"image":[]},"68194814":{"id":"68194814","label":"CITA","position":1,"image":[]},"68194815":{"id":"68194815","label":"MATRICULA","position":2,"image":[]}},"supersize":false,"labels_enabled":true},{"id":"54228037","question":"DATO","label":"DATO","type":"group","required":false,"attachment_type":"","position":2,"calculations":[],"content":"DATO","button":"","button_enabled":false},{"id":"54228248","question":"Nombre completo","label":"Nombre completo","type":"textfield","required":false,"attachment_type":"","position":3,"calculations":[]},{"id":"54228282","question":"Telefono","label":"Telefono","type":"textfield","required":false,"attachment_type":"","position":4,"calculations":[]},{"id":"54228622","question":"Correo","label":"Correo","type":"textfield","required":false,"attachment_type":"","position":5,"calculations":[]},{"id":"rtep","question":"En que municipio vive?","label":"En que municipio vive?","type":"dropdown","required":false,"attachment_type":"","position":6,"calculations":[],"choices":["Apodaca","Escobedo","Monterrey","Garcia","Guadalupe","San Pedro","San Nicolas","Otra"],"options":"Apodaca\r\nEscobedo\r\nMonterrey\r\nGarcia\r\nGuadalupe\r\nSan Pedro\r\nSan Nicolas\r\nOtra","alphabetical":false},{"id":"51846734","question":"\u00bfComo te enteraste de nosotros?","label":"\u00bfComo te enteraste de nosotros?","type":"list-image","required":false,"attachment_type":"","position":7,"calculations":[],"choices":{"65472087":{"id":"65472087","label":"FACEBOOK","position":0,"image":[]},"65472088":{"id":"65472088","label":"RADIO","position":1,"image":[]},"65472089":{"id":"65472089","label":"REFERIDO","position":2,"image":[]},"65472090":{"id":"65472090","label":"SUCURSAL","position":3,"image":[]},"71988792":{"id":"71988792","label":"MODULO","position":4,"image":[]}},"supersize":false,"labels_enabled":true},{"id":"57160960","question":"Modulo","label":"Modulo","type":"textfield","required":false,"attachment_type":"","position":8,"calculations":[]},{"id":"57366088","question":"Referido","label":"Referido","type":"textfield","required":false,"attachment_type":"","position":9,"calculations":[]},{"id":"57160940","question":"Sucursal","label":"Sucursal","type":"list","required":false,"attachment_type":"","position":10,"calculations":[],"choices":{"71715803":{"id":"71715803","label":"Centro","position":0},"71715804":{"id":"71715804","label":"Cumbres","position":1}}},{"id":"54228750","question":"Fecha de registro","label":"Fecha de registro","type":"date","required":false,"attachment_type":"","position":11,"calculations":[],"dateFormat":{"id":287871,"structure":"DDMMYYYY","separator":"\/"}},{"id":"54403552","question":"CITA","label":"CITA","type":"group","required":false,"attachment_type":"","position":12,"calculations":[],"content":"CITA","button":"","button_enabled":false},{"id":"54403553","question":"Nombre completo","label":"Nombre completo","type":"textfield","required":false,"attachment_type":"","position":13,"calculations":[]},{"id":"57040548","question":"Fecha de la cita","label":"Fecha de la cita","type":"date","required":false,"attachment_type":"","position":14,"calculations":[],"dateFormat":{"id":316694,"structure":"DDMMYYYY","separator":"\/"}},{"id":"54672652","question":"Hora de la cita","label":"Hora de la cita","type":"textfield","required":false,"attachment_type":"","position":15,"calculations":[]},{"id":"57190961","question":"Lugar de la cita","label":"Lugar de la cita","type":"list","required":false,"attachment_type":"","position":16,"calculations":[],"choices":{"71752144":{"id":"71752144","label":"Centro","position":0},"71752145":{"id":"71752145","label":"Cumbres","position":1}}},{"id":"54403593","question":"MATRICULA","label":"MATRICULA","type":"group","required":false,"attachment_type":"","position":17,"calculations":[],"content":"MATRICULA","button":"","button_enabled":false},{"id":"54403594","question":"Nombre completo","label":"Nombre completo","type":"textfield","required":false,"attachment_type":"","position":18,"calculations":[]},{"id":"57040805","question":"Cual es la hora de la cita de orientaci\u00f3n","label":"Cual es la hora de la cita de orientaci\u00f3n","type":"textfield","required":false,"attachment_type":"","position":19,"calculations":[]},{"id":"57041306","question":"Plan de curso","label":"Plan de curso","type":"dropdown","required":false,"attachment_type":"","position":20,"calculations":[],"choices":["2800","1980","Fraccionado","Contado","Otro","Otro","Otro","Otro"],"options":"2800\r\n1980\r\nFraccionado\r\nContado\r\nOtro\r\nOtro\r\nOtro\r\nOtro","alphabetical":false},{"id":"54678416","question":"M\u00e9todo de pago","label":"M\u00e9todo de pago","type":"list","required":false,"attachment_type":"","position":21,"calculations":[],"choices":{"68703834":{"id":"68703834","label":"Tarjeta de credito","position":0},"68703835":{"id":"68703835","label":"Tarjeta de debito","position":1},"68703836":{"id":"68703836","label":"Deposito en banco","position":2},"68703837":{"id":"68703837","label":"Efectivo","position":3},"68703838":{"id":"68703838","label":"Cheque","position":4},"68703839":{"id":"68703839","label":"Transferencia electronica","position":5}}},{"id":"54678453","question":"Numero de folio","label":"Numero de folio","type":"textfield","required":false,"attachment_type":"","position":22,"calculations":[]}],"outros":[],"intros":[{"id":2577496,"uid":"1389026","image":[],"attachment_type":"image","body":"HOLA!","body_enabled":true,"button":"Iniciar","button_enabled":true,"description":"Sistema de recopilaci\u00f3n de datos para nuevos aspirantes.","description_enabled":true,"enabled":true}],"id":3762901,"uid":"NvIOCm","name":"Registro E4e","design":[]};
        </script>
<link rel="stylesheet" type="text/css" href="https://assets.typeform.com/forms/styles/3937042?v=3705420">
<link id="font" href='https://fonts.googleapis.com/css?family=Karla:400,700&amp;text=' rel='stylesheet' type='text/css'>	
</head>
<body class="preload   default  repeat  branding ">
<div id="typeform" class="">
<div id="loader">
<div class="wrapper">
<div id="spin"></div>
<div id="loadingLogo" style="display:none">
<span>Powered by</span>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="71.933px" height="18.992px" viewBox="0 0 71.933 18.992" enable-background="new 0 0 71.933 18.992" xml:space="preserve">
<rect x="69.061" y="1.092" fill="#231F20" width="1.805" height="16.996"/>
<g>
<path fill="#231F20" d="M0.863,5.362V3.382h8.775v1.979h-3.21v8.73H4.073v-8.73H0.863z"/>
<path fill="#231F20" d="M11.843,16.402c-0.41,0.271-0.98,0.405-1.71,0.405c-0.22,0-0.438-0.008-0.652-0.022
c-0.215-0.015-0.433-0.032-0.652-0.053v-1.755c0.2,0.021,0.405,0.04,0.615,0.061c0.21,0.02,0.42,0.024,0.63,0.015
c0.28-0.03,0.488-0.14,0.623-0.33c0.135-0.19,0.203-0.4,0.203-0.63c0-0.17-0.03-0.33-0.09-0.48L8.093,6.337h2.265l1.755,5.31h0.03
l1.695-5.31h2.205l-3.24,8.715C12.573,15.682,12.253,16.132,11.843,16.402z"/>
<path fill="#231F20" d="M18.789,6.337v0.99h0.03c0.26-0.42,0.59-0.726,0.99-0.915c0.4-0.19,0.84-0.285,1.32-0.285
c0.61,0,1.135,0.115,1.575,0.345c0.44,0.23,0.805,0.535,1.095,0.915c0.29,0.38,0.504,0.822,0.645,1.327
c0.14,0.506,0.21,1.033,0.21,1.583c0,0.52-0.07,1.02-0.21,1.5c-0.141,0.479-0.353,0.905-0.638,1.275
c-0.285,0.369-0.64,0.665-1.065,0.885c-0.425,0.22-0.922,0.33-1.493,0.33c-0.48,0-0.922-0.098-1.328-0.293
c-0.405-0.195-0.737-0.482-0.997-0.862h-0.03v3.675h-2.13V6.337H18.789z M21.556,12.487c0.235-0.14,0.425-0.322,0.57-0.547
c0.145-0.226,0.248-0.487,0.308-0.788c0.06-0.3,0.09-0.604,0.09-0.915c0-0.31-0.032-0.614-0.097-0.914
c-0.065-0.301-0.173-0.568-0.323-0.803c-0.15-0.235-0.343-0.425-0.578-0.57c-0.235-0.145-0.522-0.218-0.862-0.218
c-0.35,0-0.643,0.073-0.877,0.218c-0.235,0.146-0.425,0.333-0.57,0.562c-0.146,0.23-0.248,0.495-0.308,0.795s-0.09,0.61-0.09,0.93
c0,0.311,0.032,0.615,0.097,0.915c0.065,0.301,0.17,0.562,0.315,0.788c0.145,0.225,0.338,0.407,0.578,0.547
c0.24,0.141,0.53,0.211,0.87,0.211C21.028,12.698,21.321,12.627,21.556,12.487z"/>
<path fill="#231F20" d="M28.208,12.232c0.32,0.311,0.78,0.466,1.38,0.466c0.43,0,0.8-0.107,1.11-0.323
c0.31-0.215,0.5-0.442,0.57-0.683h1.875c-0.3,0.931-0.76,1.596-1.38,1.995c-0.62,0.4-1.37,0.601-2.25,0.601
c-0.61,0-1.16-0.098-1.65-0.293c-0.49-0.195-0.905-0.473-1.245-0.832c-0.34-0.36-0.603-0.79-0.788-1.29s-0.277-1.05-0.277-1.65
c0-0.58,0.095-1.12,0.285-1.62c0.189-0.5,0.459-0.932,0.81-1.297s0.768-0.653,1.253-0.863c0.485-0.21,1.022-0.314,1.612-0.314
c0.66,0,1.235,0.127,1.725,0.383c0.49,0.255,0.893,0.598,1.208,1.027s0.542,0.92,0.682,1.47s0.19,1.125,0.15,1.725h-5.595
C27.713,11.422,27.888,11.922,28.208,12.232z M30.616,8.152c-0.255-0.279-0.643-0.42-1.163-0.42c-0.34,0-0.623,0.058-0.848,0.173
c-0.225,0.115-0.405,0.258-0.54,0.428c-0.135,0.17-0.23,0.35-0.285,0.54c-0.055,0.189-0.088,0.359-0.098,0.51h3.465
C31.048,8.842,30.871,8.432,30.616,8.152z"/>
<path fill="#231F20" d="M33.728,7.762V6.337h1.275V5.737c0-0.689,0.215-1.254,0.645-1.694c0.43-0.44,1.08-0.66,1.95-0.66
c0.19,0,0.38,0.008,0.57,0.022s0.375,0.027,0.555,0.037v1.591c-0.25-0.03-0.51-0.046-0.78-0.046c-0.29,0-0.498,0.068-0.623,0.203
s-0.188,0.362-0.188,0.683v0.465h1.47v1.425h-1.47v6.33h-2.13v-6.33H33.728z"/>
<path fill="#231F20" d="M39.579,8.535c0.189-0.505,0.459-0.935,0.81-1.29c0.351-0.354,0.771-0.63,1.26-0.825
c0.49-0.194,1.04-0.292,1.65-0.292s1.162,0.098,1.657,0.292c0.495,0.195,0.918,0.471,1.268,0.825c0.35,0.355,0.62,0.785,0.811,1.29
c0.189,0.505,0.285,1.067,0.285,1.688s-0.096,1.181-0.285,1.68c-0.19,0.501-0.461,0.928-0.811,1.283
c-0.35,0.354-0.772,0.627-1.268,0.817c-0.495,0.189-1.047,0.285-1.657,0.285s-1.16-0.096-1.65-0.285
c-0.489-0.19-0.909-0.463-1.26-0.817c-0.351-0.355-0.62-0.782-0.81-1.283c-0.19-0.499-0.285-1.06-0.285-1.68
S39.388,9.04,39.579,8.535z M41.513,11.129c0.06,0.296,0.163,0.561,0.308,0.795c0.145,0.235,0.338,0.423,0.577,0.562
c0.24,0.141,0.54,0.211,0.9,0.211s0.662-0.07,0.907-0.211c0.245-0.14,0.439-0.327,0.585-0.562c0.146-0.234,0.247-0.499,0.308-0.795
c0.061-0.295,0.09-0.597,0.09-0.907c0-0.31-0.029-0.615-0.09-0.915s-0.162-0.564-0.308-0.795c-0.146-0.229-0.34-0.417-0.585-0.562
c-0.245-0.145-0.547-0.218-0.907-0.218s-0.66,0.073-0.9,0.218c-0.239,0.146-0.433,0.333-0.577,0.562
c-0.145,0.23-0.248,0.495-0.308,0.795s-0.09,0.605-0.09,0.915C41.423,10.533,41.454,10.834,41.513,11.129z"/>
<path fill="#231F20" d="M50.723,6.337v1.439h0.029c0.1-0.239,0.234-0.462,0.405-0.667c0.17-0.205,0.364-0.38,0.585-0.525
c0.22-0.145,0.455-0.257,0.705-0.337s0.51-0.12,0.779-0.12c0.141,0,0.295,0.025,0.466,0.075v1.979
c-0.101-0.02-0.22-0.037-0.36-0.053c-0.141-0.015-0.275-0.022-0.404-0.022c-0.391,0-0.721,0.065-0.99,0.195
c-0.271,0.13-0.488,0.308-0.652,0.532c-0.166,0.226-0.283,0.488-0.354,0.788c-0.069,0.3-0.104,0.625-0.104,0.975v3.495h-2.13V6.337
H50.723z"/>
<path fill="#231F20" d="M56.602,6.337v1.05h0.031c0.279-0.399,0.617-0.71,1.012-0.93s0.848-0.33,1.357-0.33
c0.49,0,0.938,0.095,1.343,0.285c0.405,0.189,0.712,0.524,0.923,1.005c0.229-0.34,0.542-0.64,0.938-0.9
c0.395-0.26,0.862-0.39,1.402-0.39c0.41,0,0.789,0.05,1.14,0.149c0.351,0.101,0.649,0.261,0.899,0.48s0.445,0.508,0.586,0.862
c0.14,0.355,0.21,0.783,0.21,1.282v5.19h-2.13V9.698c0-0.261-0.01-0.505-0.03-0.735s-0.075-0.43-0.165-0.601
c-0.09-0.17-0.223-0.305-0.397-0.404s-0.413-0.15-0.712-0.15c-0.301,0-0.543,0.058-0.729,0.173c-0.185,0.115-0.33,0.265-0.435,0.45
c-0.104,0.185-0.175,0.395-0.21,0.63c-0.035,0.234-0.053,0.473-0.053,0.712v4.32h-2.13v-4.35c0-0.23-0.005-0.458-0.015-0.683
c-0.01-0.226-0.053-0.433-0.128-0.623c-0.075-0.189-0.2-0.342-0.375-0.457s-0.433-0.173-0.772-0.173
c-0.1,0-0.232,0.022-0.397,0.067s-0.325,0.13-0.479,0.255c-0.156,0.126-0.288,0.306-0.398,0.54
c-0.109,0.235-0.164,0.543-0.164,0.923v4.5h-2.131V6.337H56.602z"/>
</g>
</svg>
</div>
</div>
<script>
// apparently we don't have jquery here
var formCreationDate = Date.parse('2017-05-24T21:57:15+0000'.split('T')[0]), featureReleaseDate = Date.parse("Apr 16, 2014"), showLoadingBranding = 1;
if (formCreationDate > featureReleaseDate && showLoadingBranding)
document.getElementById("loadingLogo").style.display = 'block';
</script>
</div>
<div id="2577496" class="intro screen " data-field="true">
<div class="content-wrapper">
<div class="content">
<div class="media">
<div class="attachment" data-attachment='{"image":"https:\/\/images.typeform.com\/images\/jLmzTVzqDR\/image\/default#.png","width":400,"height":400,"video_source":"","video_id":""}'>
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="" />
</div>
</div>
<div class="text">
HOLA!
</div>
<div class="description">
Sistema de recopilación de datos para nuevos aspirantes.
</div>
<div class="button-wrapper">
<div class="button general full enabled hover-effect" style="">Iniciar</div>
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
<div class="footer">
<div class="persistent-wrapper">
<div class="persistent background"></div>
<div class="persistent"></div>
</div>
<div class="overlay"></div>
<div class="content">
<div class="button-wrapper">
<a class="button general full enabled hover-effect" target="_parent" style="">Iniciar</a>
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
</div>
<div class="scroll-smooth"></div>
</div>
</div>
<div class="form">
<ul class="questions">
<li class="textfield active   " id="51908710"  data-model='{"id":"51908710","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Nombre asesor E4e</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input  type="text" id="user" name="dataUser" list="dataUser" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="list-image active    multiple" id="54232968"  data-model='{"id":"54232968","type":"list-image","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Registro</span></div>
<div class="content">
<div class="description">
Selecciona que tipo de registro vas a ingresar
</div>
<div class="content-wrapper registry">
<div class="multiple"></div>
<ul class="columns">
<li id="68194813" class="Border container">
<input type="hidden" name="value" value="dato"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/FAUDpGWyBi/choice/default#.jpeg" width="211" height="230" alt="DATO" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>A</span></div>
<div class="caption">DATO</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68194814" class="Border container">
<input type="hidden" name="value" value="cita"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/Q3yz79rV5s/choice/default#.jpeg" width="211" height="230" alt="CITA" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>B</span></div>
<div class="caption">CITA</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68194815" class="Border container">
<input type="hidden" name="value" value="matricula"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/NUrbnVxj5N/choice/default#.jpeg" width="211" height="230" alt="MATRICULA" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>C</span></div>
<div class="caption">MATRICULA</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
</ul>
<div class="clear"></div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- dato -->
<li class="group active dato" id="54228037"  data-model='{"id":"54228037","type":"group","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>DATO</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="button-wrap">
<div class="button-wrapper continue">
<div class="button nav enabled"><span>Continuar</span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active dato" id="54228248" data-parent="54228037"  data-model='{"id":"54228248","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Nombre completo</span></div>
<div class="content">
<div class="description">
Escriba el nombre completo del alumno
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="nameD" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active dato" id="54228282" data-parent="54228037"  data-model='{"id":"54228282","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Telefono</span></div>
<div class="content">
<div class="description">
Escriba aquí el telefono del alumno/contacto
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="phone" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active dato" id="54228622" data-parent="54228037"  data-model='{"id":"54228622","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Correo</span></div>
<div class="content">
<div class="description">
Escribe aquí el correo electrónico del contacto
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="email" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="dropdown active dato" id="rtep" data-parent="54228037"  data-model='{"id":"rtep","type":"dropdown","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>En que municipio vive?</span></div>
<div class="content">
<div class="content-wrapper municipality">
<div class="attachment-wrapper">
<div class="control ">
<select>
<option value="">Teclea o selecciona una opción</option>
<option value="Apodaca">Apodaca</option>
<option value="Escobedo">Escobedo</option>
<option value="Monterrey">Monterrey</option>
<option value="Garcia">Garcia</option>
<option value="Guadalupe">Guadalupe</option>
<option value="San Pedro">San Pedro</option>
<option value="San Nicolas">San Nicolas</option>
<option value="Otra">Otra</option>
</select>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
</div>
</div>
</div>
</li>
<li class="list-image active dato" id="51846734" data-parent="54228037"  data-model='{"id":"51846734","type":"list-image","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>¿Como te enteraste de nosotros?</span></div>
<div class="content">
<div class="content-wrapper tell">
<div class="multiple">Se pueden seleccionar varias opciones</div>
<ul class="columns">
<li id="65472087" class="Border container">
<input type="hidden" name="value" value="Facebook"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/wuW5wLnG9M/choice/default#.png" width="95" height="96" alt="FACEBOOK" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>A</span></div>
<div class="caption">FACEBOOK</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="65472088" class="Border container">
<input type="hidden" name="value" value="Radio"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/TUAryUPTj5/choice/default#.png" width="95" height="96" alt="RADIO" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>B</span></div>
<div class="caption">RADIO</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="65472089" class="Border container">
<input type="hidden" name="value" value="Referido"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/7RDTLYgrgp/choice/default#.png" width="95" height="96" alt="RECOMENDACIÓN" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>C</span></div>
<div class="caption">REFERIDO</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="65472090" class="Border container">
<input type="hidden" name="value" value="Sucursal"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/N6wTaNqify/choice/default#.png" width="95" height="96" alt="SUCURSAL" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>D</span></div>
<div class="caption">SUCURSAL</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="71988792" class="Border container">
<input type="hidden" name="value" value="Modulo"/>
<div class="tick-wrapper"></div>
<span class="tick"></span>
<div class="image-wrapper">
<img src="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/lazy.png" data-original="https://images.typeform.com/images/rGAJNJpNmvEk/choice/default#.png" width="95" height="96" alt="MODULO" />
</div>
<div class="text">
<div class="label">
<div class="letter"><span>E</span></div>
<div class="caption">MODULO</div>
</div>
</div>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
</ul>
<div class="clear"></div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- Modulo -->
<li class="textfield active idMod" id="57160960" data-parent="54228037"  data-model='{"id":"57160960","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Modulo</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="module" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span> 	</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- Modulo -->
<!-- Referido -->
<li class="textfield active idRef" id="57366088" data-parent="54228037"  data-model='{"id":"57366088","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Referido</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="referred"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- Referido -->
<!-- Opciones de Sucursal -->
<li class="list active idOs" id="57160940" data-parent="54228037"  data-model='{"id":"57160940","type":"list","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Sucursal</span></div>
<div class="content">
<div class="content-wrapper placeD">
<div class="attachment-wrapper">
<div class="control">
<div class="multiple">Se pueden seleccionar varias opciones</div>
<ul class="columns">
<?php
$letter = "A";
for ($i =0; $i < 30; $i++){ while($rows = mysql_fetch_array($data)){ 
?>	 
<?php echo '<li id="7171580'.$rows['id'].'" class="container">'; ?>
<?php echo '<input type="hidden" name="value" value="'.$rows['name'].'" />'; ?>
<div class="letter"><span><?php echo $letter; ?></span></div>
<span class="label">
 <?php echo htmlentities($rows['name']); ?>
</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<?php $letter++; } } ?>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- Opciones de Sucursal -->
<li class="date active dato" id="54228750" data-parent="54228037"  data-model='{"id":"54228750","type":"date","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Fecha de registro</span></div>
<div class="content">
<div class="description">
Agrega aquí la fecha en que obtuviste los datos
</div>
<div class="content-wrapper dayD">
<div class="attachment-wrapper">
<div class="control">
</div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- dato -->
<!-- cita -->
<li class="group active cita" id="54403552"  data-model='{"id":"54403552","type":"group","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>CITA</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="button-wrap">
<div class="button-wrapper continue">
<div class="button nav enabled"><span>Continuar</span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active cita" id="54403553" data-parent="54403552"  data-model='{"id":"54403553","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Nombre completo</span></div>
<div class="content">
<div class="description">
Escriba el nombre completo del alumno
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="nameC"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="date active cita" id="57040548" data-parent="54403552"  data-model='{"id":"57040548","type":"date","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Fecha de la cita</span></div>
<div class="content">
<div class="content-wrapper dayC">
<div class="attachment-wrapper">
<div class="control">
</div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active cita" id="54672652" data-parent="54403552"  data-model='{"id":"54672652","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Hora de la cita</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="hourC"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active cita" id="57190961" data-parent="54403552"  data-model='{"id":"57190961","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Lugar de la cita</span></div>
<div class="content">
<div class="description">
Escriba el lugar de la cita
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="placeC" />
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- cita -->
<!-- matricula -->
<li class="group active matricula" id="54403593"  data-model='{"id":"54403593","type":"group","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>MATRICULA</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="button-wrap">
<div class="button-wrapper continue">
<div class="button nav enabled"><span>Continuar</span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active matricula" id="54403594" data-parent="54403593"  data-model='{"id":"54403594","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Nombre completo</span></div>
<div class="content">
<div class="description">
Escriba el nombre completo del titular
</div>
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="nameM"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active matricula" id="57040805" data-parent="54403593"  data-model='{"id":"57040805","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Cual es la hora de la cita de orientación</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="hourM"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="dropdown active matricula" id="57041306" data-parent="54403593"  data-model='{"id":"57041306","type":"dropdown","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Plan de curso</span></div>
<div class="content">
<div class="description">
Elige el plan de inversión
</div>
<div class="content-wrapper course">
<div class="attachment-wrapper">
<div class="control">
<select>
<option value="">Teclea o selecciona una opción</option>
<option value="2800">2800</option>
<option value="1980">1980</option>
<option value="Fraccionado">Fraccionado</option>
<option value="Contado">Contado</option>
<option value="Otro">Otro</option>
</select>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
</div>
</div>
</div>
</li>
<li class="list active matricula" id="54678416" data-parent="54403593"  data-model='{"id":"54678416","type":"list","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Método de pago</span></div>
<div class="content">
<div class="description">
Describe el método de pago preferido del cliente
</div>
<div class="content-wrapper pay">
<div class="attachment-wrapper">
<div class="control">
<div class="multiple">Se pueden seleccionar varias opciones</div>
<ul class="columns">
<li id="68703834" class="container">
<input type="hidden" name="value" value="Tarjeta de credito"/>
<div class="letter"><span>A</span></div>
<span class="label">Tarjeta de credito</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68703835" class="container">
<input type="hidden" name="value" value="Tarjeta de debito"/>
<div class="letter"><span>B</span></div>
<span class="label">Tarjeta de debito</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68703836" class="container">
<input type="hidden" name="value" value="Deposito en banco"/>
<div class="letter"><span>C</span></div>
<span class="label">Deposito en banco</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68703837" class="container">
<input type="hidden" name="value" value="Efectivo"/>
<div class="letter"><span>D</span></div>
<span class="label">Efectivo</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68703838" class="container">
<input type="hidden" name="value" value="Cheque"/>
<div class="letter"><span>E</span></div>
<span class="label">Cheque</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
<li id="68703839" class="container">
<input type="hidden" name="value" value="Transferencia electronica"/>
<div class="letter"><span>F</span></div>
<span class="label">Transferencia electronica</span>
<span class="tick"></span>
<div class="aux ">
<div class="bg"></div>
<div class="bd"></div>
</div>
</li>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<li class="textfield active matricula" id="54678453" data-parent="54403593"  data-model='{"id":"54678453","type":"textfield","name":"","required":false,"showPadlockIcon":false}'>
<div class="wrapper">
<div class="item">
<span></span>
<div class="arrow"><div class="arrow-right"></div></div>
</div>
<div class="question"><span>Numero de folio</span></div>
<div class="content">
<div class="content-wrapper">
<div class="attachment-wrapper">
<div class="control">
<div class="input">
<input class=""  type="text" id="folioM"/>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="message "><span></span><div></div></div>
<div class="confirm container">
<div class="button-wrapper confirm">
<div class="button nav enabled"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
</div>
</li>
<!-- matricula -->
<!-- box-button -->
<div class="box-button">
<button type="button" class="hidden" id="envio">Registrar</button> 
<div class="msg"></div> 
</div>
<!-- box-button -->
</ul>
<div class="footer-confirm">
<div class="persistent background"></div>
<div class="wrapper">
<div class="content">
<div class="button-wrapper confirm">
<div class="button nav enabled hover-effect"><span>Ok</span><span class="confirm"></span>
</div>
</div>
<div class="text">
<span class="default">presionar <strong>ENTER</strong></span>
<span class="textarea">presionar <strong>ENTER</strong></span>
<span class="multiple">presionar <strong>ENTER</strong></span>
</div>
</div>
</div>
</div>
<div id="fixed-footer" class="lightness-step">
<div class="overlay"></div>
<div class="persistent background"></div>
<div class="nav-buttons">
<div class="button-wrapper up">
<div class="button nav enabled hover-effect"><span></span><span class="up"></span>
</div>
</div>
<div class="button-wrapper down">
<div class="button nav enabled hover-effect"><span></span><span class="down"></span>
</div>
</div>
</div>
<div class="button-wrapper by">
<a href="//miguelescobedo.typeform.com/signup?utm_campaign=NvIOCm&amp;utm_source=typeform.com-2223226-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-footer&amp;utm_term=ES" target="_blank" class="button general enabled">
Crea tu propio <b>typeform</b>...
</a>
</div>
<div class="clear"></div>
<div class="content">
<div id="progress"></div>
</div>
</div>
<div id="unfixed-footer" class="lightness-step">
<div class="footer-message">
<div class="background"></div>
<div class="content"><span class="default-message"></span></div>
</div>
<div class="persistent background lightness-step"></div>
<div class="content">
<div class="button-wrapper submit">
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
<div class="button-wrapper review">
<div class="button general red enabled hover-effect">Revisar</div>
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
<div class="phishing-notice primaryColor">
No envíe nunca contraseñas - <a class="primaryColor" href="https://www.typeform.com/help/es/reportar-abuso/" target="_blank" id="phishingLink">Notificar mal uso</a>
</div>
</div>
</div>
</div>
<div id="0" class="outro screen defaultOutroBranded" data-field="true">
<div class="content-wrapper">
<div class="content">
<div class="media">
<div class="attachment" data-attachment='{"image":"\/\/dkl3g0z0k6qzr.cloudfront.net\/quickyformapp\/images\/branded_animated.gif","width":"120","height":"120","video_source":"","video_id":""}'>
<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-original="" data-first-frame="//dkl3g0z0k6qzr.cloudfront.net/quickyformapp/images/branded_animated.gif" />
</div>
</div>
<div class="text">
Gracias por completar este typeform<br/><strong>Crea ahora el tuyo</strong> — ¡es gratis, fácil y bonito!
</div>
<input id="redirect-button-url" class="redirect" type="hidden" value="https://miguelescobedo.typeform.com/signup?utm_campaign=NvIOCm&amp;utm_source=typeform.com-2223226-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-thankyoubutton&amp;utm_term=ES">
<div class="button-wrapper">
<a class="button general full enabled" target="_blank">Crear un <strong>typeform</strong></a>
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
</div>
</div>
<div class="footer">
<div class="persistent-wrapper">
<div class="persistent background"></div>
<div class="persistent"></div>
</div>
<div class="overlay"></div>
<div class="content">
<div class="button-wrapper">
<a class="button general full enabled hover-effect" target="_blank" style="">Crear un <strong>typeform</strong></a>
<div class="button-text">presionar <strong>ENTER</strong></div>
</div>
</div>
<div class="scroll-smooth"></div>
</div>
</div>
<div id="background">
<div></div>
</div>
</div>
<ul id="texts" style="display:none;">
<li id="keyboard">keyboard</li>
<li id="key">Tecla</li>
<li id="tab-button">Ok</li>
<li id="continue-button">Continuar</li>
<li id="button-tip-default">presionar <strong>ENTER</strong></li>
<li id="button-tip-multiple">button-tip-multiple</li>
<li id="button-tip-textarea">presionar <strong>ENTER</strong></li>
<li id="review-button">Revisar</li>
<li id="next-validation">Siguiente validación</li>
<li id="submit-button">Register</li>
<li id="phishing-notice">No envíe nunca contraseñas</li>
<li id="report-phishing">Notificar mal uso</li>
<li id="report-phishing-link">https://www.typeform.com/help/es/reportar-abuso/</li>
<li id="multiple">Se pueden seleccionar varias opciones</li>
<li id="other">Otro</li>
<li id="resizing">resizing</li>
<li id="private">Este formulario está en modo privado. Por favor no compartas la url.</li>
<li id="private-embed">Este formulario está en modo privado.</li>
<li id="trial-private">Este typeform está en modo Privado y sólo tú puedes acceder a él.</li>
<li id="preview">preview</li>
<li id="end">end</li>
<li id="incomplete">Faltan campos por rellenar</li>
<li id="default-text">La respuesta se introduce aquí</li>
<li id="share">¡Échale un vistazo!</li>
<li id="y">S</li>
<li id="yes">Sí</li>
<li id="n">N</li>
<li id="no">No</li>
<li id="success">Formulario enviado correctamente</li>
<li id="image-placeholder-1">Pon tu logotipo o una imagen / vídeo</li>
<li id="image-placeholder-2">¡Nosotros haremos el resto!</li>
<li id="placeholder-description">La descripción aparece aquí...</li>
<li id="progress-proportion">{{step}} de {{total}} respondidas</li>
<li id="progress-percent">{{percent}}% completado</li>
<li id="meta-description">Typeform presenta la nueva generación de formularios online: atractivos, flexibles y rápidos</li>
<li id="advert-footer">Crea tu propio <b>typeform</b>...</li>
<li id="advert-footer-core">Crea tu propio <b>typeform</b>...</li>
<li id="advert-thankyou">Powered by <a  href="https://www.typeform.com/?{{QUERY}}" target="_blank">Typeform</a></li>
<li id="legalyes">Acepto</li>
<li id="legalno">No acepto</li>
<li id="type-select">Teclea o selecciona una opción</li>
<li id="type-select-touch">Selecciona una opción</li>
<li id="not-found">No se han encontrado sugerencias</li>
<li id="banner-text">Pregunta con estilo...</li>
<li id="banner-link">Crea tu propio <b>typeform</b> gratis</li>
<li id="banner-link-core">Crea tu propio <b>typeform</b> gratis</li>
<li id="payment_description_price">Se te cobrará <%=price%> en tu tarjeta</li>
<li id="payment_description_advice">¡Nunca almacenaremos tu número de tarjeta de crédito o número CVC!</li>
<li id="payment_description_stripe"><span>Procesado por</span> <%=logo%></li>
<li id="credit_card_number">Por favor, introduce tu número de tarjeta de crédito:</li>
<li id="cvc_number">Número CVC:</li>
<li id="cvc_description">(3 o 4 dígitos del número de seguridad al reverso de la tarjeta de crédito)</li>
<li id="credit_card_name">Nombre del titular de la tarjeta de crédito:</li>
<li id="expiry_month">Mes de vencimiento</li>
<li id="expiry_year">Año de vencimiento</li>
<li id="credit_card_number_error">credit_card_number_error</li>
<li id="credit_card_cvc_error">credit_card_cvc_error</li>
<li id="file-upload-choose"><b>Escoge el archivo</b></li>
<li id="file-upload-drag">o <b>arrastra aquí</b></li>
<li id="file-upload-uploading">Cargando...</li>
<li id="file-upload-sizeLimit">Tu archivo es demasiado grande</li>
<li id="file-upload-maxSize">Límite de tamaño</li>
<li id="file-upload-processing">Tu archivo todavía está cargando, por favor espera...</li>
<li id="file-upload-upload-error">Se ha producido un error al subir el archivo</li>
<li id="file-upload-must-upload"><b>¡Uy!</b> Tienes que subir un archivo</li>
<li id="textarea-newline-tip">Para añadir un párrafo oprime: <strong>SHIFT</strong> + <strong>ENTER</strong></li>
<li id="ranking-field-tip">Drag and drop the choices...</li>
<li id="shortcut">shortcut</li>
<li id="legalquestion">legalquestion</li>
<li id="yesnoanswer">yesnoanswer</li>
<li id="proportional">proportional</li>
<li id="correct">Por favor, corrige los errores que se indician a continuación</li>
<li id="required">Por favor, rellena este campo</li>
<li id="duplicated"><strong>Este valor ya lo ha introducido otro usuario.</strong> Prueba con otro</li>
<li id="invalid"><strong>Este valor no es válido.</strong> Prueba con otro</li>
<li id="invalid-date">Por favor, introduce una fecha válida</li>
<li id="must-select">Por favor, elige una opción</li>
<li id="must-enter">Por favor, introduce un valor</li>
<li id="maxlength">Por favor, no introduzcas más de {{MAXLENGTH}} caracteres</li>
<li id="terms">Debes aceptar los términos y condiciones</li>
<li id="email">Por favor, introduce un email válido</li>
<li id="website">Por favor, introduce una dirección web válida</li>
<li id="minmax">Por favor, debes escoger un numero entre {{MIN}} y {{MAX}}</li>
<li id="min">Introduce un número mayor a {{MIN}}</li>
<li id="max">Introduce un número menor a {{MAX}}</li>
<li id="review">{{NUM}} respuestas incompletas</li>
<li id="connection">Ha fallado la conexión con el servidor</li>
<li id="server">¡Error de servidor! No se ha podido procesar tu petición</li>
<li id="slow-submission-on-submit">El tiempo de enviar tu respuesta es ligeramente más largo de lo esperado. Por favor, deja la ventana abierta y continuaremos intentándolo.</li>
<li id="retrying-in-time-submission">Reintentando en {{NEXT_TRY}} segundos</li>
<li id="retrying-submission">Reintentando...</li>
<li id="retry-now">retry-now</li>
<li id="form-down">El typeform {{NAME}} no está disponible en estos momentos. Por favor, vuelve en unos momentos.</li>
<li id="form-empty">No hay contenido aún!</li>
<li id="fallback-alert">Estas viendo este typeform en modo "Simple".<br/>Esto se debe a que tu dispositivo no está aun soportado en la plataforma Typeform</li>
<li id="warning-close-when-submitting">Todavía estamos intentando enviar tu respuesta. Si abandonas la página, tu respuesta podría perderse.</li>
<li id="incorrect_number">El número de la tarjeta es incorrecto</li>
<li id="invalid_number">El número introducido no es un número de tarjeta de crédito válido.</li>
<li id="invalid_cvc">El código de seguridad de la tarjeta es inválido.</li>
<li id="invalid_name">Es necesario introducir el nombre que aparece en la tarjeta de crédito.</li>
<li id="invalid_expiry_month">El mes de caducidad de la tarjeta es inválido.</li>
<li id="invalid_expiry_year">El año de caducidad de la tarjeta es inválido.</li>
<li id="expired_card">La tarjeta ha caducado.</li>
<li id="incorrect_cvc">El código de seguridad de la tarjeta es incorrecto.</li>
<li id="card_declined">La tarjeta fue rechazada.</li>
<li id="processing_error">Ha ocurrido un error mientras se procesaba la tarjeta.</li>
<li id="payment_sync">Cálculo de precio inválido, por favor inténtalo de nuevo</li>
<li id="generic-error">Ups, ¡algo ha ido mal!</li>
<li id="and"> y </li>
<li id="pay">pagar {{amount}}</li>
<li id="meta-image">https://miguelescobedo.typeform.com/bundles/quickyformapp/images/share_typeform.jpg</li>
</ul>
<datalist id="dataUser">
<?php 
while($rows = mysql_fetch_array($employees)){
echo '<option id="'.$rows['id'].'" value="'.htmlentities($rows['name']).'">';
}
?>	
</datalist>
<?php mysql_free_result($employees); ?>
<?php mysql_free_result($data); ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/spin.js/2.0.1/spin.min.js"></script>
<script type="text/javascript">
var opts = {
lines: 16, // The number of lines to draw
length: 3, // The length of each line
width: 3, // The line thickness
radius: 14, // The radius of the inner circle
color: '#3D3D3D', // #rgb or #rrggbb
speed: 2.1, // Rounds per second
trail: 60, // Afterglow percentage
shadow: false, // Whether to render a shadow
hwaccel: false // Whether to use hardware acceleration
};
var target = document.getElementById('spin');
var spinner = new Spinner(opts).spin(target);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://miguelescobedo.typeform.com/bundles/quickyformapp/js/lib/jquery.2_0_0.min.js">\x3C/script>')</script>
<script type="text/javascript" src="https://miguelescobedo.typeform.com/bundles/quickyformapp/js/build/trackingClient.js"></script>
<!-- common scripts -->
<script type="text/javascript" src="https://d4z6dx8qrln4r.cloudfront.net/common-7f63a6c7909ce7c674408ead980fab7b-min.z.js"></script>
<!-- end of common scripts -->
<script type="text/javascript">
var jumps = [];
freezeframe_options = {
animation_icon_image: false,
loading_background_image: false,
loading_background_color: "transparent",
loading_background_position: "top left",
trigger_event: "focus",
loading_fade_in_speed: 1,
auto_run: false
}
</script>
<script type="text/javascript" src="https://d4z6dx8qrln4r.cloudfront.net/default-ab22fbaf82c59e6d545930d9d0766712-min.z.js"></script>
<script type="text/javascript">
var formHasGA = false;
</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"aa6e0ec721","applicationID":"9223656","transactionName":"NVEDZkUEXEQEBkANWQwbIFFDDF1ZSjpSC0QP","queueTime":0,"applicationTime":476,"atts":"GRYAEA0eT0o=","errorBeacon":"bam.nr-data.net","agent":""}</script>
<script src="scripts/attrchange.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var widthView = $(window).width();
    if(widthView < 1200){ $('.default').addClass('touch'); $('.touch').removeClass('default');  }
    $(".registry li").attrchange({
    trackValues: true, // set to true so that the event object is updated with old & new values
    callback: function(evnt) {
        if(evnt.attributeName == "class") { // which attribute you want to watch for changes
            if(evnt.newValue.search(/registry/i) == -1) { // "registry" is the class name you search for inside "class" attribute

				if($(this).hasClass('selected')){
                    var reg = $(this).attr('id');
                    if(reg == 68194813){
                    $("#typeform").removeClass('showcita').removeClass('showmatricula').addClass('showdato');
                    $(".registry li").eq(1).removeClass('selected');
                    $(".registry li").eq(2).removeClass('selected');
                    }else if(reg == 68194814){
                    $("#typeform").removeClass('showdato').removeClass('showmatricula').addClass('showcita');
                    $(".registry li").eq(0).removeClass('selected');
                    $(".registry li").eq(2).removeClass('selected');
                    $(".idMod").removeClass('show');
	                $(".idOs").removeClass('show');
	                $(".idRef").removeClass('show');
                    }else if(reg == 68194815){
                    $("#typeform").removeClass('showdato').removeClass('showcita').addClass('showmatricula');
                    $(".registry li").eq(0).removeClass('selected');
                    $(".registry li").eq(1).removeClass('selected');
                    $(".idMod").removeClass('show');
	                $(".idOs").removeClass('show');
	                $(".idRef").removeClass('show');
                    }
                }
                // your code to execute goes here...
            }
        }
    }
});
    $(".tell li").attrchange({
    trackValues: true, // set to true so that the event object is updated with old & new values
    callback: function(evnt) {
        if(evnt.attributeName == "class") { // which attribute you want to watch for changes
            if(evnt.newValue.search(/tell/i) == -1) { // "tell" is the class name you search for inside "class" attribute
                if ($(this).hasClass('selected')){
                    var idS = $(this).attr("id");
                    if(idS == 71988792){
                    	$("#54228750").removeClass('visible').removeClass('focus');
	                    $(".idMod").addClass('show').addClass('ready').addClass('visible').addClass('focus');
	                    $(".idRef").removeClass('show');
	                    $(".idOs").removeClass('show');
                    }else if(idS == 65472089){
                    	$("#54228750").removeClass('visible').removeClass('focus');
	                    $(".idRef").addClass('show').addClass('ready').addClass('visible').addClass('focus');
	                    $(".idMod").removeClass('show');
	                    $(".idOs").removeClass('show');
                    }else if(idS == 65472090){
                    	$("#54228750").removeClass('visible').removeClass('focus');
	                    $(".idOs").addClass('show').addClass('ready').addClass('visible').addClass('focus');
	                    $(".idMod").removeClass('show');
	                    $(".idRef").removeClass('show');
                    }else if(idS == 65472087){
	                    $(".idMod").removeClass('show');
	                    $(".idOs").removeClass('show');
	                    $(".idRef").removeClass('show');
                    }else if(idS == 65472088){
	                    $(".idMod").removeClass('show');
	                    $(".idOs").removeClass('show');
	                    $(".idRef").removeClass('show');
                    }
                }
                // your code to execute goes here...
            }
        }
    }
});
});
$("#envio").click(function(){
	$(".val").removeClass('val');
	var 
	widthView = $(window).width();
	registry = $(".registry .selected input").val();
	list = $("input[list='dataUser']").val();
	option = $('#dataUser');
	fusion = $(option).find('option[value="' + list + '"]');
	val = fusion.attr('id');
    if(!val == ''){ user = val; }else{ $("#user").focus().addClass('val');return false; }
	
if(registry == 'dato'){
    var 
    name=$("#nameD").val();
    phone=$("#phone").val();
    email=$("#email").val();
    validacion_email=/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    /* movil select */
    if(widthView < 1200){ municipality= $(".municipality select").val();  }else{ municipality= $(".municipality input").val(); }
    /* movil select */
    tell= $(".tell .selected input").val();
    day = $(".dayD input").val();
    module = $("#module").val();
    referred = $("#referred").val();
    place = $(".placeD .selected input").val();

    if(name==""){ $("#nameD").focus().addClass('val');return false;
    }else if(phone==""){ $("#phone").focus().addClass('val');return false;
    }else if(email==""||!validacion_email.test(email)){
    $("#email").focus().addClass('val');return false;
    }else if(municipality==""){ return false;
    }else if(tell==""){ $(".tell .selected input").focus();return false;
	}else if(day==""){ $(".dayD input").focus();return false;
    }else{  

        var datos='registry='+registry+'&user='+user+'&name='+name+'&phone='+phone+'&email='+email+'&municipality='+municipality+'&tell='+tell+'&day='+day+'&module='+module+'&referred='+referred+'&place='+place;
        //console.log(datos);
        $.ajax({
         type:"POST",
         url:"scripts/process.php",data:datos,
             success:function(response){
                 $('.msg').html(response);
             },error:function(){
                 $('#envio').attr('disabled','disabled');
                 $('.msg').html(response);
             }
        });return false;
    }
}else if (registry == 'cita'){
        var
        name = $("#nameC").val();
        day = $(".dayC input").val();
        hour = $("#hourC").val();
        place = $("#placeC").val();

        if(name==""){ $("#nameC").focus().addClass('val');return false;
        }else if(day==""){ $(".dayC input").focus().addClass('val');return false;
        }else if(hour==""){ $("#hourC").focus().addClass('val');return false;
        }else if(place==""){ $("#placeC").focus().addClass('val');return false;
        }else{  
            var datos='registry='+registry+'&user='+user+'&name='+name+'&day='+day+'&hour='+hour+'&place='+place;
            //console.log(datos);
            $.ajax({
             type:"POST",
             url:"scripts/process.php",data:datos,
                 success:function(response){
                     window.location.href = 'register.php';
                 },error:function(){
                    $('#envio').attr('disabled','disabled');
                    $('.msg').html(response);
                 }
            });return false;
        }
}else if (registry == 'matricula'){
        var
        name = $("#nameM").val();
        hour = $("#hourM").val();
	    /* movil select */
	    if(widthView < 1200){ course = $('.course select').val();  }else{ course = $('.course input').val(); }
	    /* movil select */        
        pay = $('.pay .selected input').val(); 
        folio = $("#folioM").val();
        
        if(name==""){ $("#nameM").focus().addClass('val');return false;
        }else if(hour==""){ $("#hourM").focus().addClass('val');return false;
        }else if(pay==""){ $('.pay .selected input').focus().addClass('val');return false;
        }else if(folio==""){ $("#folioM").focus().addClass('val');return false;
        }else{  
            var datos='registry='+registry+'&user='+user+'&name='+name+'&hour='+hour+'&course='+course+'&pay='+pay+'&folio='+folio;
             //console.log(datos);
            $.ajax({
             type:"POST",
             url:"scripts/process.php",data:datos,
                 success:function(response){
                    window.location.href = 'register.php';
                 },error:function(){
                     $('#envio').attr('disabled','disabled');
                     $('.msg').html(response);
                 }
            });return false;
        }
}
});
</script>
</body>
</html>
