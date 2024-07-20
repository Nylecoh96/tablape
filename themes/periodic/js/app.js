!function(){t(),window.addEventListener("load",e=>{setTimeout(()=>{document.body.style.overflowY="auto"},500)});let e=window.location.pathname;function t(){document.documentElement&&document.documentElement.clientWidth&&(document.cookie=`mobile=${document.documentElement.clientWidth<=1024?1:0}; path=/;`)}function a(t){switch(e){case"/":case"/history/":o(t)}switch(e){case"/":document.querySelector(".info__weight").innerText=t.dataset.density?t.dataset.density:"-",document.querySelector(".info__energy").innerText=t.dataset.energyLevels?t.dataset.energyLevels:"-",document.querySelector(".info__electron").innerHTML=t.dataset.electron?t.dataset.electron:"-",document.querySelector(".info__ionisation").innerText=t.dataset.ionisation?t.dataset.ionisation:"-",document.querySelector(".info__isotopes").innerHTML=t.dataset.isotopes?t.dataset.isotopes:"-",document.querySelector(".info__melting").innerText=t.dataset.melting?t.dataset.melting:"-",document.querySelector(".info__boiling").innerText=t.dataset.boiling?t.dataset.boiling:"-";break;case"/history/":document.querySelector(".info__discovered").innerText=t.dataset.discoveredBy?t.dataset.discoveredBy:"-",document.querySelector(".info__origin").innerText=t.dataset.originName?t.dataset.originName:"-",document.querySelector(".info__year").innerHTML=t.dataset.yearLabel?t.dataset.yearLabel:"-"}}function o(e){document.querySelector(".info__number").innerText=e.dataset.atomicNumber?e.dataset.atomicNumber:"-",document.querySelector(".info__code").innerText=e.dataset.chemicalSymbol?e.dataset.chemicalSymbol:"-",document.querySelector(".info__name").innerText=e.dataset.name?e.dataset.name:"-",document.querySelector(".info__mass").innerText=e.dataset.atomicMass?e.dataset.atomicMass:"-",document.querySelector(".info__podcasts-dl")&&(document.querySelector(".info__podcasts-dl").href=`/elements/${e.dataset.slug}`),document.querySelector(".element-box__formula")&&document.querySelector(".element-box__formula").classList.contains("active")&&(document.querySelector(".element-box__formula").style.display="none"),document.querySelector(".element-box__info").classList.add("active"),document.querySelector(".element-box__info").classList.remove("none"),document.querySelector(".element-box__info-left").style.backgroundColor=e.dataset.color,document.querySelector(".element-box__info-right").style.backgroundColor=e.dataset.color}function l(e,t,a,o){let l=parseInt(e.value);("increase"==o?6e3!=l:0!=l)&&(l="increase"==o?l+2:l-2,e.value=l,r(t,a,l))}function r(e,t,a){"temperature"==t?n(!0,"temperature"):n(!0),a=parseFloat(a),document.querySelector(".element-box__formula")&&(document.querySelector(".element-box__formula").classList.contains("active")||document.querySelector(".element-box__formula").classList.add("active"),document.getElementById("kelvin").innerText=parseInt(a),document.getElementById("celsius").innerText=parseInt(a)-273+"\xb0"),e.forEach((e,o)=>{switch(t){case"temperature":e.classList.remove("element--grayed-out"),0>parseFloat(e.dataset.mp)&&0>parseFloat(e.dataset.bp)?e.classList.add("element--grayed-out"):parseFloat(e.dataset.mp)>a?e.style.backgroundColor="#a3e8ed":parseFloat(e.dataset.mp)<a&&(e.style.backgroundColor="#d970a8",parseFloat(e.dataset.bp)<a&&(e.style.backgroundColor="#fe4445"));break;case"year":e.classList.remove("element--grayed-out"),parseInt(e.dataset.year)>parseInt(a)&&e.classList.add("element--grayed-out"),document.querySelector(".filter__year").innerText=a}})}function s(e,t,a){t.forEach((o,l)=>{"type"==a&&(o.addEventListener("mouseenter",e=>{let t=e.target;t.style.color=t.dataset.color,t.style.borderColor=t.dataset.color,t.style.backgroundColor="transparent"}),o.addEventListener("mouseleave",e=>{let t=e.target;t.classList.contains("active")||(t.style.color="#FFF",t.style.borderColor="transparent",t.style.backgroundColor=t.dataset.color)})),o.addEventListener("click",o=>{let l=o.target;if(l.classList.contains("active"))l.classList.remove("active");else{for(let r=0;r<t.length;r++)t[r].classList.remove("active");n(),"type"==a&&(l.style.color=l.dataset.color,l.style.borderColor=l.dataset.color,l.style.backgroundColor="transparent"),l.classList.add("active")}e.forEach((e,t)=>{e.style.backgroundColor=e.dataset.color,e.classList.contains("element--blank")||(l.classList.contains("active")&&e.dataset[a]!=l.dataset.value?"classification"==a?"both"!=e.dataset[a]||"unknown"==l.dataset.value?e.classList.add("element--grayed-out"):e.classList.remove("element--grayed-out"):e.classList.add("element--grayed-out"):e.classList.remove("element--grayed-out"))})})}),i()}function n(e=!1,t=null){let a=document.querySelectorAll(".filter");for(let o=0;o<a.length;o++)a[o].classList.remove("active"),a[o].dataset.color&&(a[o].style.color="#FFF",a[o].style.borderColor="transparent",a[o].style.backgroundColor=a[o].dataset.color);e||document.querySelector(".filter-input__range")&&(document.getElementById("temperature")&&(document.getElementById("temperature").value=0,document.querySelector(".element-box__formula")&&document.querySelector(".element-box__formula").classList.contains("active")&&(document.querySelector(".element-box__formula").classList.remove("active"),document.querySelector(".element-box__formula").classList.add("none"))),document.querySelector(".filter__year")&&(document.querySelector(".filter__year").innerText=document.querySelector(".filter-input__range--history").value)),t?i(!1):i()}function i(e=!0){}e=e.replace("/tablape/","localhost/tablape/"),document.addEventListener("DOMContentLoaded",t=>{t.preventDefault(),document.getElementById("__p").style.paddingTop=document.querySelector(".top-bar").offsetHeight+"px";let i=document.querySelectorAll(".element");if(window.location.hash&&"#playaudio-"==window.location.hash.substring(0,11)){myelem='[data-name="'+window.location.hash.substring(11)+'"]';let c=document.querySelector(myelem);if(document.querySelector(".info__el-name").innerText=c.dataset.name?c.dataset.name:"-",o(c),document.querySelector(".info__podcasts audio")){document.querySelector(".info__podcasts audio source")&&document.querySelector(".info__podcasts audio source").remove();var d=document.createElement("source"),m=document.querySelector(".info__podcasts audio");d.setAttribute("src",c.dataset.audio),m.appendChild(d),m.load(),document.querySelector(".info__podcasts audio").muted=!1,document.querySelector(".info__podcasts audio").play(),c.classList.add("active")}}if(window.location.hash&&"#playvideo-"==window.location.hash.substring(0,11)){myelem='[data-name="'+window.location.hash.substring(11)+'"]';let u=document.querySelector(myelem);document.querySelector(".info__el-name").innerText=u.dataset.name?u.dataset.name:"-",o(u),document.body.classList.add("no_scroll");let y=document.createElement("div");y.classList.add("modal"),y.classList.add("video"),y.innerHTML='\n        <div class="modal__backdrop"></div>\n        <div class="modal__wrapper modal--image">\n          <div class="modal__close pointer">\n            <svg xmlns="http://www.w3.org/2000/svg" width="37.071" height="37.071" viewBox="0 0 37.071 37.071">\n              <g transform="translate(-2.464 -2.464)">\n                <line x1="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n                <line x2="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n              </g>\n            </svg>\n          </div>\n          <iframe src="'+u.dataset.video+'?autoplay=1&autohide=1&fs=1&rel=0&hd=1&wmode=transparent&enablejsapi=1&html5=1" width="100%" height="550px" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>\n        </div>\n      ',document.getElementById("__p").appendChild(y),setTimeout(()=>{let e=document.querySelector(".video");e.classList.add("show"),e.querySelector(".modal__backdrop").addEventListener("click",t=>{e.classList.remove("show"),u.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)}),e.querySelector(".modal__close").addEventListener("click",t=>{e.classList.remove("show"),u.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)})},100)}window.location.hash&&"#history"==window.location.hash&&setTimeout(()=>{let e=document.querySelector("#history"),t=e.querySelector(".element-slug-info__collapse-action"),a=e.getBoundingClientRect().top+window.pageYOffset-60;window.scrollTo({top:a,behavior:"smooth"});let o=t.parentNode.parentNode.querySelector(".element-slug-info__collapse-bottom");t.parentNode.parentNode.classList.add("element-slug-info__collapse--active"),o.style.height=`${o.scrollHeight}px`},500),document.querySelector(".navbar__burger")&&document.querySelector(".navbar__burger").addEventListener("click",e=>{document.querySelector(".navbar__burger").classList.toggle("navbar__burger--active"),document.querySelector(".navbar__wrapper").classList.toggle("navbar__wrapper--active")});let p=document.querySelectorAll(".navbar__li");if(p.length>0&&p.forEach((t,a)=>{t.querySelector(".navbar__a").getAttribute("href")==e?t.classList.add("navbar__li--active"):t.classList.remove("navbar__li--active")}),document.querySelector(".element-box__filter-action")&&document.querySelector(".element-box__filter-action").addEventListener("click",e=>{let t=e.target,a=t.parentNode.parentNode.querySelector(".element-box__filter-bottom");t.parentNode.parentNode.classList.contains("element-box__filter--active")?(t.parentNode.parentNode.classList.remove("element-box__filter--active"),a.style.height="0px"):(t.parentNode.parentNode.classList.add("element-box__filter--active"),a.style.height=`${a.scrollHeight+22}px`)}),document.querySelector(".element-slug-info")&&(document.querySelector(".element-box__filter-action"),["fact-table","uses","podcast","video","history","atomic-data","oxidation","supply","pressure","references","explore_other"].forEach((e,t)=>{let a=document.getElementById(e);a&&a.querySelector(".element-slug-info__collapse-action").addEventListener("click",e=>{let t=e.target,a=t.parentNode.parentNode.querySelector(".element-slug-info__collapse-bottom");t.parentNode.parentNode.classList.contains("element-slug-info__collapse--active")?(t.parentNode.parentNode.classList.remove("element-slug-info__collapse--active"),a.style.height="0px"):(t.parentNode.parentNode.classList.add("element-slug-info__collapse--active"),a.style.height=`${a.scrollHeight}px`)})})),document.querySelector(".element-slug-info")&&document.getElementById("expand").addEventListener("click",e=>{"expand all +"==(txt=document.getElementById("expand").innerHTML)?(document.getElementById("expand").innerHTML="expand all +",openstatus=1):(document.getElementById("collapse").innerHTML="collapse all -",openstatus=0),document.querySelector(".element-slug-info")&&(document.querySelector(".element-box__filter-action"),["fact-table","uses","podcast","video","history","atomic-data","oxidation","supply","pressure","references","explore_other"].forEach((e,t)=>{let a=document.getElementById(e);a&&(bottom=a.querySelector(".element-slug-info__collapse-bottom"),0==openstatus?(a.classList.remove("element-slug-info__collapse--active"),bottom.style.height="0px"):(a.classList.add("element-slug-info__collapse--active"),bottom.style.height=`${bottom.scrollHeight}px`))}))}),i.length>0){i.forEach((t,l)=>{t.classList.contains("element--blank")||(t.addEventListener("mouseenter",e=>{a(e.target)}),t.addEventListener("touchstart",e=>{a(e.target)}),t.querySelector(".element__info-play")&&t.querySelector(".element__info-play").addEventListener("click",a=>{let l=a.target;switch(document.querySelector(".info__el-name").innerText=l.dataset.name?l.dataset.name:"-",e){case"/podcasts/":if(o(l),document.querySelector(".info__podcasts audio")){document.querySelector(".info__podcasts audio source")&&document.querySelector(".info__podcasts audio source").remove();var r=document.createElement("source"),s=document.querySelector(".info__podcasts audio");r.setAttribute("src",l.dataset.audio),s.appendChild(r),s.load()}break;case"/videos/":if(console.log("running"),window.innerWidth,window.innerWidth>768){o(l),document.body.classList.add("no_scroll");let n=document.createElement("div");n.classList.add("modal"),n.classList.add("video"),n.innerHTML='\n                    <div class="modal__backdrop"></div>\n                    <div class="modal__wrapper modal--image">\n                      <div class="modal__close pointer">\n                        <svg xmlns="http://www.w3.org/2000/svg" width="37.071" height="37.071" viewBox="0 0 37.071 37.071">\n                          <g transform="translate(-2.464 -2.464)">\n                            <line x1="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n                            <line x2="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n                          </g>\n                        </svg>\n                      </div>\n                      <iframe id="youtube-video" src="'+l.dataset.video+'?autoplay=1&autohide=1&fs=1&rel=0&hd=1&wmode=transparent&enablejsapi=1&html5=1" width="100%" height="550px" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>\n                    </div>\n                  ',document.getElementById("__p").appendChild(n),setTimeout(()=>{let e=document.querySelector(".video");e.classList.add("show"),e.querySelector(".modal__backdrop").addEventListener("click",t=>{e.classList.remove("show"),l.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)}),e.querySelector(".modal__close").addEventListener("click",t=>{e.classList.remove("show"),l.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)})},100)}else{o(l),document.body.classList.add("no_scroll");let c=document.createElement("div");c.classList.add("modal"),c.classList.add("video"),c.innerHTML='\n                    <div class="modal__backdrop"></div>\n                    <div class="modal__wrapper modal--image">\n                      <div class="modal__close pointer">\n                        <svg xmlns="http://www.w3.org/2000/svg" width="37.071" height="37.071" viewBox="0 0 37.071 37.071">\n                          <g transform="translate(-2.464 -2.464)">\n                            <line x1="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n                            <line x2="30" y2="30" transform="translate(6 6)" class="modal__close--stroke"/>\n                          </g>\n                        </svg>\n                      </div>\n                      <iframe id="youtube-video" src="'+l.dataset.video+'?autoplay=1&mute=1&autohide=1&fs=1&rel=0&hd=1&wmode=transparent&enablejsapi=1&html5=1" width="100%" height="550px" frameborder="0" data-category-consent="cookie_cat_statistic" data-consent-src="'+l.dataset.video+'" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" mute="0"></iframe>\n                    </div>\n                  ',document.getElementById("__p").appendChild(c),setTimeout(()=>{let e=document.querySelector(".video");e.classList.add("show"),e.querySelector(".modal__backdrop").addEventListener("click",t=>{e.classList.remove("show"),l.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)}),e.querySelector(".modal__close").addEventListener("click",t=>{e.classList.remove("show"),l.classList.remove("active"),document.body.classList.remove("no_scroll"),setTimeout(()=>{e.remove()},500)})},100)}}l.classList.contains("active")?("/podcasts/"==e&&(document.querySelector(".info__podcasts audio").muted=!0,document.querySelector(".info__podcasts audio").pause()),l.classList.remove("active")):("/podcasts/"==e&&(document.querySelector(".info__podcasts audio").muted=!1,document.querySelector(".info__podcasts audio").play()),l.classList.add("active")),i.forEach((e,a)=>{e!=t&&e.querySelector(".element__info-play")&&e.querySelector(".element__info-play").classList.remove("active")})}))}),document.querySelector(".element-box__periodic").addEventListener("mouseleave",t=>{switch(e){case"/":case"/history/":document.querySelector(".element-box__formula")&&document.querySelector(".element-box__formula").classList.contains("active")&&(document.querySelector(".element-box__formula").style.display="flex"),document.querySelector(".element-box__info").classList.remove("active"),document.querySelector(".element-box__info").classList.add("none")}});let v=document.querySelectorAll(".filter__type"),f=document.querySelectorAll(".filter__classification"),g=document.querySelectorAll(".filter__group"),h=document.querySelectorAll(".filter__period"),b=document.querySelectorAll(".filter__block");if(v.length>0&&s(i,v,"type"),f.length>0&&s(i,f,"classification"),h.length>0&&s(i,h,"period"),g.length>0&&s(i,g,"group"),b.length>0&&s(i,b,"block"),document.querySelector(".filter-input__range")){let L=null;switch(e){case"/":L="temperature";break;case"/history/":L="year"}document.getElementById(L).addEventListener("input",e=>{r(i,L,e.target.value)}),document.querySelector(".filter-input__action--plus").addEventListener("click",e=>{l(document.getElementById(L),i,L,"increase")}),document.querySelector(".filter-input__action--minus").addEventListener("click",e=>{l(document.getElementById(L),i,L,"decrease")})}document.getElementById("clear")&&document.getElementById("clear").addEventListener("click",e=>{n(!1),i.forEach((e,t)=>{e.style.backgroundColor=e.dataset.color,e.classList.remove("element--grayed-out")})})}}),window.addEventListener("resize",e=>{t()})}();