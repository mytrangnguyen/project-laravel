<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'

]);

Route::get('product/{type}', [
    'as' => 'sanpham',
    'uses' => 'PageController@getProPagebyType'
]);

Route::get('product-by-center/{center_id}',[
    'as' => 'sanphamtheoloai',
    'uses' => 'PageController@getProductByCenterName'
]);

Route::get('introduction', [
    'as' => 'gioithieu',
    'uses' => 'PageController@getIntroPage'
]);

Route::get('contact', [
    'as' => 'lienhe',
    'uses' => 'PageController@getContactPage'
]);

Route::post('addcontact', [
    'as' => 'add-contact',
    'uses' => 'PageController@postContact'
]);

Route::get('cart', [
    'as' => 'giohang',
    'uses' => 'PageController@getCartPage'
]);

Route::get('product-detail/{id}', [
    'as' => 'chitiet',
    'uses' => 'PageController@getDetailPage'
]);

// Route for register
Route::get('register', [
    'as' => 'dangky',
    'uses' => 'AccountController@getRegister'
]);
// Auth::routes(['verify' => true]);

Route::post('addNguoidung', [
    'as' => 'addUsers',
    'uses' => 'AccountController@addUser'
]);

// Route for seller register
Route::get('sellerRegister', [
    'as' => 'dangkybanhang',
    'uses' => 'AccountController@getSellerRegister'
]);

Route::post('addSeller', [
    'as' => 'addSellerRegister',
    'uses' => 'AccountController@addSeller'
]);

// Route tim kiem
Route::get('timkiem', [
    'as' => 'tim-kiem',
    'uses' => 'PageController@getSearch'
]);

Route::get('signin', [
    'as' => 'sign-in',
    'uses' => 'AccountController@getLogin'
]);
Route::post('dang-nhap', [
    'as' => 'login',
    'uses' => 'AccountController@login',
]);

Route::get('dang-xuat', [
    'as' => 'logout',
    'uses' => 'AccountController@getLogout',
]);

// Route thêm sản phẩm vào giỏ hàng

Route::get('add-to-cart/{id}', [
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddToCart'
]);


//Route xóa sản phẩm trong giỏ hàng
Route::get('del-cart/{id}', [
    'as' => 'xoagiohang',
    'uses' => 'PageController@getDeleteItemCart'
]);
// Route đến trang checkout

Route::get('checkout', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckout'
]);

Route::post('checkout', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'
]);

//huy đơn
Route::post('cancelOrder/{id}',[
    'as' => 'huydonhang',
    'uses' => 'PageController@postCancel'
]);

//re order
Route::post('reOrder/{id}',[
    'as' => 'dathanglai',
    'uses' => 'PageController@postReOrder'
]);
// chị biết as đó dùng làm gì không ?ko nhớ

//Route edit thông tin user

Route::get('historyOrder',[
    'as' => 'history',
    'uses' => 'AccountController@getOrdersHistory'
]);

//Route quên mật khẩu

Route::get('forgotPassword',[
    'as' => 'quenmatkhau',
    'uses' => 'AccountController@getFormResetPassword'
]);

// Route::get('resetPassword')

Route::get('users/{user}',  [
    'as' => 'users.edit',
    'uses' => 'AccountController@getUserProfile'
]);

Route::patch('users/{user}/update',  [
    'as' => 'users.update',
    'uses' => 'AccountController@updateUser'
]);

//Route comment products

Route::post('comment', [
    'as' => "feedback",
    'uses' => "PageController@postComment"
]);


// ROUTE ADMIN

Route::group(['prefix' => 'admin/'], function () {
    Route::get('login', [
        'as' => 'admin.login.getLoginAdmin',
        'uses' => 'LoginAdminController@getLoginAdmin',
    ]);
    Route::post('postLogin', [
        'as' => 'postLogin',
        'uses' => 'LoginAdminController@postLoginAdmin',
    ]);
	Route::get('home',
		['as' 	=> 'admin.showAdminPage',
		'uses' 	=> 'LoginAdminController@showAdminPage'
    ]);

});

Route::get('logoutAdmin',
['as' 	=> 'postLogout',
'uses' 	=> 'LoginAdminController@postLogoutAdmin'
]);


// category
Route::group(['prefix' => 'admin/category/'], function () {
	Route::get('add',
		['as' 	=> 'admin.category.getAddCategory',
		'uses' 	=> 'CategoryController@getAddCategory'
    ]);
    Route::post('postAdd',['as'=>'postAdd','uses'=>'CategoryController@postAddCategory']);
    Route::get('edit/{id}', [
		'as' 	=> 'admin.category.getEditCategory',
		'uses' 	=> 'CategoryController@getEditCategory'
	]);
	Route::get('list',
		['as' 	=> 'admin.category.getListCategory',
		'uses' 	=> 'CategoryController@getListCategory'
	]);

	Route::get('edit/{id}', [
		'as' 	=> 'admin.category.getEditCategory',
		'uses' 	=> 'CategoryController@getEditCategory'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.category.postEditCategory',
		'uses' 	=> 'CategoryController@postEditCategory'
	]);

	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteCategory',
		'uses' 	=> 'CategoryController@getDeleteCategory'
	]);

});

// product
Route::group(['prefix' => 'admin/product/'], function () {
	Route::get('add',
		['as' 	=> 'admin.product.getAddProduct',
		'uses' 	=> 'ProductController@getAddProduct'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'ProductController@postAddProduct']);

	Route::get('list',
		['as' 	=> 'admin.product.getListProduct',
		'uses' 	=> 'ProductController@getListProduct'
	]);

	// Updated Product
	Route::get('edit/{id}', [
		'as' 	=> 'admin.products.getEditProduct',
		'uses' 	=> 'ProductController@getEditProduct'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.products.postEditProduct',
		'uses' 	=> 'ProductController@postEditProduct'
	]);

	// Delete Product
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteProduct',
		'uses' 	=> 'ProductController@getDeleteProduct'
	]);
});

// User
Route::group(['prefix' => 'admin/user/'], function () {
	Route::get('add',
		['as' 	=> 'admin.user.getAddUser',
		'uses' 	=> 'UserController@getAddUser'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'UserController@postAddUser']);

	Route::get('list',
		['as' 	=> 'admin.user.getListUser',
		'uses' 	=> 'UserController@getListUser'
	]);

	// Updated User
	Route::get('edit/{id}', [
		'as' 	=> 'admin.user.getEditUser',
		'uses' 	=> 'UserController@getEditUser'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.user.postEditUser',
		'uses' 	=> 'UserController@postEditUser'
	]);

	// Delete User
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteUser',
		'uses' 	=> 'UserController@getDeleteUser'
	]);
});

// Slider
Route::group(['prefix' => 'admin/slider/'], function () {
	Route::get('add',
		['as' 	=> 'admin.slider.getAddSlider',
		'uses' 	=> 'SliderController@getAddSlider'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'SliderController@postAddSlider']);

	Route::get('list',
		['as' 	=> 'admin.slider.getListSlider',
		'uses' 	=> 'SliderController@getListSlider'
	]);

	// Updated Slide
	Route::get('edit/{id}', [
		'as' 	=> 'admin.slider.getEditSlider',
		'uses' 	=> 'SliderController@getEditSlider'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.slider.postEditSlider',
		'uses' 	=> 'SliderController@postEditSlider'
	]);

	// Delete Slider
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteSlider',
		'uses' 	=> 'SliderController@getDeleteSlider'
	]);
});

// Customer
Route::group(['prefix' => 'admin/customer/'], function () {
	Route::get('add',
		['as' 	=> 'admin.customer.getAddCustomer',
		'uses' 	=> 'CustomerController@getAddCustomer'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'CustomerController@postAddCustomer']);

	Route::get('list',
		['as' 	=> 'admin.customer.getListCustomer',
		'uses' 	=> 'CustomerController@getListCustomer'
	]);

	// Updated Customer
	Route::get('edit/{id}', [
		'as' 	=> 'admin.customer.getEditCustomer',
		'uses' 	=> 'CustomerController@getEditCustomer'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.customer.postEditCustomer',
		'uses' 	=> 'CustomerController@postEditCustomer'
	]);

	// Delete Customer
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteCustomer',
		'uses' 	=> 'CustomerController@getDeleteCustomer'
	]);
});

// Seller
Route::group(['prefix' => 'admin/seller/'], function () {
	Route::get('add',
		['as' 	=> 'admin.seller.getAddSeller',
		'uses' 	=> 'SellerController@getAddSeller'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'SellerController@postAddSeller']);

	Route::get('list',
		['as' 	=> 'admin.seller.getListSeller',
		'uses' 	=> 'SellerController@getListSeller'
	]);

	// Updated Seller
	Route::get('edit/{id}', [
		'as' 	=> 'admin.seller.getEditSeller',
		'uses' 	=> 'SellerController@getEditSeller'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.seller.postEditSeller',
		'uses' 	=> 'SellerController@postEditSeller'
	]);

	// Delete Seller
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteSeller',
		'uses' 	=> 'SellerController@getDeleteSeller'
	]);
});

// Comment
Route::group(['prefix' => 'admin/comment/'], function () {

	Route::get('list',
		['as' 	=> 'admin.comment.getListComment',
		'uses' 	=> 'CommentController@getListComment'
	]);

	// Delete Comment
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteComment',
		'uses' 	=> 'CommentController@getDeleteComment'
	]);
});

// Order
Route::group(['prefix' => 'admin/order/'], function () {

	Route::get('list',
		['as' 	=> 'admin.comment.getListOrder',
		'uses' 	=> 'OrderController@getListOrder'
	]);

	// Delete Order
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteOrder',
		'uses' 	=> 'OrderController@getDeleteOrder'
    ]);
    // Change Status
    Route::post('changeStatus/{id}',[
        'as' =>'thaydoitrangthai',
        'uses' => 'OrderController@postChangeStatus'
    ]);

});

// Order_Prods
Route::group(['prefix' => 'admin/order_prods/'], function () {

	Route::get('list',
		['as' 	=> 'admin.order_prods.getListOrder_Prods',
		'uses' 	=> 'OrderProdsController@getListOrder_Prods'
	]);

	// Delete Order_Prods
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteOrder_Prods',
		'uses' 	=> 'OrderProdsController@getDeleteOrder_Prods'
	]);
});