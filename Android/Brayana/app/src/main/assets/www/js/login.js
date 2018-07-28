$(document).ready(function(){
        onLoadLogin();
    });

function onLoadLogin() 
{
  document.addEventListener("deviceready", onDeviceReady, false);
} 


function onDeviceReady() 
{
        document.addEventListener("offline", onOffline, false);
        document.addEventListener("online", onOnline, false);
        checkConnection();
       document.addEventListener("backbutton", onBackKeyDown, false);
}

function onOffline() 
{
  alert("on offline");
}

function onOnline() 
{
  alert("Online");
}

function onBackKeyDown() 
{
  alert("onBackKeyDown");
  navigator.app.exitApp(); 
}


function checkConnection() { 
        
  var networkState = navigator.network.connection.type;

  var states = {};
  states[Connection.UNKNOWN]  = 'Unknown connection';
  states[Connection.ETHERNET] = 'Ethernet connection';
  states[Connection.WIFI]     = 'WiFi connection';
  states[Connection.CELL_2G]  = 'Cell 2G connection';
  states[Connection.CELL_3G]  = 'Cell 3G connection';
  states[Connection.CELL_4G]  = 'Cell 4G connection';
  states[Connection.NONE]     = 'No network connection';
  var isreload='0';

  localStorage.setItem('isReload',isreload);
  alert(states[networkState]);

  if(states[networkState] == 'No network connection')
  {
  alert("No internet connection");
  }else{
     
  }
}








function loginSubmit(){

        var username = $("#username").val();

        var password = $("#password").val();

         $.ajax({

              type: "POST",

              url: api_url+"/Auth/validateLogin",

              dataType:"JSON",

              data: {"username":username,"password":password},

              cache: false,

              success: function(data, textStatus, xhr) {

                    var status = data.STATUS;

                    var data = data.RESPONSE;

                    if(status == "OK"){

                      setLocal("auth",data.token);
                      setLocal("u",data.user_type);

                      getLocal("auth");

                      isloggedLogin();

                    }else{

                      alert("Invalid Username/Password");

                    }

                }

            });

        return false;

}

