function myFunction(){
    var age=document.getElementById("age").value;
    let male=document.querySelectorAll('input[name="rdiobtn"]:checked').value;
    // let female=document.querySelectorAll('input[name="rdiobtn"]');
    // var heightInput = document.querySelector(".height-input-field");
    // var weightInput = document.querySelector(".weight-input-field");
    // var calculateButton = document.querySelector(".calculate");
    // var result = document.querySelector(".result");
    // var statement = document.querySelector(".result-statement");
    // var BMI, height, weight;
    // //for age above 60
    if (age>60 && male.checked){
       window.open("webpage.html");
    }
    //for age between 30 to 60
    else if(age>30 && age<60 && male.checked){
        // window.open('#')
    }
    else  {
    //     window.open("#");
    // // 
   
}

}