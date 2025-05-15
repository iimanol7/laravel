*mirar flags de comandos para ayudar con el autocompletado*
php artisan make:controller NombreController

*crear migraciones*
php artisan make:migration create_nombrePlural_table

*añadir columnas a una migracion*
add_nombreColumna_to_nombreTabla_table

*eliminar columnas de una migración*
remove_nombreColumna_from_nombreTabla_table

*crear modelo*
php artisan make:model Nombre

*crear modelo y migración a la vez*
php artisan make:model Nombre -m

*crear modelo y migración, controlador, resource, factory*
php artisan make:model Nombre -mcrf

*crear seeder*
php artisan make:seeder NombreSeeder

*crear factory*
php artisan make:factory NombreModeloFactory --model=Nombremodelo