let age=document.getElementById("age");
let category =document.getElementById("category");
let message = document.getElementById("message");

age.addEventListener("keyup",function() {
    message.style.display = "none";
    category.innerText="";
    if(age.value =="" )
        return;
    if(isNaN(age.value))
    {
        message.style.display="block";
        return;
    }
    if(age.value<2)
        category.innerText = "Infant";
    else if(age.value>=2 && age.value<=11)
        category.innerText = "Children";
    else if(age.value>11)
        category.innerText = "Adult";
    
});