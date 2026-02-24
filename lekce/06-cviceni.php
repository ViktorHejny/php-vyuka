<?php

declare(strict_types=1);

/*
========================================
    PROCVIČOVÁNÍ ZÁKLADŮ PHP
    2. ročník – funkce, podmínky, cykly
========================================

Instrukce:
- Každý úkol řešte úpravou příslušné funkce.
- Neměňte názvy funkcí ani parametry.
- U každé funkce dole vytvořte alespoň 2 testovací volání.
- Používejte typové deklarace.
- Pište přehledný a odsazený kód.
*/


/*
----------------------------------------
1) Sudé nebo liché číslo
----------------------------------------
Vraťte true, pokud je číslo sudé.
Vraťte false, pokud je liché.
Použijte operátor %.
*/
function jeSude(int $cislo): bool
{
	if($cislo % 2 ==0)
		{
			return true;
		}
	else
		{
			return false;
		}
}


/*
----------------------------------------
2) Kalkulačka
----------------------------------------
Operace může být:
"+", "-", "*", "/"

Pokud dojde k dělení nulou,
vraťte text: "Nelze dělit nulou"
*/
function kalkulacka(float $a, float $b, string $operace)
{
	if($operace == "+")
		{
			return $a + $b;
		}
	elseif($operace == "-")
		{
			return $a - $b;
		}
	elseif($operace == "*")
		{
			return $a * $b;
		}
	elseif($operace == "/")
		{
			if($b == 0)
				{
					return "nelze dělit nulou";
				}
			return $a / $b;
		}
}


/*
----------------------------------------
3) Největší ze tří čísel
----------------------------------------
Vraťte největší číslo.
Nepoužívejte funkci max().
*/
function nejvetsi(int $a, int $b, int $c): int
{
    $max = $a;
    if($b > $max)
		{ 
		$max = $b;
		}
    if($c > $max)
		{
		$max = $c; 
		}
    return $max;
}


/*
----------------------------------------
4) Součet čísel od 1 do N
----------------------------------------
Spočítejte součet čísel od 1 do $n
pomocí cyklu.
*/
function soucetDoN(int $n): int
{
    $soucet = 0;
    for ($i = 1; $i <= $n; $i++) {
        $soucet += $i;
    }
    return $soucet;
}


/*
----------------------------------------
5) Faktoriál čísla
----------------------------------------
Např.:
5! = 5 × 4 × 3 × 2 × 1 = 120

Bonus:
Ošetřete záporné číslo.
*/
function faktorial(int $n): int
{
	$vysledek=1;
	for($i = 1; $i <=$n; $i++)
		{
			$vysledek = $vysledek * $i;
		}
	return $vysledek;
}


/*
----------------------------------------
6) Počet sudých čísel v poli
----------------------------------------
Spočítejte, kolik sudých čísel je v poli.
Použijte foreach.
*/
function pocetSudyChCisel(array $pole): int
{
	$pocet = 0;
	foreach($pole as $cislo)
		{
			if($cislo % 2 == 0)
				{
					$pocet++;
				}
			
		}
	return $pocet;
}


/*
----------------------------------------
7) Je student přijat?
----------------------------------------
Podmínky:
- Součet bodů alespoň 60
- Z testu alespoň 25 bodů

Použijte logické operátory.
*/
function jePrijat(int $bodyTest, int $bodyUstni): bool
{
    $celkem = $bodyTest + $bodyUstni;

    if ($celkem >= 60) {          
        if ($bodyTest >= 25) {    
            return true;          
        } else {
            return false;        
        }
   	} 
	else
	{
        return false;            
    }
}

/*
----------------------------------------
8) Násobilka
----------------------------------------
Vypište násobilku čísla od 1 do 10.
Použijte cyklus for.

Příklad pro 5:
5 x 1 = 5
5 x 2 = 10
...
*/
function nasobilka(int $cislo): void
{
	
	for($i = 1; $i <=10; $i++)
		{
			$vysledek= $cislo * $i;
			echo "$cislo x $i = $vysledek\n";
		}
}


/*
----------------------------------------
9) Obrácení textu
----------------------------------------
Vraťte text pozpátku.
Nepoužívejte strrev().
*/
function obratText(string $text): string
{
	$obraceny = "";
	for($i = strlen($text)-1; $i >=0; $i--)
		{
			$obraceny .=$text[$i];
		}
		return $obraceny;
}


/*
----------------------------------------
10) Hádání čísla
----------------------------------------
Vraťte:
"Uhodl jsi!"
"Moc malé"
"Moc velké"
*/
function zkontrolujTip(int $tajneCislo, int $tip)
{
	if($tip == $tajneCislo)
		{
			return "Uhodl jsi!";
		}
	elseif($tip > $tajneCislo)
		{
			return "Moc velké";
		}
	elseif($tip < $tajneCislo)
		{
			return "Moc malé";
		}
}


/*
----------------------------------------
BONUS (pokud zbyde čas)
----------------------------------------
Zjistěte, zda je číslo prvočíslo.
*/
function jePrvocislo(int $n): bool
{
    if ($n < 2) {
        return false; // čísla menší než 2 nejsou prvočísla
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // našli jsme dělitele → není prvočíslo
        }
    }

    return true; // žádný dělitel → je prvočíslo
}




var_dump(jeSude(4));
 var_dump(jeSude(7));

 var_dump(kalkulacka(10, 5, "+"));
 var_dump(kalkulacka(10, 0, "/"));

 var_dump(nejvetsi(5, 9, 3));

 var_dump(soucetDoN(5));

 var_dump(faktorial(5));

 var_dump(pocetSudyChCisel([1,2,3,4,6]));

 var_dump(jePrijat(30, 35));
 var_dump(jePrijat(20, 40));

 nasobilka(5);

 var_dump(obratText("PHP"));

 var_dump(zkontrolujTip(50, 30));
 var_dump(zkontrolujTip(50, 50));

 var_dump(jePrvocislo(7));

