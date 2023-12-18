# Aplikace v PHP frameworku Laravel

Jednoduchý konfigurátor počítače.

- K designu byl použitý Bootstrap.
- Aplikace obsahuje falešná data, aby se dala aplikace po spuštění hned používat
- Při výběru komponent se automaticky kontroluje i kompatibilita komponentů
- Ke spuštění je potřeba mít vlastní databázi

## Ukázka
![Screenshot](img.png)

## Instalace

- Mít nainstalovaný php interpreter a composer
- Ve složce projektu dát příkaz `composer install` (případně `php composer.phar install`)
- Vytvořit kopii souboru **.env.example** a pojmenovat ji **.env**
- Dát přikaz `php artisan key:generate` k vygenerování klíče
- V souboru **.env** nastavit připojení do databáze
- (Pokud není databázový server zapnutý, tak ho zapnout)
- Dát příkaz `php artisan db:create` k vytvoření databáze
- Dát příkaz `php artisan migrate` k migraci
- Dát příkaz `php artisan db:seed` k seedování
- Dát příkaz `php artisan serve` ke spuštení

## Body zadání:

- Navrhnout funkční administrační prostředí pro libovolnou aplikaci nebo pro fakturační systém případně konfigurátor PC
  sestav.
- Struktura DB spolu s migračními třídami, factory a seedery.
- Vytvořit modely pro správnou funkčnost.
- Vytvořit view pro všechny operace CRUD + využít layout templates a pomocných nástrojů BLADE.
- Vytvořit controllery pro ovládání administrace
- Vytvořit potřebné routy pro směrování uvnitř administrace
- Dodržet model MVC.

## Nutné náležitosti:

- Minimální počet tabulek je (6)
- Minimálně 2 tabulky bude mít vazbu 1:N (N:1) pokud bude možnost využít vazbu N:N tak ji využít
- Vytvořit ukázkový seeder pro vložení minimálně 5 záznamů do každé tabulky
- Vytvořit design pomocí vlastního CSS, Bootstrap nebo jiných knihoven
- Každá část v administraci bude mít kompletní CRUD operace (Create, Read, Update, Delete)
- Budou existovat všechny View pro všechny CRUD operace

## Bonus

- Přihlašování a registrace uživatelů (v případě bonusu řešetě jako poslední)
- Implementace Soft Delete pro mazání skrze "tabulkový koš"
