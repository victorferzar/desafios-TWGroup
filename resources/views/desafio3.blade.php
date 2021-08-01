@extends('layout.master')
@section('title', 'Desafío 3')

@section('content')

<form action="{{route('insertar')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="exampleFormControlInput1">ID Producto</label>
        <input type="text" value="{{$id}}" name="id_product" readonly class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">ID de Factura</label>
        <select name="id_factura" class="form-control" id="exampleFormControlSelect1">
            @foreach ($invoice_id as $item)
            <option value="{{$item}}">{{ $item }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Nombre Del Producto</label>
        <input type="text" name="nombre_producto" class="form-control" id="exampleFormControlSelect2">
    </div>
    <div class="form-group">
        <label for="exampleFormControlCantidad">Cantidad</label>
        <input type="number" name="cantidad" min="1" class="form-control" id="exampleFormControlCantidad">
    </div>
    <div class="form-group">
        <label for="exampleFormControlPrecio">Precio</label>
        <input type="number" name="precio" min="1" class="form-control" id="exampleFormControlPrecio">
    </div>

    <button type="submit">Agregar</button>

    <label for="">Valor de Total: {{$total}} </label>
</form>
@endsection
