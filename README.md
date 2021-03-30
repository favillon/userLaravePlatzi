# Curso laravel platzi curso introduccion a laravel


Instalacion laravel 6

```shell
composer create-project --prefer-dist laravel/laravel sitios "6.*"
```
Hacer migraciones

```shell
php artisan migrate
```

Crear controlador con recursos 
```shell
php artisan m:cont UserController -r
```

Inicio conosla tinker 

```shell
php artisan tinker
```

Factory de usuarios
```shell
factory(App\User::class, 12)->create();
```


Tablas en laravel 

> Modelos en singular tablas en plural.

Model User, method posts hasMany Post::class
Model Post, method user  belongsTo User::class
