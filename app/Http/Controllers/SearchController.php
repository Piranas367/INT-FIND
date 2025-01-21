<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $results = [];

        if ($query) {
            $results = Product::where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->get();
        }

        return view('search', compact('results', 'query'));
    }
}
























// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class SearchController extends Controller
// {
//     public function index(Request $request)
//     {
//         // Verbeterde dummy data
//         $dummyData = [
//             ['id' => 1, 'name' => 'Apple iPhone 14', 'description' => 'Latest Apple smartphone with A15 Bionic chip and improved camera'],
//             ['id' => 2, 'name' => 'Samsung Galaxy S23', 'description' => 'High-performance Android smartphone with powerful Snapdragon processor'],
//             ['id' => 3, 'name' => 'Sony WH-1000XM5', 'description' => 'Noise-cancelling over-ear headphones with superior sound quality'],
//             ['id' => 4, 'name' => 'Dell XPS 13', 'description' => 'Compact and powerful laptop with InfinityEdge display'],
//             ['id' => 5, 'name' => 'Bose SoundLink Revolve', 'description' => 'Portable Bluetooth speaker with deep and immersive sound'],
//             ['id' => 6, 'name' => 'Apple MacBook Pro', 'description' => 'Powerful laptop for professionals with M2 chip'],
//             ['id' => 7, 'name' => 'Fitbit Charge 5', 'description' => 'Advanced fitness tracker with built-in GPS and health tracking'],
//             ['id' => 8, 'name' => 'Canon EOS R5', 'description' => 'High-resolution mirrorless camera for professional photography'],
//             ['id' => 9, 'name' => 'Logitech MX Master 3', 'description' => 'Ergonomic wireless mouse with customizable buttons'],
//             ['id' => 10, 'name' => 'Amazon Echo Dot', 'description' => 'Smart speaker with Alexa voice assistant'],
//         ];

//         // Zoekterm ophalen
//         $query = $request->input('query');

//         // Filteren op zoekterm
//         $results = [];
//         if ($query) {
//             $results = array_filter($dummyData, function ($item) use ($query) {
//                 return stripos($item['name'], $query) !== false || stripos($item['description'], $query) !== false;
//             });
//         }

//         return view('search', compact('results', 'query'));
//     }
// }

