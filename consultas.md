## 🧱 Orden recomendado de métodos Eloquent

1. Modelo base
2. Relaciones (`with`)
3. Condiciones (`where`, `orWhere`, `whereIn`, etc.)
4. Agrupamientos (`groupBy`, `having`)
5. Ordenamientos (`orderBy`)
6. Límite y paginación (`limit`, `offset`, `paginate`, `take`)
7. Ejecución (`get`, `first`, `count`, `exists`, etc.)

## Obtener registros

```php
User::all(); // todos
User::find(1); // por ID
User::where('email', 'test@mail.com')->first(); // primer coincidencia
User::where('active', true)->get(); // varios con condición
User::where('age', '>', 18)->get();
User::where('name', 'like', '%juan%')->get();
User::whereBetween('age', [18, 30])->get();
User::whereIn('id', [1, 2, 3])->get();
User::whereNull('deleted_at')->get();
User::whereNotNull('email')->get();

User::paginate(15);
User::orderBy('name')->get();
User::latest()->first(); // por created_at desc
User::limit(10)->get();

//relaciones
User::with('posts')->get(); // eager loading
Post::with('user')->where('status', 'publicado')->get();

User::where('active', true)->count();

User::where('active', true)
    ->orderBy('created_at', 'desc')
    ->limit(10)
    ->get();

Product::where('stock', '>', 0)
    ->orderBy('price')
    ->paginate(15);

Post::whereIn('category_id', [1, 2, 3])
    ->where('published', true)
    ->orderBy('published_at', 'desc')
    ->take(5) //igual que limit
    ->get();

```

## crear registros
``` php
User::create([
    'name' => 'Juan',
    'email' => 'juan@mail.com',
    'password' => bcrypt('123456'),
]);
---
$user = new User();
$user->name = 'Juan';

$user->save();

```

## modificar registros

``` php
$user = User::find(1);
$user->update(['name' => 'Juan Modificado']);
---
$user->name = 'Juan Modificado';

```

## eliminar registros

``` php
User::destroy(1); // por ID

$user = User::find(2);
$user->delete();