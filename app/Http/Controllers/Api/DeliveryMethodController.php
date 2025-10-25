<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;

class DeliveryMethodController extends Controller
{
    public function index()
    {
        $deliveryMethods = DeliveryMethod::where('is_active', true)->get();
        return response()->json([
            'status' => 'success',
            'data' => $deliveryMethods
        ]);
    }
}
