@extends('layouts.admin')
@section('title', 'Pending Order')
@section('admin-content')
<main>
    <div class="container">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> >Delivary List</span>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="table-head text-left"><i class="fas fa-table me-1"></i>Deleverd Order List <a href="" class="float-right text-decoration-none"><i class="fas fa-print"></i></a></div>
               
            </div>
            <div class="card-body table-card-body p-3">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pending">
                    <table id="first_table">
                        <thead class="text-center bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key=> $order)
                            <tr class="text-center">
                                <td>{{$key+1}}</td>
                                <td>{{date('d M Y',strtotime($order->created_at))}}</td>
                                <td>{{$order->customer->code}}</td>
                                <td>{{$order->customer->name}}</td>
                                <td>{{$order->total_amount}}</td>
                                <td>
                                    @if ($order->status == 'd')
                                    <button class="btn btn-edit" disabled>Delivered</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('order.print',$order->id)}}" class="btn btn-edit mr-3"><i class="fas fa-print"></i></a> 
                                    <button class="btn btn-delete" disabled><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                 
            </div>
        </div>
    </div>
@endsection
