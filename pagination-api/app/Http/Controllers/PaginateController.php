<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PaginateController extends Controller
{
    
    public function showAllBooks(Request $request)
    {

        if($request['term']) {
            $books =DB::table('lists')->
            where('bookname','LIKE','%'.$request['term'].'%')->
            orWhere('user','LIKE','%'.$request['term'].'%')->
            simplePaginate(2);
            return response($books);
        } else {
            $books =DB::table('lists')->simplePaginate(2);
            return response($books);
        }


    }

   
}