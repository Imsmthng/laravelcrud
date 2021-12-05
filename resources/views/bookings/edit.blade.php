@extends('bookings.layout')
@section('content')

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card border-secondary">
          <div class="card-header text-center bg-dark text-white">
            <h6>Update Account Information</h6>
          </div>

          <div class="card-body">
            <h6>Fill up the need information to continue</h6>
            
            <form action="{{ url('booking/' .$bookings->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")

            <input type="hidden" name="id" id="id" value="{{$bookings->id}}" id="id" />
            <div class="row">
              <div class="col">
                <div class="form-group mb3">
                <label>First name</label></br>
                <input type="text" name="first_name" id="first_name" value="{{$bookings->first_name}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" value="{{$bookings->middle_name}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{$bookings->last_name}}" class="form-control">
                </div>
              </div>
            </div>

            <br/>

            <div class="row">
              <div class="col-md-4">
                <label>Birth Date</label>
                <input type="text" name="bday" id="bday" value="{{$bookings->bday}}" class="form-control">
              </div>

              <div class="col-md-4">
                <label>Age</label>
                <input type="number" name="age" id="age" value="{{$bookings->age}}" class="form-control">
              </div>

            </div>

            </br>
            <h6>Address and Contact Information</h6>
            <div class="row">
              <div class="col">
                <div class="form-group mb3">
                <label>Street name</label></br>
                <input type="text" name="street_name" id="street_name" value="{{$bookings->street_name}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>City</label>
                <input type="text" name="city" id="city" value="{{$bookings->city}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>Postal Code</label>
                <input type="text" name="postal_code" id="postal_code" value="{{$bookings->postal_code}}" class="form-control">
                </div>
              </div>
            </div>

            <br/>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group mb3">
                <label>Phone Number</label></br>
                <input type="text" name="phone_number" id="phone_number" value="{{$bookings->phone_number}}" class="form-control">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group mb3">
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" id="mobile_number" value="{{$bookings->mobile_number}}" class="form-control">
                </div>
              </div>

              <div class="col-md-4">
                <label>Email</label>
                <input type="text" name="email" id="email" value="{{$bookings->email}}" class="form-control">
              </div>
            </div>

            </br>
            <h6>Incase of Emergency please contact</h6>
            <div class="row">
              <div class="col">
                <div class="form-group mb3">
                <label>FullName</label></br>
                <input type="text" name="full_name" id="full_name" value="{{$bookings->full_name}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>Mobile Number</label>
                <input type="text" name="emergency_mobile_number" id="emergency_mobile_number" value="{{$bookings->emergency_mobile_number}}" class="form-control">
                </div>
              </div>

              <div class="col">
                <div class="form-group mb3">
                <label>Relationship</label>
                <input type="text" name="relationship" id="relationgship" value="{{$bookings->relationship}}" class="form-control">
                </div>
              </div>
            </div>

            <br/>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Update Account</button>
                </div>
              </div>
              <div class="col">
                <div class="form-group" style="text-align:right;">
                  <a href="{{ url('booking') }}" class="btn btn-danger">Cancel</a>
                </div>
              </div>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop