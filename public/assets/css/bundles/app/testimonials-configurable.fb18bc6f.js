"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[7704],{98809:function(e,i,t){t.d(i,{Z:function(){return r}});var n=t(4002),o=t.n(n);t(27908),t(43511);function r(e){editmode||(o()(`[data-slider="${e.id}"]`).each(((i,t)=>{let n=o()(t),r=new Array(e.options),s={maxSlides:1,adaptiveHeight:!0,preloadImages:"visible",touchEnabled:!0,oneToOneTouch:!0,swipeThreshold:100,pager:!0,controls:!0,infiniteLoop:!0,onSliderLoad:function(){n.find(".bx-clone a").removeAttr("data-group")}},l=null,d=n.children().filter(((e,i)=>o().trim(o()(i).html()))).length;function a(){let i=window.innerWidth;if(e.destroySlider&&e.destroySlider.point<i)return void(l&&(l.destroySlider(),l=null));let t=o().extend({},s);r.length&&r[0].forEach((function(e){let n=parseFloat(e.size);!isNaN(n)&&n<=i&&(t=o().extend(t,e.props))})),l?l.reloadSlider(t):l=n.bxSlider(t)}d<2||(a(),o()(window).on("resize",(()=>a())),n.on("reload-slider",a),n.find("img").one("load",(function(){n.parent().height()<n.height()&&n.parent().height(n.height())})),e.sliderFunction&&e.sliderFunction(n))})),Waypoint.refreshAll())}},64857:function(e,i,t){var n=t(4002),o=t.n(n),r=t(98809);o()(document).ready((()=>{(0,r.Z)({id:"testimonials-configurable",class:"a-testimonials-contact__slider",options:[{size:0,props:{minSlides:1,maxSlides:1,controls:!1,pager:!0,adaptiveHeight:!1,mode:"horizontal",slideMargin:16}},{size:768,props:{controls:!1,slideMargin:30,slideWidth:610}},{size:1024,props:{slideWidth:320,controls:!0,nextText:"",prevText:""}},{size:1280,props:{slideWidth:340,controls:!0,nextText:"",prevText:""}},{size:1440,props:{slideWidth:410,controls:!0,nextText:"",prevText:""}}]})}))}},function(e){e.O(0,[3913,3511,7908,8647],(function(){return i=64857,e(e.s=i);var i}));e.O()}]);