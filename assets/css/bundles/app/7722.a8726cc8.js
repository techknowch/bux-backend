"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[7722],{97698:function(t,e,n){n.d(e,{Z:function(){return r}});var i=n(4002),a=n.n(i);class r{static isFormFilledByAutotest(t){let e=!1;t.find('input[type="email"], input[type="text"]').each(((t,n)=>{let i=a()(n),r=i.attr("type"),s=i.attr("name")+"";if(("email"===r||s.includes("email"))&&i.val()===autotestEmail)return e=!0,!1}));let n=t.find('input[name="company"]');return n.length&&n.val()===autotestCompany&&(e=!0),e}}},2898:function(t,e,n){n.d(e,{Z:function(){return r}});var i=n(16669);function a(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}class r{static async isBot(){return null!==r.__isBot?r.__isBot:(this.ajaxPromise||(this.ajaxPromise=new Promise((t=>{(0,i.zD)().then((t=>t.detect())).then((e=>{r.__isBot=e.bot,t(r.__isBot)})).catch((e=>{console.error(e),t(!1)}))}))),this.ajaxPromise)}}a(r,"ajaxPromise",null),a(r,"__isBot",null)},62075:function(t,e,n){var i=n(4002),a=n.n(i),r={piwikTrackSubmitEvent:function(t){return!a()(t).data("data-submit")&&(a()(t).data("data-submit",1),"undefined"!=typeof _paq&&_paq.push(["trackEvent","Forms","Forms: submit","Forms: submit: "+r.piwikGetFormName(t)]),!0)},piwikGetFormName:function(t){var e=a()(t).attr("name");return e||(e=a()(t).find(".form-name").val())||(e=a()(t).attr("action")),e},trackInput:function(t,e){t.find(".track-input").on("change",(function(){var t=a()(this),n=t.val().trim(),i="select"===t.prop("tagName").toLowerCase()?"chosen":"entered";if(n.length){n=n.substring(0,4096);var r=t.attr("data-name");r||(r=t.attr("id")||t.attr("name")),_paq.push(["trackEvent","Forms",e+": "+i,e+": "+i+": "+r+': "'+n+'"'])}}))},trackOpen:function(){"undefined"!=typeof _paq&&_paq.push(["trackEvent","Forms","Forms: popup","Forms: popup: opened"])},trackPiwikCustom:function(t,e,n){"undefined"!=typeof _paq&&_paq.push(["trackEvent",t,t+": "+e,t+": "+e+": "+n])},delayedClick:function(t){setTimeout((function(){location.href=t}),600)}};e.Z={piwikTrackSubmitEvent:r.piwikTrackSubmitEvent,trackInput:r.trackInput,trackOpen:r.trackOpen,trackPiwikCustom:r.trackPiwikCustom,delayedClick:r.delayedClick}},59102:function(t,e,n){n.d(e,{Z:function(){return r}});var i=n(4002),a=n.n(i);function r(t){var e=t,n=a()("<div></div>"),i=null;e.addClass("txtstuff"),n.addClass("txta"),n.hide(),e.on("input",(function(){var t,e;a()(this).after(n),a()(this).css({resize:"none",overflow:"hidden"}),t=a()(this).val(),e={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#039;"},i=(i=t.replace(/[&<>"']/g,(function(t){return e[t]}))).replace(/\n/g,"<br>"),n.html(i+'<br style="line-height: 3px;">'),n.css("visibility","hidden"),n.show(),this.style.height=n[0].offsetHeight+"px",n.css("visibility","visible"),n.hide()}))}},44079:function(t,e,n){n.d(e,{Z:function(){return r}});var i=n(4002),a=n.n(i);function r(){a()(".author-ask-modal__gdpr").find(".checkcontainer a").hover((function(){a()(this).closest(".checkcontainer").addClass("reset-checkbox")}),(function(){a()(this).closest(".checkcontainer").removeClass("reset-checkbox")}))}},30925:function(t,e,n){n.d(e,{Z:function(){return s}});var i=n(4002),a=n.n(i),r=n(59102);function s(){a()(".md-field.textarea").each(((t,e)=>{let n=a()(e);var i,s;n.hasClass("ignore")||((s=(i=n).find("textarea")).on("input",(function(t){i.addClass("focused")})),s.on("focus",(function(t){i.addClass("focused")}))),(0,r.Z)(n.find("textarea"))}))}}}]);