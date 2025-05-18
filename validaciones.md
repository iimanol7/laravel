
## Validaciones comunes

- required
- string
- integer
- numeric
- boolean
- array
- email
- url
- date
- file
- image

## Reglas de comparación

- min:value
- max:value
- between:min,max
- size:value

## Reglas de unicidad y existencia

- unique:table,column
- exists:table,column

## Formato

- regex:/expresion/
- in:valor1,valor2
- not_in:valor1,valor2
- same:campo
- different:campo
- confirmed (ej: password + password_confirmation)

## Fecha y hora

- before:fecha
- after:fecha
- before_or_equal:fecha
- after_or_equal:fecha

## Archivos

- mimes:jpg,png,pdf
- mimetypes:application/pdf
- max:valor_en_kb

## Otros

- sometimes
- nullable
- required_if:campo,valor
- required_unless:campo,valor
- required_with:campo
- required_without:campo
