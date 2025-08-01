<?php

$routes = [
      'login' => [
            'controller' => 'AuthController',
            'file' => 'controller/AuthController.php',
            'actions' => [
                  'index' => 'index',
                  'login' => 'login',
                  'logout' => 'logout',
            ]
      ],
      'category' => [
            'controller' => 'CategoryController',
            'file' => 'controller/CategoryController.php',
            'actions' => [
                  'index' => 'index',
                  'create' => 'create',
                  'edit' => 'edit',
                  'update' => 'update',
                  'delete' => 'delete',
                  'show' => 'show',
                  'add' => 'add',
            ]
      ],
      'admin' => [
            'controller' => 'AdminController',
            'file' => 'controller/AdminController.php',
            'actions' => [
                  'index' => 'index',
                  'create' => 'create',
                  'edit' => 'edit',
                  'update' => 'update',
                  'delete' => 'delete',
                  'show' => 'show',
                  'add' => 'add',
            ]
      ],
      'register' => [
            'controller' => 'RegisterController',
            'file' => 'controller/RegisterController.php',
            'actions' => [
                  'index' => 'index',
                  'register' => 'register',
            ]
      ],
      'home' => [
            'controller' => 'HomeController',
            'file' => 'controller/HomeController.php',
            'actions' => [
                  'index' => 'index',
            ]
      ],
      'error' => [
            'controller' => 'ErrorController',
            'file' => 'controller/ErrorController.php',
            'actions' => [
                  'notFound' => 'notFound',
            ]
      ],
];