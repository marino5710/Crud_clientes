<?php
require '../../modelos/Cliente.php';


if($_POST['cliente_nombre'] != '' && $_POST['cliente_nit']  != '' && $_POST['cliente_id'] != ''){



    try {
        $cliente = new Cliente($_POST);
        $resultado = $cliente->modificar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
}else{
    $error = "Debe llenar todos los datos";
}


// if($resultado){
//     echo "Guardado exitosamente";
// }else{
//     echo "Ocurrió un error: $error";
// }

?>