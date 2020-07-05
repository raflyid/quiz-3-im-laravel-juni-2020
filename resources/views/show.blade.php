@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <p>Judul: {{$item->judul}}</p>
        <p>Slug: {{$item->slug}}</p>
        <p>{{$item->isi}}</p>
        <br>


        <?php 
    $tags = explode(", ", $item->tag);
    foreach ($tags as $t){
        echo '<button class="btn btn-success">' . $t . '</button>' . ' ';
}
?>
    </div>
</div>

@endsection