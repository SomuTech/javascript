//Temperature conversion
function toFarenheit() 
{
    var celsius=document.getElementById("number1").value;
    return (celsius*9/5+32);
}
document.getElementById("number1").innerHTML = toFarenheit();
function toCelsius() 
{
    var Fahrenheit=document.getElementById("number2").value;
    var Celsius= ((5/9)*(Fahrenheit-32));
    document.write(Celsius);
}