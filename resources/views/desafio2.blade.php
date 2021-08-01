@extends('layout.master')
@section('title', 'Desafío 2')

@section('content')

    <div class="container-fluid">
        <h2>Pasos para la instalación de Laravel</h2>
        <h4>Pre requisitos</h4>
        <p><b>Instalar Composer:</b> <i>Composer</i> es un gestor de paquetes para PHP, para poder crear un proyecto laravel es necesario instalar sus dependencias a través de este programa.</p>
        <p><b>Servicio HTTP:</b> Para poder visualizar nuestro proyecto necesitamos desplegar un servicio de HTTP, para esto existen numerosos Softwares como Laragon o Xampp.</p>
        <h2>Pasos</h2>
        <p>Ya cumplido los pre requisitos, debemos abrir una terminal, en ella debemos dirigirnos a la carpeta donde queremos guardad el código del nuevo proyecto (usando <i>cd nombreDeCarpeta</i>), una vez en la ubicación deseada debemos ingresar el siguiente comando: </p>
        <samp class="p-3 mb-2 bg-info text-white">composer create-project laravel/laravel mi-proyecto-laravel</samp>
        <br>
        <br>
        <li> <i>composer:</i> hace referencia al gestor de paquetes.</li>
        <li> <i>create-project:</i> comando de Composer para crear un nuevo proyecto.</li>
        <li> <i>laravel/laravel:</i> nombre del paquete de datos.</li>
        <li> <i>mi-proyecto-laravel:</i> nombre que tendrá el nuevo proyecto.</li>
        <p>Comenzará un proceso que tomara un tiempo en el que se instalaran las dependencias necesarias para que el proyecto funcione adecuadamente.</p>

        <samp class="p-3 mb-2 bg-info text-white">php artisan key:generate</samp>
        <br>
        <br>
        <li>Este comando permite generar la llave del proyecto necesaria para su funcionamiento.</li>
        <br>
        <samp class="p-3 mb-2 bg-info text-white">php artisan serve</samp>
        <br>
        <br>
        <li>Comando para comenzar el servidor incorporado PHP.</li>
        <br>
    </div>

@endsection
