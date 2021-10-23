@extends('layouts.admin')
@section('title', 'All Order')
@section('admin-content')
<main>
    <div class="container">
        <div class="card">
            <div class="card-body table-card-body p-3">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="home-tab">
                       


        <section class="top-header mt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-6">
                  <div class="header-img">
                    <img src="{{asset('admin/images/link-up_technology.png')}}" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 d-flex justify-content-end">
                <div class="header-right">
                    <p class="header-address m-0"> <i class="fas fa-map-marker-alt"></i> <span>Plot:16(3rd Floor), Road:01</span></p>
                    <p class="header-phon m-0"> <i class="fas fa-phone"></i> <span>+8801911-978897</span></p>
                    <p class="header-email m-0"> <i class="fas fa-globe"></i> <span>mail@linktechbd.com</span></p>
                </div>
              </div>
             </div>
          </div>
       </section>
       <section class="invoice-text">
        <div class="container">
          <div class="row d-flex justify-content-center">
             <h1 class="text-center">Invoice</h1>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="invoice-left">
                 <p class="m-0">Customer Id : <span>C000022</span></p>
                 <p class="m-0">Customer Name : <span>Zarif</span></p>
                 <p class="m-0">Customer Address : Plot:16(3rd Floor), Road:01<span></span> </p>
                 <p class="m-0">Customer Mobile : +8801911-978897</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6 d-flex justify-content-end">
              <div class="invoice-right">
                <p class="m-0">Invoice Number : <span>2020FFE00</span></p>
                <p class="m-0">Date : <span>12/12/2012</span></p>
              </div>
            </div>
          </div>
        </div>
       </section>
       <section class="main-table mt-4">
        <div class="container">
          <div class="row">
             <div class="col-lg-12 col-md-12 col-12">
               <div class="invoice-header">
                <table class="invoice-table">
                  <tr>
                    <th>Description</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Discount</th>
                    <th>Total</th>
                  </tr>
                  <tr>
                    <td>Mans Six poket geket</td>
                    <td>34</td>
                    <td>Red</td>
                    <td>20</td>
                    <td>4000</td>
                    <td>200</td>
                    <td>4000</td>
                  </tr>
                  <tr>
                   <td>Mans Six poket geket</td>
                   <td>34</td>
                   <td>Red</td>
                   <td>20</td>
                   <td>4000</td>
                   <td>200</td>
                   <td>4000</td>
                 </tr>
                 <tr>
                  <td>Mans Six poket geket</td>
                  <td>34</td>
                  <td>Red</td>
                  <td>20</td>
                  <td>4000</td>
                  <td>200</td>
                  <td>4000</td>
                </tr>
                <tr>
                  <td>Mans Six poket geket</td>
                  <td>34</td>
                  <td>Red</td>
                  <td>20</td>
                  <td>4000</td>
                  <td>200</td>
                  <td>4000</td>
                </tr>
                <tr>
                  <td>Mans Six poket geket</td>
                  <td>34</td>
                  <td>Red</td>
                  <td>20</td>
                  <td>4000</td>
                  <td>200</td>
                  <td>4000</td>
                </tr>
                </table>
               </div>
             </div>
          </div>
        </div>
       </section>
        <section class="section-payment mt-3">
          <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6">
                     <div class="">
                       <p class="word-text m-0">In Word : <span>Two thousand taka only</span></p>
                       <p class="payment-info m-0">Payment Info : <span>Cash On Delivery</span></p>
                       <p class="important-note m-0">Important : <span>Please Read "the Return Policy"</span></p>
                     </div>
                     <div class="short-note mt-3">
                         <p class="m-0">Note</p>
                         <div class="note-text-area">
                            <textarea name="" class="note-area" cols="30" rows="2"></textarea>
                         </div>
                     </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                  <div class="paymet-option">
                    <p class="subtotal mb-0">Subtotal:<span class="span-subtotal">2000 Tk</span></p>
                    <p class="discout-amout mb-0">Discout:<span class="discout-percent"> 5%</span></p>
                    <p class="shipppping-cost mb-0">Shipping Cost:<span>200 Tk</span></p>
                    <p class="total-amout mb-0">Total Amount:<span class="span-amout">4000 Tk</span></p>
                    <p class="paid-amout mb-0">Paid:<span class="paid-span">1000 Tk</span></p>
                    <p class="due-amout mb-0">Due:<span class="paid-span">3000 Tk</span></p>

                    <a href="{{route('invoice')}}" class="btn btn-print float-right mt-4 text-white">print</a>

                  </div>
                </div>
            </div>
         </div>
        </section>





                  </div>
                 
            </div>
        </div>
    </div>
@endsection