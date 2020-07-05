@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{url('artikel/create')}}" class="btn btn-dark"><i class="fa fa-plus"></i> Create
                        Article</a>
                </div>
                <div class="card-title">
                    <h4>
                        List of Article
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark">
                        <th class="text-white" width="50px">No</th>
                        <th class="text-white">Title</th>
                        <th class="text-white" width="150px">Tags</th>
                        <th class="text-white" width="250px">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($item as $it)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$it->judul}}</td>
                            <td>{{$it->tag}}</td>
                            <td>
                                <a href="/artikel/{{$it->id}}" class="btn btn-primary btn-sm">Detail</a>
                                <a href="/artikel/{{$it->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/artikel/{{$it->id}}" style="display: inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" role="button"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
Swal.fire({
    title: 'Berhasil!',
    text: 'Memasangkan script sweet alert',
    icon: 'success',
    confirmButtonText: 'Cool'
})
</script>
@endpush