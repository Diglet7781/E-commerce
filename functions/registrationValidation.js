function firstName(){
    var firstName=document.getElementById("registrationForm").elements[0].value;
    var firstNamePattern=/[a-zA-Z]+$/;
    var firstNameTest=firstName.match(firstNamePattern);
    console.log(firstName);
    if(firstName.trim()==""){
        document.getElementById("firstNameErr").innerHTML="This filed must be entered";
    }
    else if(!firstNameTest){
        document.getElementById("firstNameErr").innerHTML="Please enter a valid  first name";
    }else{
        document.getElementById("firstNameErr").innerHTML="";
    }
}