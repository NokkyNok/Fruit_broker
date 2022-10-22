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
                    <h4 class="card-title">Supplies registered to you</h4>
                    <p class="card-description"> <code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> </th>
                          <th> Broker </th>
                          <th> Supplied Amount </th>
                          <th> Fruit type</th>
                          <th> Due After </th>
                          <th>State</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($supply as $supply)
                        <tr>
                          <td> 1 </td>
                          <td> {{$supply->broker}} </td>
                          <td>
                            {{$supply->supply_amount}}
                          </td>
                          <td> {{$supply->fruit_grade}} </td>
                          <td>{{$supply->due_after}} days</td>
                        @if ($supply->state === 'pending')
                        <td> <button class="btn btn-primary btn-sm"><a href="{{route('state', $supply->id)}}">Mark Complete</a></button></td>
                        @else
                        <td> Completed </td>
                        @endif
                        </tr>
                        @endforeach
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

@endsection