<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        //$categories = Category::select('id', 'categories_name', 'categories_icon' ,'categories_title_seo', 'categories_active')->get();
        $categories = Category::paginate(10);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->getAllCategories();
        return view('admin::category.create', compact('categories'));
    }

    public function getAllCategories() {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     * @param  RequestCategory $request
     * @return Response
     */
    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);
        return redirect()->back()->with('message', 'Thêm danh mục thành công');
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
        $category = Category::find($id);
        return view('admin::category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(RequestCategory $requestCategory, $id)
    {
        $this->insertOrUpdate($requestCategory, $id);
        return redirect()->back()->with('message', 'Cập nhật thông tin danh mục thành công');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) $category->delete();

        return redirect()->back()->with('message', 'Xóa thông tin danh mục thành công');;
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function insertOrUpdate($requestCategory, $id = '')
    {
        $code = 1;
        try {
            $category = new Category();
            if($id) {
                $category = Category::find($id);
            }
            $category->categories_name = $requestCategory->name;
            $category->categories_slug = str_slug($requestCategory->name);
            $category->categories_icon = str_slug($requestCategory->icon);
            $category->categories_title_seo = $requestCategory->categories_title_seo ? $requestCategory->categories_title_seo : $requestCategory->name;
            $category->categories_description_seo = $requestCategory->categories_description_seo;
            $category->save();
        } catch (\Exception $exception) {
            $code = 0;
            Log::error('[Errors function insertOrUpdate Table Categories]'.$exception->getMessenge());
        }
        
        return $code;
    }

    public function action($action, $id) {
        if($action) {
            $category = Category::find($id);
            switch ($action) {
                case 'active':
                    $category->categories_active = $category->categories_active ? 0 : 1;
            }
            $category->save();
        }
        return redirect()->back();

    }
}
