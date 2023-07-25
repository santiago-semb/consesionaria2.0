<?php 

class Sistema_Distribucion {

    public function __construct(
        private int $id,
        private string $arbol_levas,
        private string $taque,
        private string $balancin,
        private string $cigueñal,
        private string $mecanismo_transimision
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