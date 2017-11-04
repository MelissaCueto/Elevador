<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elevador</title>
    </head>
    <body>

        <?php

        $obj1 = new Elevador();

        $obj1->pisoActual = 300;
        $obj1->limitePisos = 1000;
        $obj1->limitPisosinf = 10;

        $obj1->sube = 16;
        $obj1->subir();
        $obj1->verificarPisosubir();
        $obj1->baja = 6;
        $obj1->bajar();
        $obj1->verificarPisobajar();
        $obj1->sube = 7;
        $obj1->subir();
        $obj1->verificarPisosubir();

        class Elevador {

            public $sube;
            public $baja;
            public $pisoActual;
            public $limitePisos;
            public $limitPisosinf;

            public function subir() {
                if (($this->pisoActual + $this->sube) <= $this->limitePisos) {
                    echo "Subiendo al piso " . ($this->pisoActual + $this->sube)."<br>";
                } else {
                    echo "Piso solicitado. " . $this->pisoActual + $this->sube."<br>";
                    echo "Piso invalido. Supera el limite "."<br>";
                }
            }

            public function bajar() {
                if (($this->pisoActual - $this->baja) >= $this->limitPisosinf) {
                    echo "Bajando al piso " . ($this->pisoActual - $this->baja."<br>");
                } else {
                    echo "Piso solicitado " . $this->pisoActual - $this->baja."<br>";
                    echo "Piso Invalido. No existen pisos mas inferiores al piso " . $this->limitPisosinf."<br>";
                }
            }

            public function verificarPisosubir() {
                $this->pisoActual = $this->pisoActual + $this->sube;
                if ($this->pisoActual <= $this->limitePisos) {
                    if ($this->sube == 2 || $this->sube == 4) {
                        echo "Piso en Mantenimiento "."<br>";
                    } else {
                        echo "Piso " . $this->pisoActual . " Verificado"."<br>";
                    }
                } else {
                    $this->pisoActual -= $this->sube;
                    echo "El piso no puede ser verificado.Por lo tanto el elevador no se movera, Piso Actual " . $this->pisoActual."<br>";
                }
            }

            public function verificarPisobajar() {
                $this->pisoActual = $this->pisoActual - $this->baja;
                if ($this->pisoActual >= $this->limitPisosinf) {
                    if ($this->baja == 2 || $this->baja == 4) {
                        echo "Piso en Mantenimiento "."<br>";
                    } else {
                        echo "Piso " . $this->pisoActual . " Verificado"."<br>";
                    }
                } else {
                    $this->pisoActual = $this->pisoActual + $this->baja;
                    echo "El piso no puede ser verificado.Por lo tanto el elevador no se movera<br>Piso Actual " . $this->pisoActual."<br>";
                }
            }

        }
        ?>
    </body>
</html>
