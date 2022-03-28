<?php

namespace App\Http\Controllers;
use App\Dossier;
use Illuminate\Http\Request;

class DownController extends Controller
{
    public function download(Request $request, $dossier)
    {
         return response()->download(public_path('files/' .$dossier));
    }
}
