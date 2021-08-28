let time = document.getElementById("time");
let date = document.getElementById("date");

setInterval(function(){
    let now = new Date();
    time.innerText= now.toLocaleTimeString();
    date.innerText = now.toDateString();
},100);
