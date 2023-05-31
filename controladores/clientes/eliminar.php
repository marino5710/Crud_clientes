<?php
require '../../modelos/Cliente.php';


    try {
        $cliente = new Cliente($_GET);
        $resultado = $cliente->eliminar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }



// if($resultado){
//     echo "Guardado exitosamente";
// }else{
//     echo "Ocurrió un error: $error";
// }

?>