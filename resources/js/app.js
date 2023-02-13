import './bootstrap';

//переключение темы и смена иконки на кнопке
btntheme.onclick = function (){
    var tag = document.getElementById("themeitem");
    var btn = document.getElementById("themetoggler");
    tag.classList.toggle("dark");
    if (btn.classList.contains("fa-moon")){
        btn.classList.replace("fa-moon", "fa-sun");
    }else{
        btn.classList.replace("fa-sun", "fa-moon");
    }
}
