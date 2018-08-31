"use strict";
window.console.log("%cCoded by Oet Capital", "color:#fff;  font-size: 10px; background:#000; padding:20px;");
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
function detectBrowser(){
  var cB = false;
  if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) checkMobile = true;
  var ratio = {
    wM: "480",
    hM: "854",
    wD: "1920",
    hD: "1080"
  }
  if(cB){
    setRatio("m");
    //loadingAssets MOBILE
  } else {
    setRatio("d");
    //loadingAssets DESKTOP
  }
  // function setRatio(n){
  //   var wr = _('#seqHomeMob'),
  //       wrH = wr.offsetHeight;
  //   if(n === "m"){
  //     // var r = ratio.hM / ratio.wM ;
  //     console.log("Height: " + ratio.hM );
  //     console.log("Width: " + (ratio.wM *r));
  //   } else {
  //     var r = ratio.hD / ratio.wD ;
  //     var wNew = wrH/r;
  //     console.log("Height: " + ratio.hD );
  //     console.log("Ratio: " + r);
  //     console.log("New Width: " + wNew);
  //     wr.style.width = wNew+"px";
  //   }
  // }
}
