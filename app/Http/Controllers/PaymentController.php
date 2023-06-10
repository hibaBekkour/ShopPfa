<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Handle the payment processing logic here
        // Access form data using $request object
        // Perform necessary actions like charging the user, updating the database, etc.
                // Example: Get the selected payment method
                $paymentMethod = $request->input('payment_method');

                // Example: Get the selected products
                $selectedProducts = $request->input('products');
        
                // Example: Calculate the total price
                $totalPrice = $this->calculateTotalPrice($selectedProducts);
        
        
        $paymentMethod = $request->input('payment_method');
        $selectedProducts = $request->input('products');
        $totalPrice = $this->calculateTotalPrice($selectedProducts);
        
        if ($paymentMethod === 'on_site') {
            // Perform on-site payment logic
        } elseif ($paymentMethod === 'paypal') {
            // Perform PayPal payment logic
        } elseif ($paymentMethod === 'card') {
            // Perform card payment logic
        }
        // Redirect the user to a confirmation page or display a success message
        return redirect()->route('payment.success')->with('message', 'Payment successful');
    }
    
    private function calculateTotalPrice($products)
    {       
        $total = 0;
        
        foreach ($products as $product) {
            // Perform necessary calculations to get the price of each product
            $price = $product->price;
            
            // Add the price to the total
            $total += $price;
        }
        
        return $total;
    }
}
