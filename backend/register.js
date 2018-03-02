var log = document.getElementById("login");
var height;
var control1= true;
var control2= true;
var control3 = true;
var control4 = true;
var control5 = true;
//var regex = /^[a-zA-Z]*$/;
var fnError = document.getElementById("error1");
var first = document.getElementById("fn");
var lnError = document.getElementById("error2");
var last = document.getElementById("ln");
var emailError = document.getElementById("error3");
var email = document.getElementById("email");
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var unError = document.getElementById("error4");
var username = document.getElementById("uname");
var check = true;
var pwdError = document.getElementById("error5");
var pwd = document.getElementById("password");


//add event listener
first.addEventListener("blur",fnameVerify,true);
last.addEventListener("blur",lnameVerify,true);
email.addEventListener("blur",emailVerify,true);
username.addEventListener("blur",useridVerify,true);
pwd.addEventListener("blur",pwdVerify,true);


function checkInput(){
      if(control1 == true || control2 == true || control3 == true || control4 == true || control5 == true){
        //check firstname input
        if(first.value == "" || !first.value.match(/^[a-zA-Z]*$/)){
           first.style.border = "1px solid red";
           log.style.height = "380px";
           fnError.style.fontSize ="13px";
           fnError.style.color = "red";
           if(first.value == ""){
              fnError.innerHTML = "Missing firstname";
           }
           else{
              fnError.innerHTML = "Unvalid firstname";
           }
           //return false; 
        }
        else{
           control1 = false;
        }

        //check lastname input
        if(last.value == "" || !last.value.match(/^[a-zA-Z]*$/)){
           last.style.border = "1px solid red";
           lnError.style.fontSize ="13px";
           lnError.style.color = "red";
           if(last.value == ""){
              lnError.innerHTML = "Missing lastname";
           }
           else{
              lnError.innerHTML = "Unvalid lastname";
           }
           if(parseInt(log.style.height)==380){
              log.style.height = "410px";
           }
           else{
              log.style.height = "380px";
           }
           //return false; 
        }
        else{
          control2 = false;
        }
 
        //check email input
        if(email.value == "" || !email.value.match(filter)){
           email.style.border = "1px solid red";
           emailError.style.fontSize ="13px";
           emailError.style.color = "red";
           if(email.value == ""){
              emailError.innerHTML = "Missing email";
           }
           else{
              emailError.innerHTML = "Unvalid email";
           }
           if(parseInt(log.style.height)==410){
              log.style.height = "440px";
           }
           else{
              log.style.height = "410px";
           }
           //return false;
        }
        else{
            control3 = false;
        }

        //check username input
        var xmlhttp = new XMLHttpRequest();
        var jsonData;
        xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            jsonData = JSON.parse(xmlhttp.responseText);
            for(var i = 0; i < jsonData.users.length; i++){
              if(username.value == jsonData.users[i].id)
              {
                 check = false;
                 username.style.border = "1px solid red";
                 unError.style.fontSize ="13px";
                 unError.style.color = "red";
                 unError.innerHTML = "Username taken";
              }
              else{
                 check = true;
              }
            }
          }
        };
        xmlhttp.open("GET", "backend/user.php", true);
        xmlhttp.send();

        if(username.value == ""){
           username.style.border = "1px solid red";
           unError.style.fontSize ="13px";
           unError.style.color = "red";
           unError.innerHTML = "Missing username";
           if(parseInt(log.style.height)==440){
              log.style.height = "470px";
           }
           else{
              log.style.height = "440px";
           }
           //return false;
        }
        else{
           control4 = false;
        }

        //check password input
        if(pwd.value == "" || !pwd.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/)){
           pwd.style.border = "1px solid red";
           pwdError.style.fontSize ="13px";
           pwdError.style.color = "red";
           if(pwd.value == ""){
              pwdError.innerHTML = "Missing password";
           }
           else{
              pwdError.innerHTML = "Including UpperCase,LowerCase and Numbers";
           }

           if(parseInt(log.style.height) == 470 || parseInt(log.style.height) == 440){
              log.style.height = "500px";
           }
           else{
              log.style.height = "470px";
           }
        }
        else{
          control5 = false;
        }
     return false;
   }
  return true;
         
}


function fnameVerify(){
   if(first.value != "" && first.value.match(/^[a-zA-Z]*$/)){
      first.style.border = "1px solid rgb(238,238,238)";
      fnError.innerHTML = "";
      height = parseInt(log.style.height)-30;
      log.style.height = height+"px";
      control1 = false;
      return true;
   }
}

function lnameVerify(){
  if(last.value != "" && last.value.match(/^[a-zA-Z]*$/)){
      last.style.border = "1px solid rgb(238,238,238)";
      lnError.innerHTML = "";
      height = parseInt(log.style.height)-30;
      log.style.height = height+"px";
      control2 = false;
      return true;
   }
}

function emailVerify(){
  if(email.value != "" && email.value.match(filter)){
      email.style.border = "1px solid rgb(238,238,238)";
      emailError.innerHTML = "";
      height = parseInt(log.style.height)-30;
      log.style.height = height+"px";
      control3 = false;
      return true;
  }
}

function useridVerify(){
  if(username.value != "" && check == true){
      username.style.border = "1px solid rgb(238,238,238)";
      unError.innerHTML = "";
      //height = parseInt(log.style.height)-10;
      //log.style.height = height+"px";
      control4 = false;
      return true;
  }

}

function pwdVerify(){
  if(pwd.value != "" && pwd.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/)){
      pwd.style.border = "1px solid rgb(238,238,238)";
      pwdError.innerHTML = "";
      height = parseInt(log.style.height)-30;
      log.style.height = height+"px";
      control5 = false;
      return true;
  }
}

