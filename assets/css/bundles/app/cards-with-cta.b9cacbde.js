"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[708],{90208:function(e,t,r){var i=r(4002),s=r.n(i);class a{constructor(e){var t,r,i;i=210,(r="cardMinWidth")in(t=this)?Object.defineProperty(t,r,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[r]=i,this.$wrapper=e,this.basePerRow=+this.$wrapper.find(".cwc-items").data("per-row"),this.changePerRowDependOnWidth(),this.initItemGroups(),this.setEqualHeightFields(),s()(window).on("resize",(()=>{this.changePerRowDependOnWidth(),this.setEqualHeightFields()})),this.$wrapper.find("img").one("load",(()=>this.setEqualHeightFields()))}initItemGroups(){let e=new Map,t=+this.$wrapper.find(".cwc-items").data("per-row");this.$wrapper.find(".cwc-item-wrapper .cwc-item").each(((r,i)=>{if(s()(i).hasClass("cwc-item-cta"))return;let a=Math.floor(r/t),o=e.get(a)?e.get(a):[];o.push(s()(i)),e.set(a,o)})),this.itemGroups=Array.from(e.values())}setEqualHeightFields(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:["logo","title"];if(!editmode)if(s()(document).width()<=767)for(let t of e)this.$wrapper.find(`.cwc-item-${t}`).css("height","auto");else for(let t of this.itemGroups)for(let r of e){let e=0;for(let i of t){let t=i.find(`.cwc-item-${r}`);t.css("height","auto"),e=Math.max(e,t.height())}e&&t.forEach((t=>t.find(`.cwc-item-${r}`).height(e)))}}changePerRowDependOnWidth(){let e=this.$wrapper.find(".cwc-items"),t=this.$wrapper.find(".cwc-item-wrapper").first(),r=e.width(),i=parseInt(t.css("padding-left"))+parseInt(t.css("padding-right"));if(4===this.basePerRow){let t=r/4>=this.cardMinWidth+i;if(t===e.hasClass("per-row-4"))return;return t?e.data("per-row",4).addClass("per-row-4").removeClass("per-row-2"):e.data("per-row",2).addClass("per-row-2").removeClass("per-row-4"),void this.initItemGroups()}if(3===this.basePerRow){let t=r/3>=this.cardMinWidth+i;if(t===e.hasClass("per-row-3"))return;return t?e.data("per-row",3).addClass("per-row-3").removeClass("per-row-1"):e.data("per-row",1).addClass("per-row-1").removeClass("per-row-3"),void this.initItemGroups()}}}s()(document).ready((()=>{s()(".cwc-wrapper").each(((e,t)=>new a(s()(t))))}))}},function(e){e.O(0,[3913],(function(){return t=90208,e(e.s=t);var t}));e.O()}]);