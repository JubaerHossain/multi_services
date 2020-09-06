<?php

use App\Menu;
use App\Service;
use App\Products;
use App\Settings;

/*
 * Set active class
 */

function set_active($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array) $path) ? $active : '';
}

/*
 *  get setting from datab
 */

function get_setting()
{
    $setting = \App\Settings::all()->first();

    if ($setting !== null) {
        return $setting;
    }
}


/*
 *  Check color if white or black
 */

function get_color()
{
    if (!empty(get_setting())) {
        return get_setting()->color->name;
    } else {
        return 1;
    }
}

function popularPost(){
    $data =DB::table('blogs')->where('status',1)->OrderBy('views', 'DESC')->get()->take(5);
    return $data;
}
function recent_blog(){
    $data = DB::table('blogs')->where('status',1)->OrderBy('id', 'DESC')->get()->take(5);
    return $data;
}
function category(){
    $data = Service::where('status',1)->OrderBy('id', 'DESC')->get();
    return $data;
}

function portfolio(){
         return DB::table('portfolios')->select('title','service_id','image')->where('status',1)->OrderBy('id', 'DESC')->get();
}
function about_company(){
         return DB::table('about_companies')->where('status',1)->first();
}
function menu(){
         return Menu::where('status',1)->orderBy('position','asc')->get();
}
function service(){
    return DB::table('services')->where('status',1)->orderBy('id','asc')->get()->take(6);
}
function course(){
         return DB::table('courses')->where('status',1)->orderBy('id','asc')->get()->take(3);
}
function Choose(){
         return DB::table('choose_us')->where('status',1)->orderBy('id','asc')->get();
}
function price_plan(){
         return DB::table('price_plans')->where('status',1)->where('type',0)->orderBy('id','asc')->get();
}
function hosting(){
         return DB::table('price_plans')->where('status',1)->orderBy('id','asc')->get();
}
function social_icons(){
         return DB::table('social_icons')->where('status',1)->orderBy('id','asc')->get();
}
function faqs(){
         return DB::table('faqs')->where('status',1)->orderBy('id','asc')->get();
}
function footers(){
         return DB::table('footers')->first();
}
function team(){
         return DB::table('teams')->where('status',1)->orderBy('id','desc')->get();
}
function testmonial(){
         return DB::table('testmonials')->where('status',1)->orderBy('id','desc')->get();
}



// new 

function main_date_format($data){
    return  date('d M y', strtotime($data));
 
 }
function currency_symbol(){
    return  Settings::first()->currencySymbol->symbol;
 
 }

 function imagePost($pathImage,$file){
    
    if (!file_exists($pathImage)) {
        mkdir($pathImage, 0777, true);
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move($pathImage.'/', $fileName);
        $fileName = $pathImage.'/' . $fileName;
        $name =  $fileName;
    } else {
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move($pathImage.'/', $fileName);
        $fileName = $pathImage.'/' . $fileName;
        $name =  $fileName;
    }
    return $name;
}

function permision_check($role_id,$permission_id){
     $data = DB::table('role_has_permissions')->where(['role_id'=>$role_id,'permission_id'=>$permission_id])->count();
     if ($data > 0) {
       $t = 'checked';
     }else {
        $t = '';
     }
     return $t;
}
