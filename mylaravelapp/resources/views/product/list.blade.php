@extends('layouts.app')
@section('content')
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
<table style="width:70%">
    <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Description</th>
    <th>Action</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td>{{$p->Name}}</td>
        <td>{{$p->Price}}</td>
        <td>{{$p->Quantity}}</td>
        <td>{{$p->Description}}</td>
        <td><a href="{{route('product.editProduct',['id'=>$p->Id])}}">Edit</a>
        <a href="{{route('product.deleteProduct',['id'=>$p->Id])}}">Delete</a></td>
    </tr>
    @endforeach
</table>
@endsection