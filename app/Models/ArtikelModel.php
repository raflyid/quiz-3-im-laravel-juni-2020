<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {

    public static function get_all(){
        $item = DB::table('artikels')->get();
        return $item;
    }

    public static function save($data){
        $item = DB::table('artikels')->insert($data);
        return $item;
    }

    public static function find($id){
        $item = DB::table('artikels')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $request){
        $item = DB::table('artikels')
        ->where('id', $id)
        ->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return $item;
    }

    public static function destroy($id){
        $item = DB::table('artikels')
        ->where('id', $id)->delete();
    }

    public function tag()
    {
        return json_decode($this->tags);
    }

}
?>