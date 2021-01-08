function passwordcheck(){
var password = document.getElementById("password").value;
var cpassword = document.getElementById("cpassword").value;

if(password!=cpassword){
document.getElementById("cpass_error").style.display = 'block';
}
else{
document.getElementById("cpass_error").style.display = 'none';	
}
}