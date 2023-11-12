$(function(){
    $("#nav-placeholder").load("./assets/nav.html");
});

$('#targetid').load('./assets/nav.html');

window.onload = function () {
    document.getElementById("nav-placeholder").innerHTML='<object type="text/html" data="./asstes/nav.html" ></object>';
}