<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;
use App\Activity;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productsAct = Activity::where('slug',request()->activity)->first();
         if (request()->activity) 
        {
           
            
            

            $categories = Category::with('activity')->whereHas('activity', function ($query)
            {
                $query->where('slug', request()->activity);  
            })->get();

            $products = $productsAct->products;


        }
        else
        {
            $products = Product::with('category')->get();
            $categories = Category::has('products')->get();

        }
        
        if (request()->category) 
        {
            $productCat = Category::where('slug',request()->category)->first();
            
            $products = Product::with('category')->whereHas('category', function ($query)
            {
                $query->where('slug', request()->category);
            })->get();

            $categories = Category::with('activity')->whereHas('activity', function ($query)
            {
                $query->where('slug', request()->activity);  
            })->get();
        }

        if(request()->sort == "newest")
        {
            $products = $products->sortByDesc('created_at');
        }
        
        if(is_null($products))
        {
            App::abort(404);
        }
        
        return view('shop',compact('products','categories','productsAct','productCat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       /* $product = DB::table('categories')                        
                      ->join('products','products.category_id','=','categories.id')
                      ->where('products.slug',$slug)
                      ->first();*/
          $product = Product::where('slug','=',$slug)->firstOrFail();
        session()->push('products.recently_viewed', $product->id);

        $mightAlsoLike = DB::table('categories')
                            ->join('products','products.category_id','=','categories.id')
                            ->where('products.slug','!=',$slug)
                            ->inRandomOrder()
                            ->take(4)
                            ->get();
        if(is_null($product))
        {
            App::abort(404);
        }
        return view('productDetail', compact('product','mightAlsoLike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
