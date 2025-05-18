## Clave foranea
```php
$table->unsignedBigInteger('user_id');
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
//forma resumida, teniendo en cuenta que se siguen las convenciones
$table->foreignId('user_id')->constrained()->onDelete('cascade'); 
```
## Tipos de columnas
```php
- string('nombre', longitud)
- text('nombre')
- integer('nombre')
- bigInteger('nombre')
- unsignedBigInteger('nombre')
- boolean('nombre')
- date('nombre')
- dateTime('nombre')
- timestamp('nombre')
- time('nombre')
- year('nombre')
- decimal('nombre', total, decimales)
- float('nombre', total, decimales)
- enum('nombre', ['valor1', 'valor2'])
- json('nombre')
- binary('nombre')
- uuid('nombre')
- foreignId('nombre')
```

## Atributos (orden recomendado)
```php
$table->string('email')
      ->nullable()
      ->unique()
      ->default('ejemplo@mail.com')
      ->index()
      ->comment('Correo del usuario');
->nullable()

->default(valor)

->unique()

->index()

->comment('texto')

->unsigned()

->autoIncrement()

->primary()

->useCurrent() // para timestamps

->onDelete('cascade') // para claves foráneas

->onUpdate('cascade')