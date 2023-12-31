<?php

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

// Route::get('/', 'HomefrontController@index')->name('/');

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'loginController@admin')->name('admin');

    Route::get('login', 'loginController@authenticate')->name('login');
    Route::get('register', 'RegisterController@index')->name('register');
    Route::get('doregister', 'RegisterController@doregister')->name('doregister');
    Route::get("verification/{id}", 'VerificationController@index');
    Route::get("resendverification/{id}", 'VerificationController@resend');
    Route::get("doverification", 'VerificationController@doverification');
    Route::get("forgotpassword", 'ForgotpasswordController@index');
    Route::get("doforgot", 'ForgotpasswordController@doforgot');
    Route::get("forgotlink/{id}/{accesstoken}", 'ForgotpasswordController@forgotlink');
    Route::get("doforgotlink", 'ForgotpasswordController@doforgotlink');
    Route::get("forgotlogin/{id}", 'ForgotpasswordController@forgotlogin');

    Route::get("generatetagihan", 'TagihanController@generatetagihan');

    Route::get("tesemail", 'VerificationController@tesemail');
    // Route::post('login', 'loginController@authenticate')->name('login');

    Route::get('loginpemohon', 'LoginPemohonController@index');
    Route::get('loginpemohon/auth', 'LoginPemohonController@authenticate');
    Route::get('registerpemohon', 'RegisterPemohonController@index');
    Route::post('registerpemohon/register', 'RegisterPemohonController@register');
    Route::get('loginGoogle', 'LoginPemohonController@google');
});


Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('index');
Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('mastertagihan', 'MastertagihanController@index');
Route::get('mastertagihantable', 'MastertagihanController@datatable');
Route::get('simpanmastertagihan', 'MastertagihanController@simpan');
Route::get('hapusmastertagihan', 'MastertagihanController@hapus');
Route::get('editmastertagihan', 'MastertagihanController@edit');

Route::get('tagihan', 'TagihanController@index');
Route::get('tagihantable', 'TagihanController@datatable');
Route::get('bayartagihan', 'TagihanController@bayar');

Route::get('uangmasuk', 'UangmasukController@index');
Route::get('uangmasuktable', 'UangmasukController@datatable');
Route::get('simpanuangmasuk', 'UangmasukController@simpan');
Route::get('hapusuangmasuk', 'UangmasukController@hapus');
Route::get('edituangmasuk', 'UangmasukController@edit');

Route::get('uangkeluar', 'UangkeluarController@index');
Route::get('uangkeluartable', 'UangkeluarController@datatable');
Route::get('simpanuangkeluar', 'UangkeluarController@simpan');
Route::get('hapusuangkeluar', 'UangkeluarController@hapus');
Route::get('edituangkeluar', 'UangkeluarController@edit');

// Route::get("mutasi", "MutasiController@index");

Route::get("statistik", "StatistikController@index");
Route::get("getstatistik", "StatistikController@get");

Route::get('petugas', 'PetugasController@index');
Route::get('petugastable', 'PetugasController@datatable');
Route::get('editpetugas', 'PetugasController@edit');
Route::get('simpanpetugas', 'PetugasController@simpan');
Route::get('hapuspetugas', 'PetugasController@hapus');

Route::get('pemohon', 'PemohonController@index');
Route::get('pemohontable', 'PemohonController@datatable');
Route::get('editpemohon', 'PemohonController@edit');
Route::get('simpanpemohon', 'PemohonController@simpan');
Route::get('hapuspemohon', 'PemohonController@hapus');
Route::get('approvepemohon', 'PemohonController@approve');
Route::get('tolakpemohon', 'PemohonController@tolak');
Route::get('tolakprocesspemohon', 'PemohonController@tolakprocess');

Route::get('surat-jenis', 'SuratJenisController@index');
Route::get('suratjenistable', 'SuratJenisController@datatable');
Route::get('editsuratjenis', 'SuratJenisController@edit');
Route::get('simpansuratjenis', 'SuratJenisController@simpan');
Route::get('hapussuratjenis', 'SuratJenisController@hapus');

Route::get('surat-syarat', 'SuratSyaratController@index');
Route::get('suratsyarattable/{surat_jenis_id}', 'SuratSyaratController@datatable');
Route::get('suratsyarattableall', 'SuratSyaratController@datatableNoFilter');
Route::get('editsuratsyarat', 'SuratSyaratController@edit');
Route::get('simpansuratsyarat', 'SuratSyaratController@simpan');
Route::get('hapussuratsyarat', 'SuratSyaratController@hapus');

Route::get('chatbot', 'ChatbotController@index');
Route::post('chatbot/save', 'ChatbotController@save');


Route::get('surat', 'SuratController@index');
Route::get('surattable/{status}', 'SuratController@datatable');
Route::get('editsurat', 'SuratController@edit');
Route::get('validasisurat', 'SuratController@validasi');
Route::get('kembalikansurat', 'SuratController@kembalikan');
// Route::get('simpansuratsyarat', 'SuratSyaratController@simpan');
// Route::get('hapussuratsyarat', 'SuratSyaratController@hapus');

// Arsip
Route::get('arsip', 'ArsipController@index');
Route::get('arsiptable/{jenis_surat}', 'ArsipController@datatable');
Route::get('editarsip', 'ArsipController@edit');

Route::get('/chat', 'ChatController@index');
Route::get('/listroom', 'ChatController@listroom');
Route::get('/listchat', 'ChatController@listchat');
Route::get('/sendchat', 'ChatController@sendchat');
Route::get('/newroom', 'ChatController@newroom');

// Video Panduan
Route::get('video-panduan', 'VideoPanduanController@index');
Route::get('videopanduantable', 'VideoPanduanController@datatable');
Route::get('editvideopanduan', 'VideoPanduanController@edit');
Route::get('simpanvideopanduan', 'VideoPanduanController@simpan');
Route::get('hapusvideopanduan', 'VideoPanduanController@hapus');

// Management pertanyaan survey kepuasan
Route::get('survey-kepuasan/management-pertanyaan', 'PertanyaanSurveyKepuasanController@index');
Route::get('pertanyaansurveykepuasantable', 'PertanyaanSurveyKepuasanController@datatable');
Route::get('editpertanyaansurveykepuasan', 'PertanyaanSurveyKepuasanController@edit');
Route::get('simpanpertanyaansurveykepuasan', 'PertanyaanSurveyKepuasanController@simpan');
Route::get('hapuspertanyaansurveykepuasan', 'PertanyaanSurveyKepuasanController@hapus');

}); // End Route Groub middleware auth
