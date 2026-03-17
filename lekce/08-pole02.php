<?php

declare(strict_types=1);

// 1. Pole deseti celých čísel
$pole = [5, 8, 1, 3, 9, 2, 1, 7, 4, 6];

// 2. Přidání čísla z klávesnice
echo "Zadej číslo: ";
$input = trim(fgets(STDIN));
$pole[] = (int)$input;

// 3. Počet prvků
echo "Počet prvků v poli: " . count($pole) . PHP_EOL;

// 4. Výpis od posledního k prvnímu
echo "Pole odzadu:" . PHP_EOL;
for ($i = count($pole) - 1; $i >= 0; $i--) {
    echo $pole[$i] . " ";
}
echo PHP_EOL;

// 5. Kolikrát se vyskytuje 1
$pocetJednicek = 0;
foreach ($pole as $prvek) {
    if ($prvek == 1) {
        $pocetJednicek++;
    }
}
if ($pocetJednicek > 0) {
    echo "Číslo 1 se vyskytuje $pocetJednicek×" . PHP_EOL;
} else {
    echo "Číslo 1 se nevyskytuje" . PHP_EOL;
}

// 6. Maximum
$max = max($pole);
echo "Maximum: $max" . PHP_EOL;

// 7. Sudé prvky +10
for ($i = 0; $i < count($pole); $i++) {
    if ($pole[$i] % 2 == 0) {
        $pole[$i] += 10;
    }
}

// 8. Výpis foreach
echo "Pole po úpravě:" . PHP_EOL;
foreach ($pole as $prvek) {
    echo $prvek . " ";
}
echo PHP_EOL;

// 9. Vynechání 2 řádků
echo PHP_EOL . PHP_EOL;

// 10. Druhé pole (zadávání do -1)
$druhePole = [];
echo "Zadávej čísla (-1 pro konec):" . PHP_EOL;

while (true) {
    $input = trim(fgets(STDIN));
    $cislo = (int)$input;

    if ($cislo == -1) {
        break;
    }
    $druhePole[] = $cislo;
}

// 11. Porovnání velikostí
$rozdil = count($druhePole) - count($pole);

if ($rozdil > 0) {
    echo "Druhé pole má o $rozdil více prvků" . PHP_EOL;
} elseif ($rozdil < 0) {
    echo "Druhé pole má o " . abs($rozdil) . " méně prvků" . PHP_EOL;
} else {
    echo "Obě pole mají stejný počet prvků" . PHP_EOL;
}

// 12. Střídavý výpis
echo "Střídavý výpis:" . PHP_EOL;
$maxDelka = max(count($pole), count($druhePole));

for ($i = 0; $i < $maxDelka; $i++) {
    if (isset($pole[$i])) {
        echo $pole[$i] . " ";
    }
    if (isset($druhePole[$i])) {
        echo $druhePole[$i] . " ";
    }
}
echo PHP_EOL;

// 13. Sudá z prvního, lichá z druhého
echo "Sudá z prvního pole:" . PHP_EOL;
foreach ($pole as $prvek) {
    if ($prvek % 2 == 0) {
        echo $prvek . " ";
    }
}
echo PHP_EOL;

echo "Lichá z druhého pole:" . PHP_EOL;
foreach ($druhePole as $prvek) {
    if ($prvek % 2 != 0) {
        echo $prvek . " ";
    }
}
echo PHP_EOL;

?>


/**
 * Nadefinujte si pole deseti celých čísel.
 *
 * 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice.
 *
 * 3. Vypište údaj o počtu prvků v tomto poli.
 *
 * 4. Pomocí cyklu vypište všechny prvky tohoto pole od posledního k prvnímu.
 *
 * 5. Zjistěte, zda v tomto poli se vyskytuje hodnota 1, v případě, že ano, zjistěte, kolikrát se vyskytuje.
 *
 * 6. Určete maximum a vypište ho.
 *
 * 7. Každý sudý prvek tohoto pole zvětšete o 10.
 *
 * 8. Vypište toto pole pomocí cyklu foreach.
 *
 * 9. Vynechejte 2 řádky.
 *
 * 10. Vytvořte další pole, do kterého budete z klávesnice zadávat celá čísla, zadávání se ukončí v případě, že se zadá -1, tento prvek už nebude součástí pole.
 *
 * 11. Vypište, o kolik prvků má více, méně, nebo zda má stejný počet prvků toto pole oproti prvnímu poli.
 *
 * 12. Vypište střídavě prvky těchto polí: prvek_z_prvního prvek_z_druhého prvek_z_prvního prvek_z_druhého atd.
 *
 * 13. Vypište z prvního pole všechna sudá a z druhého pole všechna lichá čísla.
 */