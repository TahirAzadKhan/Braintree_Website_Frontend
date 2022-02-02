<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us',[WebController::class,'aboutus']);
Route::get('/home',[WebController::class,'home']);
Route::get('/doctor-click-away',[WebController::class,'doctorclickaway']);
Route::get('/school-pnt',[WebController::class,'schoolpnt']);
Route::get('/dr-log',[WebController::class,'drlog']);
Route::get('/e-learning',[WebController::class,'elearning']);
Route::get('/alumni-platform',[WebController::class,'alumniplatform']);
Route::get('/po-and-stock-management',[WebController::class,'poandstockmanagement']);
Route::get('/hrms',[WebController::class,'hrms']);
Route::get('/e-kart',[WebController::class,'ekart']);
Route::get('/employee-leave-management',[WebController::class,'employeeleavemanagement']);
Route::get('/leader-crm-customer',[WebController::class,'leadercrmcustomer']);
Route::get('/grocery',[WebController::class,'grocery']);
Route::get('/matrimony',[WebController::class,'matrimony']);
Route::get('/clients',[WebController::class,'clients']);
Route::get('/html-css',[WebController::class,'htmlcss']);
Route::get('/angular-js',[WebController::class,'angularjs']);
Route::get('/ajax',[WebController::class,'ajax']);
Route::get('/jquery',[WebController::class,'jquery']);
Route::get('/drupal',[WebController::class,'drupal']);
Route::get('/joomla',[WebController::class,'joomla']);
Route::get('/wordpress',[WebController::class,'wordpress']);
Route::get('/amazon-web',[WebController::class,'amazonweb']);
Route::get('/google-cloud',[WebController::class,'googlecloud']);
Route::get('/godaddy',[WebController::class,'godaddy']);
Route::get('/php-development',[WebController::class,'phpdevelopment']);
Route::get('/j2ee',[WebController::class,'j2ee']);
Route::get('/spring-struts',[WebController::class,'springstruts']);
Route::get('/jsp',[WebController::class,'jsp']);
Route::get('/junit',[WebController::class,'junit']);
Route::get('/microsoft-visio',[WebController::class,'microsoftvisio']);
Route::get('/shell',[WebController::class,'shell']);
Route::get('/perl',[WebController::class,'perl']);
Route::get('/python',[WebController::class,'python']);
Route::get('/oracle-database',[WebController::class,'oracledatabase']);
Route::get('/mysql-database',[WebController::class,'mysqldatabase']);
Route::get('/redis',[WebController::class,'redis']);
Route::get('/cassandra',[WebController::class,'cassandra']);
Route::get('/database-dev',[WebController::class,'databasedev']);
Route::get('/sqlserver-database',[WebController::class,'sqlserverdatabase']);
Route::get('/jboss',[WebController::class,'jboss']);
Route::get('/apache',[WebController::class,'apache']);
Route::get('/tomcat',[WebController::class,'tomcat']);
Route::get('/iis',[WebController::class,'iis']);
Route::get('/software-testing',[WebController::class,'softwaretesting']);
Route::get('/unit-testing',[WebController::class,'unit-testing']);
Route::get('/integration-testing',[WebController::class,'integration-testing']);
Route::get('/system-testing',[WebController::class,'system-testing']);
Route::get('/automation',[WebController::class,'automation']);
Route::get('/sdlc',[WebController::class,'sdlc']);
Route::get('/seo-services',[WebController::class,'seoservices']);
Route::get('/search-engine',[WebController::class,'searchengine']);
Route::get('/social-media',[WebController::class,'socialmedia']);
Route::get('/pay-per',[WebController::class,'payper']);
Route::get('/seo-copywriting',[WebController::class,'seocopywriting']);
Route::get('/digital-marketing',[WebController::class,'digitalmarketing']);
Route::get('/brand-consulting',[WebController::class,'brandconsulting']);
Route::get('/lead-management',[WebController::class,'leadmanagement']);
Route::get('/netsuit',[WebController::class,'netsuit']);
Route::get('/recruitment',[WebController::class,'recruitment']);
Route::get('/sharepoint',[WebController::class,'sharepoint']);
Route::get('/website-design',[WebController::class,'websitedesign']);
Route::get('/website-development',[WebController::class,'websitedevelopment']);
Route::get('/crm-software',[WebController::class,'crmsoftware']);
Route::get('/software-development',[WebController::class,'softwaredevelopment']);
Route::get('/educational-web',[WebController::class,'educationalweb']);
Route::get('/restaurent-web',[WebController::class,'restaurentweb']);
Route::get('/healthcare-web',[WebController::class,'healthcareweb']);
Route::get('/travel-portal',[WebController::class,'travelportal']);
Route::get('/real-estate',[WebController::class,'realestate']);
Route::get('/e-commerce',[WebController::class,'ecommerce']);
Route::get('/mobile-app',[WebController::class,'mobileapp']);
Route::get('/windows-app',[WebController::class,'windowsapp']);
Route::get('/xamarin-app',[WebController::class,'xamarinapp']);
Route::get('/hybrid-app',[WebController::class,'hybridapp']);
Route::get('/native-app',[WebController::class,'nativeapp']);
Route::get('/ui-ux',[WebController::class,'uiux']);
Route::get('/logo-design',[WebController::class,'logodesign']);
Route::get('/brochure',[WebController::class,'brochure']);
Route::get('/hr-payroll',[WebController::class,'ecommerce']);
Route::get('/jewellery',[WebController::class,'jewellery']);
Route::get('/inventory',[WebController::class,'inventory']);
Route::get('/hospital-management',[WebController::class,'hospitalmanagement']);
Route::get('/school-management',[WebController::class,'schoolmanagement']);
Route::get('/security-testing',[WebController::class,'securitytesting']);
Route::get('/performance-testing',[WebController::class,'performancetesting']);
Route::get('/careers',[WebController::class,'careers']);
Route::get('/contact-us',[WebController::class,'contactus']);
Route::get('/blogs',[WebController::class,'blogs']);



