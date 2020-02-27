<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">   
		<!--Import Google Icon Font-->
		<link href="css/icon.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
		<!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" href="css/mycss.css">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<!-- Compiled and minified JavaScript -->
        <script src="js/materialize.min.js"></script>
        <title>App Viajes</title>
</head>
<body>
    <div>
        <h4>Registrar Viaje</h4>
        <form id="myform" action="registrar.php" method="post" class="form-register">
            <div>
                <label for="p-usuario" class="label" >Usuario</label>
                <select class="select" name="usuario" id="usuario" required>
                    <option value="Veronica">Veronica</option>
                    <option value="Karen">Karen</option>
                    <option value="Brenda">Benda</option>
                </select>
            </div>
            <div>
                <label for="p-inicio" class="label">Punto de Inicio</label>
                <input type="text" class="input" name="inicio" placeholder="san miguel" required autofocus>
            </div>
            <div>
                <label for="p-destino" class="label">Destino</label>
                <input type="text" class="input" name="destino" placeholder="la union" required>
            </div>
            <div>
                <label for="p-transporte" class="label" >Medio de Transporte</label>
                <select class="select" name="medio_transporte" id="transporte" required>
                    <option value="bus">bus</option>
                    <option value="microbus">microbus</option>
                    <option value="taxi">taxi</option>
                    <option value="uber">uber</option>
                    <option value="carro">carro</option>
                </select>
            </div>
            <div>
                <label for="p_ruta" class="label">Numero de Ruta</label>
                <input type="text" class="input" id="id_ruta" name="ruta" placeholder="304">
            </div>
            <div>
                <label for="p-precio"class="label">Precio</label>
                <input type="text" class="input" name="precio" placeholder="1.00" required>
            </div>
                <input type="submit" name="registrar" value="Registrar" class="btn-enviar">
            
                <a class="waves-effect waves-light btn" href="index.html">Cancelar</a>

               
        </form>
    </div>
<!--Import jQuery before materialize.js--> 
<script type="text/javascript">
    
$(document).ready(function() {
    $('select').material_select();
});

</script>
</body>
</html>