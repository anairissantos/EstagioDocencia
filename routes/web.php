<?php
$this->group (['middleware'=>['auth'],'namespace'=> 'Admin'],function (){
    $this->get('admin','AdminController@index')->name('admin');
    /*precisa estar logado para acessar qualquer rota*/
});

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();

