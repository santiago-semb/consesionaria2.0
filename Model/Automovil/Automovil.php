<?php 

class Automovil {

    public function __construct(
        private int $id,
        private int $tipo,
        private int $marca_id,
        private string $nombre,
        private string $modelo,
        private int $kilometros,
        private int $hp,
        private int $torque,
        private float $precio,
        private string $imagen,
        private int $dueño_id,
        private int $año,
        private int $motor_id,
        private int $transimision_id,
        private string $comentarios
    )
    {}

    // GETTER
    public function __get($nombre_campo)
    {
        return $this->$nombre_campo;
    }

    // SETTER
    public function __set($nombre_campo, $valor)
    {
        $this->$nombre_campo = $valor;
    }

}


?>