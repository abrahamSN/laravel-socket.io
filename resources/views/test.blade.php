@extends('layouts.master')

@section('content')
    <p id="power">0</p>
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
    <script>
        var socket = io(window.location.host + ':6001');
        socket.on()
    </script>
@endsection