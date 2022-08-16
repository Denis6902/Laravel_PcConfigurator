# Aplikace v PHP frameworku Laravel v2

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

- Vylepšit staré zadání...
