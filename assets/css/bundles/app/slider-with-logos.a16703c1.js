"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[9701],{72163:function(t,e,i){i.d(e,{ZP:function(){return n},L9:function(){return o}});var r=i(4002),a=i.n(r);function n(){let t=a()("body");t.on("click",".js-track-click",(t=>s(a()(t.currentTarget),"Click"))),t.on("mouseenter",".js-track-hover",(t=>s(a()(t.currentTarget),"Hover"))),t.on("change",".js-track-change",(t=>s(a()(t.currentTarget),"Change"))),t.on("submit",".js-track-search",(t=>s(a()(t.currentTarget),"Search")));let e=[".bookmarks-wrapper",".page-navigation-menu-wrapper",".page-menu"];a()('a:not([class]):not([href^="#"])').click((t=>{let i=a()(t.currentTarget);for(let t of e)if(i.closest(t).length)return;let r=(""+i.text()).trim(),n=(""+i.closest("[data-track-source]").data("track-source")).trim();r&&n&&o(n,"content link",r,"Click")}))}function s(t,e){let i=t.closest("[data-track-source]").data("track-source"),r=t.data("track-element")||function(t){let e=t.prop("tagName").toLowerCase(),i=t.attr("type");switch(!0){case"a"===e:return"link";case"button"===e:return"button";case"input"===e&&"radio"===i:return`radio (${t.attr("name")})`;case"input"===e&&"checkbox"===i:return`checkbox (${t.attr("name")})`;case"input"===e&&"text"===i:case"input"===e&&"email"===i:case"input"===e&&"tel"===i:case"input"===e:case"textarea"===e:return"input";default:return"element"}}(t),a=t.data("track-text")||function(t){let e=t.prop("tagName").toLowerCase(),i=t.attr("type");if("input"===e&&["text","email","tel"].includes(i))return t.attr("name");if("textarea"===e)return t.attr("name");if("form"===e&&t.hasClass("js-track-search"))return t.find('input[name="q"]').val();if(t.text())return t.text();return t.val()}(t),n=t.data("track-event")||function(t,e){let i=t.prop("tagName").toLowerCase(),r=t.attr("type");if("Change"===e&&"input"===i&&"checkbox"===r)return t.prop("checked")?"Choose":"Remove choose";if("Change"===e&&"input"===i&&["text","email","tel"].includes(r))return`Enter "${t.val()}"`;if("Change"===e&&"textarea"===i)return`Enter "${t.val()}"`;return e}(t,e);o(i,r,a,n)}function o(t,e,i,r){let a=`[${t=(""+t).trim()}]: ${e=(""+e).trim()} "${i=(""+i).trim()}" - ${r=(""+r).trim()}`;_paq.push(["trackEvent",t,r,a]),ga("send","event",t,a)}},62061:function(t,e,i){function r(t){let e=t._coordinates.length;if(isRtl&&e>=2){let i=t._coordinates[e-1]-t._coordinates[e-2];t._coordinates.push(t._coordinates[e-1]+i)}}function a(t){t.find(".owl-prev").attr("aria-label","Previous slide").attr("aria-label"),t.find(".owl-next").attr("aria-label","Next slide")}i.d(e,{k:function(){return r},T:function(){return a}})},82933:function(t,e,i){var r=i(4002),a=i.n(r),n=(i(97009),i(62061)),s=i(72163);a()(document).ready((()=>{a()(".swl-wrapper").each(((t,e)=>new o(a()(e))))}));class o{constructor(t){this.$wrapper=t,this.$slider=this.$wrapper.find(".swl-slider"),this.fixedSlides=+this.$slider.data("fixed-slides"),this.disableAutoPlay=+this.$slider.data("disable-auto-play"),this.initialized=!1,editmode||this.initSlider()}initSlider(){let t=this;this.$slider.owlCarousel({rtl:isRtl,margin:32,mouseDrag:!0,touchDrag:!0,nav:!0,navText:['<i class="swl-slider-icon-left"></i>','<i class="swl-slider-icon-right"></i>'],dots:!1,loop:!0,smartSpeed:650,autoplay:!this.disableAutoPlay,autoplayTimeout:5e3,autoplayHoverPause:!0,responsive:this.getResponsiveConfig(),onInitialized:function(){(0,n.k)(this),t.initialized=!0,t.$wrapper.on("click",".swl-slider-icon-left, .swl-slider-icon-right",(()=>{let e=this.normalize(this.current(),!0);(0,s.L9)(t.$wrapper.data("track-source"),"go to",`Slide ${e}`,"Click")}))},onDragged:t=>{if(!this.initialized)return;let e=t.item.index,i=this.$slider.find(".swl-slider-item").eq(e).data("slide");(0,s.L9)(this.$wrapper.data("track-source"),"go to",`Slide ${i}`,"Click")}})}getResponsiveConfig(){return this.fixedSlides?{0:{items:this.fixedSlides}}:a()(".icp").length?{0:{items:1},560:{items:2},768:{items:3},1200:{items:4},1600:{items:5}}:{0:{items:1},560:{items:2},768:{items:3},1024:{items:4},1200:{items:5},1440:{items:6}}}}}},function(t){t.O(0,[3913,7009],(function(){return e=82933,t(t.s=e);var e}));t.O()}]);