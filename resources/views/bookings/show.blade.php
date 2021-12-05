@extends('bookings.layout')
@section('content')

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card border-dark">
          <div class="card-header bg-dark text-center text-white">
            <h6>
              User Account Information
            </h6>
          </div>

          <div class="card-body">
            <h6>Personal Information</h6>
            <hr>
            <div class="row">
              <div class="col">
                <div class="form-group mb-3">
                  <label for=""><b>First Name: </b>{{ $bookings->first_name }}</label>
                </div>
                <div class="form-group mb-3">
                  <label for=""><b>Middle Name: </b>{{ $bookings->middle_name }}</label>
                </div>
                <div class="form-group mb-3">
                  <label for=""><b>Last Name: </b>{{ $bookings->last_name }}</label>
                </div>
              </div>

              <div class="col">
                <div class="form-group mb-3">
                  <label for=""><b>Age: </b>{{ $bookings->age }}</label>
                </div>
                <div class="form-group mb-3">
                  <label for=""><b>Birthdate: </b>{{ $bookings->bday }}</label>
                </div>
              </div>
            </div>
            
            <br/>
            <h6>Address & Contact Information</h6>
            <hr>
            <div class="row">
              <div class="col">
                <div class="form-group mb-3">
                  <label for=""> <b>Street Name: </b> {{ $bookings->street_name }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>City: </b> {{ $bookings->city }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>Postal Code: </b> {{ $bookings->postal_code }} </label>
                </div>
              </div>

              <div class="col">
                <div class="form-group mb-3">
                  <label for=""> <b>Email: </b> {{ $bookings->email }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>Phone Number: </b> {{ $bookings->phone_number }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>Mobile Number: </b> {{ $bookings->mobile_number }} </label>
                </div>
              </div>
            </div>

            <br/>
            <h6>Incase of Emergency Please Contact</h6>
            <hr>
            <div class="row">
              <div class="col">
                <div class="form-group mb-3">
                  <label for=""> <b>Full Name: </b> {{ $bookings->full_name }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>Mobile Number: </b> {{ $bookings->emergency_mobile_number }} </label>
                </div>
                <div class="form-group mb-3">
                  <label for=""> <b>Relationship: </b> {{ $bookings->relationship }} </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group mb-3">
                  <a href="{{ url('booking/'.$bookings->id.'/edit' ) }}" class="btn btn-primary">Edit Account</a>
                  
                </div>
              </div>
              <div class="col">
                <div class="form-group mb-3" style="text-align: right;">
                  <a href="{{ url('booking') }}" class="btn btn-outline-secondary">Go Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
