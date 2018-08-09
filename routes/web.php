<?php

//View Principal
Route::get('/', ['as'=>'site', 'uses'=>'Site\SiteController@index']);

//Read
Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);

//Create
Route::get('/admin/cursos/criar', ['as'=>'admin.cursos.criar', 'uses'=>'Admin\CursoController@criar']);
Route::post('/admin/cursos/salvar/', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);

//Update
Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);

//Delete
Route::get('/admin/cursos/delete/{id}', ['as'=>'admin.cursos.delete','uses'=>'Admin\CursoController@delete'] );