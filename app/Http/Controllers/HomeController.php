<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $specialProducts = Product::special()->latest()->take(4)->get();
        $topProducts = Product::top()->latest()->take(4)->get();
        $allProducts = Product::latest()->take(8)->get();

        return view('home', compact('specialProducts', 'topProducts', 'allProducts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Log::info('Attempting to send contact email', $validated);

        try {
            // Send email to admin via Mailtrap
            Mail::to(config('mail.admin_email', 'info@dimilliy.uz'))->send(new ContactMessage($validated));
            Log::info('Contact email sent successfully');
        } catch (\Exception $e) {
            Log::error('Contact email failed: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
        }

        return redirect()->route('contact')
            ->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
