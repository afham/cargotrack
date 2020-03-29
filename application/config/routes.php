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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['gallery'] = "home/gallery";
$route['contact'] = "home/contact";
$route['about'] = "home/about";
$route['services/air_freight'] = "home/air_freight";
$route['services/sea_freight'] = "home/sea_freight";
$route['services/transportation'] = "home/transportation";
$route['services/warehouse'] = "home/warehouse";
$route['services/relocation'] = "home/relocation";
$route['services/packing'] = "home/packing";
$route['services/gobal_consolidation'] = "home/gobal_consolidation";
$route['services/transit_operation'] = "home/transit_operation";
$route['services/project_cargo'] = "home/project_cargo";
$route['services/customs_clearance'] = "home/customs_clearance";
$route['services/luxury_car_relocation'] = "home/luxury_car_relocation";
$route['services/automotive'] = "home/automotive";
$route['services/air_location'] = "home/air_location";
$route['services/sea_location'] = "home/sea_location";
$route['services/land_location'] = "home/land_location";
$route['services/customs_brokerage'] = "home/customs_brokerage";
