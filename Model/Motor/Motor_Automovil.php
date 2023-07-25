<?php 

class Motor_Automovil {

    public function __construct(
        private int $id,
        private string $tipo,
        private int $cilindros,
        private int $cilindrada,
        private int $rpm,
        private int $litros,
        private string $descripcion,
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