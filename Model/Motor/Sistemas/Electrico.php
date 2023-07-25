<?php 

class Sistema_Electrico {

    public function __construct(
        
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