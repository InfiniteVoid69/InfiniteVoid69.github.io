$(function(){
    $("#nav-placeholder").load("./assets/nav.html");
});

$('#targetid').load('somewhere/a.html');

function load_home() {
    document.getElementById("nav-placeholder").innerHTML='<object type="text/html" data="./asstes/nav.html" ></object>';
}