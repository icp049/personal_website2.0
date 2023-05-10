

function SignUpForm(event) {

 
 
 

  var valid = true;


  var elements = event.currentTarget;
  var email = elements[0].value; //Email
  var uname = elements[1].value; //Username
  var pswd = elements[2].value; //Password
  var pswdr = elements[3].value; //Confirm Password



  var regex_email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var regex_uname = /^[a-zA-Z0-9_-]+$/;
  var regex_pswd = /^(\S*)?\d+(\S*)?$/;



  var msg_email = document.getElementById("msg_email");
  var msg_uname = document.getElementById("msg_uname");
  var msg_pswd = document.getElementById("msg_pswd");
  var msg_pswdr = document.getElementById("msg_pswdr");
  msg_email.innerHTML = "";
  msg_uname.innerHTML = "";
  msg_pswd.innerHTML = "";
  msg_pswdr.innerHTML = "";



  var textNode;
  var htmlNode;



  if (email == null || email == "") {
    textNode = document.createTextNode("Email address empty.");
    msg_email.appendChild(textNode);
    valid = false;
  }
  else if (regex_email.test(email) == false) {
    textNode = document.createTextNode("Email address wrong format. example: username@somewhere.sth");
    msg_email.appendChild(textNode);
    valid = false;
  }
  else if (email.length > 60) {
    textNode = document.createTextNode("Email address too long. Maximum is 60 characters.");
    msg_email.appendChild(textNode);
    valid = false;
  }

  if (uname == null || uname == "") {
    textNode = document.createTextNode("Username is empty.");
    msg_uname.appendChild(textNode);
    valid = false;

  } else if (regex_uname.test(uname) == false) {
    textNode = document.createTextNode("Username wrong format");
    msg_uname.appendChild(textNode);
    valid = false;
  }
  else if (uname.length > 40) {
    textNode = document.createTextNode("Username address too long. Maximum is 40 characters.");
    msg_uname.appendChild(textNode);
    valid = false;
  }





  if (pswd == null || pswd == "") {
    textNode = document.createTextNode("Password is empty.");
    msg_pswd.appendChild(textNode);
    valid = false;

  } else if (regex_pswd.test(pswd) == false) {
    textNode = document.createTextNode("Password Wrong Format");
    msg_pswd.appendChild(textNode);
    valid = false;
  }
  else if (pswd.length > 8) {
    textNode = document.createTextNode("Passwords must be 8 characters long.");
    msg_pswd.appendChild(textNode);
    valid = false;
  }






  if (pswdr == null || pswdr == "") {
    textNode = document.createTextNode("Confirm Password is Empty");
    msg_pswdr.appendChild(textNode);
    valid = false;
  }
  else if (pswd != pswdr) {
    textNode = document.createTextNode("Passwords don't match!!");
    msg_pswdr.appendChild(textNode);
    valid = false;
  }


  
  if(valid == false){

  
  event.preventDefault();

  }
 


}











