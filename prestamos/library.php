<?php
// En PHP no existen matrices;

/*
$arrCuota1 = array(
    "Numero"=> 1,
    "CuotaNivelada"=> 120,
    "Capital" => 100,
    "Interes"=>0.011,
    "Saldo"=>90000
);
$arrCuota2 =
array(
    "Numero" => 2,
    "CuotaNivelada" => 120,
    "Capital" => 100,
    "Interes" => 0.011,
    "Saldo" => 90000
);

$arrCuota3 = array(
    "Numero" => 3,
    "CuotaNivelada" => 120,
    "Capital" => 100,
    "Interes" => 0.011,
    "Saldo" => 90000
);
$arrCuotaN = array(
    "Numero" => 4,
    "CuotaNivelada" => 120,
    "Capital" => 100,
    "Interes" => 0.011,
    "Saldo" => 90000
);

$arrPrestamo = array(
    $arrCuota1,
    $arrCuota2,
    $arrCuota3,
    $arrCuotaN
);

*/

function cacularPrestamo( $capital, $periodoMeses, $tasaInteresAnual) {
    $tasa = 0; // Tasa Efectiva
    $cuotaNivelada = 0;
    $SaldoCapital = $capital;
    $AbonoCapital = 0;

    $tasa = round(($tasaInteresAnual / ( 360 * $periodoMeses * 30 / 365 )), 4);

    // cuota = capital / (( 1 - ((1 + tasa)**(-1*periodoMeses))) / tasa);
    $cuotaNivelada = round($capital / ((1 - ((1 + $tasa) ** (-1 * $periodoMeses))) / $tasa), 4);
    $tablaAmortizacion = array();
    for ($i = 1; $i<=$periodoMeses; $i++) {
        //No Cuota, Interés AbonoCapital Saldo
        $interes = round(($SaldoCapital * $tasa), 4);
        $AbonoCapital = $cuotaNivelada - $interes;
        $SaldoCapital -= $AbonoCapital;

        $arrCuota = array(
            "Numero" => $i,
            "CuotaNivelada" => $cuotaNivelada,
            "AbonoCapital" => $AbonoCapital,
            "Interes" => $interes,
            "Saldo" => $SaldoCapital
        );

        $tablaAmortizacion[] = $arrCuota; // arrTabla.push(jsonObject);
    }
    return $tablaAmortizacion;
}

?>
