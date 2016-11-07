@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#realtime-log">RealTime Log</a></li>
            <li><a data-toggle="pill" href="#actuators">Actuators</a></li>
            <li><a data-toggle="pill" href="#node-list">Node List</a></li>
        </ul>

        <div class="tab-content">
            <div id="realtime-log" class="tab-pane fade in active">
                <p>Some content.</p>
            </div>
            <div id="actuators" class="tab-pane fade">
                <p>Some content in menu 1.</p>
            </div>
            <div id="node-list" class="tab-pane fade">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Node ID</th>
                        <th>Last available</th>
                        <th>Actuators and sensors</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($devices as $key => $device)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$device->time}}</td>
                            <td>
                                <ul>
                                    @foreach($device->things as $thing)
                                        <li>{{$thing->type}}</li>
                                    @endforeach
                                    <ul>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        var app = new Vue({
            el: '#app',

            methods: {
                refresh: function () {
                    $.get('http://iot.ceit.aut.ac.ir:58902/discovery', function (data, status) {
                        app.devices = JSON.parse(data)
                    })
                }
            },

            mounted: function () {
                this.refresh()
            },


            data: {
                devices: [],
            }
        })


    </script>
@endsection
