<?php

$naam = readline("Hoi! Welkom bij het kleurenspel. Wat is je naam? ");
$eerste_keer = readline("Ben je hier voor het eerst? (ja/nee): ");

if ($eerste_keer == "ja") {
    echo "Welkom $naam! Het is de bedoeling dat je uit een paar kleuren gaat raden welke ik in gedachte heb. Simpel toch? Laten we beginnen! ";
} else {
    echo "Welkom terug $naam! Laten we snel beginnen";
}

$kleuren = ["Roze", "Rood", "Paars", "Blauw", "Groen", "Oranje"];
// array aangemaakt

$willekeurige_kleur = $kleuren[rand(0, count($kleuren) - 1)];
// telt hoeveel kleuren er in de array zitten en kiest er willekeurig een uit
// - 1 indien ik ooit een kleur toevoeg aan de array, anders krijg ik een error


echo $willekeurige_kleur;
PHP_EOL;
// test
