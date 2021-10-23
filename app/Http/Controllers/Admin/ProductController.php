<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $product = Product::latest()->get();
       return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create()
    {
        $category = Category::all();
        $productCode = $this->generateCode('Product', 'P');
        $product = Product::latest()->get();
        return view('admin.product.create', compact('category', 'productCode', 'product'));
    }

    public function getSubcategory($id){
        $subCategory = SubCategory::where('category_id', $id)->get();
        return response()->json($subCategory);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'code' => 'required|max:18',
            'name' => 'required|max:100',
            'category_id' => 'required',
            'product_size' => 'max:10',
            'color' => 'max:20',
            // 'sub_category_id' => 'required',
            'price' => 'required|max:18',
            'image' => 'required|image|mimes:jpg,png,gif,bmp',
        ]);
        $slug = Str::slug($request->name.'-'.time());
        $i = 0;
        while(true){
            if (Category::where('slug', '=', $slug)->exists()) {
                $i++;
                $slug .= '_'.$i; 
                continue;
             }
             break;
        }
        $product= new Product();
        $product->name = $request->name;
        $product->slug =$slug;
        $product->code = $request->code;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->product_size = $request->product_size;
        $product->color = $request->color;
        $product->is_featured = $request->is_featured ?? 0;
        $product->is_offer = $request->is_offer ?? 0;
        $product->short_details = $request->short_details;
        $product->description = $request->description;
        
        $image = $request->file('image');
        $mainImage = 'p-'.time().uniqid().$image->getClientOriginalName();
        $thumbImage = 'thumb-'.time().uniqid().$image->getClientOriginalName();
        Image::make($image)->save('uploads/product/'.$mainImage);
        Image::make($image)->save('uploads/product/thumbnail/'.$thumbImage);

        $product->image = $mainImage;
        $product->thum_image = $thumbImage;
        $product->save_by= 1;
        $product->ip_address=$request->ip();
        $product->save();

        // multiple image

        $productImages = $this->imageUpload($request, 'otherImage', 'uploads/otherImage');
            if(is_array($productImages) && count($productImages))
            {
                foreach($productImages as $image)
                {
                    $imagePath = new ProductImage();
                    $imagePath->product_id = $product->id;
                    $imagePath->otherImage = $image;
                    $imagePath->save();
                }
            }
        if($product){
            Session::flash('success', 'Product Added Successfully');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function removeImage($id){
        try{
            $removeImage = ProductImage::find($id);
            if(!empty($removeImage->otherImage) && file_exists($removeImage->otherImage)){
                unlink($removeImage->otherImage);
            }
            $removeImage->delete();
            return true;
        }catch(\Exception $e){
            return false;
        }
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {  
        $category = Category::all();
        $product = Product::where('slug', $slug)->first();
        return view('admin.product.edit', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|max:18',
            'name' => 'required|max:100',
            'category_id' => 'required',
            'product_size' => 'max:10',
            'color' => 'max:20',
            'price' => 'required|max:18',
            'image' => 'image|mimes:jpg,png,gif,bmp',
            'ip_address' => 'max:15'
        ]);

        $product_image = '';  
        $product = Product::find($id);
		
        if($request->hasFile('image')){
            $image_path = public_path('uploads/product/'.$product->image);
            $image_path_thumb = public_path('uploads/product/thumbnail/'.$product->thum_image);
            if (file_exists($image_path )) {
                @unlink($image_path);
                @unlink($image_path_thumb);
            }
            $image = $request->file('image');
            $mainImage = 'p-'.time().uniqid().$image->getClientOriginalName();
            $thumbImage = 'thumb-'.time().uniqid().$image->getClientOriginalName();
            
            Image::make($image)->save('uploads/product/'.$mainImage);
            Image::make($image)->resize(195,195)->save('uploads/product/thumbnail/'.$thumbImage);
            $product_image = $mainImage;
            $product->thum_image = $thumbImage;
        }
        else{
        $product_image = $product->image;
        }	
        $slug = Str::slug($request->name.'-'.time());
        $product->name = $request->name;
        $product->slug =$slug;
        $product->code = $request->code;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->product_size = $request->product_size;
        $product->color = $request->color;
        $product->is_featured = $request->is_featured;
        $product->is_offer = $request->is_offer;
        $product->short_details = $request->short_details;
        $product->description = $request->description;
        $product->image= $product_image;
        $product->save_by= Auth::user()->id;
        $product->ip_address=$request->ip();
        $product->save();

        // multiple image
        $productImages = $this->imageUpload($request, 'otherImage', 'uploads/otherImage');
            if(is_array($productImages) && count($productImages))
            {
                foreach($productImages as $image)
                {
                    $imagePath = new ProductImage();
                    $imagePath->product_id = $product->id;
                    $imagePath->otherImage = $image;
                    $imagePath->save();
                }
            }

        if($product){
            Session::flash('updated', 'success');
            return redirect()->route('product.index');
        }
        else{
            Session::flash('errors', 'something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
