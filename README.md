
- Para ejecutar la aplicacion deberá tener configurado un servidor web. Con los servicios de Apache y mySQL activos, y con Laravel Composer instalado.

- Clonar el repositorio correspondiente en el servidor.

- Luego desde la consola ubicarse dentro de la carpeta donde se clono el repositorio y ejecutar el comando composer install.

- Buscar el archivo .env.example dentro de la raiz de la carpeta y renombrarlo a .env, dentro del archivo modificar la linea de DB_DATABASE=laravel, indicando que la misma sea DB_DATABASE=conectapps.

- Importar la DB mySQL con el archivo conectApps.sql que se encuentra en la raiz de la carpeta.

- Luego desde la consola ubicarse dentro de la carpeta donde se clono el repositorio y ejecutar el comando php artisan key:generate

- Luego ejecutar el comando php artisan serve.

- En el navegador ya puede ingresar a http://localhost:8000/ y visualizar la aplicación.

![img](https://i.ibb.co/Wn8bs9j/home.jpg)


- Endpoint que consulta datos a: (https://jsonplaceholder.typicode.com/posts) y los almacena en base de datos local. http://localhost:8000/api/inserta
- Endpoint que consulta base de datos y muestra resultados json. http://localhost:8000/api/consulta
- Endpoint que consulta base de datos filtra por id(por GET) y muestra resultados json. http://localhost:8000/api/consulta?id=3 (ejemplo con id=3)
- Las tansacciones ejecutadas durante el consumo de los endpoints se graba en el archivo query.log dentro de storage/logs, y se puede consultar desde el menu consulta log de esta aplicación.
