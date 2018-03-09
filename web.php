<?php
Route::resource('employee','EmpController');
Route::get('employee/delete/{id}','EmpController@destroy');
?>
