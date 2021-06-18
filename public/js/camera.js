var user = admin
var password = admin_fournier

function connexion(){
    var loginUser = document.getElementById(login-username);
    var loginPwrd = document.getElementById(login-password);
    
    var lifespan = new Date();
    lifespan.setMinutes(lifespan.getMinutes() + 15);
    var expire = "expire="+lifespan.toUTCString();
    loginUser.nodeValue = user;
    loginPwrd.nodeValue = password;
}