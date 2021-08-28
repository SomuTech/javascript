let hours = document.getElementById("hour");
let minutes = document.getElementById("minute");
let seconds = document.getElementById("sec");
let date = document.getElementById("date");

setInterval(function(){
    let now = new Date();
    hours.innerText= now.getHours();
    minutes.innerText = now.getMinutes();
    seconds.innerText = now.getSeconds();
    date.innerText = now.toDateString();
},1000);
