<?php 

class Sistema_Refrigeracion {

    public function __construct(
        private int $id,
        private string $termostato,
        private string $radiador,
        private string $bomba_agua,
        private string $ventilador,
        private string $mangueras
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