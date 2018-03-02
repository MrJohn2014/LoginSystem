$(document).ready(function(){
   $("#submit").click(function(){
     var code = $("#code").val();
     var newPwd = $("#newPwd").val();
     var verifyPwd = $("#verify").val();
     $("#reset").css("height","400px"); 
     if(code == ""){
       $("#code").css("border","1px solid red");
       $("#error1").css("fontSize","13px");
       $("#error1").css("color","red");
       $("#error1").html("Require validation code");
     }
     else{
       $("#code").css("border","1px solid rgb(238,238,238)");
       $("#error1").html("");
     }
     if(newPwd == ""){
       $("#newPwd").css("border","1px solid red");
       $("#error2").css("fontSize","13px");
       $("#error2").css("color","red");
       $("#error2").html("Require new password");
     }
     else if(newPwd != "" && !newPwd.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/)){
       $("#newPwd").css("border","1px solid red");
       $("#error2").css("fontSize","13px");
       $("#error2").css("color","red");
       $("#error2").html("Password should include UpperCase,LowerCase and Numbers");
     }
     else{
       $("#reset").css("height","370px");
       $("#newPwd").css("border","1px solid rgb(238,238,238)");
       $("#error2").html("");
     }
     if(verifyPwd == ""){
       $("#verify").css("border","1px solid red");
       $("#error3").css("fontSize","13px");
       $("#error3").css("color","red");
       $("#error3").html("Require verified password");
     }
     else if(newPwd != "" && verifyPwd != newPwd){
       $("#verify").css("border","1px solid red");
       $("#error3").css("fontSize","13px");
       $("#error3").css("color","red");
       $("#error3").html("Password not match");
     }
     else{
       $("#verify").css("border","1px solid rgb(238,238,238)");
       $("#error3").html("");
     }

     if(code != "" && newPwd != "" && verifyPwd != ""){
       $.ajax({
          url:'backend/resetPwd.php',
          type:'post',
          data:{code:code,newPwd:newPwd,verify:verifyPwd},
          success:function(response){
          	 if(response == 1){
                window.location = "index.php";
          	 }
          	 if(response == "Unvalid code"){
                $("#code").css("border","1px solid red");
       			$("#error1").css("fontSize","13px");
			    $("#error1").css("color","red");
			    $("#error1").html("Wrong validation code");
          	 }
          	 else{
          	 	$("#code").css("border","1px solid rgb(238,238,238)");
       			$("#error1").html("");
          	 }
          	 /*
          	 if(response == "Password not match"){
                $("#verify").css("border","1px solid red");
       			$("#error3").css("fontSize","13px");
       			$("#error3").css("color","red");
       			$("#error3").html("Password not match");
          	 }
          	 else{
          	 	$("#verify").css("border","1px solid rgb(238,238,238)");
                $("#error3").html("");
          	 }
          	 */
          }

       });
     }

   });
});