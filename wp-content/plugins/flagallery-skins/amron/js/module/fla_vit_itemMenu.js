function fla_v2_masonry_itemMenu(m,n,p,q){function l(a,h,d){function g(a){"like"==a.getAttribute("type")&&a.getAttribute("like")||("bookmark"==a.getAttribute("type")&&a.getAttribute("bookmark")?a.style.backgroundColor=c.backgroundColor:(a.style.backgroundColor=c.backgroundColor,a.childNodes[0].style.fill=c.iconColor))}function b(a){if("click"==a.type){if(a=c.item){switch(this.getAttribute("type")){case "info":e(c.appName).appEventManager.dispatchGMEvent(f.GMEvent(k.NEED_MODAL,c,{type:"info",item:a}));
break;case "link":a.link&&window.open(a.link,e(c.appName).linkTargetWindow);break;case "like":g(this);c.delegate.likeItem=c.item;this.setAttribute("like",c.item.ID);this.style.cursor="default";this.style.pointerEvents="none";this.getElementsByTagName("svg")[0].style.fill="red";break;case "bookmark":g(this);c.delegate.bookmarkItem=c.item;c.updateForItem(c.item);break;case "share":e(c.appName).appEventManager.dispatchGMEvent(f.GMEvent(k.NEED_MODAL,c,{type:"share",item:a}));break;case "download":a=a.url;
var b=document.createElement("A");b.href=a;b.download=a.substr(a.lastIndexOf("/")+1);document.body.appendChild(b);b.click();document.body.removeChild(b);break;case "coments":a=a.sharelink+"/#comments";window.open(a,"_self");break;case "fullscreen":e(c.appName).appEventManager.dispatchGMEvent(f.GMEvent(k.FULLSCREEN_SWITCH,c,null)),g(this)}f.Device.desktop||g(this)}}else"mouseenter"==a.type?"bookmark"==this.getAttribute("type")&&this.getAttribute("bookmark")?this.style.backgroundColor=c.backgroundColorOver:
(this.style.backgroundColor=c.backgroundColorOver,this.childNodes[0].style.fill=c.iconColorOver):"mouseleave"==a.type&&g(this)}var c=this;this.delegate=a;this.appName=a.appName;this.item=void 0;this.view=document.createElement("div");this.view.className="fla_v2_CollectionItemInfoMenu";this.backgroundColor=h.backgroundColor;this.backgroundColorOver=h.backgroundColorOver;this.iconColor=h.iconColor;this.iconColorOver=h.iconColorOver;a=void 0;a=document.createElement("div");a.className="itemsButtons";
d&&a.classList.add("lightbox");a.setAttribute("type","link");a.innerHTML='<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1520 1216q0-40-28-68l-208-208q-28-28-68-28-42 0-72 32 3 3 19 18.5t21.5 21.5 15 19 13 25.5 3.5 27.5q0 40-28 68t-68 28q-15 0-27.5-3.5t-25.5-13-19-15-21.5-21.5-18.5-19q-33 31-33 73 0 40 28 68l206 207q27 27 68 27 40 0 68-26l147-146q28-28 28-67zm-703-705q0-40-28-68l-206-207q-28-28-68-28-39 0-68 27l-147 146q-28 28-28 67 0 40 28 68l208 208q27 27 68 27 42 0 72-31-3-3-19-18.5t-21.5-21.5-15-19-13-25.5-3.5-27.5q0-40 28-68t68-28q15 0 27.5 3.5t25.5 13 19 15 21.5 21.5 18.5 19q33-31 33-73zm895 705q0 120-85 203l-147 146q-83 83-203 83-121 0-204-85l-206-207q-83-83-83-203 0-123 88-209l-88-88q-86 88-208 88-120 0-204-84l-208-208q-84-84-84-204t85-203l147-146q83-83 203-83 121 0 204 85l206 207q83 83 83 203 0 123-88 209l88 88q86-88 208-88 120 0 204 84l208 208q84 84 84 204z"/></svg>';
a.style.backgroundColor=this.backgroundColor;a.childNodes[0].style.fill=this.iconColor;this.linkButton=a;a.addEventListener("click",b,!1);a.addEventListener("mouseenter",b,!1);a.addEventListener("mouseleave",b,!1);this.view.appendChild(a);if(!d&&e(this.appName).collectionInfoEnable||d&&e(this.appName).sliderInfoEnable)a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","info"),a.innerHTML='<svg height="100px" id="Capa_1" style="enable-background:new 0 0 46 100;" version="1.1" viewBox="0 0 46 100" width="46px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M35.162,0c6.696,0,10.043,4.567,10.043,9.789c0,6.522-5.814,12.555-13.391,12.555c-6.344,0-10.045-3.752-9.869-9.947   C21.945,7.176,26.35,0,35.162,0z M14.543,100c-5.287,0-9.164-3.262-5.463-17.615l6.07-25.457c1.057-4.077,1.23-5.707,0-5.707   c-1.588,0-8.451,2.816-12.51,5.59L0,52.406C12.863,41.48,27.662,35.072,34.004,35.072c5.285,0,6.168,6.361,3.525,16.148   L30.58,77.98c-1.234,4.729-0.703,6.359,0.527,6.359c1.586,0,6.787-1.963,11.896-6.041L46,82.377C33.488,95.1,19.83,100,14.543,100z   "/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.infoButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a);if(!d&&e(this.appName).collectionItemDiscuss||d&&e(this.appName).sliderItemDiscuss)a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","coments"),a.innerHTML='<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M20,1H4C1.8,1,0,2.8,0,5v10c0,2.2,1.8,4,4,4v3c0,0.9,1.1,1.3,1.7,0.7L9.4,19H20c2.2,0,4-1.8,4-4V5   C24,2.8,22.2,1,20,1z M14,13H8c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1C15,12.6,14.6,13,14,13z M16,9H8   C7.4,9,7,8.6,7,8c0-0.6,0.4-1,1-1h8c0.6,0,1,0.4,1,1C17,8.6,16.6,9,16,9z" id="message"/></g></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.commentsButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a);if(!d&&e(this.appName).collectionItemDownload||d&&e(this.appName).sliderItemDownload)a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","download"),a.innerHTML='<svg version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><g id="save"><path d="M11.2,16.6c0.4,0.5,1.2,0.5,1.6,0l6-6.3C19.3,9.8,18.8,9,18,9h-4c0,0,0.2-4.6,0-7c-0.1-1.1-0.9-2-2-2c-1.1,0-1.9,0.9-2,2    c-0.2,2.3,0,7,0,7H6c-0.8,0-1.3,0.8-0.8,1.4L11.2,16.6z"/><path d="M19,19H5c-1.1,0-2,0.9-2,2v0c0,0.6,0.4,1,1,1h16c0.6,0,1-0.4,1-1v0C21,19.9,20.1,19,19,19z"/></g></g></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.downloadButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a);if(!d&&e(this.appName).collectionSocialShareEnabled||d&&e(this.appName).sliderSocialShareEnabled)a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","share"),a.innerHTML='<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1344 1024q133 0 226.5 93.5t93.5 226.5-93.5 226.5-226.5 93.5-226.5-93.5-93.5-226.5q0-12 2-34l-360-180q-92 86-218 86-133 0-226.5-93.5t-93.5-226.5 93.5-226.5 226.5-93.5q126 0 218 86l360-180q-2-22-2-34 0-133 93.5-226.5t226.5-93.5 226.5 93.5 93.5 226.5-93.5 226.5-226.5 93.5q-126 0-218-86l-360 180q2 22 2 34t-2 34l360 180q92-86 218-86z"/></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.shareButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a);e(this.appName).bookmarkEnable&&(a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","bookmark"),a.innerHTML='<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1420 128q23 0 44 9 33 13 52.5 41t19.5 62v1289q0 34-19.5 62t-52.5 41q-19 8-44 8-48 0-83-32l-441-424-441 424q-36 33-83 33-23 0-44-9-33-13-52.5-41t-19.5-62v-1289q0-34 19.5-62t52.5-41q21-9 44-9h1048z"/></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.bookMarkButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a));if(!d&&e(this.appName).collectionLikesEnabled||d&&e(this.appName).sliderLikesEnabled)a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","like"),a.innerHTML='<svg enable-background="new 0 0 51 46" height="46px" id="Layer_1" version="1.1" viewBox="0 0 51 46" width="51px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M46.188,4.101c-5.529-5.53-14.495-5.53-20.023,0L25.39,4.875l-0.996-0.774c-5.529-5.53-14.715-5.53-20.245,0  C-1.38,9.63-1.27,18.595,4.26,24.125l18.753,18.643c0.671,0.671,1.4,1.258,2.376,1.766c0.76-0.508,1.483-1.095,2.155-1.766  l18.643-18.643C51.717,18.595,51.717,9.63,46.188,4.101z""/></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.likeButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a);d&&!f.Device.ios&&(a=document.createElement("div"),a.className="itemsButtons",d&&a.classList.add("lightbox"),a.setAttribute("type","fullscreen"),a.innerHTML='<svg height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g transform="translate(-215.000000, -257.000000)"><g id="fullscreen" transform="translate(215.000000, 257.000000)"><path d="M2,9 L0,9 L0,14 L5,14 L5,12 L2,12 L2,9 L2,9 Z M0,5 L2,5 L2,2 L5,2 L5,0 L0,0 L0,5 L0,5 Z M12,12 L9,12 L9,14 L14,14 L14,9 L12,9 L12,12 L12,12 Z M9,0 L9,2 L12,2 L12,5 L14,5 L14,0 L9,0 L9,0 Z" id="Shape"/></g></g></g></svg>',
a.style.backgroundColor=this.backgroundColor,a.childNodes[0].style.fill=this.iconColor,this.fullscreenButton=a,a.addEventListener("click",b,!1),a.addEventListener("mouseenter",b,!1),a.addEventListener("mouseleave",b,!1),this.view.appendChild(a))}var f=n,e=f.moduleSettings,k={NEED_MODAL:"NEED_MODAL",FULLSCREEN_SWITCH:"FULLSCREEN_SWITCH"};l.prototype={updateForItem:function(a){this.item=a;this.delegate.likesSet&&this.likeButton&&(this.delegate.likesSet[a.ID]?(this.likeButton.getElementsByTagName("svg")[0].style.fill=
"red",this.likeButton.style.cursor="default",this.likeButton.style.pointerEvents="none",this.likeButton.setAttribute("like",a.ID)):(this.likeButton.childNodes[0].style.fill=this.iconColor,this.likeButton.style.cursor="pointer",this.likeButton.style.pointerEvents="all",this.likeButton.removeAttribute("like")));this.bookMarkButton&&(this.delegate.is_containIdInBookmarkSet(this.item.ID)||0===this.delegate.is_containIdInBookmarkSet(this.item.ID)?(this.bookMarkButton.setAttribute("bookmark",a.ID),this.bookMarkButton.getElementsByTagName("svg")[0].style.fill=
"red"):(this.bookMarkButton.removeAttribute("bookmark"),this.bookMarkButton.getElementsByTagName("svg")[0].style.fill=this.iconColor));a.link?(this.linkButton.style.display="block",this.linkButton.style.opacity="1",this.linkButton.style.cursor="pointer",this.linkButton.style.pointerEvents="all"):(this.linkButton.style.opacity="0",this.linkButton.style.display="none",this.linkButton.style.cursor="default",this.linkButton.style.pointerEvents="none")},resizeHandler:function(){var a=document.webkitIsFullScreen||
document.mozFullScreen||!1;this.fullscreenButton&&(this.fullscreenButton.innerHTML=a?'<svg height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill-rule="evenodd" stroke="none" stroke-width="1"><g id="Core" transform="translate(-257.000000, -257.000000)"><g id="fullscreen-exit" transform="translate(257.000000, 257.000000)"><path d="M0,11 L3,11 L3,14 L5,14 L5,9 L0,9 L0,11 L0,11 Z M3,3 L0,3 L0,5 L5,5 L5,0 L3,0 L3,3 L3,3 Z M9,14 L11,14 L11,11 L14,11 L14,9 L9,9 L9,14 L9,14 Z M11,3 L11,0 L9,0 L9,5 L14,5 L14,3 L11,3 L11,3 Z" id="Shape"/></g></g></g></svg>':
'<svg height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g transform="translate(-215.000000, -257.000000)"><g id="fullscreen" transform="translate(215.000000, 257.000000)"><path d="M2,9 L0,9 L0,14 L5,14 L5,12 L2,12 L2,9 L2,9 Z M0,5 L2,5 L2,2 L5,2 L5,0 L0,0 L0,5 L0,5 Z M12,12 L9,12 L9,14 L14,14 L14,9 L12,9 L12,12 L12,12 Z M9,0 L9,2 L12,2 L12,5 L14,5 L14,0 L9,0 L9,0 Z" id="Shape"/></g></g></g></svg>',
this.fullscreenButton.childNodes[0].style.fill=this.iconColor)}};return new l(m,p,q)};
