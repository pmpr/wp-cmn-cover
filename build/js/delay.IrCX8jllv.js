document.addEventListener("DOMContentLoaded",(function(){let e=[].slice.call(document.querySelectorAll("script[data-source]")),t=[],n=!1;if(e.length>0){e.sort((function(e,t){return e.getAttribute("data-priority")-t.getAttribute("data-priority")})).reverse();for(let n=0;n<e.length;n++)t.push(e[n]);window.addEventListener("click",i),window.addEventListener("resize",i),document.addEventListener("scroll",i),window.addEventListener("mousemove",i),window.addEventListener("touchstart",i)}function o(){let e=!1;return t.length>0?e=t.pop():(window.removeEventListener("click",i),window.removeEventListener("resize",i),document.removeEventListener("scroll",i),window.removeEventListener("mousemove",i),window.removeEventListener("touchstart",i),setTimeout((()=>{["DOMContentLoaded","load","resize"].forEach((e=>{PMPRInlineUtil.triggerEvent(e,{bubbles:!0,cancelable:!0})}))}),1e3),n=!1),e}function r(e){setTimeout((()=>{if(e){e.readyState?e.onreadystatechange=function(){"loaded"!==e.readyState&&"complete"!==e.readyState||(e.onreadystatechange=null,r(o()))}:e.onload=function(){r(o())};let t=e.getAttribute("data-source");t&&(e.src=t,e.removeAttribute("data-source"),PMPRInlineUtil.addClass(e,"asset-loaded"))}}),50)}function i(){!1===n&&(n=!0,r(o()))}}));