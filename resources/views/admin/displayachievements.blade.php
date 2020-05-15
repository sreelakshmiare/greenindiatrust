@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>                           
                    <th>Achievement</th>
                    <th>Count</th>                    
                    <th>Active</th>            
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                
                <div class="row">
                    <div class="col">
                        <a href="{{route('adminCreateAchievementForm')}}" class="btn btn-primary">Create New Achievement</a>
                    </div>
                    <form action="{{ route('adminSearchAchievements')}}" method="get" enctype="multipart/form-data">                    
                        <div class="col">                        
                                {{csrf_field()}}      
                                <input class="form-control" type="search" id="searchText" name="searchText" placeholder="Achievement Search" value="{{$searchText}}">
                        </div>
                        <div class="col">                                 
                            <button class="btn btn-primary" type="submit">Search </button> 
                            <a href="{{route('adminDisplayAchievements')}}" class="btn btn-primary">Clear</a>                      
                        </div>
                    </form>
                </div>
                @foreach($achievements as $achievement)
                    <tr>
                        <td>{{$achievement['id']}}</td>
                        <td>{{$achievement['achievement']}}</td>
                        <td>{{$achievement['count']}}</td>
                        <td>{{$achievement['active_ind']}}</td>
                        
                        <td><a href="{{ route('adminEditAchievementForm',['id' => $achievement['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteAchievement',['id' => $achievement['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    {{ $achievements->links() }}
</div>

@endsection
