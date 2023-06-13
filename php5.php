<?php
//deel 1
$tijd = date('H:i'); // Haal de huidige tijd op

if ($tijd < '12:00') {
    echo "Goedemorgen<br>";
} elseif ($tijd >= '12:00' && $tijd < '18:00') {
    echo "Goedemiddag<br>";
} else {
    echo "Goedenavond<br>";
}


//deel 2

function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde . "<br>";
}

berekenGemiddelde(10, 20); // Roept de functie aan met de getallen 10 en 20


//deel 3

$datum = date('Y-m-d'); // Haal de huidige datum op
$eindeJaar = date('Y-12-31'); // Stel de datum in op het einde van het jaar

function dagenTotEindeJaar($huidigeDatum, $eindeJaarDatum) {
    $huidigeTijd = strtotime($huidigeDatum);
    $eindeJaarTijd = strtotime($eindeJaarDatum);

    $verschil = $eindeJaarTijd - $huidigeTijd;
    $aantalDagen = ceil($verschil / (60 * 60 * 24));

    return $aantalDagen;
}

$dagenOver = dagenTotEindeJaar($datum, $eindeJaar);
echo "Er zijn nog " . $dagenOver . " dagen over tot het einde van het jaar.<br>";

//deel 4
function berekenTotaleLengte($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$array = array("Hallo", "Wereld");
$lengte = berekenTotaleLengte($array);
echo "De totale lengte van de strings is: " . $lengte . "<br>";
?>
