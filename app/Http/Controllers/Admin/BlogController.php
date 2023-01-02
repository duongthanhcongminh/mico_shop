<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Services\Blog\BlogServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogServiceInterface $blogService)
    {
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogService->searchAndPaginate('title',$request->get('search'));
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // xu li file
        if($request->hasFile('image')){
            $data['image'] = Common::uploadFile($request->file('image'),'front/img/blog');
        }

        $blog = $this->blogService->create($data);

        //cap nhat du lieu
        $this->blogService->update($data, $blog->id);

        return redirect('admin/blog/' . $blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blogService->find($id);
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->blogService->find($id);

        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->all();

        // Xu ly file anh
        if($request->hasFile('image')) {
            //them file moi:
            $data['image'] = Common::uploadFile($request->file('image'),'front/img/blog');

            //xoa file cu:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != ''){
                unlink('front/img/blog/' . $file_name_old);
            }
        }
        //cap nhat du lieu
        $this->blogService->update($data, $blog->id);

        return redirect('admin/blog/' . $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->blogService->delete($id);

        return redirect('admin/blog');
    }
}
