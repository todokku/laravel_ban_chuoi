<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $products = Product::with('category:id,categories_name');
        
        if($request->name) $products->where('product_name', 'like', '%'.$request->name.'%');
        if($request->cate) $products->where('product_category_id', $request->cate);
        
        

        $products = $products->orderByDesc('id')->paginate(10);
        $categories = $this->getAllCategories();

        $viewData = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('admin::product.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        
        $categories = $this->getAllCategories();
        return view('admin::product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back()->with('message', 'Thêm sản phẩm thành công');
    }

    public function getAllCategories() {
        return Category::all();
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
        $product = Product::find($id);
        $categories = $this->getAllCategories();
        return view('admin::product.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  RequestProduct $request
     * @return Response
     */
    public function update(RequestProduct $requestProduct, $id)
    {
        $this->insertOrUpdate($requestProduct, $id);
        return redirect()->back()->with('message', 'Cập nhật thông tin sản phẩm thành công');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('message', 'Xóa sản phẩm thành công');
    }

    public function insertOrUpdate($requestProduct, $id = '')
    {
        $code = 1;
        try {
            $product = new Product();
            if($id) {
                $product = Product::find($id);
            }
            $product->product_name = $requestProduct->product_name;
            $product->product_slug = str_slug($requestProduct->product_name);
            $product->product_description = $requestProduct->product_description ? $requestProduct->product_description : $requestProduct->product_name;
            $product->product_price = $requestProduct->product_price;
            $product->product_sale = $requestProduct->product_sale ? $requestProduct->product_sale : '0';
            $product->product_content = $requestProduct->product_content;
            $product->product_category_id = $requestProduct->product_category_id;

            if ($requestProduct->hasFile('product_avatar')) {
                $file = upload_image('product_avatar');
                if (isset($file['name'])) {
                    $product->product_avatar = $file['name'];
                }
            }
            $product->save();
        } catch (\Exception $exception) {
            $code = 0;
            Log::error('[Errors function insertOrUpdate Table Products]'.$exception->getMessenge());
        }
        
        return $code;
    }

    public function action($action, $id) {
        if($action) {
            $product = Product::find($id);
            switch ($action) {
                case 'active':
                    $product->product_active = $product->product_active ? 0 : 1;
                case 'hot':
                    $product->product_hot = $product->product_hot ? 0 : 1;
                    break;
            }
            $product->save();
        }
        return redirect()->back();

    }


}
