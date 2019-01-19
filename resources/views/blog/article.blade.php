@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
<div class="container">
        <div class="blog mt-5">
           <img src="img/2.png" class="img-fluid w-100 mb-4" alt="">
            <h1>{{$article->title}}</h1> 
            {!!$article->description!!}
            
        </div>
</div>   
	
@endsection