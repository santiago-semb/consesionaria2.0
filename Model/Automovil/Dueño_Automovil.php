<?php 

class Dueño_Automovil {

    public function __construct(
        private int $id,
        private string $nombres,
        private string $apellidos,
        private int $dni,
        private string $genero,
        private int $automovil
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