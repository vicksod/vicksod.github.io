function login_form() {
	form_close();
  	document.getElementById("login-form").style.display = "block";
}
function sign_form() {
	form_close();
  	document.getElementById("sign-form").style.display = "block";
}
function forgot_form() {
	form_close();
  	document.getElementById("forgot-form").style.display = "block";
}
function form_close() {
  	document.getElementById("login-form").style.display = "none";
  	document.getElementById("sign-form").style.display = "none";
  	document.getElementById("forgot-form").style.display = "none";
}