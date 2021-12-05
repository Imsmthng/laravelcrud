@extends('bookings.layout')
@section('content')

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-secondary">
                    <div class="card-header text-center bg-dark text-white">
                        <h6>
                            All Users Account Information
                        </h6>
                    </div>

                    <div class="card-body">
                    <a href="{{ url('/booking/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                         Add New Account
                    </a>
                    <br/><br/>

                    <table class="table table-responsive table-bordered text-center">
                        <thead>
                            <tr>
                                <td class="table-secondary">Full Name</td>
                                <td class="table-secondary">Age</td>
                                <td class="table-secondary">Birthday</td>
                                <td class="table-secondary">Phone Number</td>
                                <td class="table-secondary">Mobile Number</td>
                                <td class="table-secondary">Email</td>
                                <td class="table-secondary">Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($bookings as $item)
                            <tr>
                                <td>{{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->bday }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->mobile_number }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ url('/booking/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"> View</button></a>
                                    <a href="{{ url('/booking/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                        <form method="POST" action="{{ url('/booking' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection