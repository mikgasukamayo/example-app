@extends('costumers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Costumer</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('costumers.create') }}">Tambah Costumer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Email</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($costumers as $costumer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $costumer->name }}</td>
            <td>{{ $costumer->phone_number }}</td>
            <td>{{ $costumer->email }}</td>
            <td>{{ $costumer->gender }}</td>
            <td>
                <form action="{{ route('costumers.destroy',$costumer->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('costumers.show',$costumer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('costumers.edit',$costumer->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $costumers->links() !!}
@endsection