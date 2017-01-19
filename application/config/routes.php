<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']   = 'master/C_nasabah';

$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;


$route['nasabah']                = 'master/c_nasabah';
$route['nasabah/list']           = 'master/c_nasabah/ajax_list';
$route['nasabah/create']         = 'master/c_nasabah/create';
$route['nasabah/create_action']  = 'master/c_nasabah/create_action';
$route['nasabah/update/(:any)']  = 'master/c_nasabah/update/$1';
$route['nasabah/delete/(:any)']       = 'master/c_nasabah/delete/$1';
$route['nasabah/update_action']       = 'master/c_nasabah/update_action';

$route['nasabah/transaksi/(:any)']  = 'master/c_nasabah/transaksi/$1';
$route['nasabah/list_transaksi']   = 'master/c_nasabah/ajax_list_transaksi';
$route['nasabah/create_transaksi/(:any)']         = 'master/c_nasabah/create_transaksi/$1';
$route['nasabah/create_action_transaksi']  = 'master/c_nasabah/create_action_transaksi';
$route['nasabah/update_transaksi/(:any)']  = 'master/c_nasabah/update_transaksi/$1';
$route['nasabah/update_action_transaksi']       = 'master/c_nasabah/update_action_transaksi';





