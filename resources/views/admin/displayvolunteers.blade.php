@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Volunteer Name</th>
                    <th>Mobile</th>
                    <th>Email</th>   
                    <th>Areas Of Interest</th>        
                    <th>View</th>
                    <th>Remove</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($volunteers as $volunteer)                        
                    <tr>
                        <td>{{$volunteer['id']}}</td>
                        <td>{{$volunteer['first_name'] .' '. $volunteer['last_name']}}</td>
                        <td>{{$volunteer['mobile']}}</td>
                        <td>{{$volunteer['email']}}</td>
                        <td>{{$volunteer['areasofinterest']}}</td>
                        <td><a href="{{ route('adminEditVolunteerForm',['id' => $volunteer['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteVolunteer',['id' => $volunteer['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $volunteers->links() }}
</div>

@endsection