<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'clientes/index';
$route['default_controller/(:num)'] = 'clientes/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['cadastrar'] = 'clientes/cadastroUsuario';
$route['create'] = 'clientes/inserirUsuario';
$route['editar/(:num)'] = 'clientes/editarUsuario/$1';
$route['apagar/(:num)'] = 'clientes/apagarUsuario/$1';
$route['consultar_placa'] = 'clientes/consultarPlaca';
