"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[4797],{67447:function(t,i,e){e.d(i,{Z:function(){return s}});var r=e(4002);function s(t){var i=r(t.target),e=i.find(t.slider),s=t.observerClass,n=t.lazyClass,o=new MutationObserver((function(){i.hasClass(s)&&(r(i).find(n).each((function(t,i){var e=r(i),s=e.attr("data-src");e.attr("src",s)})),void e.each((function(t,i){r(i).data("bxSlider")&&r(i).data("bxSlider").reloadSlider()})))&&o.disconnect()}));i[0]&&o.observe(i[0],{attributes:!0})}},5015:function(t,i,e){var r=e(4002),s=e.n(r);class n{constructor(t){this.$wrapper=t,editmode?this.$wrapper.on("click",".routing-visitors-expand-button-editmode",this.handleToggle.bind(this)):this.$wrapper.on("click",this.handleOpen.bind(this)).on("click",".routing-visitors-close-button",this.handleClose.bind(this))}handleToggle(t){s()(t.currentTarget).closest(".pimcore_block_entry").siblings(".pimcore_block_entry").slideToggle(),s()(t.currentTarget).siblings(".routing-visitors-block-expand-content").slideToggle(),s()(t.currentTarget).find(".expand-text").toggle()}handleOpen(t){this.trackPiwikExpand();let i=s()(t.currentTarget).find(".routing-visitors-block-expand-content"),e=s()(t.currentTarget).siblings(".routing-visitors-block");s()(t.currentTarget).find(".routing-visitors-close-button").show(100),s()(t.currentTarget).find(".routing-visitors-block-expand-button").css("display","none"),this.$wrapper.hasClass("expanded")||e.animate({flexGrow:"toggle",opacity:"toggle",width:"toggle"},{duration:"slow",start:()=>{s()(t.currentTarget).siblings(".routing-visitors-block").hide(100),e.find(".routing-visitors-icon").css("display","none")},complete:()=>{s()(t.currentTarget).parent().addClass("expanded"),s()(t.currentTarget).addClass("expanded"),i.slideDown(400,(()=>{s()("body").trigger("expand-block",this.$wrapper),this.$wrapper.find("[data-slider]").trigger("reload-slider")}))}})}handleClose(t){t.stopPropagation();let i=s()(t.currentTarget).siblings(".routing-visitors-block-expand-content"),e=this.$wrapper.siblings(".routing-visitors-block");this.$wrapper.removeClass("expanded"),this.$wrapper.find(".routing-visitors-close-button").hide(100),i.slideUp(400,(function(){e.parent().removeClass("expanded")})),e.animate({flexGrow:"1",opacity:"1"},{duration:"slow",start:function(){e.show(400),s()(t.currentTarget).siblings(".routing-visitors-block-expand-button").css("display","block")}}),setTimeout((()=>e.find(".routing-visitors-icon").show(100)),900)}trackPiwikExpand(){if("undefined"!=typeof _paq){var t=this.$wrapper.find(".routing-visitors-block-title").text().trim();_paq.push(["trackEvent","Routing Visitors","Routing Visitors: click","Routing Visitors: click:"+t])}}}var o=e(67447);s()(document).ready((()=>{s()(".routing-visitors-block").each(((t,i)=>new n(s()(i)))),editmode||new o.Z({target:".routing-visitors-blocks-wrapper",slider:".a-slider__items",observerClass:"expanded",lazyClass:".lazy"})}))}},function(t){t.O(0,[3913],(function(){return i=5015,t(t.s=i);var i}));t.O()}]);