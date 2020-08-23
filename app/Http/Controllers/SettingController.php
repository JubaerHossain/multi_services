<?php

namespace App\Http\Controllers;

use App\Backeup;
use App\Currency;
use App\Settings;
use App\MailSetting;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Spatie\Backup\BackupDestination\Backup;

class SettingController extends Controller
{



    function general_setting(){
        $data['edit'] = Settings::first();
        $data['currency'] = Currency::pluck('name','id');
        return view('backend.settings.general',compact('data'));
    }


    public function UpdateGeneral(Request $request)
    {
        $this->validate($request, [
            'site_name' => 'nullable|max:240',
            'site_title' => 'nullable|max:240',
            'copyright_text' => 'nullable|max:240',
            'currency' => 'nullable|',
            'phone' => 'nullable|max:40',
            'email' => 'nullable|email|max:150',
            'address' => 'nullable|string:max:250',
            'file' => 'nullable|mimes:jpeg,png,jpg|',
            'favicon' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        try {

                $data = Settings::first();
                $data->site_name = $request->site_name;
                $data->site_title = $request->site_title;
                $data->copyright_text = $request->copyright_text;
                $data->currency = $request->currency;
                $data->phone = $request->phone;
                $data->email = $request->email;
                $data->address = $request->address;
                $file = $request->file('file'); 
                if($request->hasFile('file')){ 
                    $pathImage = 'public/uploads/logo';
                    $fileName = imagePost($pathImage,$file);
                    if (file_exists($data->logo) && $data->logo != 'public/uploads/settings/logo.png') {
                        \File::delete($data->logo);
                    }
                    $data->logo =  $fileName;
                    
                }
                $file = $request->file('favicon'); 
                if($request->hasFile('favicon')){ 
                    $pathImage = 'public/uploads/favicon';
                    $fileName = imagePost($pathImage,$file);
                    if (file_exists($data->favicon) && $data->favicon != 'public/uploads/settings/favicon.png') {
                        \File::delete($data->favicon);
                    }
                    $data->favicon =  $fileName;
                    
                }
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect()->back();

            } catch (\Exception $e) {
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            } 
        
    }

    function Permission(){
        dd('role_permission');
    }

    //backupSettings

    public function Backup()
    {        
        try{
            $dbs = Backeup::latest()->get();
            return view('backend.settings.back_up', compact('dbs'));
        }catch (\Exception $e) {
           Toastr::error('Operation Failed', 'Failed');
           return redirect()->back(); 
        }
    }

    public function BackupStore(Request $request)
    {
        try{
            $DB_HOST     = env("DB_HOST", "");
            $DB_DATABASE = env("DB_DATABASE", "");
            $DB_USERNAME = env("DB_USERNAME", "");
            $DB_PASSWORD = env("DB_PASSWORD", "");
            $connection  = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
    
            $tables = array();
            $result = mysqli_query($connection, "SHOW TABLES");
            while ($row = mysqli_fetch_row($result)) {
                $tables[] = $row[0];
            }
            $return = '';
            foreach ($tables as $table) {
                $result     = mysqli_query($connection, "SELECT * FROM " . $table);
                $num_fields = mysqli_num_fields($result);
    
                $return .= 'DROP TABLE ' . $table . ';';
                $row2 = mysqli_fetch_row(mysqli_query($connection, "SHOW CREATE TABLE " . $table));
                $return .= "\n\n" . $row2[1] . ";\n\n";
    
                for ($i = 0; $i < $num_fields; $i++) {
                    while ($row = mysqli_fetch_row($result)) {
                        $return .= "INSERT INTO " . $table . " VALUES(";
                        for ($j = 0; $j < $num_fields; $j++) {
                            $row[$j] = addslashes($row[$j]);
                            if (isset($row[$j])) {
                                $return .= '"' . $row[$j] . '"';
                            } else {
                                $return .= '""';
                            }
                            if ($j < $num_fields - 1) {
                                $return .= ',';
                            }
                        }
                        $return .= ");\n";
                    }
                }
                $return .= "\n\n\n";
            }
    
            if (!file_exists('public/databaseBackup/main')) {
                mkdir('public/databaseBackup/main', 0777, true);
            }
    
            //save file
            $name   = 'database_' . date('d_m_Y_h:i') . '.sql';
            $path   = 'public/databaseBackup/main/'.uniqid().'.sql';
            $file = 'public/databaseBackup/test.sql';
            $current = file_get_contents($file);
            $current .= $return;
            \File::put($file, $return);
            \File::copy($file,$path);

            $get_backup                = new Backeup();
            $get_backup->file_name     = $name;
            $get_backup->source_link   = $path;
            $get_backup->created_by   = Auth::id();
            $get_backup->updated_by   = Auth::id();
            $results                   = $get_backup->save();
    
            if ($results) {
                Toastr::success('Operation successful', 'Success');
                return redirect()->back();
            } else {
                Toastr::error('Operation Failed', 'Failed');
                return redirect()->back();
            }
        }catch (\Exception $e) {
            dd($e);
           Toastr::error('Operation Failed', 'Failed');
           return redirect()->back(); 
        }
    }

    function BackupDelete($id){
        try {
           $data = Backeup::find($id);
           if (file_exists($data->source_link)) {
                \File::delete($data->source_link);
            }
            $data->delete();
            Toastr::success('Operation successful', 'Success');
            return redirect()->back();
        }catch (\Exception $e) {
           Toastr::error('Operation Failed', 'Failed');
           return redirect()->back(); 
        }
    }
    function BackupDownload($id){
        try {
           $data = Backeup::find($id);
           return response()->download($data->source_link);
            return redirect()->back();
        }catch (\Exception $e) {
            dd($e);
           Toastr::error('Operation Failed', 'Failed');
           return redirect()->back(); 
        }
    }

    function EmailSetting(){
        try{
            $data['edit'] = MailSetting::find(1);
            return view('backend.settings.mail_setting',compact('data'));
        }catch (\Exception $e) {
           Toastr::error('Operation Failed', 'Failed');
           return redirect()->back(); 
        }
    }

    public function update_email_setting(Request $request)
    {

        //  return $request;

        $request->validate([
            'mail_driver'  => 'required|max:100',
            'from_name'    => 'required|max:100',
            'from_email'   => 'required|max:100',
            'mail_host'          => 'required|max:100',
            'mail_port'    => 'required|max:10',
            'mail_username' => 'required|max:100',
            'mail_password'   => 'required|max:100',
            'mail_encryption'       => 'required|max:100'

        ]);
        $data =
        [
            'MAIL_DRIVER' => $request->mail_driver,
            'MAIL_HOST' => $request->mail_host,
            'MAIL_PORT' => $request->mail_port,
            'MAIL_USERNAME' => $request->mail_username,
            'MAIL_PASSWORD' => $request->mail_password,
            'MAIL_ENCRYPTION' => $request->mail_encryption,
        ];

        $formeted_env_key_value = '';
        foreach ($data as $key => $value) {
            $envterms[] = $key;
            $envvalues[] = $value;
            $formeted_env_key_value .= $key . ":" . $value . ',';
            $values[$key] = $value;
        }
        // return  $formeted_env_key_value;
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {
                $str .= "\n";
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);
                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }
            }
        }
        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) {
            Toastr::error('Operation Failed', 'Failed');
            return redirect()->back();
        } else {
            //Toastr::success('Operation successful', 'Success');
        }
        // return $formeted_env_key_value;

        try {
            $email_setting = MailSetting::find(1);
            $email_setting->from_name = $request->from_name;
            $email_setting->from_email = $request->from_email;
            $email_setting->mail_driver = $request->mail_driver;
            $email_setting->mail_host = $request->mail_host;
            $email_setting->mail_port = $request->mail_port;
            $email_setting->mail_username = $request->mail_username;
            $email_setting->mail_password = $request->mail_password;
            $email_setting->mail_encryption = $request->mail_encryption;
            $result = $email_setting->save();
            if ($result) {
                Toastr::success('Operation successful', 'Success');
                return redirect()->back();
            } else {
                Toastr::failed('All Filed is required', 'Failed');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Toastr::error('Operation Failed', 'Failed');
            return redirect()->back();
        }
    }


}
