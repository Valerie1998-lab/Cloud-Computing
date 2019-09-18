

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
  <style>
  *,
*:after,
*::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

@font-face {
    font-weight: normal;
    font-style: normal;
    font-family: 'ecoicons';
    src: url("../fonts/ecoicons/ecoicons.eot");
    src: url("../fonts/ecoicons/ecoicons.eot?#iefix") format("embedded-opentype"), url("../fonts/ecoicons/ecoicons.woff") format("woff"), url("../fonts/ecoicons/ecoicons.ttf") format("truetype"), url("../fonts/ecoicons/ecoicons.svg#ecoicons") format("svg");
}

/* Icomoon.com */

.gn-menu-main,
.gn-menu-main ul {
    margin: 0;
    padding: 0;
    background: white;
    color: #5f6f81;
    list-style: none;
    text-transform: none;
    font-weight: 300;
    font-family: 'Lato', Arial, sans-serif;
    line-height: 60px;
}

.gn-menu-main {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    font-size: 13px;
}

.gn-menu-main a {
    display: block;
    height: 100%;
    color: #5f6f81;
    text-decoration: none;
    cursor: pointer;
}

.no-touch .gn-menu-main a:hover,
.no-touch .gn-menu li.gn-search-item:hover,
.no-touch .gn-menu li.gn-search-item:hover a {
    background: #5f6f81;
    color: white;
}

.gn-menu-main > li {
    display: block;
    float: left;
    height: 100%;
    border-right: 1px solid #c6d0da;
    text-align: center;
}

/* icon-only trigger (menu item) */

.gn-menu-main li.gn-trigger {
    position: relative;
    width: 60px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.gn-menu-main > li:last-child {
    float: right;
    border-right: none;
    border-left: 1px solid #c6d0da;
}

.gn-menu-main > li > a {
    padding: 0 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
}

.gn-menu-main:after {
    display: table;
    clear: both;
    content: "";
}

.gn-menu-wrapper {
    position: fixed;
    top: 60px;
    bottom: 0;
    left: 0;
    overflow: hidden;
    width: 60px;
    border-top: 1px solid #c6d0da;
    background: white;
    -webkit-transform: translateX(-60px);
    -moz-transform: translateX(-60px);
    transform: translateX(-60px);
    -webkit-transition: -webkit-transform 0.3s, width 0.3s;
    -moz-transition: -moz-transform 0.3s, width 0.3s;
    transition: transform 0.3s, width 0.3s;
}

.gn-scroller {
    position: absolute;
    overflow-y: scroll;
    width: 370px;
    height: 100%;
}

.gn-menu {
    border-bottom: 1px solid #c6d0da;
    text-align: left;
    font-size: 18px;
}

.gn-menu li:not(:first-child),
.gn-menu li li {
    box-shadow: inset 0 1px #c6d0da
}

.gn-submenu li {
    overflow: hidden;
    height: 0;
    -webkit-transition: height 0.3s;
    -moz-transition: height 0.3s;
    transition: height 0.3s;
}

.gn-submenu li a {
    color: #c1c9d1
}

input.gn-search {
    position: relative;
    z-index: 10;
    padding-left: 60px;
    outline: none;
    border: none;
    background: transparent;
    color: #5f6f81;
    font-weight: 300;
    font-family: 'Lato', Arial, sans-serif;
    cursor: pointer;
}

/* placeholder */

.gn-search::-webkit-input-placeholder {
    color: #5f6f81
}

.gn-search:-moz-placeholder {
    color: #5f6f81
}

.gn-search::-moz-placeholder {
    color: #5f6f81
}

.gn-search:-ms-input-placeholder {
    color: #5f6f81
}

/* hide placeholder when active in Chrome */

.gn-search:focus::-webkit-input-placeholder,
.no-touch .gn-menu li.gn-search-item:hover .gn-search:focus::-webkit-input-placeholder {
    color: transparent
}

input.gn-search:focus {
    cursor: text
}

.no-touch .gn-menu li.gn-search-item:hover input.gn-search {
    color: white
}

/* placeholder */

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-webkit-input-placeholder {
    color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-moz-placeholder {
    color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-moz-placeholder {
    color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-ms-input-placeholder {
    color: white
}

.gn-menu-main a.gn-icon-search {
    position: absolute;
    top: 0;
    left: 0;
    height: 60px;
}

.gn-icon::before {
    display: inline-block;
    width: 60px;
    text-align: center;
    text-transform: none;
    font-weight: normal;
    font-style: normal;
    font-variant: normal;
    font-family: 'ecoicons';
    line-height: 1;
    speak: none;
    -webkit-font-smoothing: antialiased;
}

.gn-icon-help::before {
    content: "\e000"
}

.gn-icon-earth::before {
    content: "\e004"
}

.gn-icon-cog::before {
    content: "\e006"
}

.gn-icon-search::before {
    content: "\e005"
}

.gn-icon-download::before {
    content: "\e007"
}

.gn-icon-photoshop::before {
    content: "\e001"
}

.gn-icon-illustrator::before {
    content: "\e002"
}

.gn-icon-archive::before {
    content: "\e00d"
}

.gn-icon-article::before {
    content: "\e003"
}

.gn-icon-pictures::before {s
    content: "\e008"
}

.gn-icon-videos::before {
    content: "\e009"
}

/* if an icon anchor has a span, hide the span */

.gn-icon span {
    width: 0;
    height: 0;
    display: block;
    overflow: hidden;
}

.gn-icon-menu::before {
    margin-left: -15px;
    vertical-align: -2px;
    width: 30px;
    height: 3px;
    background: #5f6f81;
    box-shadow: 0 3px white, 0 -6px #5f6f81, 0 -9px white, 0 -12px #5f6f81;
    content: '';
}

.no-touch .gn-icon-menu:hover::before,
.no-touch .gn-icon-menu.gn-selected:hover::before {
    background: white;
    box-shadow: 0 3px #5f6f81, 0 -6px white, 0 -9px #5f6f81, 0 -12px white;
}

.gn-icon-menu.gn-selected::before {
    background: #5993cd;
    box-shadow: 0 3px white, 0 -6px #5993cd, 0 -9px white, 0 -12px #5993cd;
}

/* styles for opening menu */

.gn-menu-wrapper.gn-open-all,
.gn-menu-wrapper.gn-open-part {
    -webkit-transform: translateX(0px);
    -moz-transform: translateX(0px);
    transform: translateX(0px);
}

.gn-menu-wrapper.gn-open-all {
    width: 340px
}

.gn-menu-wrapper.gn-open-all .gn-submenu li {
    height: 60px
}

@media screen and (max-width: 422px) { 
  .gn-menu-wrapper.gn-open-all {
      -webkit-transform: translateX(0px);
      -moz-transform: translateX(0px);
      transform: translateX(0px);
      width: 100%;
  }

  .gn-menu-wrapper.gn-open-all .gn-scroller {
      width: 130%
  }
}

@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@font-face {
  font-family: 'codropsicons';
  src:url('../fonts/codropsicons/codropsicons.eot');
  src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
    url('../fonts/codropsicons/codropsicons.woff') format('woff'),
    url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
    url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
  font-weight: normal;
  font-style: normal;
}

body {
  background: #34495e;
}

.container > header,
.codrops-top {
  color: #fff;
  font-family: 'Lato', Arial, sans-serif;
}

.container > header {
  margin: 0 auto;
  padding: 12em 2em;
  padding-left: 370px;
  background: rgba(0,0,0,0.05);
}

.container > header a {
  color: #566473;
  text-decoration: none;
  outline: none;
}

.container > header a:hover {
  color: #4f7bab;
}

.container > header h1 {
  font-size: 3.2em;
  line-height: 1.3;
  margin: 0;
  font-weight: 300;
}

.container > header span {
  display: block;
  font-size: 55%;
  color: #74818e;
  padding: 0 0 0.6em 0.1em;
}

/* To Navigation Style */
.codrops-top {
  background: #fff;
  background: rgba(255, 255, 255, 0.6);
  text-transform: uppercase;
  width: 100%;
  font-size: 0.69em;
  line-height: 2.2;
}

.codrops-top a {
  text-decoration: none;
  padding: 0 1em;
  letter-spacing: 0.1em;
  color: #888;
  display: inline-block;
}

.codrops-top a:hover {
  background: rgba(255,255,255,0.95);
  color: #333;
}

.codrops-top span.right {
  float: right;
}

.codrops-top span.right a {
  float: left;
  display: block;
}

.codrops-icon:before {
  font-family: 'codropsicons';
  margin: 0 4px;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
}

.codrops-icon-drop:before {
  content: "\e001";
}

.codrops-icon-prev:before {
  content: "\e004";
}

/* Demo Buttons Style */
.codrops-demos {
  padding-top: 1em;
  font-size: 0.9em;
}

.codrops-demos a {
  text-decoration: none;
  outline: none;
  display: inline-block;
  margin: 0.5em;
  padding: 0.7em 1.1em;
  border: 3px solid #b1aea6;
  color: #b1aea6;
  font-weight: 700;
}

.codrops-demos a:hover,
.codrops-demos a.current-demo,
.codrops-demos a.current-demo:hover {
  border-color: #89867e;
  color: #89867e;
}

@media screen and (max-width: 1025px) {
  .container > header {
    margin: 0 auto;
    padding: 120px 50px;
    font-size: 70%;
    text-align: right;
  }
}

@media screen and (max-width: 740px) {

  .codrops-icon span {
    display: none;
  }

}
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block;}audio,canvas,video{display:inline-block;}audio:not([controls]){display:none;height:0;}[hidden]{display:none;}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;}a:focus{outline:thin dotted;}a:active,a:hover{outline:0;}h1{font-size:2em;margin:0.67em 0;}abbr[title]{border-bottom:1px dotted;}b,strong{font-weight:bold;}dfn{font-style:italic;}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0;}mark{background:#ff0;color:#000;}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em;}pre{white-space:pre-wrap;}q{quotes:"\201C" "\201D" "\2018" "\2019";}small{font-size:80%;}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}sup{top:-0.5em;}sub{bottom:-0.25em;}img{border:0;}svg:not(:root){overflow:hidden;}figure{margin:0;}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}legend{border:0;padding:0;}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;}button,input{line-height:normal;}button,select{text-transform:none;}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}button[disabled],html input[disabled]{cursor:default;}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}textarea{overflow:auto;vertical-align:top;}table{border-collapse:collapse;border-spacing:0;}


</style>
  

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Google Nexus Website Menu</title>
    <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
    <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
   <script>
   /* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-touch-shiv-cssclasses-teststyles-prefixes-load
 */
;window.Modernizr=function(a,b,c){function w(a){j.cssText=a}function x(a,b){return w(m.join(a+";")+(b||""))}function y(a,b){return typeof a===b}function z(a,b){return!!~(""+a).indexOf(b)}function A(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:y(f,"function")?f.bind(d||b):f}return!1}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n={},o={},p={},q=[],r=q.slice,s,t=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},u={}.hasOwnProperty,v;!y(u,"undefined")&&!y(u.call,"undefined")?v=function(a,b){return u.call(a,b)}:v=function(a,b){return b in a&&y(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=r.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(r.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(r.call(arguments)))};return e}),n.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:t(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c};for(var B in n)v(n,B)&&(s=B.toLowerCase(),e[s]=n[B](),q.push((e[s]?"":"no-")+s));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)v(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},w(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e.testStyles=t,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+q.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
   </script>
  </head>
  <body>
    <div class="container">
      <ul id="gn-menu" class="gn-menu-main">
        <li class="gn-trigger">
          <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
          <nav class="gn-menu-wrapper">
            <div class="gn-scroller">
              <ul class="gn-menu">
                <li class="gn-search-item">
                  <input placeholder="Search" type="search" class="gn-search">
                  <a class="gn-icon gn-icon-search"><span> Search</span></a>
                </li>
                <li>
                  
                  <ul class="gn-submenu">
                    
                  </ul>
                </li>

                <li><a href="login.php" >Login</a></li>

                <li><a href="brand.php" >Brand</a></li>
                <li><a href="usage.php" >Usage</a></li>
                <li>
                 
                  <ul class="gn-submenu">
                    
                  </ul>
                </li>
              </ul>
            </div><!-- /gn-scroller -->
          </nav>
        </li>
        <li><a href="http://tympanus.net/codrops">Welcome Back!</a></li>
        
        <li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>LogOut</span></a></li>
      </ul>
      <header>
        <h1>SMART GAS <span>Reliable Patner <a href="http://www.google.com/nexus/index.html"></a> </span></h1>  
      </header> 
    </div><!-- /container -->

    <script>
    /*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

    </script>

    <script>
    /**
 * gnmenu.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( window ) {
  
  'use strict';

  // http://stackoverflow.com/a/11381730/989439
  function mobilecheck() {
    var check = false;
    (function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
  }

  function gnMenu( el, options ) {  
    this.el = el;
    this._init();
  }

  gnMenu.prototype = {
    _init : function() {
      this.trigger = this.el.querySelector( 'a.gn-icon-menu' );
      this.menu = this.el.querySelector( 'nav.gn-menu-wrapper' );
      this.isMenuOpen = false;
      this.eventtype = mobilecheck() ? 'touchstart' : 'click';
      this._initEvents();

      var self = this;
      this.bodyClickFn = function() {
        self._closeMenu();
        this.removeEventListener( self.eventtype, self.bodyClickFn );
      };
    },
    _initEvents : function() {
      var self = this;

      if( !mobilecheck() ) {
        this.trigger.addEventListener( 'mouseover', function(ev) { self._openIconMenu(); } );
        this.trigger.addEventListener( 'mouseout', function(ev) { self._closeIconMenu(); } );
      
        this.menu.addEventListener( 'mouseover', function(ev) {
          self._openMenu(); 
          document.addEventListener( self.eventtype, self.bodyClickFn ); 
        } );
      }
      this.trigger.addEventListener( this.eventtype, function( ev ) {
        ev.stopPropagation();
        ev.preventDefault();
        if( self.isMenuOpen ) {
          self._closeMenu();
          document.removeEventListener( self.eventtype, self.bodyClickFn );
        }
        else {
          self._openMenu();
          document.addEventListener( self.eventtype, self.bodyClickFn );
        }
      } );
      this.menu.addEventListener( this.eventtype, function(ev) { ev.stopPropagation(); } );
    },
    _openIconMenu : function() {
      classie.add( this.menu, 'gn-open-part' );
    },
    _closeIconMenu : function() {
      classie.remove( this.menu, 'gn-open-part' );
    },
    _openMenu : function() {
      if( this.isMenuOpen ) return;
      classie.add( this.trigger, 'gn-selected' );
      this.isMenuOpen = true;
      classie.add( this.menu, 'gn-open-all' );
      this._closeIconMenu();
    },
    _closeMenu : function() {
      if( !this.isMenuOpen ) return;
      classie.remove( this.trigger, 'gn-selected' );
      this.isMenuOpen = false;
      classie.remove( this.menu, 'gn-open-all' );
      this._closeIconMenu();
    }
  }

  // add to global namespace
  window.gnMenu = gnMenu;

} )( window );
    </script>



    <script>
      new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>
  </body>
</html>

