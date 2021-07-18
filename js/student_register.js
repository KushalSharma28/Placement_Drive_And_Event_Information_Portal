
$(document).ready(function() {
$("#register").click(function() {
var fname = $("#fname").val();
var lname = $("#lname").val();
var college_name = $("#college_name").val();
var college_code = $("#college_code").val();
var enroll = $("#roll").val();
var email = $("#email").val();
var course = $("#course").val();
var mobile = $("#mobile").val();
var password = $("#pwd").val();
var cpassword = $("#cpwd").val();
if (fname == '' || lname == '' || college_name == '' || college_code == '' || enroll == '' || email == ''
 || course == '' || mobile == '' || password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
}
});
});