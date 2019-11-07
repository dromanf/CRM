function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.RegistOrder.inputPaymentCard.checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('inputCardClient').style.display='block';
document.getElementById('inputNameCardClient').style.display='block';
document.getElementById('inputDateExpCardClient').style.display='block';
document.getElementById('inputCvcCardClient').style.display='block';
document.getElementById('inputCardClientLabel').style.display='block';
document.getElementById('inputNameCardClientLabel').style.display='block';
document.getElementById('inputDateExpCardClientLabel').style.display='block';
document.getElementById('inputCvcCardClientLabel').style.display='block';
document.getElementById('inputTypeCardClient').style.display='block';
document.getElementById('inputTypeCardLabel').style.display='block';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('inputCardClient').style.display='none';
document.getElementById('inputNameCardClient').style.display='none';
document.getElementById('inputDateExpCardClient').style.display='none';
document.getElementById('inputCvcCardClient').style.display='none';
document.getElementById('inputCardClientLabel').style.display='none';
document.getElementById('inputNameCardClientLabel').style.display='none';
document.getElementById('inputDateExpCardClientLabel').style.display='none';
document.getElementById('inputCvcCardClientLabel').style.display='none';
document.getElementById('inputTypeCardClient').style.display='none';
document.getElementById('inputTypeCardLabel').style.display='none';
}
}