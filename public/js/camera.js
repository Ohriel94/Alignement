var largeur = document.getElementById("iframe").width;
var hauteur = document.getElementById("iframe").height;
var epaisseur = 5;
var alpha = 1;
var densite = 30;
var lignesCouleur = "rgba(255,176,72," + alpha + ")";
var canvas = document.getElementById("canvas");
var contexte = canvas.getContext("2d");

contexte.fillStyle = "rgba(120,120,120,0.10)";
contexte.fillRect(0, 0, largeur, hauteur);

//Dessiner les lignes verticales. S'ajuste en fonction des dimensions de l'écran par rapport a la densité
//de lignes choisit
for (i = 1; i < largeur / (hauteur / largeur) / densite; i++) {
    contexte.beginPath();
    contexte.lineCap = "flat";
    contexte.strokeStyle = lignesCouleur;
    contexte.moveTo(0 + ((largeur / densite) * i), largeur / hauteur);
    contexte.lineTo(0 + ((largeur / densite) * i), hauteur);
    contexte.lineWidth = epaisseur;
    contexte.stroke();
}
//Dessiner les lignes horizontales. S'ajuste en fonction des dimensions de l'écran par rapport a la densité
//de lignes choisit
for (i = 1; i < hauteur / (largeur / hauteur) / densite; i++) {
    contexte.beginPath();
    contexte.lineCap = "flat";
    contexte.strokeStyle = lignesCouleur;
    contexte.moveTo(hauteur / largeur, 0 + ((largeur / densite) * i));
    contexte.lineTo(largeur, 0 + ((largeur / densite) * i));
    contexte.lineWidth = epaisseur;
    contexte.stroke();
}
contexte.globalCompositeOperation = "destination-atop";