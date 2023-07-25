<?php 

class Sistema_Lubricacion {

    public function __construct(
        private int $id,
        private string $bomba_aceite,
        private string $filtro_aceite
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