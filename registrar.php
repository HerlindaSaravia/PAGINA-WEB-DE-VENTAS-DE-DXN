<?php

$usuario = isset($_POST['txt_usuario']) ? $_POST['txt_usuario'] : '';
$nombre = isset($_POST['txt_nombre']) ? $_POST['txt_nombre'] : '';
$edad = isset($_POST['int_apellido']) ? $_POST['int_apellido'] : '';

t




























































































































































































































0.
ry {

    $conexion = new PDO("mysql:host=localhost;port=81;dbname=prueba_db", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios(usuario, nombre, edad) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $usuario);
    $pdo->bindParam(2, $nombre);
    $pdo->bindParam(3, $apellido);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}