@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @php
                    $id = $q->id ?? null;
                @endphp
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-danger" href="{{ route('client.index') }}">Back</a>
                    </div>
                    <div class="card-header">
                        <h3>{{ $id ? 'UPDATE FORM' : 'CREATE FORM' }}</h3>
                    </div>

                    <form action="{{ $id ? route('client.update', $id) : route('client.store') }}">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="label col-lg-2 col-md-12 col-sm-12">NAME</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $q->name ?? '') }}">
                                </div>
                            </div>

                            <div class="row">
                                <label for="active" class="label col-lg-2 col-md-12 col-sm-12">IS ACTIVE?</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select class="select form-control" name="active" id="select">
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="text-align: center">
                            <input type="submit" value="SUBMIT" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectElement = document.getElementById("select");
            selectElement.value = "{{ old('active', $q->active ?? '') }}";
        });
    </script>
@endsection
