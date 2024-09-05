<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
/******************* ADMIN **********************/
$routes->get('/adm', 'AdminController::index');
$routes->post('/LogAdm', 'AdminController::adminlogin');
$routes->get('/dashb', 'AdminController::homeAdmin');
/************************* Admin User *******************************/
$routes->get('/listUser', 'AdminController::usersList');
$routes->get('/userAdd', 'AdminController::createUser');
$routes->post('/userReg', 'AdminController::registUser');
$routes->get('/editUser/(:any)', 'AdminController::userEdit/$1');
$routes->post('/userEdt/(:any)', 'AdminController::useEdt/$1');
$routes->get('/deleteUser/(:any)', 'AdminController::userDel/$1');
/************************* Admin RH *******************************/
$routes->get('/listRh', 'AdminController::rhList');
$routes->get('/rhAdd', 'AdminController::createRh');
$routes->post('/rhReg', 'AdminController::registRh');
$routes->get('/editRh/(:any)', 'AdminController::rhEdit/$1');
$routes->post('/rhsEdt/(:any)', 'AdminController::rhEdt/$1');
$routes->get('/deleteRh/(:any)', 'AdminController::rhDel/$1');
/************************* Admin Offers *******************************/
$routes->get('/offers', 'AdminController::offerList');
/************************* Admin Contact Us *******************************/
$routes->get('/contus', 'AdminController::contactUsList');
$routes->post('/ctUs', 'AdminController::contactUsAdd');
/************************* Admin Page Web*******************************/
$routes->get('/about-us', 'AdminController::pageAboutView');
$routes->get('/contact-us', 'AdminController::pageContactView');
$routes->post('/pageCont', 'AdminController::pageContactAdd');
$routes->post('/pageAbt', 'AdminController::pageAboutAdd');
$routes->get('/logout', 'AdminController::logout');
/************************************************************************/
/***************************** USER *************************************/
$routes->get('/index', 'UsersController::login');
$routes->post('/log', 'UsersController::singnin');
$routes->get('/regist', 'UsersController::registration');
$routes->post('/submit-form', 'UsersController::inserted');
$routes->get('/myprofil/(:any)', 'UsersController::profil/$1');
$routes->post('/updateProfil/(:any)', 'UsersController::updateProfil/$1');
$routes->get('/homUser', 'UsersController::dashView');
$routes->get('/offerLs', 'UsersController::offerView');
$routes->get('/mydemande/(:num)', 'UsersController::offerDemande/$1');
$routes->get('/myOffer', 'UsersController::offerHistory');
$routes->get('/listDemand/(:num)', 'UsersController::ListDetail/$1');
$routes->get('/logoutUser', 'UsersController::logout');
/************************************************************************/
/***************************** RH *************************************/
$routes->get('/rhLogin', 'RhController::rhLog');
$routes->post('/LogRh', 'RhController::singninRh');
$routes->get('/createCompte', 'RhController::registrationRh');
$routes->post('/registration', 'UsersController::insertedRh');
$routes->get('/rhDash', 'RhController::dashViewRh');
$routes->get('/profileRh/(:any)', 'RhController::rhProfil/$1');
$routes->post('/addoffer', 'RhController::addOffers');
$routes->get('/offerList', 'RhController::viewOffersRh');
$routes->get('/updateOffer/(:any)', 'RhController::updateRhOffers/$1');
$routes->post('/offerEdt/(:any)', 'RhController::updateOffer/$1');
$routes->get('/deleteOffer/(:any)', 'RhController::offerDel/$1');
$routes->get('/logoutRh', 'RhController::logout');
/*
*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
