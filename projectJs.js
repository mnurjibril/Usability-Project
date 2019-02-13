function forAll(){
register1();
}
function register1(){
var evalCriteria = document.register.evaluation.value.length;
var course = document.register.course.value.length;
if(evalCriteria!=null && evalCriteria!=""){
if(course!=null && course!=""){
confirm("saved successfully ");
}else{
alert("select course pls");
}
}
else{
alert("insert criteria pls");
}
}



function changePass(){
var uname = document.changePassword.username.value.length;
var password = document.changePassword.pass.value.length;
var confirmpass = document.changePassword.pass2.value.length;
if(uname!=null && uname!=""){
if(password!=null && password!=""){
if(confirmpass!=null && confirmpass!=""){
confirm("log in successfully");
}else{
alert("insert your password pls");
}
}
else{
alert("insert your password pls");
}
}
else{
alert("insert your user name pls");
}
}