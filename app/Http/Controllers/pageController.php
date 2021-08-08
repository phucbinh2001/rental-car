<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarCategories;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class pageController extends Controller
{
    //Trang chu
    public function index()
    {
        $brand = Brand::all();
        $cate = CarCategories::skip(0)->take(3)->get();
        return view('home', ['brand' => $brand, 'cate' => $cate]);
    }

    //brand
    public function brand($id)
    {
        $carOfBrand = Car::where('BrandID', $id)->get();
        return view('brandDetail', ['listCar' => $carOfBrand]);
    }

    //brand
    public function carDetail($idcar)
    {
        $car = Car::where('VIN', $idcar)->first();
        return view('carDetail', ['car' => $car]);
    }



    // //Chi tiet san pham
    // public function detail($id)
    // {
    //     $product = Product::where('id', $id)->first();
    //     return view('detail', ['product' => $product]);
    // }
}