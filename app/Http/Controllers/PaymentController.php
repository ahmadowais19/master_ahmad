<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;


    /**
     * Display a listing of the resource.
     */
    
class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $request->amount, // يجب أن يكون بالسنتات (مثلاً 1000 = 10.00)
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Course Payment',
            ]);

            // تخزين العملية في الداتا بيس
            Payment::create([
                'user_id' => auth()->id(), // إذا عندك تسجيل دخول
                'stripe_charge_id' => $charge->id,
                'amount' => $charge->amount,
                'currency' => $charge->currency,
                'status' => $charge->status,
            ]);

            return response()->json(['success' => true, 'message' => 'Payment successful']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
