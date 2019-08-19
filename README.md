## Base para Administrador em Laravel 5.6  

### 1- Instalação do Laravel
```console
$ composer create-project --prefer-dist laravel/laravel % sua pasta aqui % "5.6.*"
```
* Abra o arquivo "App\Http\Middleware\RedirectIfAuthenticated" e altere o código:
```php
...
if (Auth::guard($guard)->check()) {
	#return  redirect('/home');
	return  redirect('/admin');
}
...
```
* Abra o arquivo "App\Http\Controllers\Auth\LoginController.php e altere o código:
```php
...
#protected  $redirectTo = '/hone';
protected  $redirectTo = '/admin';
...
```
* Configure seu arquivo .env

**(Opicional)**
* Abra o arquivo "App\Providers\AppServiceProvider.php" e configure a compatibilidade do MySQL 5.1
```php
....
use Illuminate\Support\Facades\Schema;
....
function  register(){
...
Schema::defaultStringLength(191);
}
```

### 2- Instalação do OlCmsAdmin

```console
$ composer require orlandolibardi/admincms
```
```console
$ php artisan vendor:publish --provider="OrlandoLibardi\OlCms\AdminCms\app\Providers\AdminCmsServiceProvider" --tag="config"
```
```console
$ php artisan migrate
```
```console
$ composer dump-autoload
```
```console
$ php artisan db:seed --class=AdminPagesCmsTableSeeder
```

# \o/
