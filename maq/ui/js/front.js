"use strict";
window.console.log("%cCoded by Oet Capital", "color:#fff;  font-size: 10px; background:#000; padding:20px;");
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
window.requestAnimFrame = (function(){
return  window.requestAnimationFrame       ||
    		window.webkitRequestAnimationFrame ||
    		window.mozRequestAnimationFrame    ||
    		function( callback ){
    			window.setTimeout(callback, 1000 / 60);
      	};
})();
function initFront(){
  var cB = false,
      w = window.innerWidth,
      fps = 12,
      frames;
  if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) cB = true;
  if(cB){
    loadingSeq("ui/img/seqHome/mob-", ".jpg", 24, "mobileHome");
  } else {
    if(w < 960){
      loadingSeq("ui/img/seqHome/mob-", ".jpg", 24, "mobileHome");
    } else {
      // loadingSeq("ui/img/seqHome/mob-", ".jpg", 24, "mobileHome");
      loadingSeq("ui/img/seqHome/desk-", ".jpg", 28, "desktopHome");
    }
  }
  function displaySeqHome(url, ext, len, dis){
    var wr = _("#loading"), wrap = _("#producto1>.wrap");
    generateSeqHome(url, ext, len);
    setTimeout(function(){
      wr.style.opacity = 0;
      setTimeout(function(){
        wr.style.display = "none";
        wrap.style.opacity = "1";
        requestAnimationFrame(animationSeqHome);
      },700);
    },2000);
  }//displaySeqHome
  function generateSeqHome(url, ext, len){
    var wr = _("#producto1>.wrap"), frame;
    for (var i = len; i >= 0; i--) {
      frame = document.createElement("DIV");
      frame.setAttribute("class", "frame");
      frame.style.backgroundImage = "url('"+url+i+ext+"')";
      wr.appendChild(frame);
    }
  }//generateSeqHome
  function animationSeqHome(){
    var seq = __(".frame"), menu = _("#menu"), footer = _("#footer");
    seq[frames].style.display = "none";
    seq[frames].setAttribute("class", "remove");
    frames--;
    if(frames !== 0){
      setTimeout(function(){
        requestAnimationFrame(animationSeqHome);
      },1000/fps);
    }
    if(frames === 0){
      footer.style.opacity = "1";
      menu.style.opacity = "1";
      cleanSeq();
    }
  }//animationSeqHome
  function cleanSeq(){
    var els = __(".remove");
    for (var i = 0; i < els.length; i++) {
      els[i].parentNode.removeChild(els[i]);
    }
    var el = __(".frame");
    el[0].setAttribute("id", "seqHome");
    el[0].setAttribute("style", " ");
  }//cleanSeq
  function loadingSeq(url, ext, len, dis){
    frames = len;
    var xhrList = [], c = 0;
    for(var i = 0; i < len; i++){
  	xhrList[i] = new XMLHttpRequest();
  	xhrList[i].open("GET", url+i+ext, true);
  	xhrList[i].responseType = "blob";
      	xhrList[i].onload = function (e){
        	if(this.readyState == 4){
            c++;
            if(c === len && dis === "desktopHome"){
              displaySeqHome(url, ext, len, dis);
            } else if (c === len && dis === "mobileHome") {
              displaySeqHome(url, ext, len, dis);
            }
        	}
      }
      xhrList[i].send();
    }
  }//loadingSeq
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
      },1000);
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
