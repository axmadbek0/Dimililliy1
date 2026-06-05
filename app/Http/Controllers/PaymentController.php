<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\PaymentNotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    private function checkOwnership(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access to this order.');
        }
    }

    public function process(Order $order)
    {
        $this->checkOwnership($order);

        return view('payment.process', compact('order'));
    }

    public function pay(Request $request, Order $order)
    {
        $this->checkOwnership($order);

        $request->validate([
            'card_number' => ['required', 'string', 'size:16'],
            'card_holder' => ['required', 'string', 'max:255'],
            'expiry_date' => ['required', 'string', 'size:5'],
            'cvv' => ['required', 'string', 'size:3'],
        ]);

        // Simulate payment processing
        sleep(1);

        // Sandbox payment - always succeed for testing
        $order->update([
            'payment_status' => 'completed',
            'status' => 'processing',
        ]);

        // Load order items for email
        $order->load('orderItems.product', 'user');

        // Send payment notification email
        Mail::to($order->user->email)->send(new PaymentNotificationMail($order));

        return redirect()->route('orders.show', $order)
            ->with('success', 'Payment successful! Your order is being processed.');
    }

    public function success(Order $order)
    {
        $this->checkOwnership($order);

        return view('payment.success', compact('order'));
    }

    public function cancel(Order $order)
    {
        $this->checkOwnership($order);

        $order->update([
            'payment_status' => 'failed',
            'status' => 'cancelled',
        ]);

        return redirect()->route('orders.index')
            ->with('error', 'Payment was cancelled.');
    }
}
