<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($product->id))
    <option value="0" @if ($product->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($product->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Название товара" value="{{$product->title ?? ""}}" required>

<label for="">Псевдоним (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$product->slug ?? ""}}" required>

<label for="">Родительская категория</label>
<select class="form-control" name="catalogs[]" multiple="">
  @include('admin.products.partials.catalogs', ['catalogs' => $catalogs])
</select>


<hr />



<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$product->description ?? ""}}</textarea>

<hr />
<label for="">Характеристики продукции</label>
<div class="form-group mb-2">
<input type="text" class="form-control" name="deal" placeholder="Тип сделки" value="{{$product->deal ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="volume" placeholder="Объем в т" value="{{$product->volume ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="price" placeholder="Цена за тонну" value="{{$product->price ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="delivery" placeholder="Условия доставки" value="{{$product->delivery ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="region" placeholder="Область" value="{{$product->region ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="soil" placeholder="Сор " value="{{$product->soil ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="humidity" placeholder="Влажность" value="{{$product->humidity ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="protein" placeholder="Белок" value="{{$product->protein ?? ""}}">
</div>
<div class="form-group mb-2">
<input type="text" class="form-control" name="jack" placeholder="Клоп" value="{{$product->jack ?? ""}}">
</div>


<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$product->meta_title ?? ""}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$product->meta_description ?? ""}}">


<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">