*mirar flags de comandos para ayudar con el autocompletado*
*crear controlador*
php artisan make:controller NombreController

*crear migraciones*
php artisan make:migration create_nombrePlural_table

*añadir columnas a una migracion*
php artisan make:migration add_nombreColumna_to_nombreTabla_table

*eliminar columnas de una migración*
php artisan make:migration remove_nombreColumna_from_nombreTabla_table

*comandos migraciones*
php artisan migrate
php artisan migrate:rollback
php artisan migrate:fresh
php artisan migrate:refresh
php artisan migrate:reset

*crear modelo*
php artisan make:model Nombre

*crear modelo y migración a la vez*
php artisan make:model Nombre -m

*crear modelo y migración, controlador, resource, factory*
php artisan make:model Nombre -mcrf

*crear seeder*
php artisan make:seeder NombreSeeder

*aplicar seeders*
php artisan migrate:fresh --seed
php artisan db:seed

*crear factory*
php artisan make:factory NombreModeloFactory --model=Nombremodelo

*enlace de 'storage/app/public' a 'public/storage'*
php artisan storage:link