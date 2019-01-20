@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список Каталогов @endslot
    @slot('parent') Главная @endslot
    @slot('active') Каталог @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.catalog.create')}}" class="btn btn-primary pull-right mb-3"><i class="fa fa-plus-square-o"></i> Создать каталог</a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($catalogs as $catalog)
        <tr>
          <td>{{$catalog->title}}</td>
          <td>{{$catalog->published}}</td>
          <td>
          <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.catalog.destroy', $catalog)}}" method="post">
          <input type="hidden" name="_method" value="DELETE">
             {{ csrf_field()}}
             <a href="{{route('admin.catalog.edit', $catalog)}}"><i class="fa fa-edit"></i></a>
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
          {{$catalogs->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</div>

@endsection