function validateLogin(){
    	var username = $("#username").val();
    	var password = $("#password").val();
        

         if(username == ""){
			alert("Please enter user name");
    	}else if(password == ""){
			alert("Please enter password");
    	}else if(username == "admin" && password=="admin"){
    		alert("valid");
    		window.location='./land/landView.html';
    	}else{
    		alert("Invalid user");
    	}
    }