@extends('layout.app')

@section('title', 'List')

@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-primary m-3">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>
                No
            </th>
            <th>
                Name
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach ($datas as $index => $data)
        <tr>
            <td>{{ $datas->firstItem() + $index }}</td>
            <td>{{ $data->name }}</td>
            <td>
                <a href="{{ route('users.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('users.delete', ['id' => $data->id]) }}" onclick="return confirm('Delete?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        {{ $datas->links() }}
    </div>
@endsection