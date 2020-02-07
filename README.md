<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">Laravel Messages - Sistema de publicación de proyectos con envío de emails integrado</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca del Proyecto

Laravel Messages es un proyecto minimalista que permite gestionar la publicación de proyectos (Portafolio), con la firme intensión de hacerlos públicos a todos los visitantes del sitio. Además, incluye una sección de contacto, misma que al finalizar el registro, envía un correo electrónico de confirmación.

- Laravel Framework 6.x LTS
- MySQL 5
- Bootstrap 4
- Envío de email con el servicio de SendGrid, haciendo uso de Mailables
- Registro y Autenticación de usuarios

#### Instrucciones de instalación

Configurar permisos en el directorio storage de la aplicación
~~~
sudo chmod 755 -R storage
~~~

Instalar las dependencias del proyecto
~~~
composer install
~~~

Crear una copia del archivo .env.example con la configuración correcta del proyecto. **Por ejemplo, credenciales de acceso a la Base de Datos**
~~~
cp .env.example .env
~~~

Crear un nuevo API Key para la aplicación
~~~
php artisan key:generate
~~~

Crear la base de datos para el proyecto mediante algún Sistema Administrador de Bases de Datos Relacionales soportado por Laravel. **Por ejemplo, MySQL**. Finalmente, registre las credenciales de acceso en el archivo de configuración .env
~~~
mysql> CREATE DATABASE nombre_db;
~~~

Ejecutar las migraciones y sembrar los datos de prueba
~~~
php artisan migrate --seed
~~~

Ejecutar la aplicación. **Por ejemplo, mediante el servidor HTTP de Laravel integrado**
~~~
php artisan serve
~~~
