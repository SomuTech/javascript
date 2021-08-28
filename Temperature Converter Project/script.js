//Temperature conversion
let answer1 = document.getElementById("answer1");
let answer2 = document.getElementById("answer2");
let celsius=document.getElementById("number1").value;
let Fahrenheit=document.getElementById("number2").value;

function toFarenheit() 
{
    var celsius=document.getElementById("number1").value;
    answer1.innerText=celsius*9/5+32;
}

function toCelsius() 
{
    var Fahrenheit=document.getElementById("number2").value;
    var Celsius= ((5/9)*(Fahrenheit-32));
    answer2.innerText= Celsius;
}

number1.addEventListener("keyup",function() {
    answer1.style.display = "none";
    number1.innerText="";
    if(number1.value =="" )
        return;
    else
        answer1.style.display="block";
    toFarenheit();
});

number2.addEventListener("keyup",function() {
    answer2.style.display = "none";
    number2.innerText="";
    if(number2.value =="" )
        return;
    else
        answer2.style.display="block";
    toCelsius();
});