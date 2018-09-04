"use strict";
window.console.log("%cCoded by Oet Capital", "color:#fff;  font-size: 10px; background:#000; padding:20px;");
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
function detectBrowser(){
  var cB = false;
  if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) cB = true;
  if(cB){
    // setRatio("m");
  } else {
    // setRatio("d");
  }
}

//detectBrowser

//Si es móvil sólo cargar secuencia móvil (baja)

//Si es desktop detectar si es:
//menor a 960px cargar secuencia movil (alta)
//mayor a 960px cargar secuencia desktop

//Resize solo si es escritorio****

//Cuando termino de cargar imagenes generarSeqHome
//El loading ya hizo display none
generateSeqHome();
function generateSeqHome(){
  var wr = _("#producto1>.wrap"), frame;
  for (var i = 28; i >= 0; i--) {
    frame = document.createElement("DIV");
    frame.setAttribute("class", "frame");
    frame.style.backgroundImage = "url('ui/img/seqMob/mob-"+i+".jpg')";
    wr.appendChild(frame);
  }
  setTimeout(function(){
    startSeqHome();
  },1000);
}

// for (var i = 0; i < array.length; i++) {
//   array[i]
// }


function startSeqHome(){
  var seq = __(".frame"), c = 28;
  var loop = setInterval(function(){
    seq[c].style.display = "none";
    c--;
    if(c === 0){
      clearInterval(loop);
    }
  },83.3333333333);
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
