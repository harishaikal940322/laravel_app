@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('client.create') }}" class="btn btn-success">ADD</a>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Active</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($q as $x => $row)
                                    <tr>
                                        <td>{{ ++$x }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->active }}</td>
                                        <td><a href="{{ route('client.edit', $row->id) }}"
                                                class="btn btn-primary">UPDATE</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
