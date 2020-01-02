!function(){"use strict";var e="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:{};function t(e,t){return e(t={exports:{}},t.exports),t.exports}function n(e){return e&&e.Math==Math&&e}function r(e){try{return!!e()}catch(e){return!0}}function o(e,t){return{enumerable:!(1&e),configurable:!(2&e),writable:!(4&e),value:t}}function i(e){return E.call(e).slice(8,-1)}function w(e){if(null==e)throw TypeError("Can't call method on "+e);return e}function u(e){return T(w(e))}function a(e){return"object"==typeof e?null!==e:"function"==typeof e}function c(e,t){if(!a(e))return e;var n,r;if(t&&"function"==typeof(n=e.toString)&&!a(r=n.call(e)))return r;if("function"==typeof(n=e.valueOf)&&!a(r=n.call(e)))return r;if(!t&&"function"==typeof(n=e.toString)&&!a(r=n.call(e)))return r;throw TypeError("Can't convert object to primitive value")}function s(e,t){return O.call(e,t)}function l(e){return x?M.createElement(e):{}}function v(e){if(!a(e))throw TypeError(String(e)+" is not an object");return e}function f(t,n){try{A(m,t,n)}catch(e){m[t]=n}return n}function d(e){return"Symbol("+String(void 0===e?"":e)+")_"+(++B+V).toString(36)}function p(e){return z[e]||(z[e]=d(e))}var h,g,y,m=n("object"==typeof globalThis&&globalThis)||n("object"==typeof window&&window)||n("object"==typeof self&&self)||n("object"==typeof e&&e)||Function("return this")(),b=!r(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}),S={}.propertyIsEnumerable,L=Object.getOwnPropertyDescriptor,_={f:L&&!S.call({1:2},1)?function(e){var t=L(this,e);return!!t&&t.enumerable}:S},E={}.toString,j="".split,T=r(function(){return!Object("z").propertyIsEnumerable(0)})?function(e){return"String"==i(e)?j.call(e,""):Object(e)}:Object,O={}.hasOwnProperty,M=m.document,x=a(M)&&a(M.createElement),k=!b&&!r(function(){return 7!=Object.defineProperty(l("div"),"a",{get:function(){return 7}}).a}),P=Object.getOwnPropertyDescriptor,q={f:b?P:function(e,t){if(e=u(e),t=c(t,!0),k)try{return P(e,t)}catch(e){}if(s(e,t))return o(!_.f.call(e,t),e[t])}},H=Object.defineProperty,C={f:b?H:function(e,t,n){if(v(e),t=c(t,!0),v(n),k)try{return H(e,t,n)}catch(e){}if("get"in n||"set"in n)throw TypeError("Accessors not supported");return"value"in n&&(e[t]=n.value),e}},A=b?function(e,t,n){return C.f(e,t,o(1,n))}:function(e,t,n){return e[t]=n,e},G="__core-js_shared__",N=m[G]||f(G,{}),I=t(function(e){(e.exports=function(e,t){return N[e]||(N[e]=void 0!==t?t:{})})("versions",[]).push({version:"3.4.1",mode:"global",copyright:"© 2019 Denis Pushkarev (zloirock.ru)"})}),F=I("native-function-to-string",Function.toString),R=m.WeakMap,D="function"==typeof R&&/native code/.test(F.call(R)),B=0,V=Math.random(),z=I("keys"),W={},U=m.WeakMap;if(D){var K=new U,X=K.get,J=K.has,Y=K.set;h=function(e,t){return Y.call(K,e,t),t},g=function(e){return X.call(K,e)||{}},y=function(e){return J.call(K,e)}}else{var Q=p("state");W[Q]=!0,h=function(e,t){return A(e,Q,t),t},g=function(e){return s(e,Q)?e[Q]:{}},y=function(e){return s(e,Q)}}function Z(e){return"function"==typeof e?e:void 0}function $(e,t){return arguments.length<2?Z(fe[e])||Z(m[e]):fe[e]&&fe[e][t]||m[e]&&m[e][t]}function ee(e){return isNaN(e=+e)?0:(0<e?pe:de)(e)}function te(e){return 0<e?ve(ee(e),9007199254740991):0}function ne(c){return function(e,t,n){var r,o=u(e),i=te(o.length),a=function(e,t){var n=ee(e);return n<0?he(n+t,0):ge(n,t)}(n,i);if(c&&t!=t){for(;a<i;)if((r=o[a++])!=r)return!0}else for(;a<i;a++)if((c||a in o)&&o[a]===t)return c||a||0;return!c&&-1}}function re(e,t){var n,r=u(e),o=0,i=[];for(n in r)!s(W,n)&&s(r,n)&&i.push(n);for(;t.length>o;)s(r,n=t[o++])&&(~me(i,n)||i.push(n));return i}function oe(e,t){for(var n=_e(t),r=C.f,o=q.f,i=0;i<n.length;i++){var a=n[i];s(e,a)||r(e,a,o(t,a))}}function ie(e,t){var n=Te[je(e)];return n==Me||n!=Oe&&("function"==typeof t?r(t):!!t)}function ae(e,t){var n,r,o,i,a,c=e.target,u=e.global,s=e.stat;if(n=u?m:s?m[c]||f(c,{}):(m[c]||{}).prototype)for(r in t){if(i=t[r],o=e.noTargetGet?(a=ke(n,r))&&a.value:n[r],!xe(u?r:c+(s?".":"#")+r,e.forced)&&void 0!==o){if(typeof i==typeof o)continue;oe(i,o)}(e.sham||o&&o.sham)&&A(i,"sham",!0),le(n,r,i,e)}}function ce(e){return He[e]||(He[e]=Pe&&qe[e]||(Pe?qe:d)("Symbol."+e))}function ue(){}var se={set:h,get:g,has:y,enforce:function(e){return y(e)?g(e):h(e,{})},getterFor:function(n){return function(e){var t;if(!a(e)||(t=g(e)).type!==n)throw TypeError("Incompatible receiver, "+n+" required");return t}}},le=t(function(e){var t=se.get,c=se.enforce,u=String(F).split("toString");I("inspectSource",function(e){return F.call(e)}),(e.exports=function(e,t,n,r){var o=!!r&&!!r.unsafe,i=!!r&&!!r.enumerable,a=!!r&&!!r.noTargetGet;"function"==typeof n&&("string"!=typeof t||s(n,"name")||A(n,"name",t),c(n).source=u.join("string"==typeof t?t:"")),e!==m?(o?!a&&e[t]&&(i=!0):delete e[t],i?e[t]=n:A(e,t,n)):i?e[t]=n:f(t,n)})(Function.prototype,"toString",function(){return"function"==typeof this&&t(this).source||F.call(this)})}),fe=m,de=Math.ceil,pe=Math.floor,ve=Math.min,he=Math.max,ge=Math.min,ye={includes:ne(!0),indexOf:ne(!1)},me=ye.indexOf,be=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"],we=be.concat("length","prototype"),Se={f:Object.getOwnPropertyNames||function(e){return re(e,we)}},Le={f:Object.getOwnPropertySymbols},_e=$("Reflect","ownKeys")||function(e){var t=Se.f(v(e)),n=Le.f;return n?t.concat(n(e)):t},Ee=/#|\.prototype\./,je=ie.normalize=function(e){return String(e).replace(Ee,".").toLowerCase()},Te=ie.data={},Oe=ie.NATIVE="N",Me=ie.POLYFILL="P",xe=ie,ke=q.f,Pe=!!Object.getOwnPropertySymbols&&!r(function(){return!String(Symbol())}),qe=m.Symbol,He=I("wks"),Ce=Object.keys||function(e){return re(e,be)},Ae=b?Object.defineProperties:function(e,t){v(e);for(var n,r=Ce(t),o=r.length,i=0;i<o;)C.f(e,n=r[i++],t[n]);return e},Ge=$("document","documentElement"),Ne=p("IE_PROTO"),Ie="prototype",Fe=function(){var e,t=l("iframe"),n=be.length,r="script";for(t.style.display="none",Ge.appendChild(t),t.src=String("javascript:"),(e=t.contentWindow.document).open(),e.write("<script>document.F=Object</"+r+">"),e.close(),Fe=e.F;n--;)delete Fe[Ie][be[n]];return Fe()},Re=Object.create||function(e,t){var n;return null!==e?(ue[Ie]=v(e),n=new ue,ue[Ie]=null,n[Ne]=e):n=Fe(),void 0===t?n:Ae(n,t)};W[Ne]=!0;var De=ce("unscopables"),Be=Array.prototype;null==Be[De]&&A(Be,De,Re(null));var Ve,ze=ye.includes;ae({target:"Array",proto:!0},{includes:function(e,t){return ze(this,e,1<arguments.length?t:void 0)}}),Ve="includes",Be[De][Ve]=!0;function We(e){var t,n,r;return void 0===e?"Undefined":null===e?"Null":"string"==typeof(n=function(e,t){try{return e[t]}catch(e){}}(t=Object(e),Ue))?n:Ke?i(t):"Object"==(r=i(t))&&"function"==typeof t.callee?"Arguments":r}var Ue=ce("toStringTag"),Ke="Arguments"==i(function(){return arguments}()),Xe={};Xe[ce("toStringTag")]="z";var Je="[object z]"!==String(Xe)?function(){return"[object "+We(this)+"]"}:Xe.toString,Ye=Object.prototype;Je!==Ye.toString&&le(Ye,"toString",Je,{unsafe:!0});function Qe(e){if("function"!=typeof e)throw TypeError(String(e)+" is not a function");return e}function Ze(r,o,e){if(Qe(r),void 0===o)return r;switch(e){case 0:return function(){return r.call(o)};case 1:return function(e){return r.call(o,e)};case 2:return function(e,t){return r.call(o,e,t)};case 3:return function(e,t,n){return r.call(o,e,t,n)}}return function(){return r.apply(o,arguments)}}function $e(t,e,n,r){try{return r?e(v(n)[0],n[1]):e(n)}catch(e){var o=t.return;throw void 0!==o&&v(o.call(t)),e}}var et=m.Promise,tt=C.f,nt=ce("toStringTag"),rt=ce("species"),ot={},it=ce("iterator"),at=Array.prototype,ct=ce("iterator"),ut=t(function(e){function p(e,t){this.stopped=e,this.result=t}(e.exports=function(e,t,n,r,o){var i,a,c,u,s,l,f,d=Ze(t,n,r?2:1);if(o)i=e;else{if("function"!=typeof(a=function(e){if(null!=e)return e[ct]||e["@@iterator"]||ot[We(e)]}(e)))throw TypeError("Target is not iterable");if(function(e){return void 0!==e&&(ot.Array===e||at[it]===e)}(a)){for(c=0,u=te(e.length);c<u;c++)if((s=r?d(v(f=e[c])[0],f[1]):d(e[c]))&&s instanceof p)return s;return new p(!1)}i=a.call(e)}for(l=i.next;!(f=l.call(i)).done;)if("object"==typeof(s=$e(i,d,f.value,r))&&s&&s instanceof p)return s;return new p(!1)}).stop=function(e){return new p(!0,e)}}),st=ce("iterator"),lt=!1;try{var ft=0,dt={next:function(){return{done:!!ft++}},return:function(){lt=!0}};dt[st]=function(){return this},Array.from(dt,function(){throw 2})}catch(e){}function pt(e){if(kt.hasOwnProperty(e)){var t=kt[e];delete kt[e],t()}}function vt(e){return function(){pt(e)}}function ht(e){pt(e.data)}function gt(e){m.postMessage(e+"",_t.protocol+"//"+_t.host)}var yt,mt,bt,wt=ce("species"),St=$("navigator","userAgent")||"",Lt=/(iphone|ipod|ipad).*applewebkit/i.test(St),_t=m.location,Et=m.setImmediate,jt=m.clearImmediate,Tt=m.process,Ot=m.MessageChannel,Mt=m.Dispatch,xt=0,kt={},Pt="onreadystatechange";Et&&jt||(Et=function(e){for(var t=[],n=1;n<arguments.length;)t.push(arguments[n++]);return kt[++xt]=function(){("function"==typeof e?e:Function(e)).apply(void 0,t)},yt(xt),xt},jt=function(e){delete kt[e]},"process"==i(Tt)?yt=function(e){Tt.nextTick(vt(e))}:Mt&&Mt.now?yt=function(e){Mt.now(vt(e))}:Ot&&!Lt?(bt=(mt=new Ot).port2,mt.port1.onmessage=ht,yt=Ze(bt.postMessage,bt,1)):!m.addEventListener||"function"!=typeof postMessage||m.importScripts||r(gt)?yt=Pt in l("script")?function(e){Ge.appendChild(l("script"))[Pt]=function(){Ge.removeChild(this),pt(e)}}:function(e){setTimeout(vt(e),0)}:(yt=gt,m.addEventListener("message",ht,!1)));var qt,Ht,Ct,At,Gt,Nt,It,Ft,Rt={set:Et,clear:jt},Dt=q.f,Bt=Rt.set,Vt=m.MutationObserver||m.WebKitMutationObserver,zt=m.process,Wt=m.Promise,Ut="process"==i(zt),Kt=Dt(m,"queueMicrotask"),Xt=Kt&&Kt.value;Xt||(qt=function(){var e,t;for(Ut&&(e=zt.domain)&&e.exit();Ht;){t=Ht.fn,Ht=Ht.next;try{t()}catch(e){throw Ht?At():Ct=void 0,e}}Ct=void 0,e&&e.enter()},At=Ut?function(){zt.nextTick(qt)}:Vt&&!Lt?(Gt=!0,Nt=document.createTextNode(""),new Vt(qt).observe(Nt,{characterData:!0}),function(){Nt.data=Gt=!Gt}):Wt&&Wt.resolve?(It=Wt.resolve(void 0),Ft=It.then,function(){Ft.call(It,qt)}):function(){Bt.call(m,qt)});function Jt(e){var n,r;this.promise=new e(function(e,t){if(void 0!==n||void 0!==r)throw TypeError("Bad Promise constructor");n=e,r=t}),this.resolve=Qe(n),this.reject=Qe(r)}function Yt(e,t){if(v(e),a(t)&&t.constructor===e)return t;var n=tn.f(e);return(0,n.resolve)(t),n.promise}function Qt(e){try{return{error:!1,value:e()}}catch(e){return{error:!0,value:e}}}var Zt,$t,en=Xt||function(e){var t={fn:e,next:void 0};Ct&&(Ct.next=t),Ht||(Ht=t,At()),Ct=t},tn={f:function(e){return new Jt(e)}},nn=m.process,rn=nn&&nn.versions,on=rn&&rn.v8;on?$t=(Zt=on.split("."))[0]+Zt[1]:St&&(!(Zt=St.match(/Edge\/(\d+)/))||74<=Zt[1])&&(Zt=St.match(/Chrome\/(\d+)/))&&($t=Zt[1]);function an(e){var t;return!(!a(e)||"function"!=typeof(t=e.then))&&t}function cn(f,d,p){if(!d.notified){d.notified=!0;var v=d.reactions;en(function(){for(var e=d.value,t=1==d.state,n=0;v.length>n;){var r,o,i,a=v[n++],c=t?a.ok:a.fail,u=a.resolve,s=a.reject,l=a.domain;try{c?(t||(2===d.rejection&&Bn(f,d),d.rejection=1),!0===c?r=e:(l&&l.enter(),r=c(e),l&&(l.exit(),i=!0)),r===a.promise?s(Mn("Promise-chain cycle")):(o=an(r))?o.call(r,u,s):u(r)):s(e)}catch(e){l&&!i&&l.exit(),s(e)}}d.reactions=[],d.notified=!1,p&&!d.rejection&&Rn(f,d)})}}function un(e,t,n){var r,o;Gn?((r=xn.createEvent("Event")).promise=t,r.reason=n,r.initEvent(e,!1,!0),m.dispatchEvent(r)):r={promise:t,reason:n},(o=m["on"+e])?o(r):e===Nn&&function(e,t){var n=m.console;n&&n.error&&(1===arguments.length?n.error(e):n.error(e,t))}("Unhandled promise rejection",n)}function sn(t,n,r,o){return function(e){t(n,r,e,o)}}function ln(e,t,n,r){t.done||(t.done=!0,r&&(t=r),t.value=n,t.state=2,cn(e,t,!0))}var fn,dn,pn,vn,hn,gn,yn,mn,bn,wn=$t&&+$t,Sn=Rt.set,Ln=ce("species"),_n="Promise",En=se.get,jn=se.set,Tn=se.getterFor(_n),On=et,Mn=m.TypeError,xn=m.document,kn=m.process,Pn=I("inspectSource"),qn=$("fetch"),Hn=tn.f,Cn=Hn,An="process"==i(kn),Gn=!!(xn&&xn.createEvent&&m.dispatchEvent),Nn="unhandledrejection",In=xe(_n,function(){var e=Pn(On)!==String(On);if(66===wn)return!0;if(!e&&!An&&"function"!=typeof PromiseRejectionEvent)return!0;if(51<=wn&&/native code/.test(On))return!1;function t(e){e(function(){},function(){})}var n=On.resolve(1);return(n.constructor={})[Ln]=t,!(n.then(function(){})instanceof t)}),Fn=In||!function(e,t){if(!t&&!lt)return!1;var n=!1;try{var r={};r[st]=function(){return{next:function(){return{done:n=!0}}}},e(r)}catch(e){}return n}(function(e){On.all(e).catch(function(){})}),Rn=function(n,r){Sn.call(m,function(){var e,t=r.value;if(Dn(r)&&(e=Qt(function(){An?kn.emit("unhandledRejection",t,n):un(Nn,n,t)}),r.rejection=An||Dn(r)?2:1,e.error))throw e.value})},Dn=function(e){return 1!==e.rejection&&!e.parent},Bn=function(e,t){Sn.call(m,function(){An?kn.emit("rejectionHandled",e):un("rejectionhandled",e,t.value)})},Vn=function(n,r,e,t){if(!r.done){r.done=!0,t&&(r=t);try{if(n===e)throw Mn("Promise can't be resolved itself");var o=an(e);o?en(function(){var t={done:!1};try{o.call(e,sn(Vn,n,t,r),sn(ln,n,t,r))}catch(e){ln(n,t,e,r)}}):(r.value=e,r.state=1,cn(n,r,!1))}catch(e){ln(n,{done:!1},e,r)}}};In&&(On=function(e){!function(e,t,n){if(!(e instanceof t))throw TypeError("Incorrect "+(n?n+" ":"")+"invocation")}(this,On,_n),Qe(e),fn.call(this);var t=En(this);try{e(sn(Vn,this,t),sn(ln,this,t))}catch(e){ln(this,t,e)}},(fn=function(){jn(this,{type:_n,done:!1,notified:!1,parent:!1,reactions:[],rejection:!1,state:0,value:void 0})}).prototype=function(e,t,n){for(var r in t)le(e,r,t[r],n);return e}(On.prototype,{then:function(e,t){var n=Tn(this),r=Hn(function(e,t){var n,r=v(e).constructor;return void 0===r||null==(n=v(r)[wt])?t:Qe(n)}(this,On));return r.ok="function"!=typeof e||e,r.fail="function"==typeof t&&t,r.domain=An?kn.domain:void 0,n.parent=!0,n.reactions.push(r),0!=n.state&&cn(this,n,!1),r.promise},catch:function(e){return this.then(void 0,e)}}),dn=function(){var e=new fn,t=En(e);this.promise=e,this.resolve=sn(Vn,e,t),this.reject=sn(ln,e,t)},tn.f=Hn=function(e){return e===On||e===pn?new dn(e):Cn(e)},"function"==typeof et&&(vn=et.prototype.then,le(et.prototype,"then",function(e,t){var n=this;return new On(function(e,t){vn.call(n,e,t)}).then(e,t)},{unsafe:!0}),"function"==typeof qn&&ae({global:!0,enumerable:!0,forced:!0},{fetch:function(e){return Yt(On,qn.apply(m,arguments))}}))),ae({global:!0,wrap:!0,forced:In},{Promise:On}),yn=!(gn=_n),(hn=On)&&!s(hn=yn?hn:hn.prototype,nt)&&tt(hn,nt,{configurable:!0,value:gn}),mn=$(_n),bn=C.f,b&&mn&&!mn[rt]&&bn(mn,rt,{configurable:!0,get:function(){return this}}),pn=$(_n),ae({target:_n,stat:!0,forced:In},{reject:function(e){var t=Hn(this);return t.reject.call(void 0,e),t.promise}}),ae({target:_n,stat:!0,forced:In},{resolve:function(e){return Yt(this,e)}}),ae({target:_n,stat:!0,forced:Fn},{all:function(e){var c=this,t=Hn(c),u=t.resolve,s=t.reject,n=Qt(function(){var r=Qe(c.resolve),o=[],i=0,a=1;ut(e,function(e){var t=i++,n=!1;o.push(void 0),a++,r.call(c,e).then(function(e){n||(n=!0,o[t]=e,--a||u(o))},s)}),--a||u(o)});return n.error&&s(n.value),t.promise},race:function(e){var n=this,r=Hn(n),o=r.reject,t=Qt(function(){var t=Qe(n.resolve);ut(e,function(e){t.call(n,e).then(r.resolve,o)})});return t.error&&o(t.value),r.promise}});function zn(e){if(function(e){var t;return a(e)&&(void 0!==(t=e[Wn])?!!t:"RegExp"==i(e))}(e))throw TypeError("The method doesn't accept regular expressions");return e}var Wn=ce("match"),Un=ce("match");ae({target:"String",proto:!0,forced:!function(t){var n=/./;try{"/./"[t](n)}catch(e){try{return n[Un]=!1,"/./"[t](n)}catch(e){}}return!1}("includes")},{includes:function(e,t){return!!~String(w(this)).indexOf(zn(e),1<arguments.length?t:void 0)}});function Kn(e,t){var n;return or(e)&&("function"!=typeof(n=e.constructor)||n!==Array&&!or(n.prototype)?a(n)&&null===(n=n[ir])&&(n=void 0):n=void 0),new(void 0===n?Array:n)(0===t?0:t)}function Xn(p){var v=1==p,h=2==p,g=3==p,y=4==p,m=6==p,b=5==p||m;return function(e,t,n,r){for(var o,i,a=function(e){return Object(w(e))}(e),c=T(a),u=Ze(t,n,3),s=te(c.length),l=0,f=r||Kn,d=v?f(e,s):h?f(e,0):void 0;l<s;l++)if((b||l in c)&&(i=u(o=c[l],l,a),p))if(v)d[l]=i;else if(i)switch(p){case 3:return!0;case 5:return o;case 6:return l;case 2:ar.call(d,o)}else if(y)return!1;return m?-1:g||y?y:d}}var Jn,Yn,Qn,Zn,$n,er={state:{integrationStatus:neveGutenbergHelper.integrationStatus,titleMeta:neveGutenbergHelper.neve_meta_disable_title,postMeta:neveGutenbergHelper.metaStatus,sidebarPosition:neveGutenbergHelper.neve_meta_sidebar||neveGutenbergHelper.sidebarSetup,containerSetup:neveGutenbergHelper.neve_meta_container||neveGutenbergHelper.containerSetup},setState:function(e,t){this.state[e]=t},getState:function(e){return this.state[e]||null},toggleState:function(e){this.state[e]="enabled"===this.state[e]?"disabled":"enabled"}},tr=function(){if(document.getElementsByClassName("edit-post-more-menu__content").length<=0)return!1;Jn=er.getState("integrationStatus");var e=document.querySelector(".edit-post-more-menu__content .components-menu-group:first-of-type div:not(.components-menu-group__label) button:last-child");(Yn=document.createElement("button")).classList.add("components-button","components-icon-button","components-menu-item__button"),Yn.innerHTML='<svg style="display: none;" aria-hidden="true" role="img" focusable="false" class="dashicon dashicons-yes" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M14.83 4.89l1.34.94-5.81 8.38H9.02L5.78 9.67l1.34-1.25 2.57 2.4z"></path></svg><span class="components-menu-item__info-wrapper">'+neveGutenbergHelper.strings.menuItemTitle+"</span>","enabled"===Jn&&(Yn.classList.add("has-icon"),Yn.querySelector("svg").style.display="block"),Yn.addEventListener("click",function(e){er.toggleState("integrationStatus"),new Promise(function(e,t){var n=neveGutenbergHelper.integrationEndpoint,r=new XMLHttpRequest;r.open("POST",n,!0),r.setRequestHeader("X-WP-Nonce",neveGutenbergHelper.nonce),r.setRequestHeader("Content-Type","application/json; charset=UTF-8"),r.onload=function(){200===r.status&&4===r.readyState?e(r.responseText):t({status:this.status,statusText:this.statusText})},r.send(JSON.stringify({neve_gutenberg_integration:er.state.integrationStatus}))}).then(function(){var e=Yn.querySelector("svg");if("none"===e.style.display?e.style.display="block":e.style.display="none",Yn.classList.toggle("has-icon"),""!==wp.data.select("core/editor").getEditedPostAttribute("template"))return!1;rr()})}),e.parentNode.insertBefore(Yn,e.nextSibling)},nr=function(){if(null===(Qn=document.querySelector(".editor-page-attributes__template select")))return!1;Qn.addEventListener("change",function(e){if(""===e.target.value)return"disabled"===er.getState("integrationStatus")||rr(!0),!1;rr(!1)})},rr=function(e){null===e&&(e="toggle");var t=document.querySelector(".editor-styles-wrapper");return!1===e?(t.classList.remove("neve-gtb"),!1):!0===e?(t.classList.add("neve-gtb"),!1):void t.classList.toggle("neve-gtb")},or=Array.isArray||function(e){return"Array"==i(e)},ir=ce("species"),ar=[].push,cr={forEach:Xn(0),map:Xn(1),filter:Xn(2),some:Xn(3),every:Xn(4),find:Xn(5),findIndex:Xn(6)}.forEach,ur=($n=[]["forEach"])&&r(function(){$n.call(null,Zn||function(){throw 1},1)})?[].forEach:function(e,t){return cr(this,e,1<arguments.length?t:void 0)};for(var sr in{CSSRuleList:0,CSSStyleDeclaration:0,CSSValueList:0,ClientRectList:0,DOMRectList:0,DOMStringList:0,DOMTokenList:1,DataTransferItemList:0,FileList:0,HTMLAllCollection:0,HTMLCollection:0,HTMLFormElement:0,HTMLSelectElement:0,MediaList:0,MimeTypeArray:0,NamedNodeMap:0,NodeList:1,PaintRequestList:0,Plugin:0,PluginArray:0,SVGLengthList:0,SVGNumberList:0,SVGPathSegList:0,SVGPointList:0,SVGStringList:0,SVGTransformList:0,SourceBufferList:0,StyleSheetList:0,TextTrackCueList:0,TextTrackList:0,TouchList:0}){var lr=m[sr],fr=lr&&lr.prototype;if(fr&&fr.forEach!==ur)try{A(fr,"forEach",ur)}catch(e){fr.forEach=ur}}function dr(){!function(){nr();var e=new MutationObserver(function(e){!function(e,t){for(var n=0;n<e.length;n++)t(e[n])}(e,function(e){e.target.className.includes("edit-post-more-menu")&&tr(),(e.target.classList.contains("components-panel__body")||e.target.classList.contains("edit-post-meta-boxes-area__container"))&&nr()})}),t=document.getElementsByClassName("edit-post-layout");e.observe(t[0],{childList:!0,subtree:!0})}(),pr(),vr(),hr(),mr(),wr(),Sr()}var pr=function(){var e=document.createElement("style");e.classList.add("neve-live-css"),document.body.appendChild(e)},vr=function(){var e=document.querySelector(".editor-styles-wrapper"),t=document.querySelector(".editor-writing-flow > div:not(.wp-block)"),n=document.querySelector(".editor-writing-flow > div > div"),r=er.getState("titleMeta"),o=er.getState("postMeta");"enabled"===er.getState("integrationStatus")&&""===wp.data.select("core/editor").getEditedPostAttribute("template")&&e.classList.add("neve-gtb"),t.classList.add("neve-content-wrap"),n.classList.add("neve-blocks-wrap"),"enabled"===o&&e.classList.add("neve-has-meta"),"on"===r&&(document.getElementsByClassName("editor-post-title")[0].style.display="none")},hr=function(){var e=er.getState("sidebarPosition");gr(e)},gr=function(e){var t=document.querySelector(".editor-writing-flow > div:not(.wp-block)"),n=document.querySelector(".editor-styles-wrapper"),r=yr(e);switch(n.classList.remove("has-sidebar-left","has-sidebar-right","has-sidebar-full-width"),n.classList.add("has-sidebar-"+e),e){case"right":t.appendChild(r);break;case"left":t.insertBefore(r,t.firstChild)}return!1},yr=function(e){var t=document.createElement("div");return t.classList.add("neve-gtb-sidebar",e),t.innerHTML="<p>"+neveGutenbergHelper.strings.sidebar+"</p>",t},mr=function(){var e=er.getState("containerSetup");br(e)},br=function(e){var t=document.querySelector(".editor-styles-wrapper");switch(e){default:case"contained":t.classList.remove("container-fluid"),t.classList.add("container");break;case"full-width":t.classList.remove("container"),t.classList.add("container-fluid")}return!1},wr=function(){var t=document.querySelector(".editor-styles-wrapper"),e=document.querySelector("#neve-page-settings  #neve_meta_disable_title");null!==e&&e.addEventListener("change",function(){var e=t.querySelector(".editor-post-title");return"none"===e.style.display?!(e.style.display="block"):!(e.style.display="none")}),document.querySelectorAll("#neve-page-settings input[name=neve_meta_sidebar]").forEach(function(e){e.addEventListener("change",function(e){var t=e.target.value;"default"===t&&(t=neveGutenbergHelper.sidebarSetup);var n=document.querySelectorAll(".neve-gtb-sidebar");return Array.prototype.forEach.call(n,function(e){e.parentNode.removeChild(e)}),gr(t),!1})}),document.querySelectorAll("#neve-page-settings input[name=neve_meta_container]").forEach(function(e){e.addEventListener("change",function(e){var t=e.target.value;return"default"===t&&(t=neveGutenbergHelper.containerSetup),br(t),!1})}),document.querySelector("#neve-page-settings input[name=neve_meta_enable_content_width]").addEventListener("change",function(e){if(!0===e.target.checked)return Lr(),!1;document.querySelector(".neve-live-css").innerHTML=""}),document.querySelector("#neve-page-settings #neve_meta_content_width").addEventListener("input",function(e){var t=e.target.value;return Lr(t),!1}),document.querySelector("#neve-page-settings #neve_meta_content_width-range").addEventListener("input",function(e){var t=e.target.value;return Lr(t),!1})},Sr=function(){return"on"!==neveGutenbergHelper.neve_meta_enable_content_width||Lr(),!1},Lr=function(e){return e=e||document.querySelector("#neve-page-settings input[name=neve_meta_content_width]").value,document.querySelector(".neve-live-css").innerHTML="@media(min-width: 960px) { .neve-gtb.has-sidebar-full-width .neve-blocks-wrap > .editor-block-list__layout > .wp-block:not([data-align=full]):not([data-align=wide]) > *,.neve-gtb.has-sidebar-full-width .neve-blocks-wrap .wp-block.editor-post-title__block > div,.neve-gtb.has-sidebar-left .neve-blocks-wrap,.neve-gtb.has-sidebar-right .neve-blocks-wrap { max-width: "+e+"% !important; } "+function(e){var t=window.getComputedStyle(document.querySelector(".neve-content-wrap")).width,n=e/100*window.getComputedStyle(document.querySelector(".wp-block.editor-post-title__block")).width,r=(t-n)/5,o=Math.floor(n+2*r);return 0!==o?".wp-block[data-align=wide] { max-width:"+o+"px;}":""}(e)+"}",!1};window.addEventListener("DOMContentLoaded",function(){dr()})}();