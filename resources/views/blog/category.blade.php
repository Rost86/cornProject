@extends('layouts.app')


@section('title', $category->meta_title)
@section('meta_keyword', $category->meta_keyword)
@section('meta_description', $category->meta_description)


@section('content')
<div class="container">
        <div class="blog mt-5">  
            <h1>Наши новости</h1>
            @forelse ($articles as $article)
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Раздел</strong>
                    <h3 class="mb-0">
                        <a href="{{route('article', $article->slug)}}" class="text-dark">{{$article->title}}</a></h3>
                    <div class="mb-1 text-muted">21.12.2019</div>
                    <p class="card-text mb-auto">{!!$article->description_short!!}</p>
                    <a href="{{route('article', $article->slug)}}">Читать</a>
                </div>
                <img src="img/1.png" alt="">
            </div>
            @empty
            <h2 class="text-center">Пусто</h2>

            @endforelse

        {{$articles->links()}}
        </div>
</div>
@endsection
