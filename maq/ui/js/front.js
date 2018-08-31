"use strict";
window.console.log("%cCoded by Oet Capital", "color:#fff;  font-size: 10px; background:#000; padding:20px;");
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
function dB(){
  var cB = false;
  if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) checkMobile = true;
  var r = {
    wM: "480",
    hM: "854",
    wD: "1920",
    hD: "1080"
  }
  if(cB){
    setRatio("m");
  } else {
    setRatio("d");
  }
}
function gC(){
  var tx = _('#stateText').innerHTML = "Cargando Cupón...";
  var carrusel = _('#carrusel').style.display = "none";
  var cupon = _("#cupon").style.display = "block";
}
