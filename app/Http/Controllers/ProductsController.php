<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()     {         return Products::all();     }

    public function show(Products $article)     {         return $article;     }

    public function store(Request $request)     {         $article = Products::create($request->all());

        return response()->json($article, 201);     }

    public function update(Request $request, Products $article)     {         $article->update($request->all());

        return response()->json($article, 200);     }

    public function delete(Products $article)     {         $article->delete();

        return response()->json(null, 204);     }
}
