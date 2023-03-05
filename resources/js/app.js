import './bootstrap';
import WOW from 'wow.js'

//проверка какая тема установлена у пользователя
if(localStorage.theme === "dark"){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.add("dark");
    tag.setAttribute("data-theme", "dark");
    btn.classList.replace("fa-moon", "fa-sun");
} else if(localStorage.theme === "light"){
    var tag1 = document.getElementById("themeitem");
    var btn1 = document.getElementById("themetoggler");
    tag1.classList.remove("dark");
    tag1.setAttribute("data-theme", "light");
    btn1.classList.replace("fa-sun", "fa-moon");
}

//переключение темы и смена иконки на кнопке
btntheme.onclick = function (){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.toggle("dark");
    if (btn.classList.contains("fa-moon")){
        btn.classList.replace("fa-moon", "fa-sun");
        tag.setAttribute("data-theme", "dark");
        localStorage.theme = "dark";
    }else{
        btn.classList.replace("fa-sun", "fa-moon");
        tag.setAttribute("data-theme", "light");
        localStorage.theme = "light";
    }
}

//включение wow.js
var wow = new WOW({
    animateClass: 'animate__animated',
    offset: 100,
    mobile: true,
    live: true,

});
wow.init();
