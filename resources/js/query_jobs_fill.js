var inp_j_1 = document.getElementById("inp_j_1");
var sel_j_1 = document.getElementById("sel_j_1");
var sel_j_2 = document.getElementById("sel_j_2");
var sel_j_3 = document.getElementById("sel_j_3");

const url_name = new URL(location.href).searchParams.get('name');
const url_catId = new URL(location.href).searchParams.get('category_id');
const url_cityId = new URL(location.href).searchParams.get('city_id');
const url_payId = new URL(location.href).searchParams.get('pay_id');

//обработка стилей со страницы вакансий
inp_j_1.onchange = function (){
    inp_j_1.style.color = '#a78bfa';
    inp_j_1.style.borderColor = '#a78bfa';
}
sel_j_1.onchange = function (){
    sel_j_1.style.color = '#a78bfa';
    sel_j_1.style.borderColor = '#a78bfa';
}
sel_j_2.onchange = function (){
    sel_j_2.style.color = '#a78bfa';
    sel_j_2.style.borderColor = '#a78bfa';
}
sel_j_3.onchange = function (){
    sel_j_3.style.color = '#a78bfa';
    sel_j_3.style.borderColor = '#a78bfa';
}

if (url_name != null && url_name != '') {
    inp_j_1.style.color = '#a78bfa';
    inp_j_1.style.borderColor = '#a78bfa';
}

if (url_catId != null  && url_catId != '') {
    sel_j_1.style.color = '#a78bfa';
    sel_j_1.style.borderColor = '#a78bfa';
}

if (url_cityId != null  && url_cityId != '') {
    sel_j_2.style.color = '#a78bfa';
    sel_j_2.style.borderColor = '#a78bfa';
}

if (url_payId != null  && url_payId != '') {
    sel_j_3.style.color = '#a78bfa';
    sel_j_3.style.borderColor = '#a78bfa';
}