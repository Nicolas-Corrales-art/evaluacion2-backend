Este proyecto es una API REST desarrollada con Laravel, que permite realizar operaciones básicas en una base de datos mediante los métodos GET y POST.

El método GET se utiliza para consultar registros almacenados en la base de datos.

El método POST se usa para insertar nuevos registros.

La API devuelve respuestas en formato JSON, lo que facilita su integración con aplicaciones o herramientas de prueba como Postman.

Su configuración incluye la conexión a base de datos desde el archivo .env, migraciones automáticas con php artisan migrate, y rutas API registradas en routes/api.php.

Comandos basicos
1.Crear un nuevo proyecto 
(Laravel	composer create-project laravel/laravel nombre_proyecto)
2.Iniciar el servidor local	
(php artisan serve)
3.Ver la versión de Laravel	
(php artisan --version)
4.Crear una nueva migración	
( php artisan make:migration create_nombre_tabla_table)
5.Ejecutar migraciones	 
(php artisan migrate)
6.Revertir la última migración	
(php artisan migrate:rollback)
7.Eliminar todas las tablas y migrar de nuevo	
(php artisan migrate:fresh)
8.Ejecutar migraciones y seeders juntos	
(php artisan migrate:fresh --seed)