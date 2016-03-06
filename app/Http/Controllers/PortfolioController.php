<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Portfolio;
use App\Category;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Alert;
use File;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Portfolio::orderBy('id','desc')->paginate(3);

        return view('Admin.Portfolio.index',['portfolio'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::where('type','Portfolio')->get();

        return view('Admin.Portfolio.Includes.create',['category'=>$category]);

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
        $valid =  $this->validate($request, [
            'title' => 'required|min:10|max:255',
            'article' => 'required|min:25',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $input['image'] = $this->savePhoto($request->file('image'));
        }

        $data = array(
                      'title' => Input::get('title'),
                      'article' => Input::get('article'),
                      'date' => Input::get('date'),
                      'link' => Input::get('link'),
                      'slug' => str_slug(Input::get('title'),"-"),
                      'image' => $input['image']
                 );

     $portfolio = Portfolio::create($data);
     $portfolio->category()->attach($request->input('category'));
     Alert::success('Portfolio Baru Sudah di buat','Create');
     return Redirect::to('portfolio');


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
        $portfolio = Portfolio::where('id','=',$id)->first();
        $category = Category::where('type','Portfolio')->get();

        return view('Admin.Portfolio.Includes.read')->with(['portfolio' => $portfolio ,'category'=>$category]);
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
        $portfolio = Portfolio::where('id','=',$id)->first();
        $category = Category::where('type','Portfolio')->get();

        return view('Admin.Portfolio.Includes.update')->with(['portfolio' => $portfolio ,'category'=>$category]);
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
        $portfolio = Portfolio::find($id);

        if ($request->hasFile('image')) {
            $portfolio['image'] = $this->deletePhoto($portfolio->image);

            $portfolio['image'] = $this->savePhoto($request->file('image'));
            $portfolio->image = $portfolio['image'];
        }
        $portfolio->title = Input::get('title');
        $portfolio->slug = str_slug(Input::get('title'), "-");
        $portfolio->article = Input::get('article');
        $portfolio->date = Input::get('date');
        $portfolio->link = Input::get('link');
        $portfolio->save();
        $portfolio->category()->sync($request->get('category'));

        Alert::info('Portfolio baru anda Ubah','Edit');
        return Redirect::to('portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $deleteImage = $this->deletePhoto($portfolio->image);
        $portfolio->delete();
        Alert::info('Article baru anda Hapus','Delete');
        return Redirect::to('portfolio');
    }


    // Class Bikinan -->> buat foto
    protected function savePhoto($photo)
    {
        $destinationPath = 'image';
        $subdestinationPath = 'portfolio';
        $extension = $photo->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $photo->move($destinationPath. '/' . $subdestinationPath , $fileName);
        $portfolio['image'] = $destinationPath. '/' . $subdestinationPath . '/' . $fileName;

        return $portfolio['image'];
    }


    protected function deletePhoto($photo)
    {
        File::delete($photo);
        return $photo;
    }
}
