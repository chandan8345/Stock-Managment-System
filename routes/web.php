<?php
//Product
Route::get('/product', [
    'as' => '/',
    'uses' => 'ProductController@product'
]);
Route::get('/manageProduct', [
    'as' => '/',
    'uses' => 'ProductController@manageProduct'
]);
//Stock
Route::get('/stock', [
    'as' => '/',
    'uses' => 'StockController@stock'
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
Route::get('/customer', [
    'as' => '/',
    'uses' => 'CustomerTransactionController@customer'
]);
//SupplierTransaction
Route::get('/supplier', [
    'as' => '/',
    'uses' => 'SupplierTransactionController@supplier'
]);
//Dashboard
Route::get('/', [
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
    'uses' => 'ReportsController@supplierReport'
]);
Route::get('/purchaseReport', [
    'as' => '/',
    'uses' => 'ReportsController@supplierReport'
]);
Route::get('/Report', [
    'as' => '/',
    'uses' => 'ReportsController@supplierReport'
]);
//CustomerMemo

//SupplierMemo