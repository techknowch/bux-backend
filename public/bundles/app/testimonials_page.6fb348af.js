"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[7355],{67469:function(t,e,i){var r=i(4002),a=i.n(r);e.Z=function(t){var e=t,i=e.find(".j-modal-close");function r(){e.addClass("hide"),a()("body").removeClass("scrollDisabled"),e.trigger("closeModal")}this.$block=e,this.open=function(){e.removeClass("hide"),a()("body").addClass("scrollDisabled")},this.close=r,i.on("click",r),e.on("click",(function(t){e.is(t.target)&&r()}))}},72163:function(t,e,i){i.d(e,{ZP:function(){return n},L9:function(){return o}});var r=i(4002),a=i.n(r);function n(){let t=a()("body");t.on("click",".js-track-click",(t=>s(a()(t.currentTarget),"Click"))),t.on("mouseenter",".js-track-hover",(t=>s(a()(t.currentTarget),"Hover"))),t.on("change",".js-track-change",(t=>s(a()(t.currentTarget),"Change"))),t.on("submit",".js-track-search",(t=>s(a()(t.currentTarget),"Search")));let e=[".bookmarks-wrapper",".page-navigation-menu-wrapper",".page-menu"];a()('a:not([class]):not([href^="#"])').click((t=>{let i=a()(t.currentTarget);for(let t of e)if(i.closest(t).length)return;let r=(""+i.text()).trim(),n=(""+i.closest("[data-track-source]").data("track-source")).trim();r&&n&&o(n,"content link",r,"Click")}))}function s(t,e){let i=t.closest("[data-track-source]").data("track-source"),r=t.data("track-element")||function(t){let e=t.prop("tagName").toLowerCase(),i=t.attr("type");switch(!0){case"a"===e:return"link";case"button"===e:return"button";case"input"===e&&"radio"===i:return`radio (${t.attr("name")})`;case"input"===e&&"checkbox"===i:return`checkbox (${t.attr("name")})`;case"input"===e&&"text"===i:case"input"===e&&"email"===i:case"input"===e&&"tel"===i:case"input"===e:case"textarea"===e:return"input";default:return"element"}}(t),a=t.data("track-text")||function(t){let e=t.prop("tagName").toLowerCase(),i=t.attr("type");if("input"===e&&["text","email","tel"].includes(i))return t.attr("name");if("textarea"===e)return t.attr("name");if("form"===e&&t.hasClass("js-track-search"))return t.find('input[name="q"]').val();if(t.text())return t.text();return t.val()}(t),n=t.data("track-event")||function(t,e){let i=t.prop("tagName").toLowerCase(),r=t.attr("type");if("Change"===e&&"input"===i&&"checkbox"===r)return t.prop("checked")?"Choose":"Remove choose";if("Change"===e&&"input"===i&&["text","email","tel"].includes(r))return`Enter "${t.val()}"`;if("Change"===e&&"textarea"===i)return`Enter "${t.val()}"`;return e}(t,e);o(i,r,a,n)}function o(t,e,i,r){let a=`[${t=(""+t).trim()}]: ${e=(""+e).trim()} "${i=(""+i).trim()}" - ${r=(""+r).trim()}`;_paq.push(["trackEvent",t,r,a]),ga("send","event",t,a)}},59370:function(t,e,i){i.d(e,{v4:function(){return n},d8:function(){return s},ej:function(){return o},lV:function(){return l},E:function(){return c},X5:function(){return u}});var r=i(4002),a=i.n(r);function n(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=t.offset().top-e,r=i+t.outerHeight()+e,n=a()(".header").height(),s=a()(window).scrollTop()+n,o=s+a()(window).height();return r>s&&i<o}function s(t,e,i){var r="";if(i){var a=new Date;a.setTime(a.getTime()+60*i*1e3),r="; expires="+a.toUTCString()}document.cookie=t+"="+(e||"")+r+"; path=/"}function o(t){for(var e=t+"=",i=document.cookie.split(";"),r=0;r<i.length;r++){for(var a=i[r];" "===a.charAt(0);)a=a.substring(1,a.length);if(0===a.indexOf(e))return a.substring(e.length,a.length)}return null}function l(t){return String(t).normalize("NFKD").replace(/[\u0300-\u036f]/g,"").trim().toLowerCase().replace(/[^a-z0-9 -]/g,"").replace(/\s+/g,"-").replace(/-+/g,"-")}function c(t){if(navigator.clipboard)navigator.clipboard.writeText(t);else{const t=a()("<input>");a()("body").append(t),t.val(text).select(),addLinkOnCopy=!1,document.execCommand("copy"),addLinkOnCopy=!0,t.remove()}}function u(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1800;t.is(":visible")||(t=t.parents(":visible").first());let i=a()("html, body"),r=a()(".header").height(),n=t.offset().top,s=()=>i.stop();i.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",s),i.stop().clearQueue().animate({scrollTop:n-r-40},e,(()=>{let a=t.offset().top;Math.abs(a-n)>200?i.stop().clearQueue().animate({scrollTop:a-r-40},e/3,(()=>{i.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",s)})):i.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove",s)}))}},58429:function(t,e,i){var r=i(4002),a=i.n(r),n=(i(70886),i(67469)),s=i(59370),o=i(72163);a()(document).ready((()=>{new l}));class l{constructor(){var t,e,i;i=400,(e="offsetForLoadTestimonials")in(t=this)?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,this.$wrapper=a()(".testimonial-page"),this.$itemsWrapper=this.$wrapper.find(".testimonial-items-wrapper"),this.$testimonials=this.$wrapper.find(".testimonial-item-wrapper"),this.$testimonialGroup=this.$wrapper.find(".testimonial-group"),this.$testimonialFilter=this.$wrapper.find(".testimonial-filter"),this.$mobileFilterSelect=this.$wrapper.find(".mobile-filters-select"),this.$mobileGroupSelect=this.$wrapper.find(".mobile-groups-select"),this.$testimonialLink=this.$wrapper.find(".read-original-link"),this.$shareTestimonialLink=this.$wrapper.find(".share-testimonial-link"),"scrollRestoration"in history&&(history.scrollRestoration="manual"),this.loadTestimonials(),this.$testimonialGroup.on("click",this.onTestimonialGroupClick.bind(this)),this.$testimonialFilter.on("click",this.onTestimonialFilterClick.bind(this)),this.$testimonialLink.on("click",this.onTestimonialLinkClick.bind(this)),this.$shareTestimonialLink.on("click",this.onShareTestimonialLinkClick.bind(this)),this.$mobileFilterSelect.on("change",this.onMobileFilterSelect.bind(this)),this.$mobileGroupSelect.on("change",this.onMobileGroupSelect.bind(this)),document.addEventListener("scroll",this.showMoreTestimonials.bind(this),{passive:!0})}onTestimonialGroupClick(t){const e=a()(t.currentTarget);if(e.hasClass("active"))return;const i=e.data("group");(0,o.L9)(this.$wrapper.data("track-source"),"tab",i,"Click"),this.openFilter(i,"all")}onTestimonialFilterClick(t){const e=a()(t.currentTarget);if(e.hasClass("active"))return;const i=e.closest(".filters-group-wrapper").data("group"),r=e.data("filter");(0,o.L9)(this.$wrapper.data("track-source"),"filter",a().trim(e.text()),"Click"),this.openFilter(i,r)}onMobileFilterSelect(t){const e=a()(t.currentTarget),i=e.find("option:selected"),r=e.closest(".mobile-filters-group-wrapper").data("group"),n=i.attr("value");(0,o.L9)(this.$wrapper.data("track-source"),"filter",a().trim(i.text()),"Click"),this.openFilter(r,n)}onMobileGroupSelect(t){const e=a()(t.currentTarget).find("option:selected").attr("value");(0,o.L9)(this.$wrapper.data("track-source"),"tab",e,"Click"),this.openFilter(e,"all")}onTestimonialLinkClick(t){t.preventDefault();const e=a()(t.currentTarget),i=e.data("scan"),r=e.data("title");if(!i)return;const s=a()(".read-original-testimonial-modal"),o=a()("<img>").attr("src",i);s.find(".modal-content").html(o),s.find(".modal-title").text(r);new n.Z(s.first()).open()}onShareTestimonialLinkClick(t){t.preventDefault();const e=a()(t.currentTarget),i=e.closest(".share-testimonial-link-container").find(".share-testimonial-link-tooltip");if((0,s.E)(e.attr("href")),+i.data("running"))return;const r=i.text(),n=i.data("on-copy");i.text(n).data("running",1),setTimeout((function(){i.text(r).data("running",0)}),3e3)}loadTestimonials(){const t=new URLSearchParams(window.location.search).get("testimonial"),e=this.$wrapper.find(".testimonial-filter.active"),i=e.closest(".filters-group-wrapper").data("group"),r=e.data("filter"),a=this.$itemsWrapper.data("pages");(0,o.L9)(this.$wrapper.data("track-source"),"load","More Testimonials","Scroll"),this.showTestimonials(i,r,a,t)}showMoreTestimonials(){(0,s.v4)(a()(".testimonial-item-wrapper.active:last"),this.offsetForLoadTestimonials)&&this.loadTestimonials()}openFilter(t,e){this.$wrapper.find(".testimonial-group").removeClass("active"),this.$wrapper.find('.testimonial-group[data-group="'+t+'"]').addClass("active"),this.$wrapper.find(".filters-group-wrapper").removeClass("active");const i=this.$wrapper.find('.filters-group-wrapper[data-group="'+t+'"]');i.addClass("active"),this.$wrapper.find(".mobile-filters-group-wrapper").removeClass("active");const r=this.$wrapper.find('.mobile-filters-group-wrapper[data-group="'+t+'"]');r.addClass("active"),this.$wrapper.find(".testimonial-filter").removeClass("active"),i.find('.testimonial-filter[data-filter="'+e+'"]').addClass("active"),r.find(".mobile-filters-select").val(e),this.setWindowUrl(this.$wrapper.data("url")+"?filter="+e),this.showTestimonials(t,e,1)}showTestimonials(t,e,i,r){if(r)this.$testimonials.each((function(t,e){a()(e).hide()}));else{const r=a()(window).width();let n,s=0,o=0,l=!1;n=r>1023?9*i:r>767?8*i:5*i,this.$testimonials.each((function(i,o){const l=a()(o);if(l.hasClass("filter-"+e)&&l.hasClass("group-"+t)){if(s>=n)return;l.hasClass("video")&&r>767&&n--,s++}})),this.$testimonials.each((function(i,r){const s=a()(r);if(s.hasClass("filter-"+e)&&s.hasClass("group-"+t)){if(o>=n)return s.removeClass("active"),void(l=!0);s.hasClass("active")||s.addClass("active"),o++}else s.removeClass("active")})),this.$itemsWrapper.data("pages",i+1)}}setWindowUrl(t){editmode||history.replaceState({},null,t)}}}},function(t){t.O(0,[3913,886],(function(){return e=58429,t(t.s=e);var e}));t.O()}]);