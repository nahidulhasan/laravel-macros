# Laravel-Macros

> A Simple package for using Macros in laravel


## Installation

Run the following commands
```sh
composer require nahidulhasan/laravel-macros
php artisan vendor:publish
```

## Basic Usage

A new class is created in App/Services folder named Macros.php. Here you have to add your code. For exanple I have added bank list.

Now you can call Form::selectBank() in any view, and have it display a nice list of Bank list to select from. You can specify the parameters as the input name, default selected value, and array of options.

Here is the example :

```
<div class="form-group">

<label for="bank_name">Bank Name</label>

{{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}

</div>
```


##License
Laravel-Macros for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)