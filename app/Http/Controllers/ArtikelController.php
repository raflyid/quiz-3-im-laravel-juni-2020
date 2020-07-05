<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $item = ArtikelModel::get_all();
        return view('index', compact('item'));
    }

    public function create(){
        return view('create');
    }
    
    public static function get_slug($data){
        return preg_replace("/[^A-Za-z0-9]/", '-', strtolower($data));
    }

    public function store(Request $request){
        $data = $request->all();
        $data['slug'] = $this->get_slug($data['judul']);
        unset($data["_token"]);
        $berhasilsave = ArtikelModel::save($data);
        if($berhasilsave){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $item = ArtikelModel::find($id);
        return view('show', compact('item'));
    }

    public function edit($id){
        $edited = ArtikelModel::find($id);
        return view('edit', compact('edited'));
    }

    public function update($id, Request $request){
        $updated = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $hapus = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}