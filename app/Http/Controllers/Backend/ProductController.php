<?php

namespace App\Http\Controllers\Backend;

use PDF;
use App\Service;
use App\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.product.product_list');    
    }
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Products::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('product.show', $data->slug).'">
                            View
                        </a>
                        <a class="dropdown-item" href="'.route('product.edit', $data->slug).'">
                            Edit
                        </a>
                       
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/products/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    }) 
                    ->editColumn('title', function ($data) {
                        return Str::limit($data->title, 20);
                    })
                    ->addColumn('service', function($data){
                      return $data->service->title;
                    })
                    ->addColumn('price', function($data){
                      return 'Tk.'.$data->price;
                    })
                    ->addColumn('image', function($data){
                        $image ='<img src="'. asset($data->image).'" alt="" width="80">';
                        return $image;
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
                    ->rawColumns(array('action','status','image'))
                    ->make(true);
        }
    }
    public function create()
    {
        $data['service'] = Service::pluck('title', 'id');
        return view('backend.product.create_product', compact('data'));
    }

    public function store(Request $request)
    {
        //validate data
        //return $request;
        $this->validate($request, array(
            'name' => 'required|max:70',
            'desc' => 'nullable',
            'service_id' => 'required|max:70',
            'quantity' => 'required|numeric|max:100000000',
            'price' => 'numeric|max:100000000',
            'summary' => 'required|',
            'file' => 'required|mimes:jpeg,png,jpg',

        ));
        try { 
            //store data
            $product = new Products;
            $product->title = ucfirst($request->name);
            $product->slug = strtolower(str_replace(' ', '-',$request->name));
           
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->service_id = $request->service_id;
            $product->desc = $request->desc;
            $product->summary = $request->summary;           
            $product->created_by = Auth::id();
          
            //upload image
            $file = $request->file('file'); 
            if($request->hasFile('file')){ 
                $pathImage = 'public/uploads/product/main';
                $fileName = imagePost($pathImage,$file);
                $product->image =  $fileName;
            }
            $product->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('product.index');
            } catch (\Exception $e) {
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            }
    }

    public function show($slug)
    {
       
        $data['show'] = Products::where('slug',$slug)->first();
        if ($data['show']) {
            return view('backend.product.show_product', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

    
    public function edit($slug)
    {
        $data['edit'] = Products::where('slug',$slug)->first();
        if ($data['edit']) {
            $data['service'] = Service::pluck('title', 'id');
            return view('backend.product.create_product', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, array(
            'name' => 'required|max:70',
            'desc' => 'nullable',
            'service_id' => 'required|max:70',
            'quantity' => 'required|numeric|max:100000000',
            'price' => 'numeric|max:100000000',
            'summary' => 'required|',
            'file' => 'nullable|mimes:jpeg,png,jpg',

        ));
        try { 
            //store data
            $product = Products::find($id);
            $product->title = ucfirst($request->name);
            $product->slug = strtolower(str_replace(' ', '-',$request->name));;
           
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->service_id = $request->service_id;
            $product->desc = $request->desc;
            $product->summary = $request->summary;           
            $product->created_by = Auth::id();
          
            //upload image
            $file = $request->file('file'); 
            if($request->hasFile('file')){ 
                $pathImage = 'public/uploads/product/main';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($product->image)) {
                    \File::delete($product->image);
                }
                $product->image =  $fileName;
            }
            $product->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('product.index');
            } catch (\Exception $e) {
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $product = Products::find($id);
            if (file_exists($product->image) && $product->image != 'public/uploads/product/pr_1.jpg') {
                \File::delete($product->image);
            }
            $product->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('product.index');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }

       
    }


    public function stock()
    {
        if(request()->ajax())
        {
                return datatables()->of(Products::where('out_stock','>',0)->latest()->get())
                    
                ->addColumn('action', function($data){
                $button = '<div class="text-right flex-nowrap">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="'.route('product.edit', $data->slug).'">
                        Edit
                    </a>
                    <a class="dropdown-item" href="'.route('product.show', $data->slug).'">
                        View
                    </a>
                    </div>
                </div>
                </div>';
                return $button;
                })
                ->addColumn('id', function($data){
                    return $data->p_id;
                    })
                    ->editColumn('title', function ($data) {
                        return Str::limit($data->title, 20);
                    })
                ->addColumn('brand', function($data){
                    return $data->barnd->name;
                    })
                ->addColumn('genere', function($data){
                    return $data->genere->name;
                    })
                ->addColumn('out_stock', function($data){
                    if ($data->out_stock < 5 ) {
                      $stock ='<font color="red"> <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="Stock is limited">'.$data->out_stock.'</a></font>';
                    }else{
                        $stock = $data->out_stock;
                    }
                    return $stock;
                    })
                ->addColumn('price', function($data){
                    return currency_symbol() .''.$data->p_price;
                    })
                ->addColumn('category', function($data){
                    return $data->category->name;
                    })
                ->addColumn('p_discount', function($data){
                    return $data->p_discount.' %';
                    })
                ->addColumn('p_exdate', function($data){
                    if(strtotime($data->p_exdate) < strtotime(\Carbon\Carbon::now())){
                            $expire='<font color="red"> <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="This product has expired in '.date('d-M-Y', strtotime($data->p_exdate)).'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                        </a> The product is expired</font>';
                        }
                        else{

                            $expire=   date('d-M-Y', strtotime($data->p_exdate)); 
                        }
                    return $expire;
                    })
                ->rawColumns(array('time','p_exdate','out_stock','action'))
                ->make(true);
                }

        return view('backend.stock.stock_list');   
    }
    public function outstock()
    {
        if(request()->ajax())
        {
                return datatables()->of(Products::where('out_stock','<=',0)->latest()->get())
                    
                ->addColumn('action', function($data){
                $button = '<div class="text-right flex-nowrap">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="'.route('product.edit', $data->slug).'">
                        Edit
                    </a>
                    <a class="dropdown-item" href="'.route('product.show', $data->slug).'">
                        View
                    </a>
                    </div>
                </div>
                </div>';
                return $button;
                })
                ->addColumn('id', function($data){
                    return $data->p_id;
                    })
                    ->editColumn('title', function ($data) {
                        return Str::limit($data->title, 20);
                    })
                ->addColumn('brand', function($data){
                    return $data->barnd->name;
                    })
                ->addColumn('genere', function($data){
                    return $data->genere->name;
                    })
                ->addColumn('out_stock', function($data){
                    if ($data->out_stock < 5 ) {
                      $stock ='<font color="red"> <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="Stock is limited">'.$data->out_stock.'</a></font>';
                    }else{
                        $stock = $data->out_stock;
                    }
                    return $stock;
                    })
                ->addColumn('price', function($data){
                    return currency_symbol() .''.$data->p_price;
                    })
                ->addColumn('category', function($data){
                    return $data->category->name;
                    })
                ->addColumn('p_discount', function($data){
                    return $data->p_discount.' %';
                    })
                ->addColumn('p_exdate', function($data){
                    if(strtotime($data->p_exdate) < strtotime(\Carbon\Carbon::now())){
                            $expire='<font color="red"> <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="This product has expired in '.date('d-M-Y', strtotime($data->p_exdate)).'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                        </a> The product is expired</font>';
                        }
                        else{

                            $expire=   date('d-M-Y', strtotime($data->p_exdate)); 
                        }
                    return $expire;
                    })
                ->rawColumns(array('time','p_exdate','out_stock','action'))
                ->make(true);
                }

        return view('backend.stock.out_stock_list');     
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function expired()
    {
        $product = DB::table('products')
            ->join('categories', 'products.p_cat', '=', 'categories.id')
            ->whereRaw('p_exdate < CURDATE()')
            ->paginate(15);

        return view('product.expired', ['product' => $product]);
    }
}
