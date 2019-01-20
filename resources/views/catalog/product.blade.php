@extends('layouts.app')

@section('title', $product->meta_title)
@section('meta_keyword', $product->meta_keyword)
@section('meta_description', $product->meta_description)

@section('content')
<div class="container">
        <div class="user-block mt-5 p-5 bg-light">
            <h1 class="h3">Овес</h1>
            <a href="#" class="mr-4 h4">Иванов Иван Иванович</a>
            <div class="row">
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table mt-4">
                            <tbody>
                                <tr>
                                    <th>Тип сделки </th>
                                    <td>{{$product->deal}}</td>
                                </tr>
                                <tr>
                                    <th>Название товара</th>
                                    <td>{{$product->title}}</td>
                                </tr>
                                <tr>
                                    <th>Объем</th>
                                    <td>{{$product->volume}}т</td>
                                </tr>
                                <tr>
                                    <th>Цена за тонну</th>
                                    <td>{{$product->price}} UAH</td>
                                </tr>
                                <tr>
                                    <th>Условия доставки</th>
                                    <td>{{$product->delivery}} </td>
                                </tr>
                                <tr>
                                    <th>Область</th>
                                    <td>{{$product->region}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table mt-4">
                            <tbody>
                                <tr>
                                    <th>Сор </th>
                                    <td>{{$product->soil}}</td>
                                </tr>
                                <tr>
                                    <th>Влажность</th>
                                    <td>{{$product->humidity}}</td>
                                </tr>
                                <tr>
                                    <th>Белок</th>
                                    <td>{{$product->protein}}</td>
                                </tr>
                                <tr>
                                    <th>Клоп</th>
                                    <td>{{$product->jack}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-primary p-3">
                        <p class="text-white">Контакты менеджера</p>
                        <p>
                            <a class="text-white h5" href="#">097 666 55 44</a>
                        </p>
                        <p>
                            <a class="text-white h5" href="mailto:info@zerno.com">info@zerno.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
@endsection