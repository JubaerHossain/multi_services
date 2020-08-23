<?php

namespace App\Http\Controllers\Backend;

use DB;
use App\Menu;
use App\Page;
use App\Service;
use App\Submenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class MenusController extends Controller
{
    public function index()
    {
        return view('backend.menu.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Menu::orderBy('position','asc')->get())
                    ->addColumn('action', function($data){
                        if ($data->status == 1) {
                            $status = 'Active';
                         }
                         else {
                             $status = 'Deactive';
                         }
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" onclick="Statuschange('.$data->id.',`admin/menu/`);">
                        '.$status.'
                        </a>
                        <a class="dropdown-item" href="'.route('menu.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="Positionchange('.$data->id.','.$data->position.',`admin/menus/position/`);">
                            Position Change
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/menus/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    })
                   
                    ->addColumn('status', function($data){
                         if ($data->status == 1) {
                            $status = 'Active';
                         }
                         else {
                             $status = 'Deactive';
                         }
                        return $status;
                        })
                    ->rawColumns(array('action','status','image','date'))
                    ->make(true);
        }
    }
    public function create()
    {
        $data['service'] = Service::pluck('title', 'slug');
        $data['page'] = Page::pluck('title', 'id');
       return view('backend.menu.create',compact('data'));
    }


    public function store(Request $request)
    {
        //dd($request->all());

            if ($request->type == 1) {
                $this->validate($request, [
                    'title' => 'required|unique:menus,name',
                    'status' => 'required|',
                    'type' => 'required|',
                     'url' => 'required|unique:menus,url',
                ]);
            }
            if ($request->type == 4) {
                $this->validate($request, [
                     'title' => 'required|unique:menus,name',
                    'page_id' => 'required|',
                    'status' => 'required|',
                    'type' => 'required|',
                    'url' => 'required|unique:menus,url',
                ]);
            }
            if ($request->type == 2 || $request->type == 3) {
                $this->validate($request, [
                     'title' => 'required|unique:menus,name',
                    'service_id' => 'required|',
                    'sub_menu.*' => 'required|',
                    'type' => 'required|',
                ]);
            }

        DB::beginTransaction();
        try {
            if ($request->type == 2) {
                $hom_url = 'product';
            }
            if ($request->type == 3) {
                $hom_url = 'blog';
            }
            if($request->type == 1 || $request->type == 4) {
                $hom_url = @$request->url ? strtolower(str_replace(' ', '-',$request->url)) : null;
            }
            $position = Menu::max('position')+1;
            $data = new Menu();
            $data->name  = $request->title;
            $data->type = $request->type;
            $data->url = $hom_url;
            $data->page_id = @$request->page_id ? $request->page_id :null;
            $data->status = $request->status;
            $data->position  = $position;
            $data->save();

            if ($request->type == 2 || $request->type == 3) {
                if ($request->type == 3) {
                    $url = 'blog/'.$request->service_id;
                } else {
                    $url = 'product/'.$request->service_id;
                }                
                foreach ($request->sub_menu as $key => $value) {
                     $sub = new Submenu();
                     $sub->name = $value;
                     $sub->type = $request->type;
                     $sub->menu_id = $data->id;
                     $sub->url = $url;
                     $sub->save();
                }
            }

            DB::commit();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/menu');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         } 
    }

    public function show($id)
    {
        try {
            $data = Menu::find($id);
             if ($data->status == 1) {
                 $data->status = 0;
            }
            else {
                $data->status = 1;                 
             }
             $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/menu');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    public function edit($id)
    {
        $data['edit'] = Menu::find($id);   
        if ($data['edit']) {
            $data['service'] = Service::pluck('title', 'slug');
            $data['page'] = Page::pluck('title', 'id');
            return view('backend.menu.create',compact('data'));
        }
        else {
            return redirect('/admin/service');
        }
    }
    public function update(Request $request, $id)
     { 
            
             if ($request->type == 1) {
                 $this->validate($request, [
                     'title' => 'required|unique:menus,name,'.$id,
                     'status' => 'required|',
                     'type' => 'required|',
                     'url' => 'required|unique:menus,url,'.$id,
                 ]);
             }
             if ($request->type == 4) {
                 $this->validate($request, [
                     'title' => 'required|unique:menus,name,'.$id,
                     'page_id' => 'required|',
                     'status' => 'required|',
                     'type' => 'required|',
                     'url' => 'required|unique:menus,url,'.$id,
                 ]);
             }
             if ($request->type == 2 || $request->type == 3) {
                 $this->validate($request, [
                     'title' => 'required|unique:menus,name,'.$id,
                     'service_id' => 'required|',
                     'sub_menu.*' => 'required|',
                     'type' => 'required|',
                 ]);
             }
 
         DB::beginTransaction();
         try {
             if ($request->type == 2) {
                 $hom_url = 'product';
             }
             if ($request->type == 3) {
                 $hom_url = 'blog';
             }
             if($request->type == 1 || $request->type == 4) {
                 $hom_url = @$request->url ? strtolower(str_replace(' ', '-',$request->url)) : null;
             }
            // $position = Menu::max('position')+1;
             $data = Menu::find($id);
             $data->name  = $request->title;
             $data->type = $request->type;
             $data->page_id = @$request->page_id ? $request->page_id :null;
             $data->url = $hom_url;
             $data->status = $request->status;
             $data->save();

             if ($request->type == 2 || $request->type == 3) {
                 if ($request->type == 3) {
                    $url = 'blog/'.$request->service_id;
                } else {
                    $url = 'product/'.$request->service_id;
                 }                
                 foreach ($request->sub_menu as $key => $value) {
                      Submenu::whereIn('id', $data->sub_menu->pluck('id'))->delete(); 
                      $sub = new Submenu();
                      $sub->name = $value;
                      $sub->type = $request->type;
                      $sub->menu_id = $data->id;
                      $sub->url = $url;
                      $sub->save();
                 }
             }
 
             DB::commit();
             Toastr::success('Operation Successfull', 'Success');
             return redirect('/admin/menu');
     
          } catch (\Exception $e) {
              dd($e);
              Toastr::error('Something went wrong!', 'Error');
              return redirect()->back(); 
          } 
     }
     public function destroy($id)
     {
         try {
             $data = Menu::find($id);
             $data->delete();
             Toastr::success('Operation Successfull', 'Success');
             return redirect('/admin/menu');
 
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
     }

     function PostionChange(Request $request, $id){
        $this->validate($request, [
            'position' => 'required|'
        ]);
        DB::beginTransaction();
        try {
            $data = Menu::find($id);
            $new = $request->position;
            $old = $request->old_position;
            $edit_data = Menu::where('position',$old)->first();
            if ($new == $old) {
                return redirect()->back();     
            }
            if ($new < $old) { 
                $data=Menu::whereBetween('position',[$new,$old])->get();
                foreach ($data as $key => $value) {
                    $d=Menu::find($value->id);
                    $d->position = $value->position+1;
                    $d->save();
                }
            }
            
            if($new > $old){
                $data=Menu::whereBetween('position',[$old,$new])->get();
                foreach ($data as $key => $value) {
                    $d=Menu::find($value->id);
                    $d->position = $value->position-1;
                    $d->save();
                }
            }
            $data=Menu::where('id',$edit_data->id)->update(['position'=> $new]); 
            DB::commit();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/menu');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
     }
}
