@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление категории</h1>
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
                        <form action="{{route('admin.category.store')}}" method="POST" class="w-25" enctype="multipart/form-data">
                            @csrf
                            <h6>Добавить название</h6>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название категории">
                                 @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <h6>Добавить превью текст</h6>
                            <div class="form-group">
                                <input type="text" class="form-control" name="preview_text" placeholder="Текст превью">
                                @error('preview_text')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <h6>Добавить описание</h6>
                            <div class="form-group">
                                <input type="text" class="form-control" name="description" placeholder="Описание">
                                @error('description')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group w-20">
                                <h6>Добавить превью изображение</h6>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image" >
                                        <label class="custom-file-label">Изображение</label>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
