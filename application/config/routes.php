<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "response";
$route['404_override'] = '';

$route['response/create'] = 'response/create';
$route['response/(:any)'] = 'response/$1';
$route['response/view/(:any)'] = 'response/view/$1';
$route['response'] = 'response/view_responses';
$route['response/answer_counts'] = 'response/answer_counts';
$route['response'] = 'response';

$route['poll/create'] = 'poll/create';
$route['poll/(:any)'] = 'poll/$1';
$route['poll/view/(:any)'] = 'poll/view/$1';
$route['poll/index'] = 'poll/index';



$route['css'] = 'css';
$route['js'] = 'js';
$route['img'] = 'img';

/* End of file routes.php */
/* Location: ./application/config/routes.php */