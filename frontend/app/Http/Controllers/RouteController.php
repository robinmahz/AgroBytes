<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Order;
use App\Models\Product;
use App\Traits\ImageStorageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class RouteController extends Controller
{
    use ImageStorageTrait;
    public function landing()
    {
        $products = Product::latest()->withCount('orders')->paginate(3);
        return view('pages.landing', compact('products'));
    }

    public function shop()
    {
        $products = Product::latest()->withCount('orders')->paginate(10);
        return view('pages.shop', compact('products'));
    }

    public function shopDetail($slug)
    {
        $product = Product::where('slug', $slug)->withCount('orders')->first();
        return view('pages.shop-detail', compact('product'));
    }

    public function order(Request $request)
    {
        try {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required', 'string', 'max:20'],
                'address' => ['required', 'string', 'max:255'],
                'product_id' => ['required', 'exists:products,id'],
                'quantity' => ['required', 'numeric'],
            ]);
            $order = Order::create($request->except('name') + ['name' => $request->first_name . ' ' . $request->last_name]);
            return redirect()->back()->with('success', 'Order placed successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to place order. Please try again later.');
        }
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function careersCreate(Request $request)
    {
        try {
            $request->validate(
                [
                    'name' => 'required|string',
                    'email' => 'required|string',
                    'phone' => 'required|string',
                    'cv' => 'required|file',
                ]
            );
            $cv  = $this->set('/media/careers/cv/', $request->cv, Str::slug($request->name));
            $career = Career::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'cv' => $cv,
                ]
            );
            return redirect()->back()->with('success');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create');
        }
    }

    public function plantRecommend(Request $request)
    {
        try {
            $response = Http::post(config('app.url') . '/' . 'plantrec', $request->all());

            // Extracting the JSON body from the response object
            $data = $response->json();

            return response()->json($data);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function fertilizerRecommend(Request $request)
    {
        try {
            $response = Http::post(config('app.url') . '/' . 'fertrec', $request->all());
            return response()->json($response->json());
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
