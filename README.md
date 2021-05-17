## Projekt aplikacji do zapisywania informacji o obejrzanych filmach


### Instrukcja uruchomienia
1. Dodanie pliku .env
    ```
    cp .env.example .env
    ```
1. Zainstalowanie composera
    ```
    composer install
    ```
1. Wygenerowanie klucza aplikacji
    ```
    php artisan key:generate
    ```
1. Migracja bazy danych i seed początkowych danych
    ```
    php artisan migrate
    php artisan db:seed
    ```
    
### Współtwórcy
* Anna Sokołowska
* Michał Gałęzyka
* Jakub Zakowicz
* Patryk Biernacki