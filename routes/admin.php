<?php
Route::get('admin/login','Backend\UserController@login')->name('admin.login');
Route::group(['middleware' => ['admin'],'prefix'=>'admin','namespace' =>'Backend'], function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

        // Menu data
        Route::resource('menu','MenusController');
        Route::post('menus/position/{id}', 'MenusController@PostionChange');
        Route::get('menus/delete/{id}', 'MenusController@destroy');
        Route::get('menus', 'MenusController@getData')->name('menu.data');
     
        // Service
        Route::resource('service','ServiceController');
        Route::get('services/delete/{id}', 'ServiceController@destroy');
        Route::get('services', 'ServiceController@getData')->name('service.data');
        // Plan
        Route::resource('plan','PlanController');
        Route::get('plans/delete/{id}', 'PlanController@destroy');
        Route::get('plans', 'PlanController@getData')->name('plan.data');
        // Pages
        Route::resource('page','PageController');
        Route::get('pages/delete/{id}', 'PageController@destroy');
        Route::get('pages', 'PageController@getData')->name('page.data');
        // Work
        Route::resource('work','WorkController');
        Route::get('works/delete/{id}', 'WorkController@destroy');
        Route::get('works', 'WorkController@getData')->name('work.data');
        // portfolio
        Route::resource('portfolio','PortfolioController');
        Route::get('portfolios/delete/{id}', 'PortfolioController@destroy');
        Route::get('portfolios', 'PortfolioController@getData')->name('portfolio.data');
        // team
        Route::resource('team','TeamController');
        Route::get('teams/delete/{id}', 'TeamController@destroy');
        Route::get('teams', 'TeamController@getData')->name('team.data');

        // product
        Route::resource('product', 'ProductController');
        Route::get('products/delete/{id}', 'productController@destroy');
        Route::get('products', 'ProductController@getData')->name('product.data');
        
        // sale 
        Route::get('sale', 'SalesController@index');
        Route::get('sale/show/{id}', 'SalesController@show')->name('sale.show');
        Route::get('sale/delete/{id}', 'SalesController@destroy');
        Route::get('sales/data', 'SalesController@getData')->name('sale.data');
        // Guest sale 
        Route::get('guest/sale', 'GuestController@index');
        Route::get('guest/sale/show/{id}', 'GuestController@show')->name('guest.show');
        Route::get('guest/sale/delete/{id}', 'GuestController@destroy');
        Route::get('guest/sales/data', 'GuestController@getData')->name('guest.data');
        // Free sample sale 
        Route::get('sample/sale', 'GetSampleController@index');
        Route::get('sample/sale/show/{id}', 'GetSampleController@show')->name('sample.show');
        Route::get('sample/sale/delete/{id}', 'GetSampleController@destroy');
        Route::get('sample/sales/data', 'GetSampleController@getData')->name('sample.data');
        // Contact info
        Route::get('contact-info', 'ContactInfoController@index');
        Route::get('contact-info/show/{id}', 'ContactInfoController@show')->name('contact_info.show');
        Route::get('contact-info/delete/{id}', 'ContactInfoController@destroy');
        Route::get('contact-infos/data', 'ContactInfoController@getData')->name('contact_info.data');

        Route::group(['prefix' => 'frontend-setting'], function () {
            Route::get('about/page', 'PageSettingController@about');
            Route::post('about/page', 'PageSettingController@aboutStore')->name('admin.about');
            Route::get('home-page', 'PageSettingController@homePage');
            Route::post('home-page', 'PageSettingController@homePageStore')->name('admin.homePage');
            Route::get('term-conditions/page', 'PageSettingController@term_conditionsPage');
            Route::post('term-conditions/page', 'PageSettingController@term_conditionsPageStore')->name('admin.term_conditionsPage');
            Route::get('privacy-policy/page', 'PageSettingController@privacy_policyPage');
            //social
            Route::resource('social-icon','SocialIconController');
            Route::get('social-icons/delete/{id}', 'SocialIconController@destroy');
            Route::get('social-icons', 'SocialIconController@getData')->name('social_icon.data');
            //before after
            Route::get('before-after', 'PageSettingController@Before_After');
            Route::post('before-after', 'PageSettingController@Before_AfterStore')->name('admin.Before_After');
        });
        
     
      
        });

    });

    Route::group(['middleware' => ['admin']], function () {
        Route::resource('user','UsersController');
        Route::get('users/data','UsersController@getData')->name('user.data');
        Route::get('users/delete/{id}', 'UsersController@destroy');

        // Route::get('product/delete/{id}', 'ProductController@destroy')->name('product.delete');
        
        // Route::post('/product/search', 'ProductController@search');
        // Route::post('/product/sell', 'ProductController@sell');
    });
    Route::group(['middleware' => ['admin'],'prefix' => 'setting'], function () {
        // Settings 
            Route::get('general-setting','SettingController@general_setting');
            Route::post('general-setting/update','SettingController@UpdateGeneral')->name('setting.store');
            Route::get('database-backup','SettingController@Backup');
            Route::get('database-backup/store','SettingController@BackupStore')->name('database_store');
            Route::get('database-backup/delete/{id}','SettingController@BackupDelete');
            Route::get('database-backup/download/{id}','SettingController@BackupDownload')->name('db.download');
            
            Route::get('email-settings','SettingController@EmailSetting');
            Route::post('email-settings/update/','SettingController@update_email_setting')->name('email_setting.update');
    
    
               //Role and Permission
            // Route::get('role/permission/{id}', 'RoleController@permission')->name('role.permission');
            // Route::post('role/set_permission/{id}', 'RoleController@setPermission')->name('role.setPermission');
            // Route::get('role/data', 'RoleController@getData')->name('role.data');
            // Route::post('role/update/{id}', 'RoleController@update');
            // Route::get('role/delete/{id}', 'RoleController@destroy');
            // Route::resource('roles', 'RoleController');
            // Route::resource('permissions', 'PermissionController');
        });