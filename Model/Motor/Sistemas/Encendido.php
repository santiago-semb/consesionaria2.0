<?php 

class Sistema_Encendido {

    public function __construct(
        private int $id,
        private string $bateria,
        private string $bobina,
        private string $distribuidor,
        private string $bujias
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