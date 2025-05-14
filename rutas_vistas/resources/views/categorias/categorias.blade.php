<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías</title>
</head>
<body>
    <h1>Página de categorías</h1>

    <x-button> {{-- dentro los paramentros que queramos pasarle --}}
        Click aquí {{-- Este parametro se pasará como $slot --}}

        <x-slot name="extra"> {{-- Este parametro se pasará como $extra --}}
            <button>Botón extra</button> {{-- También se le puede pasar HTML, no solo texto plano --}}
        </x-slot>

    </x-button>
</body>
</html>