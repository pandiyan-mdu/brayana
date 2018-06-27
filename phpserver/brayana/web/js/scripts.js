// global.js
var host_url = "http://localhost/brayana/web/";
var api_url = "http://localhost/brayana";
function islogged(){
  var pathname = window.location.pathname; // Returns path only
  var url      = window.location.href;     // Returns full URL
  var currentPath = pathname.replace("/brayana/web/","");
  var auth = getLocal("auth");
  var isLogged = (typeof auth != "undefined" && auth != "" && auth != null);
  if(isLogged && (currentPath == "login.html" || currentPath == "index.html")){
    window.location.href=host_url+'land/landView.html';
  }else if(!isLogged && currentPath != "login.html"){
    window.location.href=host_url+'login.html';
  }
}
function logout(){
    removeLocal("auth");
    islogged();
}
function getCurrentLocation(){
  var pathname = window.location.pathname; // Returns path only
  var url      = window.location.href;     // Returns full URL
  var currentPath = pathname.replace("/brayana/web/","");
  var auth = getLocal("auth");
  var isLogged = (typeof auth != "undefined" && auth != "" && auth != null);
  if(isLogged && currentPath == "login.html"){
    window.location='./land/landView.html';
  }else{
    window.location='./login.html';
  }
 
}

function setLocal(key,value){
  localStorage.setItem(key, value);

} 
function getLocal(key){
  return localStorage.getItem(key);
}
function removeLocal(key){
   localStorage.removeItem(key);
}