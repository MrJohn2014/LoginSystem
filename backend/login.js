$(document).ready(function(){
  $("#submit").click(function(){
    var username = $("#username").val();
    var pwd = $("#password").val();
    if(username == ""){
       $("#username").css("border","1px solid red");
       $("#error1").css("fontSize","13px");
       $("#error1").css("color","red");
       $("#error1").html("Require username");
    }
    else{
       $("#username").css("border","1px solid rgb(238,238,238)");
       $("#error1").html("");
    }
    if(pwd == ""){
       $("#password").css("border","1px solid red");
       $("#error2").css("fontSize","13px");
       $("#error2").css("color","red");
       $("#error2").html("Require password");
    }
    else{
       $("#password").css("border","1px solid rgb(238,238,238)");
       $("#error2").html("");
    }
    if(username != "" && password != ""){
       $.ajax({
             url:'backend/login.php',
             type:'post',
             data:{username:username,password:pwd},
             success:function(response){
                  if(response == 1){
                      window.location = "signin.php";
                  }
                  if(response == "Unvalid username"){
                      $("#username").css("border","1px solid red");
                      $("#error1").css("fontSize","13px");
                      $("#error1").css("color","red");
                      $("#error1").html("Unvalid username");
                  }
                  else{
                      $("#username").css("border","1px solid rgb(238,238,238)");
                      $("#error1").html("");
                  }
                  if(response == "Wrong password"){
                      $("#password").css("border","1px solid red");
                      $("#error2").css("fontSize","13px");
                      $("#error2").css("color","red");
                      $("#error2").html("Wrong password");
                  }
                  else{
                      $("#password").css("border","1px solid rgb(238,238,238)");
                      $("#error2").html("");
                  }
             }

       });
    }

  });
});
