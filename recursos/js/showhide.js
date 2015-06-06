$(document).ready(function(){

$('a').click(function () {
var divname= this.name;
$("#"+divname).show("slow").siblings().hide("slow");
});

});