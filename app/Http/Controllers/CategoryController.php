<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Category;
use Redirect;
use Validator;
use Alert;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Category::simplePaginate(5);
        return view('Admin.Category.index',['category'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Category.Includes.create');
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
        $this->validate($request, [
            'category' => 'required|min:5|max:100',
        ]);

        $data = array(
                      'category' => Input::get('category'),
                      'type' => Input::get('type'),
                      'slug' => str_slug(Input::get('category'),"-")
                 );
         $category = Category::create($data);

         Alert::success('Category Baru di buat','Create');

         return Redirect::to('category');


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::where('id',$id)->first();
        return view('Admin.Category.Includes.update')->with('category',$category);
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
        $category = Category::find($id);

        $category->category = Input::get('category');
        $category->slug = str_slug(Input::get('category'), "-");
        $category->type = Input::get('type');
        $category->save();

        Alert::info('Category baru anda Ubah','Edit');
        return Redirect::to('category');

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
        $category = Category::find($id);
        $category->delete();
        Alert::info('Category baru anda Hapus','Delete');
        return Redirect::to('category');
    }
}
