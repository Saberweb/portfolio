var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

var x = 50;
var v = 1;

function anim(){

    requestAnimationFrame(anim);
    console.log("hello");
    ctx.clearRect(0,0,canvas.clientWidth,canvas.height);
    ctx.beginPath();
    ctx.arc(x, 75, 20, 0, 2*Math.PI);
    ctx.strokeStyle = "pink";
    ctx.fillStyle = "pink";
    ctx.lineWidth = 10;
    ctx.fill();
    ctx.stroke();
    if(x + 50 > canvas.width || x - 50 < 0){
        v = - v;
    }
    x +=v;

}
anim();

function toggle() {
    "use strict";
     var x = document.querySelector(".menu");
 
     if (x.className === "menu") {
         x.className += " affiche";
     } else {
         x.className = "menu";
     }
 }

