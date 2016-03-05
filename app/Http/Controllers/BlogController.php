<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Blog;
use App\Category;
use File;
use Redirect;
use Validator;
use Alert;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('id','desc')->paginate(5);
        // $data = Blog::simplePaginate(5);
        return view('Admin.Blog.index',['blog'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::where('type','Article')->get();
        return view('Admin.Blog.Includes.create',['category'=>$category]);
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
                      'slug' => str_slug(Input::get('title'),"-"),
                      'image' => $input['image']
                 );
        $blog = Blog::create($data);
        $blog->category()->attach($request->input('category'));
        // return Redirect::to('blog')->with('message','Post Berhasil Di tambah');
        Alert::success('Article Baru Sudah di buat','Create');
        return Redirect::to('blog');

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
        $blog = Blog::where('id', '=', $id)->first();
        return view('Admin.Blog.Includes.read')->with(['blog' => $blog]);
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
        $blog = Blog::where('id', '=', $id)->first();
        $category = Category::where('type','Article')->get();

        return view('Admin.Blog.Includes.update')->with(['blog' => $blog ,'category'=>$category]);
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
        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $blog['image'] = $this->deletePhoto($blog->image);

            $blog['image'] = $this->savePhoto($request->file('image'));
            $blog->image = $blog['image'];
        }
        $blog->title = Input::get('title');
        $blog->slug = str_slug(Input::get('title'), "-");
        $blog->article = Input::get('article');
        $blog->save();
        $blog->category()->sync($request->get('category'));

        Alert::info('Article baru anda Ubah','Edit');
        return Redirect::to('blog');

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
        $blog = Blog::find($id);
        $deleteImage = $this->deletePhoto($blog->image);
        $blog->delete();
        Alert::info('Article baru anda Hapus','Delete');
        return Redirect::to('blog');
    }

    // Class Bikinan -->> buat foto
    protected function savePhoto($photo)
    {
        $destinationPath = 'image';
        $subdestinationPath = 'blog';
        $extension = $photo->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $photo->move($destinationPath. '/' . $subdestinationPath , $fileName);
        $blog['image'] = $destinationPath. '/' . $subdestinationPath . '/' . $fileName;

        return $blog['image'];
    }


    protected function deletePhoto($photo)
    {
        File::delete($photo);
        return $photo;
    }


}
