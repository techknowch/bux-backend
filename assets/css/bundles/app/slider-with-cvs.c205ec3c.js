"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[6974],{27441:function(s,i,t){var e=t(4002),h=t.n(e);h()(document).ready((()=>{h()(".scv-wrapper").each(((s,i)=>new d(h()(i))))}));class d{constructor(s){this.$wrapper=s,this.$slides=this.$wrapper.find(".scv-slide"),this.allSlides=this.$slides.length,this.slideWidth=null,editmode||(this.setHovered(),this.setWidth()),h()(window).on("resize",(()=>{editmode||this.setWidth()}))}setWidth(){this.screenWidth=h()(window).width(),this.screenWidth>1599?this.slideWidth=319:this.screenWidth>1280?this.slideWidth=300:this.screenWidth>767?this.slideWidth=250:this.slideWidth=300;const s=Math.floor((this.$wrapper.outerWidth()-this.slideWidth)/(this.allSlides-1)),i=this.$wrapper.outerWidth()-s*(this.allSlides-1);this.screenWidth>767?(this.$slides.css({width:"auto",minWidth:`${s}px`,flex:`1 1 ${s}px`}),this.$slides.find("img").css({width:`${i}px`}),this.$slides.find(".scv-slide-inner").css({width:`${i}px`})):(this.$slides.css({width:`${this.slideWidth}px`,minWidth:`${this.slideWidth}px`,flex:`1 1 ${this.slideWidth}px`}),this.$slides.find("img").css({width:`${this.slideWidth}px`}),this.$slides.find(".scv-slide-inner").css({width:`${this.slideWidth}px`}))}setHovered(){this.$slides.hover((s=>this.showSlide(h()(s.currentTarget)))),this.$slides.on("click",(s=>this.showSlide(h()(s.currentTarget))))}showSlide(s){this.$wrapper.find(".hovered").removeClass("hovered"),s.addClass("hovered")}}}},function(s){s.O(0,[3913],(function(){return i=27441,s(s.s=i);var i}));s.O()}]);