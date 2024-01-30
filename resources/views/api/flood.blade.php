@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" >
                            <table id="tbl" class="table">
                                <thead>
                                    <tr>
                                        <th>Station Name</th>
                                        <th>District</th>
                                        <th>State</th>
                                        <th>Sub Basin</th>
                                        <th>Main Basin</th>
                                        <th>Water Level Indicator</th>
                                        <th>Water Level Trend</th>
                                        <th>Rainfall Indicator</th>
                                        <th>Rainfall Update Datetime</th>
                                        <th>Rainfall Update Date</th>
                                        <th>Raw Water Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($flood as $stationData)
                                        <tr>
                                            <td>{{ $stationData['station_name'] }}</td>
                                            <td>{{ $stationData['district'] }}</td>
                                            <td>{{ $stationData['state'] }}</td>
                                            <td>{{ $stationData['sub_basin'] }}</td>
                                            <td>{{ $stationData['main_basin'] }}</td>
                                            <td>{{ $stationData['water_level_indicator'] }}</td>
                                            <td>{{ $stationData['water_level_trend'] }}</td>
                                            <td>{{ $stationData['rainfall_indicator'] }}</td>
                                            <td>{{ $stationData['rainfall_update_datetime'] }}</td>
                                            <td>{{ $stationData['rainfall_update_date'] }}</td>
                                            <td>{{ $stationData['raw_water_level'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var table = new DataTable("#tbl");
        });
    </script>
@endsection
