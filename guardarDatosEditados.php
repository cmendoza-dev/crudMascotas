<?php
#Salir si alguno de los datos no está presente
if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["edad"]) ||
    !isset($_POST["id"])
) {
    exit();
}

#SI todo OK ejecutamos resto de código

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

$setencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ? WHERE id = ?;");
$resultado = $setencia->execute([$nombre, $edad, $id]); # Pasar en el mismo orden de los ?

if ($resultado === true) {
    header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
?>
