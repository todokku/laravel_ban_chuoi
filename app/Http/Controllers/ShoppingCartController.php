<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transactions;
use App\Models\Orders;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCartController extends FrontendController
{
    public function addProduct(Request $request, $id) {
        $product = Product::select('id', 'product_name', 'product_price', 'product_sale', 'product_avatar')->find($id);
        if (!$product) return redirect()->to('/');

        $price = $product->product_price;
        $priceSale = $product->product_sale;
        if($priceSale) {
            $price = $price * (100 - $priceSale) / 100;
        }


        $cartInfo = [
            'id' => $id, 
            'name' => $product->product_name,
            'qty' => 1, 
            'weight' => 1,
            'price' => $price, 
            'options' => [
                'avatar' => $product->product_avatar,
                'sale' => $priceSale,
                'price_old' => $price,
            ]
        ];
        Cart::add($cartInfo);
        return redirect()->back();
    }

    public function deleteProduct($rowid)
    {
        Cart::remove($rowid);
        return redirect()->back();
    }

    public function getListProductShopping() {
        $products = Cart::content();
        return view('shopping.index', compact('products'));
    }

    public function getCheckout() {
        $products = Cart::content();
        return view('shopping.checkout', compact('products'));
    }


    /* LƯU THÔNG TIN ĐƠN HÀNG */
    public function saveInfoShoppingCart(Request $request) {
        $payTotal = str_replace(',','', Cart::subtotal(0,3));
        $saveInfoTransactions = array(
            'transactions_user_id' => get_data_user('web'),
            'transactions_total' => (int)$payTotal,
            'transactions_note' => $request->note,
            'transactions_address' => $request->address,
            'transactions_phone' => $request->phone,
        );
        $transactionID = Transactions::insertGetId(
            $saveInfoTransactions
        );
        if($transactionID) {
            $products = Cart::content();
            foreach ($products as $product) {
                Orders::insert([
                    'orders_transactions_id' => $transactionID,
                    'orders_product_id' => $product->id,
                    'order_qty' => $product->qty,
                    'orders_price' => $product->options->price_old,
                    'order_sale' => $product->options->sale,
                ]);
            }
        }

        Cart::destroy();
        return view('thank-you.thanks-you');
    }

    /* Xem chi tiết đơn hàng */
    // public function viewOrders() {
        
    // }
}
