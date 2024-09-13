<?php

namespace App\Http\Controllers;
use App\Models\Blog3;

use Illuminate\Http\Request;

class Prodcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog3s=Blog3::all();
        return view('products.index',compact('blog3s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'productname'=>'required',
            'productdescription'=>'required',
        ]);
        $blog3['productname'] = $request->productname;
        $blog3['productdescription'] = $request->productdescription;
        $blog3['status'] = $request->has('avail');
        // if($request->has('avail')){
        //     $blog3['status'] = True;
        // }else{
        //     $blog3['status'] = False;
        // }

        $blog3['Duration'] = $request->dur;
        if ($request->has('check')) {
        $categories = $request->input('check');
        $blog3['Category'] = implode(', ', $categories); // Assuming Category field is a string column
    }

    // Insert the $blog3 array into the database
        Blog3::insert($blog3);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $productid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($productid)
    {
        $blog3 = Blog3::find($productid);
        return view('products.edit',compact('blog3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $productid, $productname)
    {
        $update['productname'] = $request->productname;
        $update['productdescription'] = $request->productdescription;
        // $update['status'] = $request->status;
        $update['status'] = $request->has('avail');
        // if($request->has('avail')){
        //     $update['status'] = True;
        // }else{
        //     $update['status'] = False;
        // }
        $update['Duration'] = $request->dur;
    
         if ($request->has('check')) {
        $categories = $request->input('check');
        $update['Category'] = implode(', ', $categories); // Assuming Category field is a string column
    }
        
        Blog3::where('productid', $productid)
         ->where('productname', $productname)
         ->update($update);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($productid)
    {
        Blog3::where('productid',$productid)->delete();
        return redirect()->route('products.index');
    }
}
