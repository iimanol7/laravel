## Métodos comunes de Faker en Laravel Factories (Laravel 8+)

> Sintaxis recomendada: `fake()->método()`

---

### 📄 **Texto y nombres**

- `fake()->name()` → Nombre completo  
- `fake()->firstName()` → Nombre  
- `fake()->lastName()` → Apellido  
- `fake()->title()` → Título (Sr., Sra.)  
- `fake()->word()` → Una palabra  
- `fake()->sentence()` → Una frase corta  
- `fake()->paragraph()` → Un párrafo  
- `fake()->text(200)` → Texto aleatorio de hasta 200 caracteres  

---

### 📧 **Correo y usuarios**

- `fake()->email()` → Email realista  
- `fake()->unique()->safeEmail()` → Email único y válido  
- `fake()->userName()` → Nombre de usuario  
- `fake()->password()` → Contraseña aleatoria (entre 6 y 20 caracteres por defecto)  

---

### 🔐 **Contraseñas**

- `bcrypt('password')` → Contraseña fija hasheada  
- `Hash::make('password')` → Igual que `bcrypt`, pero usando la fachada de Laravel  
- `bcrypt(fake()->password())` → Contraseña aleatoria generada por Faker y hasheada  
- `Hash::make(fake()->password())` → Igual que la anterior, usando la fachada  
- `fake()->password()` → Contraseña aleatoria sin hash (¡no usar en producción!)

---

### 📞 **Teléfono y direcciones**

- `fake()->phoneNumber()` → Número de teléfono  
- `fake()->address()` → Dirección completa  
- `fake()->streetAddress()` → Dirección (calle)  
- `fake()->city()` → Ciudad  
- `fake()->state()` → Estado o provincia  
- `fake()->postcode()` → Código postal  
- `fake()->country()` → País  

---

### 🕒 **Fechas y tiempos**

- `now()` → Fecha y hora actual  
- `fake()->year(2000, 2025)` → Hora aleatoria  
- `fake()->date()` → Fecha en formato `Y-m-d`  
- `fake()->dateTime()` → Objeto `DateTime` aleatorio  
- `fake()->dateTimeBetween('-1 year', 'now')` → Fecha aleatoria entre hace un año y ahora  
- `fake()->time()` → Hora aleatoria  

---

### 💵 **Finanzas y números**

- `fake()->randomNumber()` → Número aleatorio  
- `fake()->numberBetween(100, 999)` → Número entre 100 y 999  
- `fake()->randomFloat(2, 0, 1000)` → Número decimal aleatorio con 2 decimales entre 0 y 1000  
- `fake()->boolean()` → Valor booleano `true` o `false`  
- `fake()->randomElement(['activo', 'inactivo'])` → Valor aleatorio de un arreglo  

---

### 🌐 **Internet y UUID**

- `fake()->url()` → URL aleatoria  
- `fake()->domainName()` → Nombre de dominio  
- `fake()->ipv4()` → Dirección IP v4  
- `fake()->uuid()` → UUID aleatorio  

---

### 🖼️ **Imágenes (fake)**

- `fake()->imageUrl(640, 480)` → URL de imagen con tamaño 640x480 (ideal para avatares o posts)  

---

### 🏢 **Empresas**

- `fake()->company()` → Nombre de empresa  
- `fake()->jobTitle()` → Título profesional o cargo  
