"use strict";(self.webpackChunkscnsoft_website=self.webpackChunkscnsoft_website||[]).push([[1017],{15711:function(e,t,i){i.d(t,{Z:function(){return h}});var s=i(4002),a=i.n(s),n=i(12280),r=i(35495),o=i(72163),l=i(2898),p=i(97698);class h{constructor(e){this.$form=e,this.$submitBtn=this.$form.find(".contact-form-submit-btn"),this.uploadInput=new n.Z(this.$form.find(".form-upload-input-wrapper")),this.formValidation=new r.Z(this.$form),this.tyPageUrl=this.$form.data("ty-page"),this.trackSource=this.$form.closest("[data-track-source]").data("track-source"),this.$submitBtn.on("click",this.handleClickSubmitBtn.bind(this))}async handleClickSubmitBtn(e){e.preventDefault(),editmode||this.formValidation.validate()&&(this.$submitBtn.addClass("disabled"),(0,o.L9)(this.trackSource,"form",this.$form.attr("name"),"Submit"),await l.Z.isBot()&&!p.Z.isFormFilledByAutotest(this.$form)||a().ajax({type:"POST",url:this.$form.attr("action")+"?is_submitted=1&language="+language,data:new FormData(this.$form[0]),processData:!1,contentType:!1,success:()=>{window.location.href=this.tyPageUrl},error:e=>{this.$submitBtn.removeClass("disabled"),e.responseJSON&&e.responseJSON.errors?this.formValidation.placeErrors(e.responseJSON.errors):this.formValidation.addFormError(translations["Something went wrong. Please, check fields and try again"],!0),console.log(e.responseText)}}))}}},21258:function(e,t,i){function s(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}i.d(t,{Z:function(){return a}});class a{static initLivechat(){if("intercom"===a.type)i.e(5513).then(i.bind(i,75513)).then((e=>e.default()))}static openLivechat(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;if(null!==e&&(e=""+e),"intercom"===a.type)null!==e?(Intercom("hide"),Intercom("showNewMessage",e)):Intercom("show")}static bottomOffset(e){"intercom"===a.type&&Intercom("update",{vertical_padding:e})}}s(a,"defaultType","intercom"),s(a,"supportedTypes",["intercom"]),s(a,"type",a.supportedTypes.includes(window.livechatType)?window.livechatType:a.defaultType)},31449:function(e,t,i){i.d(t,{Z:function(){return a}});i(4002);var s=i(21258);class a{constructor(e){var t,i,s;s=1400,(i="scrollToOfficesSpeed")in(t=this)?Object.defineProperty(t,i,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[i]=s,this.$wrapper=e,this.$wrapper.on("click",".messenger-block-live-chat",this.handleClickMessengerLiveChat.bind(this))}handleClickMessengerLiveChat(e){e.preventDefault(),s.Z.openLivechat("")}}},12280:function(e,t,i){i.d(t,{Z:function(){return r}});var s=i(4002),a=i.n(s),n=i(72163);class r{constructor(e){this.$inputWrapper=e,this.$input=this.$inputWrapper.find(".form-upload-input"),this.$filesWrapper=this.$inputWrapper.find(".form-upload-input-files"),this.files=[],this.trackSource=this.$inputWrapper.closest("[data-track-source]").data("track-source"),this.$input.on("change",this.handleChangeInput.bind(this)),this.$inputWrapper.on("click",".form-upload-input-file-remove-btn",this.handleClickRemoveFile.bind(this)).on("dragenter dragover",this.handleDragOverDropArea.bind(this)).on("dragleave dragend",(()=>this.$inputWrapper.removeClass("dragover"))).on("drop",this.handleDropFiles.bind(this))}handleChangeInput(){let e=this.$input[0].files,t=[...this.files];for(let i of e)t.find((e=>i.name===e.name&&i.size===e.size))||t.push(i);this.updateFiles(t)}handleClickRemoveFile(e){let t=a()(e.currentTarget),i=t.data("file-name"),s=t.data("file-size"),n=this.files.filter((e=>e.name!==i||e.size!==s));this.updateFiles(n)}handleDragOverDropArea(e){e.preventDefault(),e.stopPropagation(),this.$inputWrapper.addClass("dragover")}handleDropFiles(e){e.preventDefault(),e.stopPropagation(),this.$inputWrapper.removeClass("dragover");let t=e.originalEvent.dataTransfer.files,i=e.originalEvent.dataTransfer.items,s=[...this.files];for(let e=0;e<i.length;e++){if(!i[e].webkitGetAsEntry().isFile)continue;let a=t[e];s.find((e=>a.name===e.name&&a.size===e.size))||s.push(a)}this.updateFiles(s)}updateFiles(e){this.files=e,this.$input[0].files=this.createFileList(this.files),this.printFiles(this.files),this.$input.trigger("cut"),(0,n.L9)(this.trackSource,"file input",this.$input.attr("name"),`change to files: ${this.getFileNames().join(", ")}`)}createFileList(e){let t=new DataTransfer;return e.forEach((e=>t.items.add(e))),t.files}printFiles(e){let t="";e.forEach((e=>{let i=this.$inputWrapper.find(`[data-file-name="${e.name}"][data-file-size="${e.size}"]`).closest(".form-upload-input-file");i.length?t+=i[0].outerHTML:t+=`\n                    <p class="form-upload-input-file">\n                        ${e.name}\n                        <button type="button" aria-label="Remove file" class="form-upload-input-file-remove-btn"\n                                data-file-name="${e.name}" data-file-size="${e.size}"\n                        ></button>\n                    </p>\n                `})),this.$filesWrapper.html(t)}getFileNames(){let e=[];return this.files.forEach((t=>{e.push(t.name)})),e}}}}]);