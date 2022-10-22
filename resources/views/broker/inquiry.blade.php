@extends('broker.ex')

@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Supply Requests </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Supplier Listings</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            
            @include('flash-message')
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Request by Brokers</h4>
                    
                    
                    <p class="card-description"> <code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> </th>
                          <th> Broker Supplier</th>
                          <th> Broker Contact</th>
                          <th> Fruits to Deliver</th>
                          <th> Fruit Grade</th>
                          <th>Total Allocated</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($inquiry as $inquiry)
                        <tr>
                          <td> 1 </td>
                          <td> {{$inquiry->supplier}} </td>
                          <td>
                            {{$inquiry->phone}}
                          </td>
                          <td> {{$inquiry->fruits_no}} </td>
                          <td>{{$inquiry->fruit_grade}}</td>
                          <td> {{$inquiry->Total_to_be_paid}} </td>
                          @if ($inquiry->status === 'pending')
                          <td> <a href="/approve/{{$inquiry->id}}" class="btn btn-secondary btn-sm" style="text-decoration:none;">Approve</a></td>
                          <td> <a href="/decline/{{$inquiry->id}}" class="btn btn-danger btn-sm" style="text-decoration:none;">Decline</a></td>
                          @elseif ($inquiry->status === 'paid')
                          <td>paid</td>
                          @else
                          <td>Declined</td>
                          @endif

                         
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

@endsection