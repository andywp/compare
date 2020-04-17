@section('title', 'Edit Kategori Hosting')
@extends('admin/theme')

@section('content')



<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Edit Kategori Hosting</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('hosting.kategori.update') }}">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $data->kategori }}" placeholder="Kategori Name">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="hidden" name="id" value="{{ $data->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection