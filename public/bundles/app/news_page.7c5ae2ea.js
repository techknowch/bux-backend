"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[6293],{21975:function(e,t,a){var s=a(4002),n=a.n(s);class r{constructor(){this.$wrapper=n()(".news-list-page"),this.$newsWrapper=this.$wrapper.find(".news-wrapper"),this.$wrapper.on("click",".more-news-btn",this.handleClickMoreBtn.bind(this))}handleClickMoreBtn(e){e.preventDefault();const t=n()(e.currentTarget).closest(".more-btn-container"),a=+this.$newsWrapper.data("page"),s=this.fixUrl(this.$newsWrapper.data("url"));t.addClass("loading"),"undefined"!=typeof _paq&&_paq.push(["trackEvent","News","News: click","News: click: More button -> Page "+(a+1)]),n().ajax({url:s,type:"GET",data:{ajax:!0,page:a+1},crossDomain:!1,success:e=>{t.removeClass("loading"),this.$newsWrapper.data("page",e.page),this.$newsWrapper.append(e.listHtml),e.page*e.perPage>=e.total&&t.hide()}})}fixUrl(e){return"http:"===window.location.protocol&&(e=e.replace("https:","http:")),e}}n()(document).ready((()=>{new r}))}},function(e){e.O(0,[3913],(function(){return t=21975,e(e.s=t);var t}));e.O()}]);