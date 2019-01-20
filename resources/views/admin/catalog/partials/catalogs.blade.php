@foreach ($catalogs as $catalog_list)

  <option value="{{$catalog_list->id ?? ""}}"

    @isset($catalog->id)

      @if ($catalog->parent_id == $catalog_list->id)
        selected=""
      @endif

      @if ($catalog->id == $catalog_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter ?? "" !!}{{$catalog_list->title ?? ""}}
  </option>

  @if (count($catalog_list->children) > 0)

    @include('admin.catalog.partials.catalogs', [
      'catalogs' => $catalog_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach