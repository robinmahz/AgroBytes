<?php

namespace App\Http\Controllers;

use App\Models\Pump;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PumpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function log(Request $request)
    {
        try {
            // Get the moisture value from the request
            $moisture = $request->moisture;

            // Get the current moisture logs from the cache
            $moistures = Cache::get('moisture', []);

            // Add the new moisture log at the beginning of the array
            array_unshift($moistures, $moisture);

            // Keep only the last 50 logs
            $moistures = array_slice($moistures, 0, 50);

            // Store the updated logs back in the cache
            Cache::put('moisture', $moistures);

            // Log pump status if provided in the request
            if ($request->has('pump')) {
                $pump = $request->pump;
                Pump::create([
                    'status' => $pump
                ]);
            }

            if ($moisture < 500) {
                $pump = 1;
            } else {
                $pump = 0;
            }

            return response()->json([
                'status' => 'Log received',
                'pump' => $pump,
            ]);
        } catch (Exception $e) {
            // Return an error message if something goes wrong
            return response()->json(['status' => 'Error']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pump $pump)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pump $pump)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pump $pump)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pump $pump)
    {
        //
    }

    public function status()
    {
        $pump = Pump::latest()->first();
        return response()->json([
            'status' => 'Pump status',
            'pump' => $pump->status,
        ]);
    }
}
