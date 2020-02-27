/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $('select').material_select();
  });
  
 
function registrar() {
    //var deviceID = device.uuid;
    var theUrl = "http://192.168.1.5/pruebas/agregar.php";
    
    var codigo = document.getElementById("codigo").value;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;    
    var telefono = document.getElementById("telefono").value;
    var direccion = document.getElementById("direccion").value;
    var departamento = document.getElementById("departamento").value;    
    
    var parametros = "codigo="+codigo+"&nombre=" + nombre + "&apellido=" + apellido + "&telefono=" + telefono + "&direccion=" + direccion + "&departamento=" + departamento + "";
    var http = new XMLHttpRequest();
    http.open("POST", theUrl, true); // false for synchronous request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(parametros);
    Materialize.toast('Sus Datos Fueron Enviados!', 4000);
}
//formas de obtener los datos de input
/**
        obtenemos e valor por el numero de elemento
        var porElementos=document.forms["form1"].elements[0].value;

        // Obtenemos el valor por el id
        var porId=document.getElementById("nombre").value;

        // Obtenemos el valor por el Nombre
        var porNombre=document.getElementsByName("nombre")[0].value;

        // Obtenemos el valor por el tipo de tag
        var porTagName=document.getElementsByTagName("input")[0].value;

        // Obtenemos el valor por el nombre de la clase
        var porClassName=document.getElementsByClassName("formulario")[0].value;
 */
