<?php 

class Sistema_Movil {

    public function __construct(
        private int $id,
        private string $piston,
        private string $aros_compersion,
        private string $biela,
        private string $cigueñal,
        private string $volante_inercia,
        private string $polea
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