<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    // Сохраняем бронь в базу
    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'guests' => 'required|integer|min:1|max:20',
            'comments' => 'nullable|string|max:500',
            'order_details' => 'nullable|string',
            'total_amount' => 'nullable|numeric',
        ]);

        // Сохраняем в базу
        DB::table('reservations')->insert([
            'customer_name' => $validated['customer_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'reservation_date' => $validated['reservation_date'],
            'reservation_time' => $validated['reservation_time'],
            'guests' => $validated['guests'],
            'comments' => $validated['comments'],
            'order_details' => $validated['order_details'] ?? null,
            'total_amount' => $validated['total_amount'] ?? 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Возвращаем успех
        return Redirect::to('/')->with('success', '✅ Стол успешно забронирован! Ждём вас!');
    }
}