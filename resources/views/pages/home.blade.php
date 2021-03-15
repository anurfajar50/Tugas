@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')

    Ini adalah halaman home <br>
    Hello, {!! $name[0]  !!} <br>

    <x-alert theme="success" closeable="true">
        Ini adalah alert!
    </x-alert>

    <br/>
    <br/>
    <br/>

    @foreach($fruits as $fruits)
        @if($loop->first)
            Ini adalah pengulangan pertama <br/>
        @endif
        {{ $fruits }} <br/>
        @if($loop->last)
            Ini adalah pengulangan terakhir <br/>
        @endif
    @endforeach

    @php
        $no = 1;
    @endphp

    {{ $no }}
   
@stop

@section('js')

    <script>
        console.log('Hello');
    </script>

@stop