<?php 

class Marca_Automovil {

    public function __construct(
        private int $id,
        private string $nombre,
        private string $logotipo
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