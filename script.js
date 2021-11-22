const lightbox = document.createElement('div')
lightbox.id = 'lightbox'
document.body.appendChild(lightbox)

const images = document.querySelectorAll('img')
images.forEach(image => {
  image.addEventListener('click', e => {
    lightbox.classList.add('active')
    const img = document.createElement('img')
    img.src = image.src
    while (lightbox.firstChild) {
      lightbox.removeChild(lightbox.firstChild)
    }
    lightbox.appendChild(img)
  })
})

lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return
  lightbox.classList.remove('active')
})



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
    ctx.strokeStyle = "red";
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

