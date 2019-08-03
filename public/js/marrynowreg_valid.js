function isnotEmpty(profCreatedBy, name, dob, gender, email, maritalStatus, phone, country, pwd, subcaste ){
}//reg validation

function validPhNo(){
var user_phone =$('.user_phone').val();
if(user_phone.length>16){
}
if(isNaN(user_phone)){
    }
}//phone no validation reg page


function pwdStrength() {
	var	password = $('.user_pwd').val();
      var password_strength =   document.getElementById("password_strength");
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
        var passed = 0;
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
        //Validate for length of Password.
        if (passed > 8 && password.length > 8) {
            passed++;
        }
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }//pwd stength validation


function isvalidMatriProfile(email, height, phyStat, country, state, city, citizenship, highEdu, Employed, familyValue, familyType, familyStatus){

}//profile page validation

