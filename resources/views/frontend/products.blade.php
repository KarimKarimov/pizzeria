@extends('layouts.app')

@section('title','Продукты')

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
                        <h4 class="card-title">Панель для добавление продуктов</h4>
                        @include('inc.alerts')
                        <form class="needs-validation" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="validationCustom01">Название продукт</label>
                                        <input type="text" name="title" class="form-control" id="validationCustom01" placeholder="Название продукт" value="" required="">
                                        <div class="valid-feedback">
                                            Выглядит неплохо!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="validationCustom02">Топпинг</label>
                                        <select name="topping_id" class="form-control">
                                            @if(isset($toppings))
                                            @foreach($toppings as $topping)
                                            <option value="{{$topping->id}}">{{$topping->title}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="valid-feedback">
                                            Выглядит неплохо!
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="validationCustom03">Цена</label>
                                        <input class="form-control" name="price" type="number" id="validationCustom03" value="0" id="example-number-input">
                                        <div class="invalid-feedback">
                                            Укажите действительное состояние.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="validationCustom04">Категория</label>
                                        <select name="category_id" class="form-control" id="validationCustom04">
                                            @if(isset($categories))
                                            @foreach($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->title}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-feedback">
                                            Укажите действительное состояние.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="validationCustom05">Фото</label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="customFile validationCustom05" required="">
                                            <label class="custom-file-label"  for="customFile"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Добавить</button>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 20px;">Таблица 10 последних чеков (пиццы и роллов) </h4>
                        <table id="" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($pd_tops))
                                @foreach($pd_tops as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->created_at}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title" style="margin-bottom: 20px;">Таблица продуктов</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Topping</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($products))
                                @foreach($products as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{isset($product->topping) ? $product->topping->title : '--'}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{isset($product->category) ? $product->category->title : '--'}}</td>
                                    <td>{{$product->created_at}}</td>
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

<script src="/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/libs/jszip/jszip.min.js"></script>
<script src="/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/libs/datatables.net-select/js/dataTables.select.min.js"></script>


<script src="/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/js/pages/form-element.init.js"></script>
<!-- Datatable init js -->
<script src="/js/pages/datatables.init.js"></script>
@endsection