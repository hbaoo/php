<?php
$routes = [
 '/' => [
'controller' => 'HomeController',
'action' => 'index'
],
'register' => [
'controller' => 'MajorController',
'action' => 'index'
],
'list' => [
'controller' => 'MajorControllter',
'action' => 'getList'
],
'edit' => [
'controller' => 'MajorController'
],
'add' => [
'controller' => 'MajorController',
' action' => 'add'
],
'delete' => [
'controller' => 'Major-Controller' ,
'action' => 'delete'
],
'update' => [
'controller' => 'MajorController' ,
' action' => 'update'
],
];