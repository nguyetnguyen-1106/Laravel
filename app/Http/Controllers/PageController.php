<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Type_Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(4);
        $sale_product = Product::where('promotion_price','<>',0)->paginate(4);							
        $all_product = Product::paginate(4);

        return view('page.trangchu', compact('slide','new_product','sale_product','all_product'));
    }
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->limit(3)->get();
        $sp_khac= Product::where('id_type','<>',$type)->limit(3)->get();					
        $loai = Type_Product::all();
        $loai_sp = Type_Product::where('id', $type)->first();
        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    public function getChitiet(Request $request){
        $sanpham = Product::where('id', $request->id)->first();
        return view('page.chitiet_sanpham', compact('sanpham'));
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getAbout(){
        return view('page.about');
    }
}
