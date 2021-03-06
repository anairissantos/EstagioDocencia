<?php
$this->group (['middleware'=>['auth'],'namespace'=> 'Admin'],function (){
    $this->get('admin','AdminController@index')->name('admin');
    /*precisa estar logado para acessar qualquer rota*/
});

$this->get('index', 'Site\CadastroEstagioController@index');
$this->post('verificar', 'Site\CadastroEstagioController@verificar');

$this->post('salvar/{Matricula}', 'Site\CadastroEstagioController@salvar');
$this->post('salvar', 'Site\CadastroEstagioController@salvar');
$this->post('confirmar', 'Site\CadastroEstagioController@confirmar');
$this->get('confirmar/create', 'Site\TurmaController@store');

$this->get('/', 'Site\SiteController@index')->name('home');
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\Log inController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


/*Auth::routes();*/
