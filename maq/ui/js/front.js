"use strict";
window.console.log("%cCoded by Oet Capital", "color:#fff;  font-size: 10px; background:#000; padding:20px;");
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
function detectBrowser(){
  var cB = false;
  if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) checkMobile = true;
  var r = {
    wM: "480",
    hM: "854",
    wD: "1920",
    hD: "1080"
  }
  if(cB){
    // setRatio("m");
  } else {
    // setRatio("d");
  }
}
function generateCoupon(){
  var tx = _('#stateText').innerHTML = "Cargando Cupón...";
  var carrusel = _('#carrusel').style.display = "none";
  var generando = _("#generandocupon").style.display = "block";
  loadingCoupon();
}

function loadingCoupon(){
  var generando = _("#generandocupon");
  var n = 0;
  var counter = _("#counter>p");
  var interval = setInterval(function(){
    n++;
    counter.innerHTML = n;
    if(n===100) {
      clearInterval(interval);
      setTimeout(function(){
        generando.style.display = "none";
        displayCoupon();
      },10000);
    }
  });
}


function displayCoupon(){
  var cupon = _("#cupon").style.display = "block";
  var tx = _('#stateText').innerHTML = "Cupón Listo";
}

function savedCoupon(){
  var cupon = _("#cupon").style.display = "none";
  var guardado = _("#guardado").style.display = "block";
  var tx = _('#stateText').innerHTML = "Cupón Guardado Exitosamente";
}
