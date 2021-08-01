@extends('layout.master')
@section('title', 'Desafío 1')

@section('content')
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    FECHA
                </th>
                <th>
                    USER ID
                </th>
                <th>
                    SELLER ID
                </th>
                <th>
                    TYPE
                </th>
                <th>
                    Acción
                </th>
                <th style="width: 10%">
                    Total
                </th>
            </tr>
        @foreach ($boleta as $inv)
        <tr>
            <td> {{$inv->id}} </td>
            <td> {{$inv->date}} </td>
            <td> {{$inv->user_id}} </td>
            <td> {{$inv->seller_id}} </td>
            <td> {{$inv->type}} </td>
            <td><a class="btn btn-primary" href="{{ route('total', $inv->id) }}">Obtener Total</a></td>
            @if($inv->id === (int) $id)
            <td>{{$total}}</td>
            @else
            <td> - </td>
            @endif
        </tr>
        @endforeach
        </table>
        @if(null !== $productos)
        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    ID con cantidad de productos sobre 100
                </th>

            </tr>
            @foreach ($productos as $pro)
            <tr>
                @if($pro->quantity > 100)
                <td> {{$pro->id}} </td>
                @endif
            </tr>
            @endforeach
        </table>

        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    Nombre Productos con valor sobre 1M CLP
                </th>
            </tr>
            @foreach ($productos as $pro)
            <tr>
            @if($pro->price > 1000000)
            <td> {{$pro->id}} - {{$pro->name}} </td>
            @endif
            </tr>
            @endforeach
        </table>
        @endif
    </div>

@endsection
