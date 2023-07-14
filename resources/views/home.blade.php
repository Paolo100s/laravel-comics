@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <h3 class="bg-secondary text-danger">{{ $fumetto ['title'] }}</h3>
                    <p>{{ $fumetto['description'] }}</p>
                    <ul>
                        <h4 class="bg-primary">INFO</h4>
                        <li>{{ $fumetto['sale_date'] }}</li>
                        <li>{{ $fumetto['series'] }}</li>
                        <li>{{ $fumetto['type'] }}</li>
                        <li>{{ $fumetto['price'] }}</li>
                    </ul>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <h4 class="bg-primary">ARTISTS</h4>
                            @foreach ($fumetto['artists'] as $artist)
                                <li>{{ $artist }}</li>
                            @endforeach
                        </ul>
                        <ul>
                            <h4 class="bg-primary">WRITERS</h4>
                            @foreach ($fumetto['writers'] as $writer)
                                <li>{{ $writer }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection