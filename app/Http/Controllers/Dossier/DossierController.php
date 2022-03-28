<?php

namespace App\Http\Controllers\Dossier;
use App\Genre;
use App\Type;
use App\Dossier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stoarge;

use function PHPSTORM_META\type;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request){
        $file=Dossier::where('file');

        return response()->download($file);

    }


    public function index()
    {
        $dossier=Dossier::all();
        $genre=Genre::all();
        $type=Type::all();
        return view('dossier.index', [
            'dossier'=>$dossier,
            'genres'=>$genre,
            'type'=>$type
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=Type::all();
        $genre=Genre::all();
        return view('dossier.add',[
            'type'=>$type,
            'genre'=>$genre
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dossier= new Dossier();

        $file=$request->file;
        $filename=$file->getClientOriginalName();
        $request->file->move('files',$filename);
        $dossier->file=$filename;
        $dossier->ref=$request->ref;
        $dossier->destination=$request->destination;
        $dossier->intitule=$request->intitule;
        $dossier->type=$request->type;
        $dossier->genre=$request->genre;
        $dossier->date=$request->date;
        $dossier->observation=$request->observation;
        $dossier->save();
        return redirect()->route('dossiers.index');
    }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dossier= Dossier::find($id);
        return view('dossier.view',[
            'dossier'=>$dossier
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
