<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return view('admin.booking', ['booking' => $booking, 'titlePage' => "Đơn hàng"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $rules = [
            "name" => "required",
            'tel' => 'required|regex:/(0)[0-9]{9}/',
            'pickupaddress' => 'required',
            'email' => 'required|email',
            'addpresstra' => 'required',
            'pickupdate' => 'required',

        ];

        $customMessages = [
            'name.required' => 'Bạn chưa nhập tên',
            "tel.regex" => 'Số điện thoại sai định dạng',
            "tel.required" => "Mời nhập số điện thoại",
            'email.required' => "Mời nhập địa chỉ mail",
            'email.email' => "Địa chỉ mail sai định dạng",
            'addpresstra.required' => "Mời nhập địa chỉ trả xe",
            'pickupdate.required' => "Mời nhập ngày nhận xe",
            "pickupaddress.required" => "Mời nhập địa chỉ nhận xe"
        ];

        $this->validate($request, $rules, $customMessages);
        $request->session()->flash('mess', 'Đã lưu');

        // return redirect('/');

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->address_nhan = $request->pickupaddress;
        $booking->email = $request->email;
        $booking->phone_number = $request->tel;
        $booking->address_tra = $request->addpresstra;
        $booking->VIN = $request->biensoxe;
        $booking->ngaylayxe = $request->pickupdate;
        $booking->save();
        echo "Đã đặt";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('admin.detailBooking', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public static function getNameCar($id)
    {
        $namecar = Car::where('VIN', $id)->first()->Model;
        return $namecar;
    }

    public static function getImg($id)
    {
        $img = Car::where('VIN', $id)->first()->img;
        return $img;
    }
    public function chotdon($id)
    {
        $booking = Booking::find($id);
        $booking->isAccept = 1;
        $booking->save();
        return \redirect('/booking');
    }
    public function huydon($id)
    {
        $booking = Booking::find($id);
        $booking->isAccept = 0;
        $booking->save();
        return \redirect('/booking');
    }
}