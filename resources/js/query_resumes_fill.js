var inp_r_1 = document.getElementById("inp_r_1");
var sel_r_1 = document.getElementById("sel_r_1");
var sel_r_2 = document.getElementById("sel_r_2");
var sel_r_3 = document.getElementById("sel_r_3");

const url_name = new URL(location.href).searchParams.get('name');
const url_catId = new URL(location.href).searchParams.get('category_id');
const url_cityId = new URL(location.href).searchParams.get('city_id');
const url_educId = new URL(location.href).searchParams.get('education_id');

//обработка стилей со страницы резюме
inp_r_1.onchange = function (){
    inp_r_1.style.color = '#a78bfa';
    inp_r_1.style.borderColor = '#a78bfa';
}
sel_r_1.onchange = function (){
    sel_r_1.style.color = '#a78bfa';
    sel_r_1.style.borderColor = '#a78bfa';
}
sel_r_2.onchange = function (){
    sel_r_2.style.color = '#a78bfa';
    sel_r_2.style.borderColor = '#a78bfa';
}
sel_r_3.onchange = function (){
    sel_r_3.style.color = '#a78bfa';
    sel_r_3.style.borderColor = '#a78bfa';
}

if (url_name != null && url_name != '') {
    inp_r_1.style.color = '#a78bfa';
    inp_r_1.style.borderColor = '#a78bfa';
}

if (url_catId != null  && url_catId != '') {
    sel_r_1.style.color = '#a78bfa';
    sel_r_1.style.borderColor = '#a78bfa';
}

if (url_cityId != null  && url_cityId != '') {
    sel_r_2.style.color = '#a78bfa';
    sel_r_2.style.borderColor = '#a78bfa';
}

if (url_educId != null  && url_educId != '') {
    sel_r_3.style.color = '#a78bfa';
    sel_r_3.style.borderColor = '#a78bfa';
}