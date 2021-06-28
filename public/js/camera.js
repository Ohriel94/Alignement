const linesThickness = 1;
const alpha = 1;
const linesColour = "rgba(255,176,72,"+alpha+")";
const x = 30;
const y = 30;
const step = 30;
const height = 720;
const width = 1080;

var page = document.getElementById("canvas-couche-1");
var ctx = page.getContext("2d");

ctx.fillStyle = "rgba(255,255,255,0.10)";
ctx.fillRect(0,0,width,height);

for (let i = 0 ; i < width / 31 ; i++) {
    ctx.beginPath();
    ctx.lineCap = "round";
    ctx.strokeStyle = linesColour;
    ctx.moveTo(x + step * i, 0);
    ctx.lineTo(y + step * i, height);
    ctx.lineWidth = linesThickness;
    ctx.stroke();
}

for (let i = 0 ; i < height / 32 ; i++) {
    ctx.beginPath();
    ctx.lineCap = "round";
    ctx.strokeStyle = linesColour;
    ctx.moveTo(0, y + step * i);
    ctx.lineTo(width, y + step * i);
    ctx.lineWidth = linesThickness;
    ctx.stroke();
}

ctx.globalCompositeOperation = "destination-atop";

function Coulisser() {
    ctx.clearRect(0, 0, 1080, 720);
    ctx.translate(100,100)
    ctx.stroke();
}

function Orienter() {
    
}