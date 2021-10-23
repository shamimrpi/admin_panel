@extends('layouts.admin')
@section('title', 'All Order')
@section('admin-content')
<main>
    <div class="container">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> >Order List</span>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="table-head text-left"><i class="fas fa-table me-1"></i>Pending Order List <a href="" class="float-right"><i class="fas fa-print"></i></a></div>
                
            </div>
            <div class="card-body table-card-body p-3">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="home-tab">
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
<<<<<<< HEAD
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 1</td>
                                <td class="text-center">
                                    <a href="{{route('invoice')}}" class="btn btn-print"><i class="fas fa-print"></i></a>
                                    <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
=======
                            @foreach($orders as $key=> $order)
                            <tr class="text-center">
                                <td>{{$key+1}}</td>
                                <td>{{date('d M Y',strtotime($order->created_at))}}</td>
                                <td>{{$order->customer->code}}</td>
                                <td>{{$order->customer->name}}</td>
                                <td>{{$order->total_amount}}</td>
                                <td>
                                    @if ($order->status == 'p')
                                    <a href="{{route('order.pending',$order->id)}}" class="btn btn-edit">Pending</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('order.details.edit',$order->id)}}" class="btn btn-edit"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('order.print',$order->id)}}" class="btn btn-edit"><i class="fas fa-print"></i></a>
                                    <a href="{{route('order.cancel',$order->id)}}" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            
>>>>>>> e15bc3c21075962990eef5391528945aa6683ba3
                        </tbody>
                    </table>
                  </div>
                 
            </div>
        </div>
    </div>
@endsection