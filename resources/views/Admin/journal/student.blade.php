@extends('admin.layouts.main')
@section('content')
    <!--================CM scripts =================-->
    <script src="{{asset("codemirror/lib/codemirror.js")}}"></script>
    <script src="{{asset("codemirror/mode/clike/clike.js")}}"></script>
    <link rel="stylesheet" href="{{asset("codemirror/lib/codemirror.css")}}">
    <script src="{{asset("codemirror/mode/php/php.js")}}"></script>
    <link href="{{asset("codemirror/theme/dracula.css")}}" rel="stylesheet">
    <!--================CM scripts =================-->

    @foreach($selectionUserByID as $userInfo)
        @php($user = \App\Models\User::where('id', $userInfo->user_id)->first())
        {{$user->name}}
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Учащийся: {{$user->name}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">На главную</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
                <div class="col-sm-1">
                    <!-- select -->
                    <div class="form-group">
                        <label>Оценка</label>
                        <form action="{{route('admin.journal.grade', $userInfo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input name="userGrade" type="number" class="form-control" placeholder="0">
                            <input type="submit" class="btn btn-primary" value="Сохранить">
                        </form>
                    </div>
                </div>
            <!-- /.content-header -->
            <div class="card-body p-0">
                <textarea name="userCode" id="editor" class="p-3"
                          style="height: 142px;">{{$userInfo->userCode}}</textarea>
            </div>
        </div>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: {
                    name: 'php',
                    startOpen: true
                },
                matchBrackets: true,
                theme: "dracula",
                lineNumbers: true
            });
        </script>
        <!-- /.content -->
        <!-- /.content-wrapper -->
    @endforeach
@endsection
