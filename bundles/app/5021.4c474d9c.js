"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[5021],{83642:function(t,e,o){o.r(e),o.d(e,{default:function(){return r}});var n=o(4002),i=o.n(n);class r{constructor(t){this.$tooltip=t,this.$tooltipContent=this.$tooltip.find(".tooltip-content"),this.$tooltipBoundaries=this.$tooltip.closest(".tooltip-borders"),this.$tooltipBoundaries.length&&(r.initTooltipBoundaries(this.$tooltipContent,this.$tooltipBoundaries),i()(window).resize((()=>r.initTooltipBoundaries(this.$tooltipContent,this.$tooltipBoundaries))))}static initTooltipBoundaries(t,e){let o=e=>{isRtl?t.css("right",`calc(50% - ${e}px)`):t.css("left",`calc(50% + ${e}px)`)};t.css("width",""),o(0);let n=t.outerWidth(),i=e.width();i<n&&(t.css("width",i+"px"),n=i);let r=e.offset().left,a=t.offset().left;if(a<r)return void o(r-a);let s=r+i,l=a+n;l>s&&o(s-l)}}},55021:function(t,e,o){o.d(e,{Z:function(){return s}});var n=o(4002),i=o.n(n),r=o(59370),a=o(83642);function s(t){editmode||"en"!==language||((t=t.filter(((t,e)=>!i()(e).hasClass("no-header-anchor")))).hover((t=>{let e=i()(t.currentTarget);e.find(".header-anchor").length||function(t){let e=t.find('[name][name!=""]').attr("name"),o=t.text(),n=translations["Copy link to this section"]+": "+o;e||(e=(0,r.lV)(o));t.append(`\n        <button type="button" class="header-anchor" data-anchor="${e}" data-title="${n}">\n            <span class="header-anchor-text" aria-label="${n}"></span>\n        </button>\n    `);let s=t.find(".header-anchor"),c=s.find(".header-anchor-text"),u=i()("body");a.default.initTooltipBoundaries(c,u),i()(window).resize((()=>a.default.initTooltipBoundaries(c,u)));let d=null;s.on("click",l),s.hover((()=>{d&&clearTimeout(d),!s.hasClass("copied")&&c.text(s.data("title")),c.addClass("active")}),(()=>{c.removeClass("active"),d=setTimeout((()=>!c.hasClass("active")&&c.text("")),1e3)}))}(e),e.find(".header-anchor").addClass("active")}),(t=>{i()(t.currentTarget).find(".header-anchor").removeClass("active")})),function(t){let e=window.location.hash.substring(1);if(!e)return;if(!i()(`a[href="#${e}"]`))return;t.each(((t,o)=>{let n=i()(o),a=(0,r.lV)(n.text());if(e===a)return(0,r.X5)(n),!1}))}(t))}function l(t){let e=i()(t.currentTarget),o=e.find(".header-anchor-text"),n=document.location.href.split("#")[0]+"#"+e.data("anchor"),a=translations["Copied!"];(0,r.E)(n),e.addClass("copied"),o.text(a),setTimeout((()=>e.removeClass("copied")),1700),setTimeout((()=>o.text(e.data("title"))),2200)}},59370:function(t,e,o){o.d(e,{v4:function(){return r},d8:function(){return a},ej:function(){return s},lV:function(){return l},E:function(){return c},X5:function(){return u}});var n=o(4002),i=o.n(n);function r(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,o=t.offset().top-e,n=o+t.outerHeight()+e,r=i()(".header").height(),a=i()(window).scrollTop()+r,s=a+i()(window).height();return n>a&&o<s}function a(t,e,o){var n="";if(o){var i=new Date;i.setTime(i.getTime()+60*o*1e3),n="; expires="+i.toUTCString()}document.cookie=t+"="+(e||"")+n+"; path=/"}function s(t){for(var e=t+"=",o=document.cookie.split(";"),n=0;n<o.length;n++){for(var i=o[n];" "===i.charAt(0);)i=i.substring(1,i.length);if(0===i.indexOf(e))return i.substring(e.length,i.length)}return null}function l(t){return String(t).normalize("NFKD").replace(/[\u0300-\u036f]/g,"").trim().toLowerCase().replace(/[^a-z0-9 -]/g,"").replace(/\s+/g,"-").replace(/-+/g,"-")}function c(t){if(navigator.clipboard)navigator.clipboard.writeText(t);else{const t=i()("<input>");i()("body").append(t),t.val(text).select(),addLinkOnCopy=!1,document.execCommand("copy"),addLinkOnCopy=!0,t.remove()}}function u(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1800;t.is(":visible")||(t=t.parents(":visible").first());let o=i()("html, body"),n=i()(".header").height(),r=t.offset().top,a=()=>o.stop();o.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",a),o.stop().clearQueue().animate({scrollTop:r-n-40},e,(()=>{let i=t.offset().top;Math.abs(i-r)>200?o.stop().clearQueue().animate({scrollTop:i-n-40},e/3,(()=>{o.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",a)})):o.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",a)}))}}}]);