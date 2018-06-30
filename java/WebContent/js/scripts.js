// global.js
var Env = "local";

if(Env == "local"){
  var host_url = "http://localhost:8080/Brayana/";
  //var api_url = "http://localhost/brayana";
  var api_url = "http://brayana.tweenix.com";
  var replace_ct = "/Brayana/";
}else{
  var host_url = "http://brayana.tweenix.com/web/";
  var api_url = "http://brayana.tweenix.com";
  var replace_ct = "/web/";
}

function islogged(){
  var pathname = window.location.pathname; // Returns path only
  var url      = window.location.href;     // Returns full URL
  var currentPath = pathname.replace(replace_ct,"");
  var auth = getLocal("auth");
  var isLogged = (typeof auth != "undefined" && auth != "" && auth != null);
  if(isLogged && (currentPath == "login.html" || currentPath == "index.html")){
    window.location.href=host_url+'land/landView.html';
  }else if(!isLogged && currentPath != "login.html"){
    window.location.href=host_url+'login.html';
  }
}

function getCurrentPath(){
  var pathname = window.location.pathname; // Returns path only
  var url      = window.location.href;     // Returns full URL
  var currentPath = pathname.replace(replace_ct,"");
  return currentPath;
}
function checkPaths(){
  console.log(host_url);
  console.log(api_url);
  console.log(window.location.pathname);
  console.log(window.location.href);
  console.log(pathname.replace(host_url,""));
}
function logout(){
    removeLocal("auth");
    islogged();
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

$(document).ready(function(){
        //checkPaths();
        $("#installmentMonths,#installmentAmount").change(function(){
            calculateTotalInstallments();
        });

        
});
//type = success/fail
function showalert(type,redirect){

  //window.setTimeout(function() {
      $("."+type).show();
      $(".loader").hide(); 
      $("."+type).fadeTo(1000, 0).slideUp(500, function(){
          $(this).remove(); 
          location.reload(); 
      });
 // }, 1000);
}


function calculateTotalInstallments(){
    var months = $("#installmentMonths").val();
    var amt = $("#installmentAmount").val();
    if(months != "" && amt != ""){
      if($.isNumeric(months) && $.isNumeric(amt)){
          var tot = months*amt;
          $("#totalAmount").val(tot);
      }else{
          alert("Only Numbers are allowed");
      }
    }
}

var getParams = function (url) {
  var params = {};
  var parser = document.createElement('a');
  parser.href = url;
  var query = parser.search.substring(1);
  var vars = query.split('&');
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split('=');
    params[pair[0]] = decodeURIComponent(pair[1]);
  }
  return params;
};

function cl(msg){
  console.log(msg);
}

(function ($) {
  $.fn.serializeFormJSON = function () {

      var o = {};
      var a = this.serializeArray();
      $.each(a, function () {
          if (o[this.name]) {
              if (!o[this.name].push) {
                  o[this.name] = [o[this.name]];
              }
              o[this.name].push(this.value || '');
          } else {
              o[this.name] = this.value || '';
          }
      });
      return o;
  };
})(jQuery);