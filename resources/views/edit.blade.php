@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <div class="card-title text-white">
            Edit Article
        </div>
    </div>
    <div class="card-body">
        <form action="/artikel/{{$edited->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="" class="control-label">Title</label>
                <input type="text" name="judul" id="" class="form-control" value="{{$edited->judul}}">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Tags (*Separate with comma, example: Tag1, Tag2)</label>
                <input type="text" name="tag" id="" class="form-control" value="{{$edited->tag}}">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Content</label>
                <textarea name="isi" id="" cols="30" rows="10" class="form-control">{{$edited->isi}}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right">Update</i></button>
            </div>
        </form>
    </div>
</div>
@endsection