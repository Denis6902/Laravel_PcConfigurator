# Aplikace v PHP frameworku Laravel
## Instalace
- Mít nainstalovaný php interpreter a composer
- Ve složce projektu dát příkaz `composer install` (případně `composer.phar install`)
- Vytvořit kopii souboru **.env.example** a pojmenovat ji **.env**
- Dát přikaz `php artisan key:generate` k vygenerování klíče
- Dát příkaz `php artisan serve` ke spuštení
- v souboru **.env** nastavit připojení do databáze
- Dát příkaz `php artisan migrate` k migraci
- Dát příkaz `php artisan db:seed` k seedování
## Body zadání:
- Navrhnout funkční administrační prostředí pro libovolnou aplikaci nebo pro fakturační systém případně konfigurátor PC sestav.
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
- Budou existovat všechny View pro všechyn CRUD operacephp artisan migrate

## Bonus
- Přihlašování a registrace uživatelů (v případě bonusu řešetě jako poslední)
- Implementace Soft Delete pro mazání skrze "tabulkový koš"
