"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[4322],{86833:function(e,t,i){var a=i(4002),r=i.n(a);r()(document).ready((()=>{r()(".radio-wrapper").each(((e,t)=>new n(r()(t))))}));class n{constructor(e){this.$wrapper=e,this.$items=this.$wrapper.find(".radio-item"),editmode?this.$wrapper.on("click",".radio-add-item-btn",this.handleClickAddRadioItemBtn.bind(this)).on("click",".radio-remove-item-btn",this.handleClickRemoveRadioItemBtn.bind(this)):(this.initUserVariantRadio(),this.$wrapper.on("click",".radio-item",this.handleClickRadioItem.bind(this)))}handleClickRadioItem(e){let t=r()(e.currentTarget);this.$items.removeClass("active"),this.$wrapper.find(".cf-user-variant-textarea").attr("required",!1),t.addClass("active"),t.find("input").prop("checked",!0).trigger("change"),t.find(".cf-user-variant-textarea").attr("required",!0)}handleClickAddRadioItemBtn(){this.$wrapper.find(".cf-items-error").remove();let e=this.$items.filter(":not(.d-none):not(.user-radio)").last().next(".radio-item.d-none:not(.user-radio)");if(e.length)e.removeClass("d-none");else{let e="No available items left. Try to remove last items and fill again.";this.$wrapper.append(`<span class="cf-items-error">${e}</div>`)}}handleClickRemoveRadioItemBtn(e){let t=r()(e.currentTarget).closest(".radio-item");t.find(".radio-item-title-editable").text("").addClass("empty"),t.addClass("d-none"),this.$wrapper.find(".cf-items-error").remove()}initUserVariantRadio(){this.$wrapper.find(".cf-user-variant-textarea").change((e=>{let t=r()(e.currentTarget);t.closest(".radio-item").find('input[type="radio"]').val(t.val())}))}}}},function(e){e.O(0,[3913],(function(){return t=86833,e(e.s=t);var t}));e.O()}]);