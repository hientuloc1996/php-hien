<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Type_product;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\Bill_detail;
use App\User;
use Hash;
use Auth;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $type_product = Type_product::all();
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(8);
        $promotion_product = Product::where('unit','<>',0)->paginate(8);
        return view('page.trangchu',compact('type_product','slide','new_product','promotion_product'));
    }

    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = Type_product::all();
        $loai_sp = Type_product::where('id',$type)->first();
    	return view('page.sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    
    public function getChitiet($id)
    {
        $chitietsp = Product::where('id',$id)->first();
        $sanphamk = Product::where('id_type',$chitietsp->id_type)->paginate(3);
        return view('page.chitietsp',compact('chitietsp','sanphamk'));
    }

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
                //"biểu thức 3 ngôi"
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getGioithieu($id)
    {
        $gioithieu = Product::where('id',$id)->first();
        return view ('page.gioithieu');
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    
    public function getCheckout(){
        return view('page.dathang');
    }
    public function postCheckout(Request $req){
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        $bill->note = $req->ghi_chu;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new Bill_Detail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quanity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công 
                                vui lòng đợi vài giây sẽ có nhân viên gọi lại bạn');

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
    }
}
