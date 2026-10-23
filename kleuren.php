
<?php

$naam = readline("Hoi! Welkom bij het kleurenspel. Wat is je naam? ");
$eerste_keer = readline("Ben je hier voor het eerst? (ja/nee): ");

if ($eerste_keer == "ja") {
    echo "Welkom $naam! Het is de bedoeling dat je uit een paar kleuren gaat raden welke ik in gedachte heb. Simpel toch? Laten we beginnen! ";
} else {
    echo "Welkom terug $naam! Laten we snel beginnen";
}
// speler geeft aan of het de eerste keer is dat hij/zij het spel speelt, en krijgt een welkomstbericht

$kleuren = ["roze", "rood", "paars", "blauw", "groen", "oranje"];
// array aangemaakt

$willekeurige_kleur = $kleuren[rand(0, count($kleuren) - 1)];
// telt hoeveel kleuren er in de array zitten en kiest er willekeurig een uit
// - 1 indien ik ooit een kleur toevoeg aan de array, anders krijg ik een error

echo "Mogelijke kleuren: roze, rood, paars, blauw, groen, oranje" . PHP_EOL;

$gok = readline("Gok 1 = Welke kleur gok je? ");

$zeker = readline("Weet je het zeker? (ja/nee): ");

if ($zeker == "ja") {
    echo "We controleren je gok!";
} else {
    echo "Kies opnieuw een kleur";
}
// speler geeft aan of hij/zij zeker is van de gok, en krijgt een bericht dat de gok gecontroleerd wordt of dat hij/zij opnieuw een kleur moet kiezen


if ($gok == $willekeurige_kleur) {
    echo "Gefeliciteerd $naam! Je hebt het goed geraden!";
} else {
    echo "Helaas $naam! Dat was niet de juiste kleur.";

    $gok = readline("Gok 2 = Welke kleur gok je? ");

    if ($gok == $willekeurige_kleur) {
        echo "Gefeliciteerd $naam! Je hebt het bij de tweede poging goed geraden!";
    } else {
        echo "Helaas $naam! Je hebt verloren!";
    }
}

// speler krijgt te horen of hij/zij de juiste kleur heeft geraden of niet
