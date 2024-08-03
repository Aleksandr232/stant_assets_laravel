<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function post_purchase(Request $request, $id)
    {
        // Проверяем, является ли пользователь авторизованным
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Вы должны быть авторизованы, чтобы совершать покупки.');
        }

        // Проверяем, является ли пользователь администратором
        if (Auth::user()->is_admin) {
            return redirect()->back()->with('error', 'Администраторы не могут совершать покупки.');
        }

        // Получаем продукт по переданному id
        $product = Product::findOrFail($id);

        // Проверяем, есть ли у пользователя достаточно средств для покупки
        if (Auth::user()->balance < $product->price) {
            return redirect()->route('account');
        }

        $transaction_number = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        // Создаем новую запись в таблице покупок
        $purchase = new Purchase();
        $purchase->user_id = Auth::user()->id;
        $purchase->product_id = $product->id;
        $product->count_buy++;
        $purchase->transaction_purchase = $transaction_number;
        $purchase->price_purchase = $product->price;
        $purchase->product_purchase = $product->product;
        $purchase->account_details_purchase = "Ждем оплату";
        $purchase->status_purchase = "Отправлен";
        $purchase->date_purchase = date('d.m.Y H:i');
        $purchase->save();
        $product->save();

        // Уменьшаем баланс пользователя на стоимость покупки
        Auth::user()->balance -= $product->price;
        Auth::user()->save();

        // Перенаправляем пользователя обратно
        return redirect()->back()->with('success', 'Покупка успешно совершена!');
    }
}
