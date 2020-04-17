@section('title', 'Kategori Hosting')
@extends('admin/theme')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Hosting</h3>
        <div class="card-tools">
            <a href="{{ url('admin/hosting_kategori/add') }}" class="btn btn-info ">Add Kategori Hosting</a>
            <!-- <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="40" >No</th>
                    <th>Kategori</th>
                    <th width="200" >Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($HostingKategori as $r)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $r->kategori }}</td>
                        <td>
                            <form action="{{ route('hosting.kategori.delete',$r->id) }}" method="POST" onsubmit="alert('Are you sure..!');return false">
                            <a class="btn btn-primary" href="{{ route('hosting.kategori.edit',$r->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix d-flex justify-content-center">
         {!! $HostingKategori->links() !!}
    </div>
</div>


@endsection