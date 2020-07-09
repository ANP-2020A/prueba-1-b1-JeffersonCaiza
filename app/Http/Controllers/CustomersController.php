<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()     {         return Customers::all();     }

    public function show(Customers $article)     {         return $article;     }

    public function store(Request $request)     {         $article = Customers::create($request->all());

        return response()->json($article, 201);     }

    public function update(Request $request, Customers $article)     {         $article->update($request->all());

        return response()->json($article, 200);     }

    public function delete(Customers $article)     {         $article->delete();

        return response()->json(null, 204);     }





}
