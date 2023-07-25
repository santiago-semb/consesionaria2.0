<?php 

class Transmision_Automovil {

    public function __construct(
        private int $id,
        private string $tipo,
        private string $embrague,
        private string $caja_de_velocidades,
        private string $arbol_transimision,
        private string $palieres,
        private string $diferencial
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