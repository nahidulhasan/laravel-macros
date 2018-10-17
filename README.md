# Laravel-Macros

[![Latest Stable Version](https://poser.pugx.org/nahidulhasan/laravel-macros/v/stable)](https://packagist.org/packages/nahidulhasan/laravel-macros)
[![Total Downloads](https://poser.pugx.org/nahidulhasan/laravel-macros/downloads)](https://packagist.org/packages/nahidulhasan/laravel-macros)
[![Latest Unstable Version](https://poser.pugx.org/nahidulhasan/laravel-macros/v/unstable)](https://packagist.org/packages/nahidulhasan/laravel-macros)
[![License](https://poser.pugx.org/nahidulhasan/laravel-macros/license)](https://packagist.org/packages/nahidulhasan/laravel-macros)


> A Simple package for using Macros in Laravel


## Installation


### Requirements
   -  PHP >= 5.6.4
   - Laravel >= 5.5
   
### Installing    
Run the following commands
```sh
composer require nahidulhasan/laravel-macros

php artisan vendor:publish

```

## Basic Usage

A new class is created in **App/Services** folder named **Macros.php**. Here you have to add your code. 

For example, I have added bank list.

Now you can call **Form::selectBank()** in any view, and have it display a nice list of Bank list to select from. 

You can specify the parameters as the **input name**, **default selected value**, and **array of options**.


Here is the example :
```
<div class="form-group">

<label for="bank_name">Bank Name</label>

{{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}

</div>
```
If you want to learn more about macros and want to configure without using package, please read this [blog](https://medium.com/@NahidulHasan/how-to-use-macros-in-laravel-a9078a0610f9)

###  License
Laravel-Macros for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)