@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
   

    <div class="row">
      <div class="col-sm-6 text-center">
        <a class="h4" href="{{route('admin.product.create')}}">Создать заявку </a>
        <div class="mt-3 text-left">
        @foreach ($products as $product)
        
        <a class="list-group-item " href="{{route('admin.product.edit', $product)}}">
          <h5 class="list-group-item-heading mb-0">{{$product->title}} {{$product->price}} {{$product->region}}</h5>
      
        </a>
        @endforeach
        </div>
      </div>
      <div class="col-sm-6 text-center">
     
        <a class="  h4" href="{{route('admin.article.create')}}">Создать материал<!-- ({{$count_articles}})--></a>
        <div class="mt-3 text-left">
        @foreach ($articles as $article)
        <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
          <h5 class="list-group-item-heading mb-0">{{$article->title}}</h5>
       
        </a>
        @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection