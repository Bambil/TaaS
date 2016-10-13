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
            <p>Some content in menu 2.</p>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
            }
        })
    </script>
@endsection
