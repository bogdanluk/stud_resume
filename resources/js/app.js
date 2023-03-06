import './bootstrap';
import WOW from 'wow.js'

//проверка какая тема установлена у пользователя
if(localStorage.theme === "dark"){
    var tag = document.getElementById("themeitem");
    tag.classList.add("dark");
    tag.setAttribute("data-theme", "dark");
} else if(localStorage.theme === "light"){
    var tag1 = document.getElementById("themeitem");
    tag1.classList.remove("dark");
    tag1.setAttribute("data-theme", "light");
}

//переключение темы и смена иконки на кнопке
btntheme.onclick = function (){
    var tag = document.getElementById("themeitem");
    console.log(themebtn.checked);
    if (themebtn.checked){
        tag.setAttribute("data-theme", "dark");
        tag.classList.remove("light");
        tag.classList.add("dark");
        localStorage.theme = "dark";
    }else{
        tag.setAttribute("data-theme", "light");
        tag.classList.remove("dark");
        tag.classList.add("light");
        localStorage.theme = "light";
    }
}

var wow = new WOW({
    animateClass: 'animate__animated',
    offset: 100,
    mobile: true,
    live: true,

});
wow.init();
