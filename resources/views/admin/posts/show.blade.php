
@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$post->title}} - korish
        </h6>
    </div>
    <div class="card-body">
        <h4>
            {{$post->title}}
        </h4>
        <b>Qisqacha:</b>
        <p>
            {{$post->short}}
        </p>
        <b>Batafsil:</b>
        <p>
            {{$post->content}}
        </p>
        {{$post->created_at->format('H:i d/m/Y')}}
        {{$post->updated_at->format('H:i d/m/Y')}}
    </div>
</div>

@endsection