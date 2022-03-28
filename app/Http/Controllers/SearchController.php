<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dossier;

class SearchController extends Controller
{
    public function search(Request $request){
        if (request()->query('search')){
            $search = $request->input('search');
             $dossier = Dossier::query()
            ->where('file', 'LIKE', "%{$search}%")
            ->orWhere('date', 'LIKE', "%{$search}%")
            ->orWhere('destination','LIKE',"%{$search}%")
            ->get();
            }
            return view('dossier.search',compact('dossier'));
    }
}
