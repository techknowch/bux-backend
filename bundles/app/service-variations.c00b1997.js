"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[2331],{21258:function(e,t,i){function n(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}i.d(t,{Z:function(){return r}});class r{static initLivechat(){if("intercom"===r.type)i.e(5513).then(i.bind(i,75513)).then((e=>e.default()))}static openLivechat(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;if(null!==e&&(e=""+e),"intercom"===r.type)null!==e?(Intercom("hide"),Intercom("showNewMessage",e)):Intercom("show")}static bottomOffset(e){"intercom"===r.type&&Intercom("update",{vertical_padding:e})}}n(r,"defaultType","intercom"),n(r,"supportedTypes",["intercom"]),n(r,"type",r.supportedTypes.includes(window.livechatType)?window.livechatType:r.defaultType)},72163:function(e,t,i){i.d(t,{ZP:function(){return a},L9:function(){return o}});var n=i(4002),r=i.n(n);function a(){let e=r()("body");e.on("click",".js-track-click",(e=>s(r()(e.currentTarget),"Click"))),e.on("mouseenter",".js-track-hover",(e=>s(r()(e.currentTarget),"Hover"))),e.on("change",".js-track-change",(e=>s(r()(e.currentTarget),"Change"))),e.on("submit",".js-track-search",(e=>s(r()(e.currentTarget),"Search")));let t=[".bookmarks-wrapper",".page-navigation-menu-wrapper",".page-menu"];r()('a:not([class]):not([href^="#"])').click((e=>{let i=r()(e.currentTarget);for(let e of t)if(i.closest(e).length)return;let n=(""+i.text()).trim(),a=(""+i.closest("[data-track-source]").data("track-source")).trim();n&&a&&o(a,"content link",n,"Click")}))}function s(e,t){let i=e.closest("[data-track-source]").data("track-source"),n=e.data("track-element")||function(e){let t=e.prop("tagName").toLowerCase(),i=e.attr("type");switch(!0){case"a"===t:return"link";case"button"===t:return"button";case"input"===t&&"radio"===i:return`radio (${e.attr("name")})`;case"input"===t&&"checkbox"===i:return`checkbox (${e.attr("name")})`;case"input"===t&&"text"===i:case"input"===t&&"email"===i:case"input"===t&&"tel"===i:case"input"===t:case"textarea"===t:return"input";default:return"element"}}(e),r=e.data("track-text")||function(e){let t=e.prop("tagName").toLowerCase(),i=e.attr("type");if("input"===t&&["text","email","tel"].includes(i))return e.attr("name");if("textarea"===t)return e.attr("name");if("form"===t&&e.hasClass("js-track-search"))return e.find('input[name="q"]').val();if(e.text())return e.text();return e.val()}(e),a=e.data("track-event")||function(e,t){let i=e.prop("tagName").toLowerCase(),n=e.attr("type");if("Change"===t&&"input"===i&&"checkbox"===n)return e.prop("checked")?"Choose":"Remove choose";if("Change"===t&&"input"===i&&["text","email","tel"].includes(n))return`Enter "${e.val()}"`;if("Change"===t&&"textarea"===i)return`Enter "${e.val()}"`;return t}(e,t);o(i,n,r,a)}function o(e,t,i,n){let r=`[${e=(""+e).trim()}]: ${t=(""+t).trim()} "${i=(""+i).trim()}" - ${n=(""+n).trim()}`;_paq.push(["trackEvent",e,n,r]),ga("send","event",e,r)}},5245:function(e,t,i){var n=i(4002),r=i.n(n),a=i(72163),s=i(21258);class o{constructor(e){this.$wrapper=e,this.initItemGroups(),this.setEqualHeightFields(),this.addDescriptionAddition(),this.initHoverHintItems(),r()(window).on("resize",(()=>this.setEqualHeightFields())),this.$wrapper.find("img").one("load",(()=>this.setEqualHeightFields(["logo","description"]))),this.$wrapper.on("click",".btn-expand",this.handleClickExpandBtn.bind(this)).on("click",".sv-item-description-addition",this.handleClickExpandBtn.bind(this))}initItemGroups(){let e=new Map,t=+this.$wrapper.find(".sv-items").data("per-row");this.$wrapper.find(".sv-item-wrapper:not(.d-none) .sv-item:not(.sv-item-cta)").each(((i,n)=>{let a=Math.floor(i/t),s=e.get(a)?e.get(a):[];s.push(r()(n)),e.set(a,s)})),this.itemGroups=Array.from(e.values())}setEqualHeightFields(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:["logo","title","description"];if(!editmode)if(r()(document).width()<=767)for(let t of e)this.$wrapper.find(`.sv-item-${t}`).css("height","auto");else for(let t of this.itemGroups)for(let i of e){let e=0;for(let n of t){if("description"===i&&n.hasClass("expanded"))continue;let t=n.find(`.sv-item-${i}`);t.css("height","auto"),e=Math.max(e,t.height())}e&&t.forEach((t=>{"description"===i&&t.hasClass("expanded")||t.find(`.sv-item-${i}`).height(e)}))}}addDescriptionAddition(){this.$wrapper.find(".sv-item.expand-item").each(((e,t)=>{let i=r()(t).find(".sv-item-description > *:first").prop("tagName"),n=r()('<div class="sv-item-description-addition"></div>');i&&"ul"===i.toLowerCase()&&n.addClass("first-ul"),n.insertAfter(r()(t).find(".sv-item-description"))}))}handleClickExpandBtn(e){if(e.preventDefault(),editmode)return;let t=r()(e.currentTarget).closest(".sv-item"),i=t.find(".sv-item-description");i.css("height","auto"),t.toggleClass("expanded"),t.hasClass("expanded")?i.css("max-height",i[0].scrollHeight):(i.css("max-height",""),this.setEqualHeightFields())}initHoverHintItems(){let e=this.$wrapper.find(".sv-item.hover-hint-item").filter((function(){return r()(this).data("hover-hint-message")})).length>0;this.$wrapper.find(".sv-item.hover-hint-item").each(((t,i)=>{let n=r()(i),o=null;n.hover((()=>{o=setTimeout((()=>n.addClass("active-hover-hint-item")),5e3)}),(()=>{clearTimeout(o),n.removeClass("active-hover-hint-item")})),n.on("click",(()=>{if(n.hasClass("active-hover-hint-item")){let t=n.data("hover-hint-message");t?s.Z.openLivechat(`${t}`):e?s.Z.openLivechat(""):s.Z.openLivechat();let i=n.find(".sv-item-title").text().trim();(0,a.L9)("Editable: Service Variations","card",i,"open livechat")}else n.addClass("active-hover-hint-item")}))}))}}r()(document).ready((()=>{r()(".service-variations-wrapper").each(((e,t)=>new o(r()(t))))}))}},function(e){e.O(0,[3913],(function(){return t=5245,e(e.s=t);var t}));e.O()}]);