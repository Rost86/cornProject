@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Новостей категорий @endslot
    @slot('parent') Главная @endslot
    @slot('active') Новости @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right mb-3"><i class="fa fa-plus-square-o"></i> Создать заявку</a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{$product->title}}</td>
          <td>{{$product->published}}</td>
          <td>
          <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.product.destroy', $product)}}" method="post">
          <input type="hidden" name="_method" value="DELETE">
             {{ csrf_field()}}
             <a href="{{route('admin.product.edit', $product)}}"><i class="fa fa-edit"></i></a>
             <button type="sybmit" class="btn"><i class="fa fa-trash"></i></button>
             </form>
          
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
  <tfoot>
    <tr>
      <td colspan="3">
        <ul class="pagination pull-right">
          {{$products->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</div>

@endsection