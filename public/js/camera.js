const x = 0;
const y = 0;
const height = 720;
const width = 1080;
const linesColour = "rgba(255,176,72," + alpha.value / 10 + ")";

var thickness = document.getElementById("thickness");
var alpha = document.getElementById("alpha");
var step = document.getElementById("step");
var valueThick = document.getElementById("valueThick");
var valueAlpha = document.getElementById("valueAlpha");
var valueStep = document.getElementById("valueStep");
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

ctx.globalCompositeOperation = "destination-atop";
ctx.fillStyle = "rgba(255,255,255,0.10)";
ctx.fillRect(0, 0, width, height);

thickness.oninput = function() {
    valueThick.innerHTML = this.value
    drawGrid(width,height,linesColour,thickness,alpha,step);
}
alpha.oninput = function() {
    valueAlpha.innerHTML = this.value / 10;
    drawGrid(width,height,linesColour,thickness,alpha,step);
}
step.oninput = function() {
    valueStep.innerHTML = this.value
    drawGrid(linesColour,thickness,alpha,step);
}

function drawGrid(linesColour,thickness,alpha,step) {
    for (let i = 0; i < width / 31; i++) {
        ctx.beginPath();
        ctx.lineCap = "round";
        ctx.strokeStyle = linesColour;
        ctx.moveTo(x + step * i, 0);
        ctx.lineTo(y + step * i, height);
        ctx.lineWidth = thickness.value;
        ctx.stroke();
    }
    
    for (let i = 0; i < height / 32; i++) {
        ctx.beginPath();
        ctx.lineCap = "round";
        ctx.strokeStyle = linesColour;
        ctx.moveTo(0, y + step.value * i);
        ctx.lineTo(width, y + step.value * i);
        ctx.lineWidth = thickness.value;
        ctx.stroke();
    }
}

function clear() {
    var canvasTemp = canvas;
    var ctxTemp = canvasTemp.getContext("2d");
    ctxTemp.clearRect(0, 0, width, height);

}