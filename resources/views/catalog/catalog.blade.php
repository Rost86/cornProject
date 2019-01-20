@extends('layouts.app')


@section('title', $catalog->meta_title)
@section('meta_keyword', $catalog->meta_keyword)
@section('meta_description', $catalog->meta_description)


@section('content')


<div class="container">
<div class="filters my-5" style="margin:3rem !important 0;">
            <form class="d-flex flex-column flex-sm-row justify-content-center">

                <div class="form-group w-100 mr-4">

                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Покупка</option>
                        <option>Продажа</option>
                        <option>Обмен</option>
                    </select>
                </div>
                <div class="form-group w-100 mr-4">

                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Потавская обл</option>
                        <option>Черкасская обл</option>
                        <option>Киевская обл</option>
                    </select>
                </div>
                <div class="form-group w-100">

                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Овес</option>
                        <option>Пшеница</option>
                        <option>Гречка</option>
                        <option>Кукуруза</option>
                    </select>
                </div>

            </form>
        </div>
       
            <h1>Наши предложения <small class="text-muted">6 предложений</small></h1>
            <div class="table-responsive">
                <table class="table table-striped mt-4">
                <thead>
                <tr>
                 
                  <th scope="col">Код</th>
                  <th scope="col">Товар</th>
               
                  <th scope="col">Область</th>
                  <th scope="col">Условия поставки</th>
                  <th scope="col">Кол-во, т.	</th>
                  <th scope="col">Цена</th>
                  <th scope="col">Данные на</th>
                  <th scope="col">Подробнее</th>
                </tr>
              </thead>
              <tbody>
            @forelse ($products as $product)
          
            <tr>
                  <th>{{$product->id}}</th>
                  <td>{{$product->title}}</td>
                  
                  <td>{{$product->region}}</td>
                  <td>{{$product->delivery}}	</td>
                  <td>{{$product->volume}} т</td>
                  <td>{{$product->price}} UAH</td>
                  <td>{{$product->updated_at}}</td>
                  <td>  <a href="{{route('product', $product->slug)}}" {{$product->title}}" title="{{$product->title}} "><i class="far fa-edit"></i> </a></td>
                </tr>
           
           
            @empty
            <h2 class="text-center">Пусто</h2>

            @endforelse

        {{$products->links()}}
        </tbody>
            </table>
        </div>
</div>


@endsection