<?php

namespace App\Http\Controllers\Dossier;
use App\Genre;
use App\Type;
use App\Dossier;
use App\DossierS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use function PHPSTORM_META\type;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dossier_sorti= DossierS::orderBy('id', 'desc')->paginate(10);
        $dossier=Dossier::orderBy('id', 'desc')->paginate(10);
        $genre=Genre::all();
        $type=Type::all();
        return view('dossier.index', [
            'dossier'=>$dossier,
            'genres'=>$genre,
            'type'=>$type,
            'dossier_sorti'=>$dossier_sorti
        ]);
    }


   public function download(Request $request, $file)
   {
        return response()->download(public_path('files/' .$file));
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
    public function storesorti(Request $request)
    {
        $dossier= new DossierS();

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
    public function sorti($id)
    {
        $genre=Genre::all();
        $dossier= Dossier::find($id);
        return view('dossier.sorti',[
            'dossier'=>$dossier,
            'genre'=>$genre
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
    public function update(Request $request, Dossier $dossier)
    {
        $request->validate([
            'ref'=>'required',
            'destination'=>'required',
            'intitule'=>'required',
            'type'=>'required',
            'genre'=>'required',
            'observation'=>'required',
        ]);
            $dossier->update($request->all());
            return redirect()->route('genre.index');
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
