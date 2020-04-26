<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Transactions;
use App\Models\Orders;
use DB;
class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        //$transactions = Transactions::leftJoin('getNameUserTransactions:id,name')->paginate(10);
        $transactions = Transactions::with('getNameUserTransactions:id,name')->get();
        //dd( $transactions);

        // $transactions = DB::table('users')
        //     ->leftJoin('transactions', 'users.id', '=', 'transactions.transactions_user_id')
        //     ->get();
        //     dd($transactions);
        $viewData = array(
            'transactions' => $transactions,
        );
        
        return view('admin::transaction.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
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
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    // public function delete($id) {
    //     $orders = Transactions::find($id);
    //     $orders->delete();

    //     return redirect()->back()->with('message', 'Xóa đơn hàng thành công');
    // }
    // 
    public function deleteDetailsOrders() {

    }

    public function viewOrders(Request $request, $id) {
        $ajaxviewOrders = $request->ajax();
        if($ajaxviewOrders) {
            $orders = Orders::with('products')->where('orders_transactions_id', $id)->get();
            //dd($orders);
           //  $orders = DB::table('products')
           //  ->leftJoin('orders', 'products.id', '=', 'orders.orders_product_id')
           //  ->get();
           // dd($orders);
            $renderHtml = view('admin::components.orders', compact('orders'))->render();
            return response()->json($renderHtml);
        }
    }
}
