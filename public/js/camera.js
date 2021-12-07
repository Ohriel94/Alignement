const iframe = document.getElementById("iframe");
const canvas = document.getElementById("canvas");
const contexte = canvas.getContext("2d");
const thkSlider = document.getElementById("thkSlider");
const alpSlider = document.getElementById("alpSlider");
const denSlider = document.getElementById("denSlider");
const thkValue = document.getElementById("thkValue");
const alpValue = document.getElementById("alpValue");
const denValue = document.getElementById("denValue");
const chkRefresh = document.getElementById("chkRefresh");
var couleurLignes = "";
var unBoutonAEtePresse = false;
var refreshRate = 12000;

canvas.width = iframe.width;
canvas.height = iframe.height;

window.setInterval(function CamRefresh() {
    console.log("chkRefresh.checked : ", chkRefresh.checked);
  if (chkRefresh.checked) refreshRate = 1500;
  else refreshRate = 12000;
  document.getElementById("iframe").src =
    "https://10.0.1.95/ISAPI/Streaming/Channels/101/picture";
}, refreshRate);

function DessinerCanvas() {
  EffacerCanvas(contexte);
  RecupererValeurs();
  contexte.fillStyle = "rgba(120,120,120,0.10)";
  contexte.fillRect(0, 0, canvas.width, canvas.height);
  if (!unBoutonAEtePresse) couleurChoisit = "bleu";
  switch (couleurChoisit) {
    case "rouge":
      couleurLignes = "RGBA(175,27,27," + alpha + ")";
      break;
    case "bleu":
      couleurLignes = "RGBA(31,80,190," + alpha + ")";
      break;
    case "vert":
      couleurLignes = "RGBA(37,156,41," + alpha + ")";
      break;
    case "orange":
      couleurLignes = "RGBA(255,145,46," + alpha + ")";
      break;
    case "violet":
      couleurLignes = "RGBA(133, 64, 255," + alpha + ")";
      break;
    case "blanc":
      couleurLignes = "RGB(255,255,255," + alpha + ")";
      break;
  }
  //Dessiner les lignes verticales. S'ajuste en fonction des dimensions de l'écran par rapport a la densité
  //de lignes choisit
  let nbLignesVerticales = Math.round((canvas.width / canvas.height) * densite);
  let nbLignesHorizontales = Math.round(
    (canvas.height / canvas.width) * densite * 2
  );

  contexte.beginPath();
  for (i = 1; i < nbLignesVerticales; i++) {
    contexte.lineCap = "flat";
    contexte.strokeStyle = couleurLignes;
    contexte.moveTo((canvas.width / nbLignesVerticales) * i, 0);
    contexte.lineTo((canvas.width / nbLignesVerticales) * i, canvas.height);
    contexte.lineWidth = epaisseur;
  }
  //Dessiner les lignes horizontales. S'ajuste en fonction des dimensions de l'écran par rapport a la densité
  //de lignes choisit
  for (j = 1; j < nbLignesHorizontales; j++) {
    contexte.lineCap = "flat";
    contexte.strokeStyle = couleurLignes;
    contexte.moveTo(0, (canvas.height / nbLignesHorizontales) * j);
    contexte.lineTo(canvas.width, (canvas.height / nbLignesHorizontales) * j);
    contexte.lineWidth = epaisseur;
  }
  contexte.stroke();
  contexte.globalCompositeOperation = "destination-atop";
}

function ChoisirCouleur(boutonPressé) {
  couleurChoisit = boutonPressé.value;
  unBoutonAEtePresse = true;
  DessinerCanvas();
}

function RecupererValeurs() {
  epaisseur = thkSlider.value;
  alpha = alpSlider.value / 100;
  densite = denSlider.value;
  thkValue.innerHTML = epaisseur;
  alpValue.innerHTML = alpha;
  denValue.innerHTML = densite;
}

function EffacerCanvas(contexte) {
  contexte.clearRect(0, 0, canvas.width, canvas.height);
}
thkSlider.onmouseup = function () {
  DessinerCanvas();
};
alpSlider.onmouseup = function () {
  DessinerCanvas();
};
denSlider.onmouseup = function () {
  DessinerCanvas();
};
