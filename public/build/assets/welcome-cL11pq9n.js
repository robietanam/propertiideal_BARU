function vr(t,n){for(var e=0;e<n.length;e++){var r=n[e];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function lr(t,n,e){return n&&vr(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),t}/*!
 * Splide.js
 * Version  : 4.1.4
 * License  : MIT
 * Copyright: 2022 Naotoshi Fujita
 */var tn="(prefers-reduced-motion: reduce)",Ot=1,dr=2,Pt=3,Mt=4,Kt=5,ie=6,se=7,Er={CREATED:Ot,MOUNTED:dr,IDLE:Pt,MOVING:Mt,SCROLLING:Kt,DRAGGING:ie,DESTROYED:se};function Et(t){t.length=0}function _t(t,n,e){return Array.prototype.slice.call(t,n,e)}function W(t){return t.bind.apply(t,[null].concat(_t(arguments,1)))}var bn=setTimeout,Oe=function(){};function en(t){return requestAnimationFrame(t)}function de(t,n){return typeof n===t}function zt(t){return!xe(t)&&de("object",t)}var $e=Array.isArray,Nn=W(de,"function"),ht=W(de,"string"),qt=W(de,"undefined");function xe(t){return t===null}function pn(t){try{return t instanceof(t.ownerDocument.defaultView||window).HTMLElement}catch{return!1}}function Zt(t){return $e(t)?t:[t]}function nt(t,n){Zt(t).forEach(n)}function Fe(t,n){return t.indexOf(n)>-1}function ae(t,n){return t.push.apply(t,Zt(n)),t}function vt(t,n,e){t&&nt(n,function(r){r&&t.classList[e?"add":"remove"](r)})}function ut(t,n){vt(t,ht(n)?n.split(" "):n,!0)}function Jt(t,n){nt(n,t.appendChild.bind(t))}function Ge(t,n){nt(t,function(e){var r=(n||e).parentNode;r&&r.insertBefore(e,n)})}function Ut(t,n){return pn(t)&&(t.msMatchesSelector||t.matches).call(t,n)}function Rn(t,n){var e=t?_t(t.children):[];return n?e.filter(function(r){return Ut(r,n)}):e}function jt(t,n){return n?Rn(t,n)[0]:t.firstElementChild}var kt=Object.keys;function Lt(t,n,e){return t&&(e?kt(t).reverse():kt(t)).forEach(function(r){r!=="__proto__"&&n(t[r],r)}),t}function Bt(t){return _t(arguments,1).forEach(function(n){Lt(n,function(e,r){t[r]=n[r]})}),t}function gt(t){return _t(arguments,1).forEach(function(n){Lt(n,function(e,r){$e(e)?t[r]=e.slice():zt(e)?t[r]=gt({},zt(t[r])?t[r]:{},e):t[r]=e})}),t}function nn(t,n){nt(n||kt(t),function(e){delete t[e]})}function st(t,n){nt(t,function(e){nt(n,function(r){e&&e.removeAttribute(r)})})}function F(t,n,e){zt(n)?Lt(n,function(r,a){F(t,a,r)}):nt(t,function(r){xe(e)||e===""?st(r,n):r.setAttribute(n,String(e))})}function Dt(t,n,e){var r=document.createElement(t);return n&&(ht(n)?ut(r,n):F(r,n)),e&&Jt(e,r),r}function it(t,n,e){if(qt(e))return getComputedStyle(t)[n];xe(e)||(t.style[n]=""+e)}function Wt(t,n){it(t,"display",n)}function On(t){t.setActive&&t.setActive()||t.focus({preventScroll:!0})}function at(t,n){return t.getAttribute(n)}function rn(t,n){return t&&t.classList.contains(n)}function tt(t){return t.getBoundingClientRect()}function It(t){nt(t,function(n){n&&n.parentNode&&n.parentNode.removeChild(n)})}function Dn(t){return jt(new DOMParser().parseFromString(t,"text/html").body)}function ft(t,n){t.preventDefault(),n&&(t.stopPropagation(),t.stopImmediatePropagation())}function wn(t,n){return t&&t.querySelector(n)}function ze(t,n){return n?_t(t.querySelectorAll(n)):[]}function lt(t,n){vt(t,n,!1)}function De(t){return t.timeStamp}function St(t){return ht(t)?t:t?t+"px":""}var Qt="splide",Ue="data-"+Qt;function Ft(t,n){if(!t)throw new Error("["+Qt+"] "+(n||""))}var mt=Math.min,ce=Math.max,fe=Math.floor,Ht=Math.ceil,j=Math.abs;function Pn(t,n,e){return j(t-n)<e}function oe(t,n,e,r){var a=mt(n,e),c=ce(n,e);return r?a<t&&t<c:a<=t&&t<=c}function pt(t,n,e){var r=mt(n,e),a=ce(n,e);return mt(ce(r,t),a)}function we(t){return+(t>0)-+(t<0)}function Pe(t,n){return nt(n,function(e){t=t.replace("%s",""+e)}),t}function ke(t){return t<10?"0"+t:""+t}var an={};function gr(t){return""+t+ke(an[t]=(an[t]||0)+1)}function Cn(){var t=[];function n(i,s,u,f){a(i,s,function(o,m,d){var E="addEventListener"in o,v=E?o.removeEventListener.bind(o,m,u,f):o.removeListener.bind(o,u);E?o.addEventListener(m,u,f):o.addListener(u),t.push([o,m,d,u,v])})}function e(i,s,u){a(i,s,function(f,o,m){t=t.filter(function(d){return d[0]===f&&d[1]===o&&d[2]===m&&(!u||d[3]===u)?(d[4](),!1):!0})})}function r(i,s,u){var f,o=!0;return typeof CustomEvent=="function"?f=new CustomEvent(s,{bubbles:o,detail:u}):(f=document.createEvent("CustomEvent"),f.initCustomEvent(s,o,!1,u)),i.dispatchEvent(f),f}function a(i,s,u){nt(i,function(f){f&&nt(s,function(o){o.split(" ").forEach(function(m){var d=m.split(".");u(f,d[0],d[1])})})})}function c(){t.forEach(function(i){i[4]()}),Et(t)}return{bind:n,unbind:e,dispatch:r,destroy:c}}var Nt="mounted",on="ready",At="move",te="moved",Mn="click",hr="active",mr="inactive",Ar="visible",_r="hidden",q="refresh",Q="updated",Yt="resize",Be="resized",yr="drag",Tr="dragging",Sr="dragged",We="scroll",Vt="scrolled",Lr="overflow",Vn="destroy",Ir="arrows:mounted",br="arrows:updated",Nr="pagination:mounted",pr="pagination:updated",$n="navigation:mounted",xn="autoplay:play",Rr="autoplay:playing",Fn="autoplay:pause",Gn="lazyload:loaded",zn="sk",Un="sh",ve="ei";function X(t){var n=t?t.event.bus:document.createDocumentFragment(),e=Cn();function r(c,i){e.bind(n,Zt(c).join(" "),function(s){i.apply(i,$e(s.detail)?s.detail:[])})}function a(c){e.dispatch(n,c,_t(arguments,1))}return t&&t.event.on(Vn,e.destroy),Bt(e,{bus:n,on:r,off:W(e.unbind,n),emit:a})}function Ee(t,n,e,r){var a=Date.now,c,i=0,s,u=!0,f=0;function o(){if(!u){if(i=t?mt((a()-c)/t,1):1,e&&e(i),i>=1&&(n(),c=a(),r&&++f>=r))return d();s=en(o)}}function m(A){A||v(),c=a()-(A?i*t:0),u=!1,s=en(o)}function d(){u=!0}function E(){c=a(),i=0,e&&e(i)}function v(){s&&cancelAnimationFrame(s),i=0,s=0,u=!0}function l(A){t=A}function _(){return u}return{start:m,rewind:E,pause:d,cancel:v,set:l,isPaused:_}}function Or(t){var n=t;function e(a){n=a}function r(a){return Fe(Zt(a),n)}return{set:e,is:r}}function Dr(t,n){var e=Ee(0,t,null,1);return function(){e.isPaused()&&e.start()}}function wr(t,n,e){var r=t.state,a=e.breakpoints||{},c=e.reducedMotion||{},i=Cn(),s=[];function u(){var v=e.mediaQuery==="min";kt(a).sort(function(l,_){return v?+l-+_:+_-+l}).forEach(function(l){o(a[l],"("+(v?"min":"max")+"-width:"+l+"px)")}),o(c,tn),m()}function f(v){v&&i.destroy()}function o(v,l){var _=matchMedia(l);i.bind(_,"change",m),s.push([v,_])}function m(){var v=r.is(se),l=e.direction,_=s.reduce(function(A,h){return gt(A,h[1].matches?h[0]:{})},{});nn(e),E(_),e.destroy?t.destroy(e.destroy==="completely"):v?(f(!0),t.mount()):l!==e.direction&&t.refresh()}function d(v){matchMedia(tn).matches&&(v?gt(e,c):nn(e,kt(c)))}function E(v,l,_){gt(e,v),l&&gt(Object.getPrototypeOf(e),v),(_||!r.is(Ot))&&t.emit(Q,e)}return{setup:u,destroy:f,reduce:d,set:E}}var ge="Arrow",he=ge+"Left",me=ge+"Right",kn=ge+"Up",Bn=ge+"Down",un="rtl",Ae="ttb",be={width:["height"],left:["top","right"],right:["bottom","left"],x:["y"],X:["Y"],Y:["X"],ArrowLeft:[kn,me],ArrowRight:[Bn,he]};function Pr(t,n,e){function r(c,i,s){s=s||e.direction;var u=s===un&&!i?1:s===Ae?0:-1;return be[c]&&be[c][u]||c.replace(/width|left|right/i,function(f,o){var m=be[f.toLowerCase()][u]||f;return o>0?m.charAt(0).toUpperCase()+m.slice(1):m})}function a(c){return c*(e.direction===un?1:-1)}return{resolve:r,orient:a}}var dt="role",wt="tabindex",Cr="disabled",ot="aria-",ee=ot+"controls",Wn=ot+"current",sn=ot+"selected",et=ot+"label",He=ot+"labelledby",Hn=ot+"hidden",Ye=ot+"orientation",Xt=ot+"roledescription",cn=ot+"live",fn=ot+"busy",vn=ot+"atomic",Xe=[dt,wt,Cr,ee,Wn,et,He,Hn,Ye,Xt],ct=Qt+"__",yt="is-",Ne=Qt,ln=ct+"track",Mr=ct+"list",_e=ct+"slide",Yn=_e+"--clone",Vr=_e+"__container",Ke=ct+"arrows",ye=ct+"arrow",Xn=ye+"--prev",Kn=ye+"--next",Te=ct+"pagination",qn=Te+"__page",$r=ct+"progress",xr=$r+"__bar",Fr=ct+"toggle",Gr=ct+"spinner",zr=ct+"sr",Ur=yt+"initialized",bt=yt+"active",Zn=yt+"prev",Jn=yt+"next",Ce=yt+"visible",Me=yt+"loading",jn=yt+"focus-in",Qn=yt+"overflow",kr=[bt,Ce,Zn,Jn,Me,jn,Qn],Br={slide:_e,clone:Yn,arrows:Ke,arrow:ye,prev:Xn,next:Kn,pagination:Te,page:qn,spinner:Gr};function Wr(t,n){if(Nn(t.closest))return t.closest(n);for(var e=t;e&&e.nodeType===1&&!Ut(e,n);)e=e.parentElement;return e}var Hr=5,dn=200,tr="touchstart mousedown",pe="touchmove mousemove",Re="touchend touchcancel mouseup click";function Yr(t,n,e){var r=X(t),a=r.on,c=r.bind,i=t.root,s=e.i18n,u={},f=[],o=[],m=[],d,E,v;function l(){g(),w(),h()}function _(){a(q,A),a(q,l),a(Q,h),c(document,tr+" keydown",function(y){v=y.type==="keydown"},{capture:!0}),c(i,"focusin",function(){vt(i,jn,!!v)})}function A(y){var R=Xe.concat("style");Et(f),lt(i,o),lt(d,m),st([d,E],R),st(i,y?R:["style",Xt])}function h(){lt(i,o),lt(d,m),o=C(Ne),m=C(ln),ut(i,o),ut(d,m),F(i,et,e.label),F(i,He,e.labelledby)}function g(){d=p("."+ln),E=jt(d,"."+Mr),Ft(d&&E,"A track/list element is missing."),ae(f,Rn(E,"."+_e+":not(."+Yn+")")),Lt({arrows:Ke,pagination:Te,prev:Xn,next:Kn,bar:xr,toggle:Fr},function(y,R){u[R]=p("."+y)}),Bt(u,{root:i,track:d,list:E,slides:f})}function w(){var y=i.id||gr(Qt),R=e.role;i.id=y,d.id=d.id||y+"-track",E.id=E.id||y+"-list",!at(i,dt)&&i.tagName!=="SECTION"&&R&&F(i,dt,R),F(i,Xt,s.carousel),F(E,dt,"presentation")}function p(y){var R=wn(i,y);return R&&Wr(R,"."+Ne)===i?R:void 0}function C(y){return[y+"--"+e.type,y+"--"+e.direction,e.drag&&y+"--draggable",e.isNavigation&&y+"--nav",y===Ne&&bt]}return Bt(u,{setup:l,mount:_,destroy:A})}var Ct="slide",$t="loop",ne="fade";function Xr(t,n,e,r){var a=X(t),c=a.on,i=a.emit,s=a.bind,u=t.Components,f=t.root,o=t.options,m=o.isNavigation,d=o.updateOnMove,E=o.i18n,v=o.pagination,l=o.slideFocus,_=u.Direction.resolve,A=at(r,"style"),h=at(r,et),g=e>-1,w=jt(r,"."+Vr),p;function C(){g||(r.id=f.id+"-slide"+ke(n+1),F(r,dt,v?"tabpanel":"group"),F(r,Xt,E.slide),F(r,et,h||Pe(E.slideLabel,[n+1,t.length]))),y()}function y(){s(r,"click",W(i,Mn,V)),s(r,"keydown",W(i,zn,V)),c([te,Un,Vt],L),c($n,G),d&&c(At,P)}function R(){p=!0,a.destroy(),lt(r,kr),st(r,Xe),F(r,"style",A),F(r,et,h||"")}function G(){var D=t.splides.map(function(T){var O=T.splide.Components.Slides.getAt(n);return O?O.slide.id:""}).join(" ");F(r,et,Pe(E.slideX,(g?e:n)+1)),F(r,ee,D),F(r,dt,l?"button":""),l&&st(r,Xt)}function P(){p||L()}function L(){if(!p){var D=t.index;I(),b(),vt(r,Zn,n===D-1),vt(r,Jn,n===D+1)}}function I(){var D=M();D!==rn(r,bt)&&(vt(r,bt,D),F(r,Wn,m&&D||""),i(D?hr:mr,V))}function b(){var D=U(),T=!D&&(!M()||g);if(t.state.is([Mt,Kt])||F(r,Hn,T||""),F(ze(r,o.focusableNodes||""),wt,T?-1:""),l&&F(r,wt,T?-1:0),D!==rn(r,Ce)&&(vt(r,Ce,D),i(D?Ar:_r,V)),!D&&document.activeElement===r){var O=u.Slides.getAt(t.index);O&&On(O.slide)}}function $(D,T,O){it(O&&w||r,D,T)}function M(){var D=t.index;return D===n||o.cloneStatus&&D===e}function U(){if(t.is(ne))return M();var D=tt(u.Elements.track),T=tt(r),O=_("left",!0),z=_("right",!0);return fe(D[O])<=Ht(T[O])&&fe(T[z])<=Ht(D[z])}function k(D,T){var O=j(D-n);return!g&&(o.rewind||t.is($t))&&(O=mt(O,t.length-O)),O<=T}var V={index:n,slideIndex:e,slide:r,container:w,isClone:g,mount:C,destroy:R,update:L,style:$,isWithin:k};return V}function Kr(t,n,e){var r=X(t),a=r.on,c=r.emit,i=r.bind,s=n.Elements,u=s.slides,f=s.list,o=[];function m(){d(),a(q,E),a(q,d)}function d(){u.forEach(function(L,I){l(L,I,-1)})}function E(){p(function(L){L.destroy()}),Et(o)}function v(){p(function(L){L.update()})}function l(L,I,b){var $=Xr(t,I,b,L);$.mount(),o.push($),o.sort(function(M,U){return M.index-U.index})}function _(L){return L?C(function(I){return!I.isClone}):o}function A(L){var I=n.Controller,b=I.toIndex(L),$=I.hasFocus()?1:e.perPage;return C(function(M){return oe(M.index,b,b+$-1)})}function h(L){return C(L)[0]}function g(L,I){nt(L,function(b){if(ht(b)&&(b=Dn(b)),pn(b)){var $=u[I];$?Ge(b,$):Jt(f,b),ut(b,e.classes.slide),R(b,W(c,Yt))}}),c(q)}function w(L){It(C(L).map(function(I){return I.slide})),c(q)}function p(L,I){_(I).forEach(L)}function C(L){return o.filter(Nn(L)?L:function(I){return ht(L)?Ut(I.slide,L):Fe(Zt(L),I.index)})}function y(L,I,b){p(function($){$.style(L,I,b)})}function R(L,I){var b=ze(L,"img"),$=b.length;$?b.forEach(function(M){i(M,"load error",function(){--$||I()})}):I()}function G(L){return L?u.length:o.length}function P(){return o.length>e.perPage}return{mount:m,destroy:E,update:v,register:l,get:_,getIn:A,getAt:h,add:g,remove:w,forEach:p,filter:C,style:y,getLength:G,isEnough:P}}function qr(t,n,e){var r=X(t),a=r.on,c=r.bind,i=r.emit,s=n.Slides,u=n.Direction.resolve,f=n.Elements,o=f.root,m=f.track,d=f.list,E=s.getAt,v=s.style,l,_,A;function h(){g(),c(window,"resize load",Dr(W(i,Yt))),a([Q,q],g),a(Yt,w)}function g(){l=e.direction===Ae,it(o,"maxWidth",St(e.width)),it(m,u("paddingLeft"),p(!1)),it(m,u("paddingRight"),p(!0)),w(!0)}function w(V){var D=tt(o);(V||_.width!==D.width||_.height!==D.height)&&(it(m,"height",C()),v(u("marginRight"),St(e.gap)),v("width",R()),v("height",G(),!0),_=D,i(Be),A!==(A=k())&&(vt(o,Qn,A),i(Lr,A)))}function p(V){var D=e.padding,T=u(V?"right":"left");return D&&St(D[T]||(zt(D)?0:D))||"0px"}function C(){var V="";return l&&(V=y(),Ft(V,"height or heightRatio is missing."),V="calc("+V+" - "+p(!1)+" - "+p(!0)+")"),V}function y(){return St(e.height||tt(d).width*e.heightRatio)}function R(){return e.autoWidth?null:St(e.fixedWidth)||(l?"":P())}function G(){return St(e.fixedHeight)||(l?e.autoHeight?null:P():y())}function P(){var V=St(e.gap);return"calc((100%"+(V&&" + "+V)+")/"+(e.perPage||1)+(V&&" - "+V)+")"}function L(){return tt(d)[u("width")]}function I(V,D){var T=E(V||0);return T?tt(T.slide)[u("width")]+(D?0:M()):0}function b(V,D){var T=E(V);if(T){var O=tt(T.slide)[u("right")],z=tt(d)[u("left")];return j(O-z)+(D?0:M())}return 0}function $(V){return b(t.length-1)-b(0)+I(0,V)}function M(){var V=E(0);return V&&parseFloat(it(V.slide,u("marginRight")))||0}function U(V){return parseFloat(it(m,u("padding"+(V?"Right":"Left"))))||0}function k(){return t.is(ne)||$(!0)>L()}return{mount:h,resize:w,listSize:L,slideSize:I,sliderSize:$,totalSize:b,getPadding:U,isOverflow:k}}var Zr=2;function Jr(t,n,e){var r=X(t),a=r.on,c=n.Elements,i=n.Slides,s=n.Direction.resolve,u=[],f;function o(){a(q,m),a([Q,Yt],E),(f=_())&&(v(f),n.Layout.resize(!0))}function m(){d(),o()}function d(){It(u),Et(u),r.destroy()}function E(){var A=_();f!==A&&(f<A||!A)&&r.emit(q)}function v(A){var h=i.get().slice(),g=h.length;if(g){for(;h.length<A;)ae(h,h);ae(h.slice(-A),h.slice(0,A)).forEach(function(w,p){var C=p<A,y=l(w.slide,p);C?Ge(y,h[0].slide):Jt(c.list,y),ae(u,y),i.register(y,p-A+(C?0:g),w.index)})}}function l(A,h){var g=A.cloneNode(!0);return ut(g,e.classes.clone),g.id=t.root.id+"-clone"+ke(h+1),g}function _(){var A=e.clones;if(!t.is($t))A=0;else if(qt(A)){var h=e[s("fixedWidth")]&&n.Layout.slideSize(0),g=h&&Ht(tt(c.track)[s("width")]/h);A=g||e[s("autoWidth")]&&t.length||e.perPage*Zr}return A}return{mount:o,destroy:d}}function jr(t,n,e){var r=X(t),a=r.on,c=r.emit,i=t.state.set,s=n.Layout,u=s.slideSize,f=s.getPadding,o=s.totalSize,m=s.listSize,d=s.sliderSize,E=n.Direction,v=E.resolve,l=E.orient,_=n.Elements,A=_.list,h=_.track,g;function w(){g=n.Transition,a([Nt,Be,Q,q],p)}function p(){n.Controller.isBusy()||(n.Scroll.cancel(),y(t.index),n.Slides.update())}function C(T,O,z,x){T!==O&&V(T>z)&&(L(),R(P($(),T>z),!0)),i(Mt),c(At,O,z,T),g.start(O,function(){i(Pt),c(te,O,z,T),x&&x()})}function y(T){R(b(T,!0))}function R(T,O){if(!t.is(ne)){var z=O?T:G(T);it(A,"transform","translate"+v("X")+"("+z+"px)"),T!==z&&c(Un)}}function G(T){if(t.is($t)){var O=I(T),z=O>n.Controller.getEnd(),x=O<0;(x||z)&&(T=P(T,z))}return T}function P(T,O){var z=T-k(O),x=d();return T-=l(x*(Ht(j(z)/x)||1))*(O?1:-1),T}function L(){R($(),!0),g.cancel()}function I(T){for(var O=n.Slides.get(),z=0,x=1/0,H=0;H<O.length;H++){var rt=O[H].index,S=j(b(rt,!0)-T);if(S<=x)x=S,z=rt;else break}return z}function b(T,O){var z=l(o(T-1)-U(T));return O?M(z):z}function $(){var T=v("left");return tt(A)[T]-tt(h)[T]+l(f(!1))}function M(T){return e.trimSpace&&t.is(Ct)&&(T=pt(T,0,l(d(!0)-m()))),T}function U(T){var O=e.focus;return O==="center"?(m()-u(T,!0))/2:+O*u(T)||0}function k(T){return b(T?n.Controller.getEnd():0,!!e.trimSpace)}function V(T){var O=l(P($(),T));return T?O>=0:O<=A[v("scrollWidth")]-tt(h)[v("width")]}function D(T,O){O=qt(O)?$():O;var z=T!==!0&&l(O)<l(k(!1)),x=T!==!1&&l(O)>l(k(!0));return z||x}return{mount:w,move:C,jump:y,translate:R,shift:P,cancel:L,toIndex:I,toPosition:b,getPosition:$,getLimit:k,exceededLimit:D,reposition:p}}function Qr(t,n,e){var r=X(t),a=r.on,c=r.emit,i=n.Move,s=i.getPosition,u=i.getLimit,f=i.toPosition,o=n.Slides,m=o.isEnough,d=o.getLength,E=e.omitEnd,v=t.is($t),l=t.is(Ct),_=W($,!1),A=W($,!0),h=e.start||0,g,w=h,p,C,y;function R(){G(),a([Q,q,ve],G),a(Be,P)}function G(){p=d(!0),C=e.perMove,y=e.perPage,g=V();var S=pt(h,0,E?g:p-1);S!==h&&(h=S,i.reposition())}function P(){g!==V()&&c(ve)}function L(S,B,J){if(!rt()){var K=b(S),Z=k(K);Z>-1&&(B||Z!==h)&&(z(Z),i.move(K,Z,w,J))}}function I(S,B,J,K){n.Scroll.scroll(S,B,J,function(){var Z=k(i.toIndex(s()));z(E?mt(Z,g):Z),K&&K()})}function b(S){var B=h;if(ht(S)){var J=S.match(/([+\-<>])(\d+)?/)||[],K=J[1],Z=J[2];K==="+"||K==="-"?B=M(h+ +(""+K+(+Z||1)),h):K===">"?B=Z?D(+Z):_(!0):K==="<"&&(B=A(!0))}else B=v?S:pt(S,0,g);return B}function $(S,B){var J=C||(H()?1:y),K=M(h+J*(S?-1:1),h,!(C||H()));return K===-1&&l&&!Pn(s(),u(!S),1)?S?0:g:B?K:k(K)}function M(S,B,J){if(m()||H()){var K=U(S);K!==S&&(B=S,S=K,J=!1),S<0||S>g?!C&&(oe(0,S,B,!0)||oe(g,B,S,!0))?S=D(T(S)):v?S=J?S<0?-(p%y||y):p:S:e.rewind?S=S<0?g:0:S=-1:J&&S!==B&&(S=D(T(B)+(S<B?-1:1)))}else S=-1;return S}function U(S){if(l&&e.trimSpace==="move"&&S!==h)for(var B=s();B===f(S,!0)&&oe(S,0,t.length-1,!e.rewind);)S<h?--S:++S;return S}function k(S){return v?(S+p)%p||0:S}function V(){for(var S=p-(H()||v&&C?1:y);E&&S-- >0;)if(f(p-1,!0)!==f(S,!0)){S++;break}return pt(S,0,p-1)}function D(S){return pt(H()?S:y*S,0,g)}function T(S){return H()?mt(S,g):fe((S>=g?p-1:S)/y)}function O(S){var B=i.toIndex(S);return l?pt(B,0,g):B}function z(S){S!==h&&(w=h,h=S)}function x(S){return S?w:h}function H(){return!qt(e.focus)||e.isNavigation}function rt(){return t.state.is([Mt,Kt])&&!!e.waitForTransition}return{mount:R,go:L,scroll:I,getNext:_,getPrev:A,getAdjacent:$,getEnd:V,setIndex:z,getIndex:x,toIndex:D,toPage:T,toDest:O,hasFocus:H,isBusy:rt}}var ti="http://www.w3.org/2000/svg",ei="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z",re=40;function ni(t,n,e){var r=X(t),a=r.on,c=r.bind,i=r.emit,s=e.classes,u=e.i18n,f=n.Elements,o=n.Controller,m=f.arrows,d=f.track,E=m,v=f.prev,l=f.next,_,A,h={};function g(){p(),a(Q,w)}function w(){C(),g()}function p(){var I=e.arrows;I&&!(v&&l)&&G(),v&&l&&(Bt(h,{prev:v,next:l}),Wt(E,I?"":"none"),ut(E,A=Ke+"--"+e.direction),I&&(y(),L(),F([v,l],ee,d.id),i(Ir,v,l)))}function C(){r.destroy(),lt(E,A),_?(It(m?[v,l]:E),v=l=null):st([v,l],Xe)}function y(){a([Nt,te,q,Vt,ve],L),c(l,"click",W(R,">")),c(v,"click",W(R,"<"))}function R(I){o.go(I,!0)}function G(){E=m||Dt("div",s.arrows),v=P(!0),l=P(!1),_=!0,Jt(E,[v,l]),!m&&Ge(E,d)}function P(I){var b='<button class="'+s.arrow+" "+(I?s.prev:s.next)+'" type="button"><svg xmlns="'+ti+'" viewBox="0 0 '+re+" "+re+'" width="'+re+'" height="'+re+'" focusable="false"><path d="'+(e.arrowPath||ei)+'" />';return Dn(b)}function L(){if(v&&l){var I=t.index,b=o.getPrev(),$=o.getNext(),M=b>-1&&I<b?u.last:u.prev,U=$>-1&&I>$?u.first:u.next;v.disabled=b<0,l.disabled=$<0,F(v,et,M),F(l,et,U),i(br,v,l,b,$)}}return{arrows:h,mount:g,destroy:C,update:L}}var ri=Ue+"-interval";function ii(t,n,e){var r=X(t),a=r.on,c=r.bind,i=r.emit,s=Ee(e.interval,t.go.bind(t,">"),y),u=s.isPaused,f=n.Elements,o=n.Elements,m=o.root,d=o.toggle,E=e.autoplay,v,l,_=E==="pause";function A(){E&&(h(),d&&F(d,ee,f.track.id),_||g(),C())}function h(){e.pauseOnHover&&c(m,"mouseenter mouseleave",function(G){v=G.type==="mouseenter",p()}),e.pauseOnFocus&&c(m,"focusin focusout",function(G){l=G.type==="focusin",p()}),d&&c(d,"click",function(){_?g():w(!0)}),a([At,We,q],s.rewind),a(At,R)}function g(){u()&&n.Slides.isEnough()&&(s.start(!e.resetProgress),l=v=_=!1,C(),i(xn))}function w(G){G===void 0&&(G=!0),_=!!G,C(),u()||(s.pause(),i(Fn))}function p(){_||(v||l?w(!1):g())}function C(){d&&(vt(d,bt,!_),F(d,et,e.i18n[_?"play":"pause"]))}function y(G){var P=f.bar;P&&it(P,"width",G*100+"%"),i(Rr,G)}function R(G){var P=n.Slides.getAt(G);s.set(P&&+at(P.slide,ri)||e.interval)}return{mount:A,destroy:s.cancel,play:g,pause:w,isPaused:u}}function ai(t,n,e){var r=X(t),a=r.on;function c(){e.cover&&(a(Gn,W(s,!0)),a([Nt,Q,q],W(i,!0)))}function i(u){n.Slides.forEach(function(f){var o=jt(f.container||f.slide,"img");o&&o.src&&s(u,o,f)})}function s(u,f,o){o.style("background",u?'center/cover no-repeat url("'+f.src+'")':"",!0),Wt(f,u?"none":"")}return{mount:c,destroy:W(i,!1)}}var oi=10,ui=600,si=.6,ci=1.5,fi=800;function vi(t,n,e){var r=X(t),a=r.on,c=r.emit,i=t.state.set,s=n.Move,u=s.getPosition,f=s.getLimit,o=s.exceededLimit,m=s.translate,d=t.is(Ct),E,v,l=1;function _(){a(At,w),a([Q,q],p)}function A(y,R,G,P,L){var I=u();if(w(),G&&(!d||!o())){var b=n.Layout.sliderSize(),$=we(y)*b*fe(j(y)/b)||0;y=s.toPosition(n.Controller.toDest(y%b))+$}var M=Pn(I,y,1);l=1,R=M?0:R||ce(j(y-I)/ci,fi),v=P,E=Ee(R,h,W(g,I,y,L),1),i(Kt),c(We),E.start()}function h(){i(Pt),v&&v(),c(Vt)}function g(y,R,G,P){var L=u(),I=y+(R-y)*C(P),b=(I-L)*l;m(L+b),d&&!G&&o()&&(l*=si,j(b)<oi&&A(f(o(!0)),ui,!1,v,!0))}function w(){E&&E.cancel()}function p(){E&&!E.isPaused()&&(w(),h())}function C(y){var R=e.easingFunc;return R?R(y):1-Math.pow(1-y,4)}return{mount:_,destroy:w,scroll:A,cancel:p}}var Rt={passive:!1,capture:!0};function li(t,n,e){var r=X(t),a=r.on,c=r.emit,i=r.bind,s=r.unbind,u=t.state,f=n.Move,o=n.Scroll,m=n.Controller,d=n.Elements.track,E=n.Media.reduce,v=n.Direction,l=v.resolve,_=v.orient,A=f.getPosition,h=f.exceededLimit,g,w,p,C,y,R=!1,G,P,L;function I(){i(d,pe,Oe,Rt),i(d,Re,Oe,Rt),i(d,tr,$,Rt),i(d,"click",k,{capture:!0}),i(d,"dragstart",ft),a([Nt,Q],b)}function b(){var N=e.drag;Qe(!N),C=N==="free"}function $(N){if(G=!1,!P){var Y=Z(N);K(N.target)&&(Y||!N.button)&&(m.isBusy()?ft(N,!0):(L=Y?d:window,y=u.is([Mt,Kt]),p=null,i(L,pe,M,Rt),i(L,Re,U,Rt),f.cancel(),o.cancel(),V(N)))}}function M(N){if(u.is(ie)||(u.set(ie),c(yr)),N.cancelable)if(y){f.translate(g+J(H(N)));var Y=rt(N)>dn,Tt=R!==(R=h());(Y||Tt)&&V(N),G=!0,c(Tr),ft(N)}else O(N)&&(y=T(N),ft(N))}function U(N){u.is(ie)&&(u.set(Pt),c(Sr)),y&&(D(N),ft(N)),s(L,pe,M),s(L,Re,U),y=!1}function k(N){!P&&G&&ft(N,!0)}function V(N){p=w,w=N,g=A()}function D(N){var Y=z(N),Tt=x(Y),xt=e.rewind&&e.rewindByDrag;E(!1),C?m.scroll(Tt,0,e.snap):t.is(ne)?m.go(_(we(Y))<0?xt?"<":"-":xt?">":"+"):t.is(Ct)&&R&&xt?m.go(h(!0)?">":"<"):m.go(m.toDest(Tt),!0),E(!0)}function T(N){var Y=e.dragMinThreshold,Tt=zt(Y),xt=Tt&&Y.mouse||0,fr=(Tt?Y.touch:+Y)||10;return j(H(N))>(Z(N)?fr:xt)}function O(N){return j(H(N))>j(H(N,!0))}function z(N){if(t.is($t)||!R){var Y=rt(N);if(Y&&Y<dn)return H(N)/Y}return 0}function x(N){return A()+we(N)*mt(j(N)*(e.flickPower||600),C?1/0:n.Layout.listSize()*(e.flickMaxPages||1))}function H(N,Y){return B(N,Y)-B(S(N),Y)}function rt(N){return De(N)-De(S(N))}function S(N){return w===N&&p||w}function B(N,Y){return(Z(N)?N.changedTouches[0]:N)["page"+l(Y?"Y":"X")]}function J(N){return N/(R&&t.is(Ct)?Hr:1)}function K(N){var Y=e.noDrag;return!Ut(N,"."+qn+", ."+ye)&&(!Y||!Ut(N,Y))}function Z(N){return typeof TouchEvent<"u"&&N instanceof TouchEvent}function cr(){return y}function Qe(N){P=N}return{mount:I,disable:Qe,isDragging:cr}}var di={Spacebar:" ",Right:me,Left:he,Up:kn,Down:Bn};function qe(t){return t=ht(t)?t:t.key,di[t]||t}var En="keydown";function Ei(t,n,e){var r=X(t),a=r.on,c=r.bind,i=r.unbind,s=t.root,u=n.Direction.resolve,f,o;function m(){d(),a(Q,E),a(Q,d),a(At,l)}function d(){var A=e.keyboard;A&&(f=A==="global"?window:s,c(f,En,_))}function E(){i(f,En)}function v(A){o=A}function l(){var A=o;o=!0,bn(function(){o=A})}function _(A){if(!o){var h=qe(A);h===u(he)?t.go("<"):h===u(me)&&t.go(">")}}return{mount:m,destroy:E,disable:v}}var Gt=Ue+"-lazy",ue=Gt+"-srcset",gi="["+Gt+"], ["+ue+"]";function hi(t,n,e){var r=X(t),a=r.on,c=r.off,i=r.bind,s=r.emit,u=e.lazyLoad==="sequential",f=[te,Vt],o=[];function m(){e.lazyLoad&&(d(),a(q,d))}function d(){Et(o),E(),u?A():(c(f),a(f,v),v())}function E(){n.Slides.forEach(function(h){ze(h.slide,gi).forEach(function(g){var w=at(g,Gt),p=at(g,ue);if(w!==g.src||p!==g.srcset){var C=e.classes.spinner,y=g.parentElement,R=jt(y,"."+C)||Dt("span",C,y);o.push([g,h,R]),g.src||Wt(g,"none")}})})}function v(){o=o.filter(function(h){var g=e.perPage*((e.preloadPages||1)+1)-1;return h[1].isWithin(t.index,g)?l(h):!0}),o.length||c(f)}function l(h){var g=h[0];ut(h[1].slide,Me),i(g,"load error",W(_,h)),F(g,"src",at(g,Gt)),F(g,"srcset",at(g,ue)),st(g,Gt),st(g,ue)}function _(h,g){var w=h[0],p=h[1];lt(p.slide,Me),g.type!=="error"&&(It(h[2]),Wt(w,""),s(Gn,w,p),s(Yt)),u&&A()}function A(){o.length&&l(o.shift())}return{mount:m,destroy:W(Et,o),check:v}}function mi(t,n,e){var r=X(t),a=r.on,c=r.emit,i=r.bind,s=n.Slides,u=n.Elements,f=n.Controller,o=f.hasFocus,m=f.getIndex,d=f.go,E=n.Direction.resolve,v=u.pagination,l=[],_,A;function h(){g(),a([Q,q,ve],h);var P=e.pagination;v&&Wt(v,P?"":"none"),P&&(a([At,We,Vt],G),w(),G(),c(Nr,{list:_,items:l},R(t.index)))}function g(){_&&(It(v?_t(_.children):_),lt(_,A),Et(l),_=null),r.destroy()}function w(){var P=t.length,L=e.classes,I=e.i18n,b=e.perPage,$=o()?f.getEnd()+1:Ht(P/b);_=v||Dt("ul",L.pagination,u.track.parentElement),ut(_,A=Te+"--"+y()),F(_,dt,"tablist"),F(_,et,I.select),F(_,Ye,y()===Ae?"vertical":"");for(var M=0;M<$;M++){var U=Dt("li",null,_),k=Dt("button",{class:L.page,type:"button"},U),V=s.getIn(M).map(function(T){return T.slide.id}),D=!o()&&b>1?I.pageX:I.slideX;i(k,"click",W(p,M)),e.paginationKeyboard&&i(k,"keydown",W(C,M)),F(U,dt,"presentation"),F(k,dt,"tab"),F(k,ee,V.join(" ")),F(k,et,Pe(D,M+1)),F(k,wt,-1),l.push({li:U,button:k,page:M})}}function p(P){d(">"+P,!0)}function C(P,L){var I=l.length,b=qe(L),$=y(),M=-1;b===E(me,!1,$)?M=++P%I:b===E(he,!1,$)?M=(--P+I)%I:b==="Home"?M=0:b==="End"&&(M=I-1);var U=l[M];U&&(On(U.button),d(">"+M),ft(L,!0))}function y(){return e.paginationDirection||e.direction}function R(P){return l[f.toPage(P)]}function G(){var P=R(m(!0)),L=R(m());if(P){var I=P.button;lt(I,bt),st(I,sn),F(I,wt,-1)}if(L){var b=L.button;ut(b,bt),F(b,sn,!0),F(b,wt,"")}c(pr,{list:_,items:l},P,L)}return{items:l,mount:h,destroy:g,getAt:R,update:G}}var Ai=[" ","Enter"];function _i(t,n,e){var r=e.isNavigation,a=e.slideFocus,c=[];function i(){t.splides.forEach(function(v){v.isParent||(f(t,v.splide),f(v.splide,t))}),r&&o()}function s(){c.forEach(function(v){v.destroy()}),Et(c)}function u(){s(),i()}function f(v,l){var _=X(v);_.on(At,function(A,h,g){l.go(l.is($t)?g:A)}),c.push(_)}function o(){var v=X(t),l=v.on;l(Mn,d),l(zn,E),l([Nt,Q],m),c.push(v),v.emit($n,t.splides)}function m(){F(n.Elements.list,Ye,e.direction===Ae?"vertical":"")}function d(v){t.go(v.index)}function E(v,l){Fe(Ai,qe(l))&&(d(v),ft(l))}return{setup:W(n.Media.set,{slideFocus:qt(a)?r:a},!0),mount:i,destroy:s,remount:u}}function yi(t,n,e){var r=X(t),a=r.bind,c=0;function i(){e.wheel&&a(n.Elements.track,"wheel",s,Rt)}function s(f){if(f.cancelable){var o=f.deltaY,m=o<0,d=De(f),E=e.wheelMinThreshold||0,v=e.wheelSleep||0;j(o)>E&&d-c>v&&(t.go(m?"<":">"),c=d),u(m)&&ft(f)}}function u(f){return!e.releaseWheel||t.state.is(Mt)||n.Controller.getAdjacent(f)!==-1}return{mount:i}}var Ti=90;function Si(t,n,e){var r=X(t),a=r.on,c=n.Elements.track,i=e.live&&!e.isNavigation,s=Dt("span",zr),u=Ee(Ti,W(o,!1));function f(){i&&(d(!n.Autoplay.isPaused()),F(c,vn,!0),s.textContent="…",a(xn,W(d,!0)),a(Fn,W(d,!1)),a([te,Vt],W(o,!0)))}function o(E){F(c,fn,E),E?(Jt(c,s),u.start()):(It(s),u.cancel())}function m(){st(c,[cn,vn,fn]),It(s)}function d(E){i&&F(c,cn,E?"off":"polite")}return{mount:f,disable:d,destroy:m}}var Li=Object.freeze({__proto__:null,Media:wr,Direction:Pr,Elements:Yr,Slides:Kr,Layout:qr,Clones:Jr,Move:jr,Controller:Qr,Arrows:ni,Autoplay:ii,Cover:ai,Scroll:vi,Drag:li,Keyboard:Ei,LazyLoad:hi,Pagination:mi,Sync:_i,Wheel:yi,Live:Si}),Ii={prev:"Previous slide",next:"Next slide",first:"Go to first slide",last:"Go to last slide",slideX:"Go to slide %s",pageX:"Go to page %s",play:"Start autoplay",pause:"Pause autoplay",carousel:"carousel",slide:"slide",select:"Select a slide to show",slideLabel:"%s of %s"},bi={type:"slide",role:"region",speed:400,perPage:1,cloneStatus:!0,arrows:!0,pagination:!0,paginationKeyboard:!0,interval:5e3,pauseOnHover:!0,pauseOnFocus:!0,resetProgress:!0,easing:"cubic-bezier(0.25, 1, 0.5, 1)",drag:!0,direction:"ltr",trimSpace:!0,focusableNodes:"a, button, textarea, input, select, iframe",live:!0,classes:Br,i18n:Ii,reducedMotion:{speed:0,rewindSpeed:0,autoplay:"pause"}};function Ni(t,n,e){var r=n.Slides;function a(){X(t).on([Nt,q],c)}function c(){r.forEach(function(s){s.style("transform","translateX(-"+100*s.index+"%)")})}function i(s,u){r.style("transition","opacity "+e.speed+"ms "+e.easing),bn(u)}return{mount:a,start:i,cancel:Oe}}function pi(t,n,e){var r=n.Move,a=n.Controller,c=n.Scroll,i=n.Elements.list,s=W(it,i,"transition"),u;function f(){X(t).bind(i,"transitionend",function(E){E.target===i&&u&&(m(),u())})}function o(E,v){var l=r.toPosition(E,!0),_=r.getPosition(),A=d(E);j(l-_)>=1&&A>=1?e.useScroll?c.scroll(l,A,!1,v):(s("transform "+A+"ms "+e.easing),r.translate(l,!0),u=v):(r.jump(E),v())}function m(){s(""),c.cancel()}function d(E){var v=e.rewindSpeed;if(t.is(Ct)&&v){var l=a.getIndex(!0),_=a.getEnd();if(l===0&&E>=_||l>=_&&E===0)return v}return e.speed}return{mount:f,start:o,cancel:m}}var Ri=function(){function t(e,r){this.event=X(),this.Components={},this.state=Or(Ot),this.splides=[],this._o={},this._E={};var a=ht(e)?wn(document,e):e;Ft(a,a+" is invalid."),this.root=a,r=gt({label:at(a,et)||"",labelledby:at(a,He)||""},bi,t.defaults,r||{});try{gt(r,JSON.parse(at(a,Ue)))}catch{Ft(!1,"Invalid JSON")}this._o=Object.create(gt({},r))}var n=t.prototype;return n.mount=function(r,a){var c=this,i=this.state,s=this.Components;Ft(i.is([Ot,se]),"Already mounted!"),i.set(Ot),this._C=s,this._T=a||this._T||(this.is(ne)?Ni:pi),this._E=r||this._E;var u=Bt({},Li,this._E,{Transition:this._T});return Lt(u,function(f,o){var m=f(c,s,c._o);s[o]=m,m.setup&&m.setup()}),Lt(s,function(f){f.mount&&f.mount()}),this.emit(Nt),ut(this.root,Ur),i.set(Pt),this.emit(on),this},n.sync=function(r){return this.splides.push({splide:r}),r.splides.push({splide:this,isParent:!0}),this.state.is(Pt)&&(this._C.Sync.remount(),r.Components.Sync.remount()),this},n.go=function(r){return this._C.Controller.go(r),this},n.on=function(r,a){return this.event.on(r,a),this},n.off=function(r){return this.event.off(r),this},n.emit=function(r){var a;return(a=this.event).emit.apply(a,[r].concat(_t(arguments,1))),this},n.add=function(r,a){return this._C.Slides.add(r,a),this},n.remove=function(r){return this._C.Slides.remove(r),this},n.is=function(r){return this._o.type===r},n.refresh=function(){return this.emit(q),this},n.destroy=function(r){r===void 0&&(r=!0);var a=this.event,c=this.state;return c.is(Ot)?X(this).on(on,this.destroy.bind(this,r)):(Lt(this._C,function(i){i.destroy&&i.destroy(r)},!0),a.emit(Vn),a.destroy(),r&&Et(this.splides),c.set(se)),this},lr(t,[{key:"options",get:function(){return this._o},set:function(r){this._C.Media.set(r,!0,!0)}},{key:"length",get:function(){return this._C.Slides.getLength(!0)}},{key:"index",get:function(){return this._C.Controller.getIndex()}}]),t}(),Se=Ri;Se.defaults={};Se.STATES=Er;/*!
 * @splidejs/splide-extension-auto-scroll
 * Version  : 0.5.3
 * License  : MIT
 * Copyright: 2022 Naotoshi Fujita
 */function Oi(t){t.length=0}function Ze(t,n,e){return Array.prototype.slice.call(t,n,e)}function Le(t){return t.bind.apply(t,[null].concat(Ze(arguments,1)))}function gn(t){return requestAnimationFrame(t)}function Je(t,n){return typeof n===t}var er=Array.isArray;Le(Je,"function");Le(Je,"string");Le(Je,"undefined");function nr(t){return er(t)?t:[t]}function hn(t,n){nr(t).forEach(n)}var Di=Object.keys;function wi(t,n,e){if(t){var r=Di(t);r=r;for(var a=0;a<r.length;a++){var c=r[a];if(c!=="__proto__"&&n(t[c],c)===!1)break}}return t}function Pi(t){return Ze(arguments,1).forEach(function(n){wi(n,function(e,r){t[r]=n[r]})}),t}var Ci=Math.min;function Mi(){var t=[];function n(i,s,u,f){a(i,s,function(o,m,d){var E="addEventListener"in o,v=E?o.removeEventListener.bind(o,m,u,f):o.removeListener.bind(o,u);E?o.addEventListener(m,u,f):o.addListener(u),t.push([o,m,d,u,v])})}function e(i,s,u){a(i,s,function(f,o,m){t=t.filter(function(d){return d[0]===f&&d[1]===o&&d[2]===m&&(!u||d[3]===u)?(d[4](),!1):!0})})}function r(i,s,u){var f,o=!0;return typeof CustomEvent=="function"?f=new CustomEvent(s,{bubbles:o,detail:u}):(f=document.createEvent("CustomEvent"),f.initCustomEvent(s,o,!1,u)),i.dispatchEvent(f),f}function a(i,s,u){hn(i,function(f){f&&hn(s,function(o){o.split(" ").forEach(function(m){var d=m.split(".");u(f,d[0],d[1])})})})}function c(){t.forEach(function(i){i[4]()}),Oi(t)}return{bind:n,unbind:e,dispatch:r,destroy:c}}var mn="move",An="moved",Vi="updated",_n="drag",$i="dragged",yn="scroll",Tn="scrolled",xi="destroy";function Fi(t){var n=t?t.event.bus:document.createDocumentFragment(),e=Mi();function r(c,i){e.bind(n,nr(c).join(" "),function(s){i.apply(i,er(s.detail)?s.detail:[])})}function a(c){e.dispatch(n,c,Ze(arguments,1))}return t&&t.event.on(xi,e.destroy),Pi(e,{bus:n,on:r,off:Le(e.unbind,n),emit:a})}function rr(t,n,e,r){var a=Date.now,c,i=0,s,u=!0,f=0;function o(){if(!u){if(i=t?Ci((a()-c)/t,1):1,e&&e(i),i>=1&&(n(),c=a(),r&&++f>=r))return d();gn(o)}}function m(A){!A&&v(),c=a()-(A?i*t:0),u=!1,gn(o)}function d(){u=!0}function E(){c=a(),i=0,e&&e(i)}function v(){s&&cancelAnimationFrame(s),i=0,s=0,u=!0}function l(A){t=A}function _(){return u}return{start:m,rewind:E,pause:d,cancel:v,set:l,isPaused:_}}function Gi(t,n){var e;function r(){e||(e=rr(n,function(){t(),e=null},null,1),e.start())}return r}var zi="is-active",Ui="slide",ki="fade";function ir(t,n,e){return Array.prototype.slice.call(t,n,e)}function je(t){return t.bind(null,...ir(arguments,1))}function Ie(t,n){return typeof n===t}function Ve(t){return!ar(t)&&Ie("object",t)}const Bi=Array.isArray;je(Ie,"function");je(Ie,"string");const Wi=je(Ie,"undefined");function ar(t){return t===null}function Hi(t){return Bi(t)?t:[t]}function le(t,n){Hi(t).forEach(n)}function Yi(t,n,e){t&&le(n,r=>{r&&t.classList[e?"add":"remove"](r)})}const Xi=Object.keys;function or(t,n,e){if(t){let r=Xi(t);r=r;for(let a=0;a<r.length;a++){const c=r[a];if(c!=="__proto__"&&n(t[c],c)===!1)break}}return t}function Sn(t){return ir(arguments,1).forEach(n=>{or(n,(e,r)=>{t[r]=n[r]})}),t}function Ki(t,n){le(t,e=>{le(n,r=>{e&&e.removeAttribute(r)})})}function ur(t,n,e){Ve(n)?or(n,(r,a)=>{ur(t,a,r)}):le(t,r=>{ar(e)||e===""?Ki(r,n):r.setAttribute(n,String(e))})}const{min:Ln,max:In,floor:ji,ceil:Qi,abs:ta}=Math;function qi(t,n,e){const r=Ln(n,e),a=In(n,e);return Ln(In(r,t),a)}const Zi={speed:1,autoStart:!0,pauseOnHover:!0,pauseOnFocus:!0},Ji={startScroll:"Start auto scroll",pauseScroll:"Pause auto scroll"};function sr(t,n,e){const{on:r,off:a,bind:c,unbind:i}=Fi(t),{translate:s,getPosition:u,toIndex:f,getLimit:o}=n.Move,{setIndex:m,getIndex:d}=n.Controller,{orient:E}=n.Direction,{toggle:v}=n.Elements,{Live:l}=n,{root:_}=t,A=Gi(n.Arrows.update,500);let h={},g,w,p,C,y,R;function G(){const{autoScroll:x}=e;h=Sn({},Zi,Ve(x)?x:{})}function P(){t.is(ki)||!g&&e.autoScroll!==!1&&(g=rr(0,V),I(),$())}function L(){g&&(g.cancel(),g=null,R=void 0,a([mn,_n,yn,An,Tn]),i(_,"mouseenter mouseleave focusin focusout"),i(v,"click"))}function I(){h.pauseOnHover&&c(_,"mouseenter mouseleave",x=>{p=x.type==="mouseenter",k()}),h.pauseOnFocus&&c(_,"focusin focusout",x=>{C=x.type==="focusin",k()}),h.useToggleButton&&c(v,"click",()=>{w?M():U()}),r(Vi,b),r([mn,_n,yn],()=>{y=!0,U(!1)}),r([An,$i,Tn],()=>{y=!1,k()})}function b(){const{autoScroll:x}=e;x!==!1?(h=Sn({},h,Ve(x)?x:{}),P()):L(),g&&!Wi(R)&&s(R)}function $(){h.autoStart&&(document.readyState==="complete"?M():c(window,"load",M))}function M(){z()&&(g.start(!0),l.disable(!0),C=p=w=!1,O())}function U(x=!0){w||(w=x,O(),z()||(g.pause(),l.disable(!1)))}function k(){w||(p||C||y?U(!1):M())}function V(){const x=u(),H=D(x);x!==H?(s(H),T(R=u())):(U(!1),h.rewind&&t.go(h.speed>0?0:n.Controller.getEnd())),A()}function D(x){const H=h.speed||1;return x+=E(H),t.is(Ui)&&(x=qi(x,o(!1),o(!0))),x}function T(x){const{length:H}=t,rt=(f(x)+H)%H;rt!==d()&&(m(rt),n.Slides.update(),n.Pagination.update(),e.lazyLoad==="nearby"&&n.LazyLoad.check())}function O(){if(v){const x=w?"startScroll":"pauseScroll";Yi(v,zi,!w),ur(v,"aria-label",e.i18n[x]||Ji[x])}}function z(){return!g||g.isPaused()}return{setup:G,mount:P,destroy:L,play:M,pause:U,isPaused:z}}new Se("#splide",{type:"loop",drag:"free",focus:"center",perPage:1,direction:"ttb",height:"28rem",gap:"1rem",autoHeight:!0,heightRatio:.5,autoScroll:{speed:1},arrows:!1,pagination:!1}).mount({AutoScroll:sr});new Se("#splide2",{type:"loop",drag:"free",focus:"center",perPage:1,direction:"ttb",height:"28rem",gap:"1rem",autoHeight:!0,heightRatio:.5,autoScroll:{speed:-1},arrows:!1,pagination:!1}).mount({AutoScroll:sr});