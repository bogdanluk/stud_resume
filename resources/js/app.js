import './bootstrap';

//проверка какая тема установлена у пользователя
if(localStorage.theme === "dark"){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.add("dark");
    btn.classList.replace("fa-moon", "fa-sun");
} else if(localStorage.theme === "light"){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.remove("dark");
    btn.classList.replace("fa-sun", "fa-moon");
}

//переключение темы и смена иконки на кнопке
btntheme.onclick = function (){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.toggle("dark");
    if (btn.classList.contains("fa-moon")){
        btn.classList.replace("fa-moon", "fa-sun");
        localStorage.theme = "dark";
    }else{
        btn.classList.replace("fa-sun", "fa-moon");
        localStorage.theme = "light";
    }
}
