@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редактирование каталога @endslot
    @slot('parent') Главная @endslot
    @slot('active') каталог @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.catalog.update', $catalog)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.catalog.partials.form')
    
  </form>
</div>

@endsection