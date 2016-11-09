@extends('layouts.app')

@section('content')
    <h1>Node Information</h1>
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Node List</button>

            <ul class="dropdown-menu">
                <li v-for="node in nodeList">
                    @{{ node }}
                </li>

            </ul>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        var app = new Vue({
            el: '#app',

            updated: function () {
                app.refresh
            },

            methods: {
                refresh: function () {
                    $.get('#', function (data, status) {
                        app.nodeList = JSON.parse(data)
                    })
                }
            },

            data: {
                nodeList: [],
            }
        })


    </script>
@endsection
