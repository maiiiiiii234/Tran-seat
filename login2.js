function allgood() {
    var v1;
    var v2;
    var v3;
    var v4;
    var v5;
    var v6;


    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;
    var pass = document.getElementById("password").value;

    if (pass.match(re)) {
        console.log("VALID");
        v1 = 1;
    }
    else {
        console.log("NOT_VALID");
        alert("Please add upper, lowercase, special charecters, numbers, and check it is 8+ digits");
        v1 = 0;
    }

    var confirmpass = document.getElementById("Cpassword").value;
    if (confirmpass === pass) {
        console.log("VALID");
        v2 = 1;
    }
    else {
        console.log("NOT_VALID");
        alert("Password confirmation is not correct");
        v2 = 0;
    }

    var age = document.getElementById("age").value;
    if (age >= 16 && age <= 100) {
        console.log("VALID");
        v3 = 1;
    }
    else {
        console.log("NOT_VALID");
        alert("Your age is not suitable");
        v3 = 0;
    }

    var yesf = document.getElementById('fname').value;
    if (!yesf.match(/^[a-zA-Z]*$/)) {
        alert("Only Alphabets are allowed");
        v4 = 0;
    }
    else {
        v4 = 1;
    }

    var yesl = document.getElementById('lname').value;
    if (!yesl.match(/^[a-zA-Z]*$/)) {
        alert("Only Alphabets are allowed");
        v5 = 0;
    }
    else {
        v5 = 1;
    }


    var yesp = document.getElementById('phone').value;
    if (!yesp.match(/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{5})$/)) {

        alert("Enter a Valid Phone Number");
        v6 = 0;
    }
    else {
        v6 = 1;
    }


    if (v1 == 1 && v2 == 1 && v3 == 1 && v4 == 1 && v5 == 1 && v6 == 1) {
         return true;
    }
    else{
        return false;
    }
}

$(document).ready(function () {
    $("#fliptosignup").click(function () {
        $("#circlein").css("animation-name", "GoToLogIn1");
        $("#circlein").css("transform", "translate(-50%,-50%) rotatey(180deg)");

        $("#circleup").css("animation-name", "GoToSignUp1");
        $("#circleup").css("transform", "translate(-50%,-50%) rotatey(0deg)");

    });

    $("#fliptologin").click(function () {
        $("#circlein").css("animation-name", "GoToSignUp2");
        $("#circlein").css("transform", "translate(-50%,-50%) rotatey(0deg)");

        $("#circleup").css("animation-name", "GoToLogIn1");
        $("#circleup").css("transform", "translate(-50%,-50%) rotatey(180deg)");

    });
});