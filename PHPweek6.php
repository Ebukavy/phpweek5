<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}
//Opdracht 2

function Bgemiddelde($g1, $g2) {
    $gemiddelde = ($g1 + $g2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

Bgemiddelde(17, 20); 

//Opdracht 3

$datum = date("Y-m-d");
$einddatum = date("Y-12-31");
$dagenover = floor((strtotime($einddatum) - strtotime($datum)) / (60 * 60 * 24));

echo "Aantal dagen tot het einde van het jaar: " . $dagenover;

//Opdracht 4
function berekenlengte($param) {
    $totaal = 0;

    foreach ($param as $string) {
        $totaal = $totaal + strlen($string);
    }

    return $totaal;
}

$array = array("Yo", "Bro", "Low");
$totaal = berekenlengte($array);
echo "Totale lengte: " . $totaal;
?>
