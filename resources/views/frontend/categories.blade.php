@extends('layouts.app')

@section('title','Категории')

@section('style')

<link href="/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Панель для добавление категории</h4>
                        @include('inc.alerts')
                        <form class="needs-validation" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="validationCustom01">Название категории</label>
                                        <input type="text" name="title" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="">
                                        <div class="valid-feedback">
                                            Выглядит неплохо!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 20px;">Таблица категории </h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($categories))
                                @foreach($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->id}}</td>
                                    <td>{{$categorie->title}}</td>
                                    <td>{{$categorie->created_at}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>


    </div>
</div>
@endsection


@section('script')

<script src="/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>


<script src="/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="/js/pages/datatables.init.js"></script>
@endsection