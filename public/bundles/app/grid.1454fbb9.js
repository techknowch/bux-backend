"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[5276],{23890:function(e,i,t){var r=t(4002),d=t.n(r);class s{constructor(e){if(this.$wrapper=e,this.$gridWrapper=this.$wrapper.children(".grid-container").children(".grid-wrapper"),this.gridId=this.$wrapper.data("grid-id"),this.isOldIE=window.navigator.userAgent.match(/(MSIE|Trident)/),this.isOldIE&&this.$gridWrapper.addClass("grid-wrapper-old-ie"),this.setUpItemsDirection(),this.initBackgroundColor(),d()(window).resize(this.setUpItemsDirection.bind(this)),editmode){this.initBackgroundColorSelect(),this.updateItemBasis();let e=this.$gridWrapper.children(".grid-item:not(.d-none)").last();this.setUpLastItem(e),this.$wrapper.on("change focusout",`.panel-${this.gridId} .grid-item-basis-editable input`,this.updateItemBasis.bind(this)).on("keyup",`.panel-${this.gridId} .grid-item-basis-editable input`,(e=>13===e.which&&this.updateItemBasis())).on("click",`.panel-${this.gridId} .add-grid-item-btn`,this.addGridItem.bind(this)).on("click",`.panel-${this.gridId} .remove-grid-item-btn`,this.handleClickRemoveGridItem.bind(this))}}setUpItemsDirection(){this.isOldIE&&this.setUpItemsMinWidth(),this.$wrapper.find(".grid-wrapper").each(((e,i)=>{let t=d()(i);t.removeClass("grid-row grid-column").addClass("grid-default"),t.find(".grid-wrapper").addClass("grid-default");let r=this.getFreePercents(t);if(r){let e=d()('<div class="grid-item"><div class="grid-item-content"></div></div>');e.css("flex-basis",r+"%"),e.css("min-width",r+"%"),t.append(e)}const s=t.width()+10;let n=0;t.children(".grid-item").each(((e,i)=>{n+=d()(i).width()})),t.removeClass("grid-default"),t.find(".grid-wrapper").removeClass("grid-default"),r&&t.children(".grid-item").last().remove(),s>=n?t.addClass("grid-row"):t.addClass("grid-column")})),this.initBackgroundColor()}setUpItemsMinWidth(){const e=e=>{let i=e.children(".grid-item:not(.d-none)").first().children(".grid-item-content"),t=parseInt(i.css("margin-left"))+parseInt(i.css("margin-right")),r=0;e.children(".grid-item:not(.d-none)").each(((e,i)=>{let s=0;d()(i).children(".grid-item-content").children(".pimcore_area_content").each(((e,i)=>{let r=d()(i).children(),n=parseInt(r.css("min-width"));r.hasClass("grid-editable-wrapper")&&(n-=t),n>s&&(s=n)})),s&&d()(i).css("min-width",s+t+"px"),s>r&&(r=s)})),r&&e.closest(".grid-editable-wrapper").css("min-width",r+t+"px")};let i=this.$gridWrapper.find(".grid-wrapper"),t=i.length?i.last():this.$gridWrapper;for(;1===t.length;)e(t),t=t.parent().closest(".grid-wrapper")}initBackgroundColor(){d()("body").append('<div class="container grid-test-width-container" style="width: 100%;"></div>');let e=d()(".grid-test-width-container").first(),i=this.$wrapper.children(".grid-container").children(".background-color-block");const t=this.$wrapper.width(),r=e.width();e.remove(),t>=r-16?i.css("width",d()(window).width()+"px"):i.css("width","100%")}updateItemBasis(){this.$wrapper.find(`.panel-${this.gridId} .grid-item-basis-editable input`).each(((e,i)=>{let t=d()(i),r=t.closest(".grid-item");r.css("flex-basis",t.val()+"%"),r.css("max-width",t.val()+"%")})),this.setUpItemsDirection()}initBackgroundColorSelect(){let e=window.$(this.$wrapper).find(`.bgc-select-wrapper-${this.gridId} .background-color-select`),i=()=>{let i=e.find("select");const t=e=>e.id?d()(`\n                    <span style="display: flex; align-items: center">\n                        <div style="\n                            width: 20px;\n                            height: 20px;\n                            margin-right: 5px;\n                            border: 1px solid #BDC3C7;\n                            background-color: ${e.text};\n                        "></div> \n                        <div>${e.text}</div>\n                    </span>\n                `):e.text;i.select2("destroy").select2({minimumResultsForSearch:-1,dropdownAutoWidth:!0,templateSelection:t,templateResult:t}),i.on("select2:select",(e=>{let i=e.params.data,t=this.$wrapper.children(".grid-container").children(".background-color-block"),r=t.closest(".grid-container");t.css("background-color",i.text),i.text&&"transparent"!==i.text?r.addClass("colored-background"):r.removeClass("colored-background")}))};e.hasClass("initialized")?i():e.on("initialized",(()=>i()))}addGridItem(){let e=this.getFreePercents();if(e<.1){let i=this.$gridWrapper.children(".grid-item:not(.d-none)").last(),t=parseFloat(i.css("flex-basis"));e=t/2,i.find(`.panel-${this.gridId} .grid-item-basis-editable input`).val(t-e).trigger("change")}let i=this.$gridWrapper.children(".grid-item.d-none:first");i.removeClass("d-none").find(`.panel-${this.gridId} .grid-item-basis-editable input`).val(e).trigger("change"),this.setUpLastItem(i),this.setUpItemsDirection()}handleClickRemoveGridItem(e){let i=d()(e.currentTarget).closest(".grid-item");i.addClass("d-none").find(`.panel-${this.gridId} .grid-item-basis-editable input`).val(0);let t=i.prev(),r=t.find(`.panel-${this.gridId} .grid-item-basis-editable input`);r.val(+r.val()+this.getFreePercents()).trigger("change"),this.setUpLastItem(t),this.setUpItemsDirection()}setUpLastItem(e){this.$gridWrapper.find(`.panel-${this.gridId} .add-grid-item-btn`).addClass("d-none"),this.$gridWrapper.find(`.panel-${this.gridId} .remove-grid-item-btn`).addClass("d-none");let i=e.find(`.panel-${this.gridId} .add-grid-item-btn`),t=e.find(`.panel-${this.gridId} .remove-grid-item-btn`);0!==e.next().length&&i.removeClass("d-none");let r=this.$gridWrapper.children(".grid-item:not(.d-none)").length,d=e.find(".pimcore_area_content").length;r>1&&(t.removeClass("d-none"),0===d?t.prop("disabled",!1).attr("title",""):t.prop("disabled",!0).attr("title","Block should be empty"))}getFreePercents(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;e||(e=this.$gridWrapper);let i=100;return e.children(".grid-item:not(.d-none)").each(((e,t)=>{i-=parseFloat(d()(t).css("flex-basis"))})),i>0?i:0}}d()(document).ready((()=>{d()(".grid-editable-wrapper").each(((e,i)=>new s(d()(i))))}))}},function(e){e.O(0,[3913],(function(){return i=23890,e(e.s=i);var i}));e.O()}]);