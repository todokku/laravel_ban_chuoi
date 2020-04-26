<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestPost;
use App\Models\Post;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        $viewData = [
            'posts' => $posts
        ];
        return view('admin::post.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::post.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(RequestPost $requestPost)
    {
        
        $this->insertOrUpdate($requestPost);
        return redirect()->back()->with('message', 'Thêm bài viết thành công');
        
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin::post.update', compact('post'));
    }

    public function update(RequestPost $requestPost, $id)
    {
        $this->insertOrUpdate($requestPost, $id);
        return redirect()->back()->with('message', 'Cập nhật bài viết thành công');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('message', 'Xóa bài viết thành công');
    }

    public function insertOrUpdate($requestPost, $id = '')
    {
        $code = 1;
        try {
            $post = new Post();
            if($id) {
                $post = Post::find($id);
            }
            $post->post_name = $requestPost->post_name;
            $post->post_slug = str_slug($requestPost->post_name);
            $post->post_description = $requestPost->post_description ? $requestPost->post_description : $requestPost->post_name;
            $post->post_content = $requestPost->post_content;

            if ($requestPost->hasFile('post_avatar')) {
                $file = upload_image('post_avatar');
                if (isset($file['name'])) {
                    $post->post_avatar = $file['name'];
                }
            }
            $post->save();
        } catch (\Exception $exception) {
            $code = 0;
            Log::error('[Errors function insertOrUpdate Table Posts]'.$exception->getMessenge());
        }
        
        return $code;
    }
}
