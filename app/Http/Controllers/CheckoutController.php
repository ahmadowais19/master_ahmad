<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;




class CheckoutController extends Controller
{
    public function show(Course $course)
    {
        $subtotal    = $course->price;
        $shipping    = 0;
        $couponValue = intval($subtotal * 0.1); // خصم 10%
        $couponCode  = 'NEWYEAR';
    
        return view('layouts.stripe', [
            'course'      => $course,
            'subtotal'    => $subtotal,
            'shipping'    => $shipping,
            'couponValue' => $couponValue,
            'couponCode'  => $couponCode,
        ]);
    }
}

