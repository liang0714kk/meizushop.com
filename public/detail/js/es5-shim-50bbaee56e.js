(function(t,e){"use strict";"function"==typeof define&&define.amd?define(e):"object"==typeof exports?module.exports=e():t.returnExports=e()})(this,function(){var t,e,r=Array,n=r.prototype,o=Object,i=o.prototype,a=Function,u=a.prototype,s=String,c=s.prototype,l=Number,f=l.prototype,h=n.slice,p=n.splice,g=n.push,d=n.unshift,v=n.concat,y=n.join,m=u.call,b=u.apply,w=Math.max,T=Math.min,D=i.toString,E="function"==typeof Symbol&&"symbol"==typeof Symbol.toStringTag,x=Function.prototype.toString,S=/^\s*class /,j=function j(t){try{var e=x.call(t),r=e.replace(/\/\/.*\n/g,""),n=r.replace(/\/\*[.\s\S]*\*\//g,""),o=n.replace(/\n/gm," ").replace(/ {2}/g," ");return S.test(o)}catch(i){return!1}},O=function O(t){try{return j(t)?!1:(x.call(t),!0)}catch(e){return!1}},M="[object Function]",I="[object GeneratorFunction]",t=function t(t){if(!t)return!1;if("function"!=typeof t&&"object"!=typeof t)return!1;if(E)return O(t);if(j(t))return!1;var e=D.call(t);return e===M||e===I},F=RegExp.prototype.exec,U=function U(t){try{return F.call(t),!0}catch(e){return!1}},N="[object RegExp]";e=function e(t){return"object"!=typeof t?!1:E?U(t):D.call(t)===N};var C,k=String.prototype.valueOf,$=function $(t){try{return k.call(t),!0}catch(e){return!1}},A="[object String]";C=function C(t){return"string"==typeof t?!0:"object"!=typeof t?!1:E?$(t):D.call(t)===A};var R=o.defineProperty&&function(){try{var t={};o.defineProperty(t,"x",{enumerable:!1,value:t});for(var e in t)return!1;return t.x===t}catch(r){return!1}}(),P=function(t){var e;return e=R?function(t,e,r,n){!n&&e in t||o.defineProperty(t,e,{configurable:!0,enumerable:!1,writable:!0,value:r})}:function(t,e,r,n){!n&&e in t||(t[e]=r)},function(r,n,o){for(var i in n)t.call(n,i)&&e(r,i,n[i],o)}}(i.hasOwnProperty),J=function J(t){var e=typeof t;return null===t||"object"!==e&&"function"!==e},z=l.isNaN||function z(t){return t!==t},Z={ToInteger:function(t){var e=+t;return z(e)?e=0:0!==e&&e!==1/0&&e!==-(1/0)&&(e=(e>0||-1)*Math.floor(Math.abs(e))),e},ToPrimitive:function(e){var r,n,o;if(J(e))return e;if(n=e.valueOf,t(n)&&(r=n.call(e),J(r)))return r;if(o=e.toString,t(o)&&(r=o.call(e),J(r)))return r;throw new TypeError},ToObject:function(t){if(null==t)throw new TypeError("can't convert "+t+" to object");return o(t)},ToUint32:function(t){return t>>>0}},G=function G(){};P(u,{bind:function(e){var r=this;if(!t(r))throw new TypeError("Function.prototype.bind called on incompatible "+r);for(var n,i=h.call(arguments,1),u=function(){if(this instanceof n){var t=b.call(r,this,v.call(i,h.call(arguments)));return o(t)===t?t:this}return b.call(r,e,v.call(i,h.call(arguments)))},s=w(0,r.length-i.length),c=[],l=0;s>l;l++)g.call(c,"$"+l);return n=a("binder","return function ("+y.call(c,",")+"){ return binder.apply(this, arguments); }")(u),r.prototype&&(G.prototype=r.prototype,n.prototype=new G,G.prototype=null),n}});var Y=m.bind(i.hasOwnProperty),H=m.bind(i.toString),B=m.bind(h),L=b.bind(h),W=m.bind(c.slice),q=m.bind(c.split),_=m.bind(c.indexOf),X=m.bind(g),K=m.bind(i.propertyIsEnumerable),Q=m.bind(n.sort),V=r.isArray||function V(t){return"[object Array]"===H(t)},te=1!==[].unshift(0);P(n,{unshift:function(){return d.apply(this,arguments),this.length}},te),P(r,{isArray:V});var ee=o("a"),re="a"!==ee[0]||!(0 in ee),ne=function(t){var e=!0,r=!0,n=!1;if(t)try{t.call("foo",function(t,r,n){"object"!=typeof n&&(e=!1)}),t.call([1],function(){"use strict";r="string"==typeof this},"x")}catch(o){n=!0}return!!t&&!n&&e&&r};P(n,{forEach:function(e){var r,n=Z.ToObject(this),o=re&&C(this)?q(this,""):n,i=-1,a=Z.ToUint32(o.length);if(arguments.length>1&&(r=arguments[1]),!t(e))throw new TypeError("Array.prototype.forEach callback must be a function");for(;a>++i;)i in o&&(r===void 0?e(o[i],i,n):e.call(r,o[i],i,n))}},!ne(n.forEach)),P(n,{map:function(e){var n,o=Z.ToObject(this),i=re&&C(this)?q(this,""):o,a=Z.ToUint32(i.length),u=r(a);if(arguments.length>1&&(n=arguments[1]),!t(e))throw new TypeError("Array.prototype.map callback must be a function");for(var s=0;a>s;s++)s in i&&(u[s]=n===void 0?e(i[s],s,o):e.call(n,i[s],s,o));return u}},!ne(n.map)),P(n,{filter:function(e){var r,n,o=Z.ToObject(this),i=re&&C(this)?q(this,""):o,a=Z.ToUint32(i.length),u=[];if(arguments.length>1&&(n=arguments[1]),!t(e))throw new TypeError("Array.prototype.filter callback must be a function");for(var s=0;a>s;s++)s in i&&(r=i[s],(n===void 0?e(r,s,o):e.call(n,r,s,o))&&X(u,r));return u}},!ne(n.filter)),P(n,{every:function(e){var r,n=Z.ToObject(this),o=re&&C(this)?q(this,""):n,i=Z.ToUint32(o.length);if(arguments.length>1&&(r=arguments[1]),!t(e))throw new TypeError("Array.prototype.every callback must be a function");for(var a=0;i>a;a++)if(a in o&&!(r===void 0?e(o[a],a,n):e.call(r,o[a],a,n)))return!1;return!0}},!ne(n.every)),P(n,{some:function(e){var r,n=Z.ToObject(this),o=re&&C(this)?q(this,""):n,i=Z.ToUint32(o.length);if(arguments.length>1&&(r=arguments[1]),!t(e))throw new TypeError("Array.prototype.some callback must be a function");for(var a=0;i>a;a++)if(a in o&&(r===void 0?e(o[a],a,n):e.call(r,o[a],a,n)))return!0;return!1}},!ne(n.some));var oe=!1;n.reduce&&(oe="object"==typeof n.reduce.call("es5",function(t,e,r,n){return n})),P(n,{reduce:function(e){var r=Z.ToObject(this),n=re&&C(this)?q(this,""):r,o=Z.ToUint32(n.length);if(!t(e))throw new TypeError("Array.prototype.reduce callback must be a function");if(0===o&&1===arguments.length)throw new TypeError("reduce of empty array with no initial value");var i,a=0;if(arguments.length>=2)i=arguments[1];else for(;;){if(a in n){i=n[a++];break}if(++a>=o)throw new TypeError("reduce of empty array with no initial value")}for(;o>a;a++)a in n&&(i=e(i,n[a],a,r));return i}},!oe);var ie=!1;n.reduceRight&&(ie="object"==typeof n.reduceRight.call("es5",function(t,e,r,n){return n})),P(n,{reduceRight:function(e){var r=Z.ToObject(this),n=re&&C(this)?q(this,""):r,o=Z.ToUint32(n.length);if(!t(e))throw new TypeError("Array.prototype.reduceRight callback must be a function");if(0===o&&1===arguments.length)throw new TypeError("reduceRight of empty array with no initial value");var i,a=o-1;if(arguments.length>=2)i=arguments[1];else for(;;){if(a in n){i=n[a--];break}if(0>--a)throw new TypeError("reduceRight of empty array with no initial value")}if(0>a)return i;do a in n&&(i=e(i,n[a],a,r));while(a--);return i}},!ie);var ae=n.indexOf&&-1!==[0,1].indexOf(1,2);P(n,{indexOf:function(t){var e=re&&C(this)?q(this,""):Z.ToObject(this),r=Z.ToUint32(e.length);if(0===r)return-1;var n=0;for(arguments.length>1&&(n=Z.ToInteger(arguments[1])),n=n>=0?n:w(0,r+n);r>n;n++)if(n in e&&e[n]===t)return n;return-1}},ae);var ue=n.lastIndexOf&&-1!==[0,1].lastIndexOf(0,-3);P(n,{lastIndexOf:function(t){var e=re&&C(this)?q(this,""):Z.ToObject(this),r=Z.ToUint32(e.length);if(0===r)return-1;var n=r-1;for(arguments.length>1&&(n=T(n,Z.ToInteger(arguments[1]))),n=n>=0?n:r-Math.abs(n);n>=0;n--)if(n in e&&t===e[n])return n;return-1}},ue);var se=function(){var t=[1,2],e=t.splice();return 2===t.length&&V(e)&&0===e.length}();P(n,{splice:function(){return 0===arguments.length?[]:p.apply(this,arguments)}},!se);var ce=function(){var t={};return n.splice.call(t,0,0,1),1===t.length}();P(n,{splice:function(t,e){if(0===arguments.length)return[];var r=arguments;return this.length=w(Z.ToInteger(this.length),0),arguments.length>0&&"number"!=typeof e&&(r=B(arguments),2>r.length?X(r,this.length-t):r[1]=Z.ToInteger(e)),p.apply(this,r)}},!ce);var le=function(){var t=new r(1e5);return t[8]="x",t.splice(1,1),7===t.indexOf("x")}(),fe=function(){var t=256,e=[];return e[t]="a",e.splice(t+1,0,"b"),"a"===e[t]}();P(n,{splice:function(t,e){for(var r,n=Z.ToObject(this),o=[],i=Z.ToUint32(n.length),a=Z.ToInteger(t),u=0>a?w(i+a,0):T(a,i),c=T(w(Z.ToInteger(e),0),i-u),l=0;c>l;)r=s(u+l),Y(n,r)&&(o[l]=n[r]),l+=1;var f,h=B(arguments,2),p=h.length;if(c>p){l=u;for(var g=i-c;g>l;)r=s(l+c),f=s(l+p),Y(n,r)?n[f]=n[r]:delete n[f],l+=1;l=i;for(var d=i-c+p;l>d;)delete n[l-1],l-=1}else if(p>c)for(l=i-c;l>u;)r=s(l+c-1),f=s(l+p-1),Y(n,r)?n[f]=n[r]:delete n[f],l-=1;l=u;for(var v=0;h.length>v;++v)n[l]=h[v],l+=1;return n.length=i-c+p,o}},!le||!fe);var he,pe=n.join;try{he="1,2,3"!==Array.prototype.join.call("123",",")}catch(ge){he=!0}he&&P(n,{join:function(t){var e=t===void 0?",":t;return pe.call(C(this)?q(this,""):this,e)}},he);var de="1,2"!==[1,2].join(void 0);de&&P(n,{join:function(t){var e=t===void 0?",":t;return pe.call(this,e)}},de);var ve=function(){for(var t=Z.ToObject(this),e=Z.ToUint32(t.length),r=0;arguments.length>r;)t[e+r]=arguments[r],r+=1;return t.length=e+r,e+r},ye=function(){var t={},e=Array.prototype.push.call(t,void 0);return 1!==e||1!==t.length||t[0]!==void 0||!Y(t,0)}();P(n,{push:function(){return V(this)?g.apply(this,arguments):ve.apply(this,arguments)}},ye);var me=function(){var t=[],e=t.push(void 0);return 1!==e||1!==t.length||t[0]!==void 0||!Y(t,0)}();P(n,{push:ve},me),P(n,{slice:function(){var t=C(this)?q(this,""):this;return L(t,arguments)}},re);var be=function(){try{return[1,2].sort(null),[1,2].sort({}),!0}catch(t){}return!1}(),we=function(){try{return[1,2].sort(/a/),!1}catch(t){}return!0}(),Te=function(){try{return[1,2].sort(void 0),!0}catch(t){}return!1}();P(n,{sort:function(e){if(e===void 0)return Q(this);if(!t(e))throw new TypeError("Array.prototype.sort callback must be a function");return Q(this,e)}},be||!Te||!we);var De=!K({toString:null},"toString"),Ee=K(function(){},"prototype"),xe=!Y("x","0"),Se=function(t){var e=t.constructor;return e&&e.prototype===t},je={$window:!0,$console:!0,$parent:!0,$self:!0,$frame:!0,$frames:!0,$frameElement:!0,$webkitIndexedDB:!0,$webkitStorageInfo:!0,$external:!0},Oe=function(){if("undefined"==typeof window)return!1;for(var t in window)try{!je["$"+t]&&Y(window,t)&&null!==window[t]&&"object"==typeof window[t]&&Se(window[t])}catch(e){return!0}return!1}(),Me=function(t){if("undefined"==typeof window||!Oe)return Se(t);try{return Se(t)}catch(e){return!1}},Ie=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"],Fe=Ie.length,Ue=function Ne(t){return"[object Arguments]"===H(t)},Ce=function Ne(e){return null!==e&&"object"==typeof e&&"number"==typeof e.length&&e.length>=0&&!V(e)&&t(e.callee)},Ne=Ue(arguments)?Ue:Ce;P(o,{keys:function(e){var r=t(e),n=Ne(e),o=null!==e&&"object"==typeof e,i=o&&C(e);if(!o&&!r&&!n)throw new TypeError("Object.keys called on a non-object");var a=[],u=Ee&&r;if(i&&xe||n)for(var c=0;e.length>c;++c)X(a,s(c));if(!n)for(var l in e)u&&"prototype"===l||!Y(e,l)||X(a,s(l));if(De)for(var f=Me(e),h=0;Fe>h;h++){var p=Ie[h];f&&"constructor"===p||!Y(e,p)||X(a,p)}return a}});var ke=o.keys&&function(){return 2===o.keys(arguments).length}(1,2),$e=o.keys&&function(){var t=o.keys(arguments);return 1!==arguments.length||1!==t.length||1!==t[0]}(1),Ae=o.keys;P(o,{keys:function(t){return Ne(t)?Ae(B(t)):Ae(t)}},!ke||$e);var Re,Pe,Je=0!==new Date(-0xc782b5b342b24).getUTCMonth(),ze=new Date(-0x55d318d56a724),Ze=new Date(14496624e5),Ge="Mon, 01 Jan -45875 11:59:59 GMT"!==ze.toUTCString(),Ye=ze.getTimezoneOffset();-720>Ye?(Re="Tue Jan 02 -45875"!==ze.toDateString(),Pe=!/^Thu Dec 10 2015 \d\d:\d\d:\d\d GMT[-\+]\d\d\d\d(?: |$)/.test(""+Ze)):(Re="Mon Jan 01 -45875"!==ze.toDateString(),Pe=!/^Wed Dec 09 2015 \d\d:\d\d:\d\d GMT[-\+]\d\d\d\d(?: |$)/.test(""+Ze));var He=m.bind(Date.prototype.getFullYear),Be=m.bind(Date.prototype.getMonth),Le=m.bind(Date.prototype.getDate),We=m.bind(Date.prototype.getUTCFullYear),qe=m.bind(Date.prototype.getUTCMonth),_e=m.bind(Date.prototype.getUTCDate),Xe=m.bind(Date.prototype.getUTCDay),Ke=m.bind(Date.prototype.getUTCHours),Qe=m.bind(Date.prototype.getUTCMinutes),Ve=m.bind(Date.prototype.getUTCSeconds),tr=m.bind(Date.prototype.getUTCMilliseconds),er=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],rr=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],nr=function nr(t,e){return Le(new Date(e,t,0))};P(Date.prototype,{getFullYear:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=He(this);return 0>t&&Be(this)>11?t+1:t},getMonth:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=He(this),e=Be(this);return 0>t&&e>11?0:e},getDate:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=He(this),e=Be(this),r=Le(this);if(0>t&&e>11){if(12===e)return r;var n=nr(0,t+1);return n-r+1}return r},getUTCFullYear:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=We(this);return 0>t&&qe(this)>11?t+1:t},getUTCMonth:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=We(this),e=qe(this);return 0>t&&e>11?0:e},getUTCDate:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=We(this),e=qe(this),r=_e(this);if(0>t&&e>11){if(12===e)return r;var n=nr(0,t+1);return n-r+1}return r}},Je),P(Date.prototype,{toUTCString:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=Xe(this),e=_e(this),r=qe(this),n=We(this),o=Ke(this),i=Qe(this),a=Ve(this);return er[t]+", "+(10>e?"0"+e:e)+" "+rr[r]+" "+n+" "+(10>o?"0"+o:o)+":"+(10>i?"0"+i:i)+":"+(10>a?"0"+a:a)+" GMT"}},Je||Ge),P(Date.prototype,{toDateString:function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=this.getDay(),e=this.getDate(),r=this.getMonth(),n=this.getFullYear();return er[t]+" "+rr[r]+" "+(10>e?"0"+e:e)+" "+n}},Je||Re),(Je||Pe)&&(Date.prototype.toString=function(){if(!(this&&this instanceof Date))throw new TypeError("this is not a Date object.");var t=this.getDay(),e=this.getDate(),r=this.getMonth(),n=this.getFullYear(),o=this.getHours(),i=this.getMinutes(),a=this.getSeconds(),u=this.getTimezoneOffset(),s=Math.floor(Math.abs(u)/60),c=Math.floor(Math.abs(u)%60);return er[t]+" "+rr[r]+" "+(10>e?"0"+e:e)+" "+n+" "+(10>o?"0"+o:o)+":"+(10>i?"0"+i:i)+":"+(10>a?"0"+a:a)+" GMT"+(u>0?"-":"+")+(10>s?"0"+s:s)+(10>c?"0"+c:c)},R&&o.defineProperty(Date.prototype,"toString",{configurable:!0,enumerable:!1,writable:!0}));var or=-621987552e5,ir="-000001",ar=Date.prototype.toISOString&&-1===new Date(or).toISOString().indexOf(ir),ur=Date.prototype.toISOString&&"1969-12-31T23:59:59.999Z"!==new Date(-1).toISOString(),sr=m.bind(Date.prototype.getTime);P(Date.prototype,{toISOString:function(){if(!isFinite(this)||!isFinite(sr(this)))throw new RangeError("Date.prototype.toISOString called on non-finite value.");var t=We(this),e=qe(this);t+=Math.floor(e/12),e=(e%12+12)%12;var r=[e+1,_e(this),Ke(this),Qe(this),Ve(this)];t=(0>t?"-":t>9999?"+":"")+W("00000"+Math.abs(t),t>=0&&9999>=t?-4:-6);for(var n=0;r.length>n;++n)r[n]=W("00"+r[n],-2);return t+"-"+B(r,0,2).join("-")+"T"+B(r,2).join(":")+"."+W("000"+tr(this),-3)+"Z"}},ar||ur);var cr=function(){try{return Date.prototype.toJSON&&null===new Date(0/0).toJSON()&&-1!==new Date(or).toJSON().indexOf(ir)&&Date.prototype.toJSON.call({toISOString:function(){return!0}})}catch(t){return!1}}();cr||(Date.prototype.toJSON=function(){var e=o(this),r=Z.ToPrimitive(e);if("number"==typeof r&&!isFinite(r))return null;var n=e.toISOString;if(!t(n))throw new TypeError("toISOString property is not callable");return n.call(e)});var lr=1e15===Date.parse("+033658-09-27T01:46:40.000Z"),fr=!isNaN(Date.parse("2012-04-04T24:00:00.500Z"))||!isNaN(Date.parse("2012-11-31T23:59:59.000Z"))||!isNaN(Date.parse("2012-12-31T23:59:60.000Z")),hr=isNaN(Date.parse("2000-01-01T00:00:00.000Z"));if(hr||fr||!lr){var pr=Math.pow(2,31)-1,gr=z(new Date(1970,0,1,0,0,0,pr+1).getTime());Date=function(t){var e=function(r,n,o,i,a,u,c){var l,f=arguments.length;if(this instanceof t){var h=u,p=c;if(gr&&f>=7&&c>pr){var g=Math.floor(c/pr)*pr,d=Math.floor(g/1e3);h+=d,p-=1e3*d}l=1===f&&s(r)===r?new t(e.parse(r)):f>=7?new t(r,n,o,i,a,h,p):f>=6?new t(r,n,o,i,a,h):f>=5?new t(r,n,o,i,a):f>=4?new t(r,n,o,i):f>=3?new t(r,n,o):f>=2?new t(r,n):f>=1?new t(r instanceof t?+r:r):new t}else l=t.apply(this,arguments);return J(l)||P(l,{constructor:e},!0),l},r=RegExp("^(\\d{4}|[+-]\\d{6})(?:-(\\d{2})(?:-(\\d{2})(?:T(\\d{2}):(\\d{2})(?::(\\d{2})(?:(\\.\\d{1,}))?)?(Z|(?:([-+])(\\d{2}):(\\d{2})))?)?)?)?$"),n=[0,31,59,90,120,151,181,212,243,273,304,334,365],o=function o(t,e){var r=e>1?1:0;return n[e]+Math.floor((t-1969+r)/4)-Math.floor((t-1901+r)/100)+Math.floor((t-1601+r)/400)+365*(t-1970)},i=function i(e){var r=0,n=e;if(gr&&n>pr){var o=Math.floor(n/pr)*pr,i=Math.floor(o/1e3);r+=i,n-=1e3*i}return l(new t(1970,0,1,0,0,r,n))};for(var a in t)Y(t,a)&&(e[a]=t[a]);P(e,{now:t.now,UTC:t.UTC},!0),e.prototype=t.prototype,P(e.prototype,{constructor:e},!0);var u=function(e){var n=r.exec(e);if(n){var a,u=l(n[1]),s=l(n[2]||1)-1,c=l(n[3]||1)-1,f=l(n[4]||0),h=l(n[5]||0),p=l(n[6]||0),g=Math.floor(1e3*l(n[7]||0)),d=Boolean(n[4]&&!n[8]),v="-"===n[9]?1:-1,y=l(n[10]||0),m=l(n[11]||0),b=h>0||p>0||g>0;return(b?24:25)>f&&60>h&&60>p&&1e3>g&&s>-1&&12>s&&24>y&&60>m&&c>-1&&o(u,s+1)-o(u,s)>c&&(a=60*(24*(o(u,s)+c)+f+y*v),a=1e3*(60*(a+h+m*v)+p)+g,d&&(a=i(a)),a>=-864e13&&864e13>=a)?a:0/0}return t.parse.apply(this,arguments)};return P(e,{parse:u}),e}(Date)}Date.now||(Date.now=function(){return(new Date).getTime()});var dr=f.toFixed&&("0.000"!==8e-5.toFixed(3)||"1"!==.9.toFixed(0)||"1.25"!==1.255.toFixed(2)||"1000000000000000128"!==0xde0b6b3a7640080.toFixed(0)),vr={base:1e7,size:6,data:[0,0,0,0,0,0],multiply:function(t,e){for(var r=-1,n=e;++r<vr.size;)n+=t*vr.data[r],vr.data[r]=n%vr.base,n=Math.floor(n/vr.base)},divide:function(t){for(var e=vr.size,r=0;--e>=0;)r+=vr.data[e],vr.data[e]=Math.floor(r/t),r=r%t*vr.base},numToString:function(){for(var t=vr.size,e="";--t>=0;)if(""!==e||0===t||0!==vr.data[t]){var r=s(vr.data[t]);""===e?e=r:e+=W("0000000",0,7-r.length)+r}return e},pow:function yr(t,e,r){return 0===e?r:1===e%2?yr(t,e-1,r*t):yr(t*t,e/2,r)},log:function(t){for(var e=0,r=t;r>=4096;)e+=12,r/=4096;for(;r>=2;)e+=1,r/=2;return e}},mr=function(t){var e,r,n,o,i,a,u,c;if(e=l(t),e=z(e)?0:Math.floor(e),0>e||e>20)throw new RangeError("Number.toFixed called with invalid number of decimals");if(r=l(this),z(r))return"NaN";if(-1e21>=r||r>=1e21)return s(r);if(n="",0>r&&(n="-",r=-r),o="0",r>1e-21)if(i=vr.log(r*vr.pow(2,69,1))-69,a=0>i?r*vr.pow(2,-i,1):r/vr.pow(2,i,1),a*=4503599627370496,i=52-i,i>0){for(vr.multiply(0,a),u=e;u>=7;)vr.multiply(1e7,0),u-=7;for(vr.multiply(vr.pow(10,u,1),0),u=i-1;u>=23;)vr.divide(1<<23),u-=23;vr.divide(1<<u),vr.multiply(1,1),vr.divide(2),o=vr.numToString()}else vr.multiply(0,a),vr.multiply(1<<-i,0),o=vr.numToString()+W("0.00000000000000000000",2,2+e);return e>0?(c=o.length,o=e>=c?n+W("0.0000000000000000000",0,e-c+2)+o:n+W(o,0,c-e)+"."+W(o,c-e)):o=n+o,o};P(f,{toFixed:mr},dr);var br=function(){try{return"1"===1..toPrecision(void 0)}catch(t){return!0}}(),wr=f.toPrecision;P(f,{toPrecision:function(t){return t===void 0?wr.call(this):wr.call(this,t)}},br),2!=="ab".split(/(?:ab)*/).length||4!==".".split(/(.?)(.?)/).length||"t"==="tesst".split(/(s)*/)[1]||4!=="test".split(/(?:)/,-1).length||"".split(/.?/).length||".".split(/()()/).length>1?function(){var t=/()??/.exec("")[1]===void 0,r=Math.pow(2,32)-1;c.split=function(n,o){var i=this+"";if(n===void 0&&0===o)return[];if(!e(n))return q(this,n,o);var a,u,s,c,l=[],f=(n.ignoreCase?"i":"")+(n.multiline?"m":"")+(n.unicode?"u":"")+(n.sticky?"y":""),h=0,p=RegExp(n.source,f+"g");t||(a=RegExp("^"+p.source+"$(?!\\s)",f));var d=o===void 0?r:Z.ToUint32(o);for(u=p.exec(i);u&&(s=u.index+u[0].length,!(s>h&&(X(l,W(i,h,u.index)),!t&&u.length>1&&u[0].replace(a,function(){for(var t=1;arguments.length-2>t;t++)arguments[t]===void 0&&(u[t]=void 0)}),u.length>1&&u.index<i.length&&g.apply(l,B(u,1)),c=u[0].length,h=s,l.length>=d)));)p.lastIndex===u.index&&p.lastIndex++,u=p.exec(i);return h===i.length?(c||!p.test(""))&&X(l,""):X(l,W(i,h)),l.length>d?B(l,0,d):l}}():"0".split(void 0,0).length&&(c.split=function(t,e){return t===void 0&&0===e?[]:q(this,t,e)});var Tr=c.replace,Dr=function(){var t=[];return"x".replace(/x(.)?/g,function(e,r){X(t,r)}),1===t.length&&t[0]===void 0}();Dr||(c.replace=function(r,n){var o=t(n),i=e(r)&&/\)[*?]/.test(r.source);if(o&&i){var a=function(t){var e=arguments.length,o=r.lastIndex;r.lastIndex=0;var i=r.exec(t)||[];return r.lastIndex=o,X(i,arguments[e-2],arguments[e-1]),n.apply(this,i)};return Tr.call(this,r,a)}return Tr.call(this,r,n)});var Er=c.substr,xr="".substr&&"b"!=="0b".substr(-1);P(c,{substr:function(t,e){var r=t;return 0>t&&(r=w(this.length+t,0)),Er.call(this,r,e)}},xr);var Sr="	\n\f\r   ᠎             　\u2028\u2029﻿",jr="​",Or="["+Sr+"]",Mr=RegExp("^"+Or+Or+"*"),Ir=RegExp(Or+Or+"*$"),Fr=c.trim&&(Sr.trim()||!jr.trim());P(c,{trim:function Ur(){if(this===void 0||null===this)throw new TypeError("can't convert "+this+" to object");return s(this).replace(Mr,"").replace(Ir,"")}},Fr);var Ur=m.bind(String.prototype.trim),Nr=c.lastIndexOf&&-1!=="abcあい".lastIndexOf("あい",2);P(c,{lastIndexOf:function(t){if(this===void 0||null===this)throw new TypeError("can't convert "+this+" to object");for(var e=s(this),r=s(t),n=arguments.length>1?l(arguments[1]):0/0,o=z(n)?1/0:Z.ToInteger(n),i=T(w(o,0),e.length),a=r.length,u=i+a;u>0;){u=w(0,u-a);var c=_(W(e,u,i+a),r);if(-1!==c)return u+c}return-1}},Nr);var Cr=c.lastIndexOf;if(P(c,{lastIndexOf:function(){return Cr.apply(this,arguments)}},1!==c.lastIndexOf.length),(8!==parseInt(Sr+"08")||22!==parseInt(Sr+"0x16"))&&(parseInt=function(t){var e=/^[\-+]?0[xX]/;return function(r,n){var o=Ur(r+""),i=l(n)||(e.test(o)?16:10);return t(o,i)}}(parseInt)),1/parseFloat("-0")!==-1/0&&(parseFloat=function(t){return function(e){var r=Ur(e+""),n=t(r);return 0===n&&"-"===W(r,0,1)?0:n}}(parseFloat)),"RangeError: test"!=new RangeError("test")+""){var kr=function(){if(this===void 0||null===this)throw new TypeError("can't convert "+this+" to object");var t=this.name;t===void 0?t="Error":"string"!=typeof t&&(t=s(t));var e=this.message;return e===void 0?e="":"string"!=typeof e&&(e=s(e)),t?e?t+": "+e:t:e};Error.prototype.toString=kr}if(R){var $r=function(t,e){if(K(t,e)){var r=Object.getOwnPropertyDescriptor(t,e);r.configurable&&(r.enumerable=!1,Object.defineProperty(t,e,r))}};$r(Error.prototype,"message"),""!==Error.prototype.message&&(Error.prototype.message=""),$r(Error.prototype,"name")}});