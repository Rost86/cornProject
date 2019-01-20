@foreach ($catalogs as $catalog)

  <option value="{{$catalog->id ?? ""}}"

    @isset($product->id)
      @foreach ($product->catalogs as $catalog_product)
        @if ($catalog->id == $catalog_product->id)
          selected="selected"
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter ?? "" !!}{{$catalog->title ?? ""}}
  </option>

  @if (count($catalog->children) > 0)

    @include('admin.products.partials.catalogs', [
      'catalogs' => $catalog->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach