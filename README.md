Practica BackEnd 11/09/2025
-Tener instalado MySQL ya sea en XAMP o de otra forma
-Tener Windows (preferencia)
Abrir proyecto doctor8sc en visual studio
Abrir XAMP
Prender Apache y MYSQL
Entrar a http://localhost/phpmyadmin/
Y creamos una nueva base de datos
nombre: appointment_db8sc
Entrar en el archivo .env  en la carpeta del proyecto y modificar esto
DB_CONETION Y DB_DATABASE
En una terminal poner 
Php artisan migrate (actualiza las tablas de la BD)
En myPhPAdmin deben aparecer tablas creadas
Poner php artisan serve
Tenemos que registrarnos de nuevo en el servidor de laravel porque al hacer las migraciones se reseteo, debe aparecernos la nueva cuenta
Abrir la carpeta config y modificar el app.php para cambiar la zona horaria
En la consola poner esto para cambiar el idioma de la base de datos
composer require laravel-lang/common
una vez instalado poner
php artisan lang:add es
Se crea una carpeta donde están todas las traducciones
En el .env le cambiamos a esto
"APP_LOCALE Y APP_FALLBACK_LOCALE"
Ir a la carpeta config
Abrir el archivo jetstream.php y descomentar esto, es para cambiar la foto de perfil
Features::profilePhotos(),
         Features::api(),
Regresar al .env y cambiar esto
FILESYSTEM_DISK=public
Ahora en nuestro servidor de laravel al dirigirnos a nuestro perfil nos dejara cambiar la foto y al guardar nos quedara ahí mismo
