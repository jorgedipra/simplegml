# simplegml
CRUD Responsive, en Laravel y VueJs con API-REST, desarrollada en ZorinOS(Linux)
## Laravel 7
    - composer create-project --prefer-dist laravel/laravel:^7.0 my-crud
    - config .env
    ```
        DB_CONNECTION=mysql 
        DB_HOST=127.0.0.1 
        DB_PORT=3306 
        DB_DATABASE=crudgml
        DB_USERNAME=root
        DB_PASSWORD=****
    ```
    - migration: Tablas Usuarios, Categorias 
    ```
        > php artisan make:model Categoria -mcr
        > php artisan make:model Usuarios -mcr
        > php artisan migrate
    ```

## VueJS
    - vue-router    [3.3.7]
    - vue-axios     [3.5.2]
