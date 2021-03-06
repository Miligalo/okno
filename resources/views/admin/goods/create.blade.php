@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить товар</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-12">
            <form action="{{route('admin.good.store')}}" method="POST" class="w-25" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for>Название</label>
                <input type="text" class="form-control" name="title" placeholder="Название товара">
                 @error('title')
                    <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
              </div>
              <div class="form-group">
                <label for class="w-25">Описание товара</label>
                  <textarea id="summernote" name="description">
                   {{old('description')}}
                  </textarea>
                  @error('description')
                  <div class="text-damger">Описание товара нужно заполнить</div>
              @enderror
              </div>
              <div class="form-group">
                <label for>Цена</label>
                <input type="number" min="1" class="form-control" name="price" placeholder="Название товара">
                 @error('price')
                    <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
              </div>
              <div class="form-group">
                <label for>Скидочная цена</label>
                <input type="number" min="1" class="form-control" name="offer_price" placeholder="Название товара">
              </div>
            </div>
          </div>
              <div class="form-group w-50">
                <label for="exampleInputFile">Добавить изображение</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="main_image">
                    <label class="custom-file-label">выберите изображение</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Загрузить</span>
                  </div>
                  
            </div>
              <div class="form-group">
                <label>Выберите категорию</label>
                <select name="category_id" class="form-control">
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}"
                    {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                  @endforeach
                </select>
              </div>
          </div>
              <input type="submit" class="btn btn-primary" value="Добавить">   
            </form>
          </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection