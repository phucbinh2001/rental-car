<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Car;
use App\Models\CarCategories;
use Illuminate\Http\Request;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carlist = Car::all();
        return view('admin.car', ['carList' => $carlist, 'titlePage' => "Danh sách xe"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $cate = CarCategories::all();
        return \view('admin.carCreate', ['brand' => $brand, 'cate' => $cate, 'titlePage' => "Thêm xe"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $isHot = ($request->hot === 'on') ? 1 : 0;
        $car->Model = $request->tendt;
        $car->BrandID = $request->thuonghieu;
        $car->Category_id = $request->category;
        $car->price = $request->gia;
        $car->hot = $isHot;
        $car->VIN = $request->bienso;
        $car->save();
        return \redirect('/carlist');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::where('VIN', $id)->first();
        $brand = Brand::all();
        $cate = CarCategories::all();
        return \view('admin.carEdit', ['car' => $car, 'brand' => $brand, 'cate' => $cate, 'titlePage' => "sửa thông tin xe"]);
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
        $car = Car::find($id);
        $isHot = ($request->hot === 'on') ? 1 : 0;
        $car->Model = $request->tenxe;
        $car->BrandID = $request->thuonghieu;
        $car->Category_id = $request->category;
        $car->price = $request->gia;
        $car->hot = $isHot;
        $car->save();
        return \redirect('/carlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return \redirect('/carlist');
    }

    public static function getBranName($id)
    {
        $brandName = Brand::where('id', $id)->first()->name;
        return $brandName;
    }
}