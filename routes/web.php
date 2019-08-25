<?php
//Auth
Route::get('/', [
    'as' => '/',
    'uses' => 'authController@login'
]);
Route::get('/register', [
    'as' => '/',
    'uses' => 'authController@register'
]);

//Product
Route::get('/product', [
    'as' => '/',
    'uses' => 'ProductController@product'
]);
Route::get('/stockReview', [
    'as' => '/',
    'uses' => 'ProductController@manageProduct'
]);

//Sales
Route::get('/sales', [
    'as' => '/',
    'uses' => 'SalesController@sales'
]);
Route::get('/manageSales', [
    'as' => '/',
    'uses' => 'SalesController@manageSales'
]);
//Purchase
Route::get('/purchase', [
    'as' => '/',
    'uses' => 'PurchaseController@purchase'
]);
Route::get('/managePurchase', [
    'as' => '/',
    'uses' => 'PurchaseController@managePurchase'
]);
//API

//CustomerTransaction
Route::get('/cutomerTransaction', [
    'as' => '/',
    'uses' => 'CustomerTransactionController@index'
]);
Route::get('/customerManageTransaction', [
    'as' => '/',
    'uses' => 'CustomerTransactionController@manageTransaction'
]);

//SupplierTransaction
Route::get('/supplierTransaction', [
    'as' => '/',
    'uses' => 'SupplierTransactionController@index'
]);
Route::get('/supplierManageTransaction', [
    'as' => '/',
    'uses' => 'SupplierTransactionController@manageTransaction'
]);

//Dashboard
Route::get('/dashboard', [
    'as' => '/',
    'uses' => 'DashboardController@index'
]);
//Expanse
Route::get('/expanse', [
    'as' => '/',
    'uses' => 'ExpanseController@expanse'
]);
Route::get('/expanseHead', [
    'as' => '/',
    'uses' => 'ExpanseController@expanseHead'
]);
Route::get('/manageExpanse', [
    'as' => '/',
    'uses' => 'ExpanseController@manageExpanse'
]);
//Users

//ExtraController

//Reports
Route::get('/productReport', [
    'as' => '/',
    'uses' => 'ReportsController@productReport'
]);
Route::get('/purchaseReport', [
    'as' => '/',
    'uses' => 'ReportsController@purchaseReport'
]);
Route::get('/salesReport', [
    'as' => '/',
    'uses' => 'ReportsController@salesReport'
]);
Route::get('/expenseReport', [
    'as' => '/',
    'uses' => 'ReportsController@expenseReport'
]);
