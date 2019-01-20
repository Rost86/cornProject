@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Создание каталога @endslot
    @slot('parent') Главная @endslot
    @slot('active') Каталог @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.catalog.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.catalog.partials.form')
    
  </form>
</div>

@endsection