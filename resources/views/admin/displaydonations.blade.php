@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Donation Name</th>
                    <th>Amount</th>
                    <th>Category</th>          
                    <th>Edit Image</th>
                    <th>Remove</th>
                </tr>
            </thead>
            
            <tbody>
                <a href="{{ route('adminCreateDonationsForm') }}" class="btn btn-primary">Create New Donation</a>
                @foreach($donations as $donation)
                        @php  
                            $category_name;
                        @endphp
                        @foreach ($categories as $category)                                             
                            @if ($category->id == $donation['category_id'])
                                @php
                                    $category_name = $category->name;
                                @endphp
                                @break                
                            @endif                        
                        @endforeach
                    <tr>
                        <td>{{$donation['id']}}</td>
                        <td>{{$donation['donation_name']}}</td>
                        <td>{{$donation['donation_amount']}}</td>
                        <td>{{$category_name}}</td>
                        <td><a href="{{ route('adminEditDonationsForm',['id' => $donation['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteDonations',['id' => $donation['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $donations->links() }}
</div>

@endsection