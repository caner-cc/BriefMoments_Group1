let cols=$('#tarea').parent().width();

//$('#tarea').attr('cols',cols+'px');
$('#tarea').css('width',cols+'px');
$('#send').css('width',cols+'px');
//window.onresize = function(e){
$(window).on("resize",function(){
    let cols=$('#tarea').parent().width();
    
    //$('#tarea').attr('cols',cols+'px');
    $('#tarea').css('width',cols+'px');
    $('#send').css('width',cols+'px');
});

$('#send').on('click', function(event){
event.preventDefault();
let i=$(':invalid');
if(i.length==0){
$('#exampleModal').modal();}
}

);
