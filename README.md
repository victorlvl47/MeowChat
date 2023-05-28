# MeowChat

Una red social para entusiastas de los gatos. Los usuarios pueden compartir fotos de sus gatos en esta red social.

## Features
- Crear Usuarios
- Login
- Crear post
- Ver posts que otros usuarios crearon
- Ver post
- Editar post
- Eliminar un post
- Administrar posts

## Installation
1. Clone the Repository
```bash
git clone https://github.com/victorlvl47/MeowChat.git
```
2. Instalar Laravel y Composer
- [Install Laravel](https://laravel.com/docs/10.x/installation)
- [Install Composer](https://getcomposer.org/)

3. Instalar XAMPP
[Install XAMPP](https://www.apachefriends.org/index.html)

4. Crear base de datos y usuario en MySQL

5. Configurar el entorno
- A continuación, configure las variables de entorno para su proyecto. Abra el archivo .env y actualice los ajustes de configuración necesarios, como los detalles de conexión de la base de datos.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=*** YOUR PORT NUMBER HERE ***
DB_DATABASE=*** THE NAME OF THE MySQL DATABASE HERE ***
DB_USERNAME=*** THE NAME OF YOUR MySQL USER HERE ***
DB_PASSWORD=*** MySQL USER PASSWORD HERE ***
```

6. Instalar dependencias
```bash
composer install
```

7. Run Migrations
```bash
php artisan migrate
```

8. Seed the DB
```bash
php artisan db:seed
```

9. Inicie MySQL y Apache desde el [Panel de control de XAMPP](https://www.apachefriends.org/faq_windows.html)

10.  Finalmente, inicie el servidor de desarrollo usando el siguiente comando:
```bash
php artisan serve
```
Abra su navegador web y navegue a la URL especificada (generalmente http://localhost:8000) para acceder a la aplicación MeowChat.



## Vistas

### Show all posts / index
![MeowChat index](/public/images/index.png "MeowChat index")

### Mostrar post
![MeowChat show post](/public/images/show-post.png "MeowChat show post")

### Crear un post
![MeowChat create post](/public/images/create-post.png "MeowChat create post")

### Editar un post
![MeowChat edit post](/public/images/edit-post.png "MeowChat edit post")

### Administrar posts. Editar y Eliminar posts.
![MeowChat manage posts](/public/images/manage.png "MeowChat manage posts")

### Crear un usuario
![MeowChat create user](/public/images/create-user.png "MeowChat create user")

### Login
![MeowChat login](/public/images/login.png "MeowChat login")