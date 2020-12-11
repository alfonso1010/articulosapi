Laminas API Tools Skeleton Artículos
======================================

## Introduction

Es un proyecto API REST demo de evaluación.

## Instalación

Primero clonar el proyecto en su máquina local con el siguiente comando
```bash
$ git clone https://github.com/alfonso1010/articulosapi.git
```
Clonado el proyecto dirigirse a la carpeta del mismo:
```bash
$ cd articulosapi
```
Dentro del proyecto ejecutar el comando:
```bash
$ composer update
```
Procedemos a importar la base de datos, el scrpit sql se encuentra en la carpeta db con el nombre: ecommerce.sql, asegurese de que en su gestor de base de datos exista la tabla ecommerce, de lo contrario hay que crearla 
```bash
$ mysql -u <username> -p ecommerce < db/ecommerce.sql
```
Una vez que se tiene la base de datos importada, procedemos a crear el archivo: articulosapi/config/autoload/local.php una vez creado ese archivo, procedemos a pegar el siguiente codigo dentro de el, sustituyendo user y password por el que usted tenga en su gestor de base de datos
```bash
<?php
return [
    'db' => [
        'adapters' => [
            'localhost' => [
                'charset' => 'utf8',
                'database' => 'ecommerce',
                'driver' => 'PDO_Mysql',
                'hostname' => 'localhost',
                'username' => 'root',//sustituir
                'password' => 'root',//sustituir
                'port' => '3306',
            ],
        ],
    ],
];

```
Posteriormente ejecutar el comando:
```bash
$ php -S 0.0.0.0:8080 -t public public/index.php
```
Listo ahora podrá consumir el api con la siguiente URL con métodos GET,POST,PUT,DELETE:

http://localhost:8080/articulos



