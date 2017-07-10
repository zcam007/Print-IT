$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
function signupSubmit()
{
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var fname = document.getElementById("fname").value;
    console.log(fname);
    return false;
}