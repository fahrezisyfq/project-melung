@extends('layouts.main')

@section('container')
    <section>
        <div class="wisata">
            <h1>Pilihan Wisata</h1>
        </div>
        @foreach ($wisatas as $wisata)
        <div class="conntainer">
            <div class="card">
                <img src="Image/{{ $wisata["image"] }}.jpg" class="card-img">
                <div class="card-body">
                    <h1 class="card-title">{{ $wisata["title"] }}</h1>
                    <p class="card-info">{{ $wisata["excerpt"] }}</p>
                    <a href="/wisatas"><button  class="card-btn">Explorer</button></a>
                    
                </div>
            </div>
        </div>
        @endforeach
        
    </section>
@endsection