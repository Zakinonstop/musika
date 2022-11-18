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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// percobaan
$routes->get('coba', 'Home::coba');


// login 
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::auth');
$routes->get('/logout', 'Auth::logout');
$routes->post('/verifikasi-login', 'Auth::verifikasi_login');
$routes->post('/verifikasi-register', 'Auth::verifikasi_register');

$routes->get("/privacy", 'Home::kebijakanPrivasi');

// training page
$routes->get('/training', 'Training::index');
$routes->get('/detail-training', 'Training::detailTraining');
$routes->get('/detail-training/(:any)', 'Training::detailTraining/$1');

$routes->get('/event', 'Event::index');
$routes->get('/detail-event', 'Event::detailEvent');

$routes->get('/faq', 'Home::faq');
$routes->get('/kebijakan-privasi', 'Home::kebijakanPrvasi');

// Artikel
$routes->get('/artikel', 'Home::artikel');
$routes->get('/detail-artikel/(:any)', 'Home::detailArtikel/$1');


// ================== ADMIN ===================
$routes->get('/dashboard', 'Admin::index');
$routes->get('/pembayaran', 'Admin::pembayaran');
$routes->post("/save-pembayaran", 'Admin::simpan_pembayaran');
$routes->post("/update-pembayaran", 'Admin::update_pembayaran');
$routes->delete('/delete-pembayaran', 'Admin::hapus_pembayaran');

// milestone
$routes->get('/admin-milestone', 'Admin::milestone');
$routes->get('/add-milestone', 'Admin::addMilestone');
$routes->get('/edit-milestone/(:any)', 'Admin::editMilestone/$1');
$routes->post('/save-milestone', 'Admin::saveMilestone');
$routes->post('/update-milestone/(:any)', 'Admin::updateMilestone/$1');
$routes->delete('/delete-milestone/(:any)', 'Admin::deleteMilestone/$1');

// Kontak
$routes->get('/admin-kontak', 'Admin::kontak');
$routes->post('/add-kontak', 'Admin::addKontak');
$routes->post('/update-kontak', 'Admin::updateKontak');
$routes->delete('/delete-kontak', 'Admin::deleteKontak');

// profile
$routes->get('/profile', 'Admin::profile');
$routes->get('/profile/(:any)', 'Admin::editProfile/$1');
$routes->post('/update-profile/(:any)', 'Admin::updateProfile/$1');
// $routes->delete('/profile/(:any)', 'Admin::deleteProfile');

// FAQ
$routes->get('/admin-faq', 'Admin::faq');
$routes->post('/add-faq', 'Admin::addFaq');
$routes->post('/answer-question', 'Admin::updateAnswerFaq');
$routes->delete('/delete-faq', 'Admin::deleteFaq');

$routes->get('/admin-about-us', 'Admin::aboutus');

// artikel
// $routes->get('/admin-artikel', 'Admin::article');
$routes->get('/edit-artikel', 'Admin::editArticle');
$routes->get('/add-artikel', 'Admin::addArticle');
$routes->post('/save-artikel', 'Admin::simpanArtikel');
$routes->post('/update-artikel/(:segment)', 'Admin::updateArtikel/$1');
$routes->get('/admin-artikel', 'Admin::daftar_artikel');
$routes->get('/artikel/tambah', 'Admin::tambah_artikel');
$routes->get('/artikel-edit/(:segment)', 'Admin::edit_artikel/$1');
$routes->delete('/hapus-artikel', 'Admin::hapus_artikel');

// =============================================

// Course
$routes->get('/course', 'Course::index');
$routes->get('/course/detail/(:any)', 'Course::detailCourse/$1');
$routes->get('/kurikulum', 'Course::detailKurikulum');

// API Course 
$routes->get('/getCourse', 'Course::getApiCourse');
$routes->get('/searchCourse', 'Course::searchApiCourse');
$routes->get('/getDetailCourse', 'Course::getApiDetailCourse');
$routes->post('/course-getApi', 'Course::getApi');
$routes->get('/course-getApi', 'Course::getApi');

$routes->get('cobaApi', function () {
    $data = ['title' => 'percobaan API'];
    return view('swevel/course/coba-api', $data);
});

// =============================================

// Team
$routes->get('/admin-team', 'Admin::team');
$routes->post('/add-team', 'Admin::saveTeam');
$routes->post('/update-team', 'Admin::updateTeam');
$routes->delete('/delete-team', "Admin::deleteTeam");

// Portofolio
$routes->get('/admin-portofolio', 'Admin::portofolio');
$routes->post('/add-portofolio', 'Admin::addPortofolio');
$routes->delete('/delete-portofolio', 'Admin::deletePortofolio');
$routes->get('/getPortofolio/(:any)','Home::getPortofolio/$1');

$routes->get('/admin-event', 'Admin::event');

$routes->get('/more-event', 'Admin::moreEvent');
$routes->get('/pembayaran/(:num)', 'Home::payment/$1');
$routes->get('/pembayaran/detail', 'Home::detail_payment');
$routes->post('/save-purchase', 'Home::save_purchase');

$routes->get('/notyetapproved', 'Course::not_yet_approved');
$routes->get('purchase-done', 'Home::purchase_message');

// konsultasi
$routes->get('/implementasi', 'Konsultasi::index');


// ===================== User =====================
// materi
// $routes->get('/course-materi/(:any)/', 'Course::materi/$1');
// $routes->get('/course-materi/(:any)/(:num)', 'Course::materi/$1/$2');
$routes->get('/status', 'User::status');
$routes->get("/course/materi/(:any)", "User::materi/$1");
$routes->get("/video", "Course::getVideo");
$routes->get('/materi/kuis', 'User::confirmKuis');
$routes->get("/kuis", "User::kuis");
$routes->get("/getKuis", "Course::getApiKuis");
$routes->get("/course-saved", "User::savedCourse");
$routes->get('/submission', 'User::submission');




/*
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
