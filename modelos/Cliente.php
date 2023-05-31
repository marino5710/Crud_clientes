<?php
require 'Conexion.php';

class Cliente extends Conexion{
    public $cliente_id;
    public $cliente_nombre;
    public $cliente_nit;
    public $cliente_situacion;


    public function __construct($args = [] )
    {
        $this->cliente_id = $args['cliente_id'] ?? null;
        $this->cliente_nombre = $args['cliente_nombre'] ?? '';
        $this->cliente_nit = $args['cliente_nit'] ?? '';
        $this->cliente_situacion = $args['cliente_situacion'] ?? '';
    }
    public function guardar(){
        // Validar el NIT antes de guardar los datos
        if (!$this->validarNit($this->cliente_nit)) {
            echo "El NIT ingresado es inválido. No se guardarán los datos.";
            // Detener la ejecución del código o redirigir a otra página, según sea necesario
            exit();
        }
    
        $sql = "INSERT INTO clientes (cliente_nombre, cliente_nit) VALUES ('$this->cliente_nombre','$this->cliente_nit')";
        $resultado = self::ejecutar($sql);
    
        if ($resultado) {
            echo "Datos guardados correctamente. El NIT es válido.";
        } else {
            echo "Error al guardar los datos.";
        }
        
        return $resultado;
    }
    