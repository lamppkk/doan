<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);
    Route::get('{alias}_{id}.html',['as'=>'detail','uses'=>'HomeController@detail']);
    Route::get('category/{alias}_{id}/',['as'=>'category','uses'=>'HomeController@category']);
    //facebook
    Route::get('facebook', 'HomeController@redirectToProvider');
    Route::get('facebook/callback', 'HomeController@handleProviderCallback');
    //cart
    Route::get('addToCart/{id}', 'HomeController@addToCart');
    Route::get('viewCart',['as'=>'viewCart','uses'=>'HomeController@viewCart']);
    Route::get('deleteCart/{id}',['as'=>'deleteCart','uses'=>'HomeController@deleteCart']);
    Route::get('updateCart/{id}/{qty}',['as'=>'updateCart','uses'=>'HomeController@updateCart']);
    Route::get('destroyCart',['as'=>'destroyCart','uses'=>'HomeController@destroyCart']);
    
    Route::get('order',['as'=>'getOrder','uses'=>'HomeController@getOrder']);
    Route::post('order',['as'=>'postOrder','uses'=>'HomeController@postOrder']);
    
    Route::get('checkout/{id}',['as'=>'getCheckout','uses'=>'HomeController@getCheckout']);
    
    
    Route::get('login.html',['as'=>'getMemberLogin','uses'=>'HomeController@getMemberLogin']);
    Route::post('login.html',['as'=>'postMemberLogin','uses'=>'HomeController@postMemberLogin']);
    
    Route::get('logout.html',['as'=>'getMemberLogout','uses'=>'HomeController@getMemberLogout']);
    Route::get('register.html',['as'=>'getMemberRegister','uses'=>'HomeController@getMemberRegister']);
    Route::get('member.html',['as'=>'getMember','uses'=>'HomeController@getMember']);


    Route::get('gioi-thieu.html',['as'=>'getGioiThieu','uses'=>'HomeController@getGioiThieu']);
    Route::get('lien-he.html',['as'=>'getLienHe','uses'=>'HomeController@getLienHe']);
    Route::post('lien-he.html',['as'=>'postLienHe','uses'=>'HomeController@postLienHe']);
    Route::get('tin-tuc.html',['as'=>'getTinTuc','uses'=>'HomeController@getTinTuc']);
    Route::get('khuyen-mai.html',['as'=>'getKhuyenMai','uses'=>'HomeController@getKhuyenMai']);
    Route::get('tin-tuc/{alias}_{id}.html',['as'=>'getTinTucDetail','uses'=>'HomeController@getTinTucDetail']);

    Route::get('search/{cat_id}/{key}',['as'=>'getTimKiem','uses'=>'HomeController@getTimKiem']);


    Route::get('search/{cat_id}',['as'=>'getTimKiem','uses'=>'HomeController@getTimKiem']);

    //admin
    Route::get('admin', function() {
        return redirect()->route('admin.dashboard.getDashboard');

    });

    Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function () {
        //admin/news

        Route::group(['prefix'=>'news'], function () {
            Route::get('add',['as'=>'admin.news.getAdd','uses'=>'NewsController@getAdd']);
            Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);

            Route::get('list',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);

            Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
            Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);

            Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);

            Route::post('postAction',['as'=>'admin.news.postAction','uses'=>'NewsController@postAction']);

        });

        //admin/categorys
        Route::group(['prefix'=>'categorys'], function () {
            Route::get('list',['as'=>'admin.categorys.getList','uses'=>'CategoryController@getList']);
            Route::post('list',['as'=>'admin.categorys.postList','uses'=>'CategoryController@postList']);

            Route::get('delete/{id}',['as'=>'admin.categorys.getDelete','uses'=>'CategoryController@getDelete']);
            Route::post('deleteN',['as'=>'admin.categorys.postDeleteN','uses'=>'CategoryController@postDeleteN']);

            Route::get('edit/{id}',['as'=>'admin.categorys.getEdit','uses'=>'CategoryController@getEdit']);
            Route::post('edit/{id}',['as'=>'admin.categorys.postEdit','uses'=>'CategoryController@postEdit']);


        });

        //admin/product
        Route::group(['prefix'=>'products'], function () {
            Route::get('add',['as'=>'admin.products.getAdd','uses'=>'ProductController@getAdd']);
            Route::post('add',['as'=>'admin.products.postAdd','uses'=>'ProductController@postAdd']);

            Route::get('list',['as'=>'admin.products.getList','uses'=>'ProductController@getList']);    
            Route::get('delete/{id}',['as'=>'admin.products.getDelete','uses'=>'ProductController@getDelete']);
            Route::post('postAction',['as'=>'admin.products.postAction','uses'=>'ProductController@postAction']);

            Route::get('edit/{id}',['as'=>'admin.products.getEdit','uses'=>'ProductController@getEdit']);
            Route::post('edit/{id}',['as'=>'admin.products.postEdit','uses'=>'ProductController@postEdit']);

        //Route::get('deleteImage/{id}',['as'=>'admin.products.deleteImage','uses'=>'ProductController@deleteImage']);

        });

        Route::group(['prefix'=>'user'], function () {
            Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);   
            Route::post('list',['as'=>'admin.user.postList','uses'=>'UserController@postList']);

            Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);

            Route::post('postAction',['as'=>'admin.user.postAction','uses'=>'UserController@postAction']);

            Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
            Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);


        });

        Route::get('menu/{id}',['as'=>'admin.menu.getMenu','uses'=>'SettingController@getMenu']);   
        Route::post('menu/{id}',['as'=>'admin.menu.postMenu','uses'=>'SettingController@postMenu']);    
        Route::get('dashboard',['as'=>'admin.dashboard.getDashboard','uses'=>'DashboardController@getDashboard']);  

        Route::get('setting',['as'=>'admin.setting','uses'=>'SettingController@getSetting']);   
        Route::post('setting',['as'=>'admin.setting','uses'=>'SettingController@postSetting']); 

        Route::get('ads/{id}',['as'=>'admin.getAds','uses'=>'SettingController@getAds']);   
        Route::post('ads/{id}',['as'=>'admin.postAds','uses'=>'SettingController@postAds']); 

        


        //admin/order
        Route::group(['prefix'=>'order'], function () {
            Route::get('list',['as'=>'admin.order.getList','uses'=>'OrderController@getList']); 

            Route::get('{id}',['as'=>'admin.order.getOrderDetail','uses'=>'OrderController@getOrderDetail']);   
            Route::get('editOrder/{id}/{status}',['as'=>'editOrder','uses'=>'OrderController@editOrder']);
            Route::get('deleteOrder/{id}',['as'=>'deleteOrder','uses'=>'OrderController@deleteOrder']);
            //Route::post('edit/{id}',['as'=>'admin.order.postEdit','uses'=>'OrderController@postEdit']);   

            // Route::get('add',['as'=>'admin.products.getAdd','uses'=>'ProductController@getAdd']);
            // Route::post('add',['as'=>'admin.products.postAdd','uses'=>'ProductController@postAdd']);
            // 
            // Route::get('edit/{id}',['as'=>'admin.products.getEdit','uses'=>'ProductController@getEdit']);
            // Route::post('edit/{id}',['as'=>'admin.products.postEdit','uses'=>'ProductController@postEdit']);

            // Route::get('delete/{id}',['as'=>'admin.products.getDelete','uses'=>'ProductController@getDelete']);
            // Route::post('postAction',['as'=>'admin.products.postAction','uses'=>'ProductController@postAction']);

            //Route::get('deleteImage/{id}',['as'=>'admin.products.deleteImage','uses'=>'ProductController@deleteImage']);

        }); 

        //admin/facebook
        Route::group(['prefix'=>'facebook'], function () {
            Route::get('notify',['as'=>'admin.facebook.getNotify','uses'=>'FacebookController@getNotify']); 
            Route::post('notify',['as'=>'admin.facebook.postNotify','uses'=>'FacebookController@postNotify']);  
            Route::post('setting',['as'=>'admin.facebook.postSetting','uses'=>'FacebookController@postSetting']);   
            
            Route::get('livechat',['as'=>'admin.facebook.getLiveChat','uses'=>'FacebookController@getLiveChat']); 
            Route::post('livechat',['as'=>'admin.facebook.postLiveChat','uses'=>'FacebookController@postLiveChat']);  
        });

    });
});
