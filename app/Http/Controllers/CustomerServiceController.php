<?php
//customer services
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    public function index()
    {
        // Logic to fetch data or perform actions related to customer service

        // Return view with data if needed
        $faq = [
            'How to reset password?' => 'Go to Profile and fill the Update Password form with your old password and new password.',
            'How to transfer money?' => 'Go to Transfer page.',
            // Add more FAQs here
        ];

        return view('customer-service.index', compact('faq'));
    }
}
