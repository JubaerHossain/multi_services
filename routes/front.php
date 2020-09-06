<?php 

Route::group(['namespace' =>'Frontend'],function(){
    // user
    Route::get('/user/login', 'HomeController@login')->name('front.login');
    Route::get('/user/register', 'HomeController@register')->name('front.register');
    Route::get('/category/{slug}', 'HomeController@index')->name('front.category');
    Route::get('/service', 'HomeController@allservice')->name('front.allservice');
    Route::get('/service/{slug}', 'HomeController@service')->name('front.service');
    Route::get('/category/{slug}/{sub_slug}', 'HomeController@index')->name('front.sub_category');
    //end user
    Route::get('/', 'HomeController@index')->name('front');
    Route::get('domain', 'HomeController@domain')->name('front.domain');
    Route::get('hosting', 'HomeController@hosting')->name('front.hosting');
    Route::get('course', 'HomeController@allCourse');
    Route::get('product', 'HomeController@shop_index')->name('front.shop_index');
    Route::get('product-details/{slug}', 'HomeController@single_shop')->name('front.single_shop');
    Route::get('product/{slug}', 'HomeController@product_service')->name('front.product_service');
    //pages
    Route::get('about-us/', 'HomeController@about_us')->name('front.about_us');
    Route::get('contact-us/', 'HomeController@contact_us')->name('front.contact_us');
    Route::post('contact-info/', 'HomeController@contact_info')->name('front.contact_info');
    Route::get('faqs/', 'HomeController@Faq')->name('front.faq');
    Route::get('terms-conditions/', 'HomeController@Term_Conditions')->name('front.Term_Conditions');
    Route::get('privacy-policy/', 'HomeController@privacy_policy')->name('front.privacy_policy');
    Route::get('blog/', 'HomeController@BlogAll')->name('front.blog_all');
    Route::get('blog/{slug}', 'HomeController@Blog')->name('front.blog');
    Route::get('blog-details/{slug}', 'HomeController@BlogDetails')->name('blog_details');
    Route::get('pages/{title}', 'HomeController@Pages')->name('pages.blog');
    //Enroll
    Route::get('course/{title}', 'HomeController@Course')->name('pages.course');

    // ajax get data
    Route::get('product/service/data', 'HomeController@GetService');
    Route::get('product/work/data', 'HomeController@GetWork');
    Route::get('product/portfolio/data', 'HomeController@GetPortfolio');
    Route::get('ajax/team/data', 'HomeController@GetTeam');
    Route::get('ajax/home-blog', 'HomeController@GetBlog');
    Route::get('ajax/home-product', 'HomeController@AjaxProduct');

    //Cart
    Route::get('cart/{slug}', 'OrderController@Cart')->name('front.cart');
    Route::post('v2/product-cart/information/{id}', 'OrderController@CartInformationAdd')->name('cart.information_add');
    //
    Route::post('user/v2/login','UserController@login')->name('front.login');
    Route::get('user/v2/logout','UserController@user_logout')->name('front.logout');
    Route::get('user/v2/login','UserController@user_login')->name('front.get_login');
    route::get('user/mail-check/{email}','UserController@Mail_Check');
    
});