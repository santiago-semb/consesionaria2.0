<?php 

class Sistema_Alimentacion {

    public function __construct(
        private int $id,
        private string $tanque_combustible,
        private string $cañeria,
        private string $filtro,
        private string $bomba_nafta,
        private string $carburador,
        private string $sistema_inyeccion
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