<?php
// Alles wat 1x uitgevoerd moet worden, wordt boven het for statement gezet

// Variabelen aangemaakt
$naam = readline("Hoi! Welkom bij het kleurenspel. Wat is je naam? ");
$eerste_keer = readline("Ben je hier voor het eerst? (ja/nee): ");

// speler geeft aan of het de eerste keer is dat hij/zij het spel speelt, en krijgt een welkomstbericht
if ($eerste_keer == "ja") {
    echo "Welkom $naam! Het is de bedoeling dat je uit een paar kleuren gaat raden welke ik in gedachte heb. Simpel toch? Laten we beginnen! ";
} else {
    echo "Welkom terug $naam! Laten we snel beginnen" . PHP_EOL;
}

$kleuren = ["roze", "rood", "paars", "blauw", "groen", "oranje"];
// array aangemaakt
// -------------------------------------------------------
$opnieuw = "ja";

while ($opnieuw == "ja") {
    $punten = 0;

    // cijf rondes spelen
    for ($i = 0; $i < 5; $i++) {
        echo "Ronde " . ($i + 1) . PHP_EOL;

$willekeurige_kleur = $kleuren[rand(0, count($kleuren) - 1)];
// telt hoeveel kleuren er in de array zitten en kiest er willekeurig een uit
// - 1 indien ik ooit een kleur toevoeg aan de array, anders krijg ik een error

echo "Mogelijke kleuren: roze, rood, paars, blauw, groen, oranje" . PHP_EOL;

$gok = readline("Gok 1 = Welke kleur gok je? ");
        $zeker = readline("Weet je het zeker? (ja/nee): ");

        while ($zeker == "nee") {
            $gok = readline("Kies opnieuw een kleur: ");
            $zeker = readline("Weet je het zeker? (ja/nee): ");
        }

if ($zeker == "ja") {
            echo "We controleren je gok!" . PHP_EOL;

            if ($gok == $willekeurige_kleur) {
                echo "Gefeliciteerd $naam! Je hebt het goed geraden!";
                $punten++;
            } else {
                echo "Helaas $naam! Dat was niet de juiste kleur. Je mag nog een keer gokken" . PHP_EOL;

                $gok = readline("Welke kleur gok je?");
                $zeker = readline("Weet je het zeker? (ja/nee): ");

                while ($zeker == "nee") {
                    $gok = readline("Kies opnieuw een kleur: ");
                    $zeker = readline("Weet je het zeker? (ja/nee): ");
                }
                if ($zeker == "ja") {
                    if ($gok == $willekeurige_kleur) {
                        echo "Gefeliciteerd $naam! Je hebt het bij de tweede poging goed geraden!";
                        $punten++;
                    } else {
                        echo "Helaas $naam! Je hebt verloren! Het was $willekeurige_kleur" . PHP_EOL;
                    }
                } else {
                    echo "Je hebt je gok niet bevestigd. Het spel stopt.";
                    break;
                }
            }
        } else {
            echo "Je hebt je gok niet bevestigd. Het spel stopt.";
            break;
        }
}

    echo PHP_EOL . "Je score is : $punten" . PHP_EOL;

    $opnieuw = readline("Wil je opnieuw spelen? (ja/nee): ");
}
echo "Bedankt voor het spelen $naam";

?>