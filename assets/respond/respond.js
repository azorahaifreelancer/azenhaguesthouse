!function(e){"use strict";var t={};e.respond=t,t.update=function(){};var a=[],n=function(){var t=!1;try{t=new e.XMLHttpRequest}catch(a){t=new e.ActiveXObject("Microsoft.XMLHTTP")}return function(){return t}}(),r=function(e,t){var a=n();a&&(a.open("GET",e,!0),a.onreadystatechange=function(){4!==a.readyState||200!==a.status&&304!==a.status||t(a.responseText)},4!==a.readyState&&a.send(null))},s=function(e){return e.replace(t.regex.minmaxwh,"").match(t.regex.other)};if(t.ajax=r,t.queue=a,t.unsupportedmq=s,t.regex={media:/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi,keyframes:/@(?:\-(?:o|moz|webkit)\-)?keyframes[^\{]+\{(?:[^\{\}]*\{[^\}\{]*\})+[^\}]*\}/gi,comments:/\/\*[^*]*\*+([^/][^*]*\*+)*\//gi,urls:/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,findStyles:/@media *([^\{]+)\{([\S\s]+?)$/,only:/(only\s+)?([a-zA-Z]+)\s?/,minw:/\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,maxw:/\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,minmaxwh:/\(\s*m(in|ax)\-(height|width)\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/gi,other:/\([^\)]*\)/g},t.mediaQueriesSupported=e.matchMedia&&null!==e.matchMedia("only all")&&e.matchMedia("only all").matches,!t.mediaQueriesSupported){var i,o,l,m=e.document,h=m.documentElement,d=[],u=[],c=[],p={},f=m.getElementsByTagName("head")[0]||h,g=m.getElementsByTagName("base")[0],x=f.getElementsByTagName("link"),y=function(){var e,t=m.createElement("div"),a=m.body,n=h.style.fontSize,r=a&&a.style.fontSize,s=!1;return t.style.cssText="position:absolute;font-size:1em;width:1em",a||((a=s=m.createElement("body")).style.background="none"),h.style.fontSize="100%",a.style.fontSize="100%",a.appendChild(t),s&&h.insertBefore(a,h.firstChild),e=t.offsetWidth,s?h.removeChild(a):a.removeChild(t),h.style.fontSize=n,r&&(a.style.fontSize=r),e=l=parseFloat(e)},v=function(t){var a="clientWidth",n=h[a],r="CSS1Compat"===m.compatMode&&n||m.body[a]||n,s={},p=x[x.length-1],g=(new Date).getTime();if(t&&i&&g-i<30)return e.clearTimeout(o),void(o=e.setTimeout(v,30));i=g;for(var w in d)if(d.hasOwnProperty(w)){var E=d[w],S=E.minw,T=E.maxw,$=null===S,z=null===T;S&&(S=parseFloat(S)*(S.indexOf("em")>-1?l||y():1)),T&&(T=parseFloat(T)*(T.indexOf("em")>-1?l||y():1)),E.hasquery&&($&&z||!($||r>=S)||!(z||r<=T))||(s[E.media]||(s[E.media]=[]),s[E.media].push(u[E.rules]))}for(var b in c)c.hasOwnProperty(b)&&c[b]&&c[b].parentNode===f&&f.removeChild(c[b]);c.length=0;for(var C in s)if(s.hasOwnProperty(C)){var R=m.createElement("style"),O=s[C].join("\n");R.type="text/css",R.media=C,f.insertBefore(R,p.nextSibling),R.styleSheet?R.styleSheet.cssText=O:R.appendChild(m.createTextNode(O)),c.push(R)}},w=function(e,a,n){var r=e.replace(t.regex.comments,"").replace(t.regex.keyframes,"").match(t.regex.media),i=r&&r.length||0;a=a.substring(0,a.lastIndexOf("/"));var o=function(e){return e.replace(t.regex.urls,"$1"+a+"$2$3")},l=!i&&n;a.length&&(a+="/"),l&&(i=1);for(var m=0;m<i;m++){var h,c,p,f;l?(h=n,u.push(o(e))):(h=r[m].match(t.regex.findStyles)&&RegExp.$1,u.push(RegExp.$2&&o(RegExp.$2))),f=(p=h.split(",")).length;for(var g=0;g<f;g++)c=p[g],s(c)||d.push({media:c.split("(")[0].match(t.regex.only)&&RegExp.$2||"all",rules:u.length-1,hasquery:c.indexOf("(")>-1,minw:c.match(t.regex.minw)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:c.match(t.regex.maxw)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}v()},E=function(){if(a.length){var t=a.shift();r(t.href,function(a){w(a,t.href,t.media),p[t.href]=!0,e.setTimeout(function(){E()},0)})}},S=function(){for(var t=0;t<x.length;t++){var n=x[t],r=n.href,s=n.media,i=n.rel&&"stylesheet"===n.rel.toLowerCase();r&&i&&!p[r]&&(n.styleSheet&&n.styleSheet.rawCssText?(w(n.styleSheet.rawCssText,r,s),p[r]=!0):(/^([a-zA-Z:]*\/\/)/.test(r)||g)&&r.replace(RegExp.$1,"").split("/")[0]!==e.location.host||("//"===r.substring(0,2)&&(r=e.location.protocol+r),a.push({href:r,media:s})))}E()};S(),t.update=S,t.getEmValue=y,e.addEventListener?e.addEventListener("resize",T,!1):e.attachEvent&&e.attachEvent("onresize",T)}function T(){v(!0)}}(this);
