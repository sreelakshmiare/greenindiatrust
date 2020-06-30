@extends('layouts.admin')

@section('body')
<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>           
                    <th>News and Events</th>  
                    <th>Valid From</th>
                    <th>Valid To</th>         
                    <th>Active</th>            
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{route('adminCreateNewsAndEventsForm')}}" class="btn btn-primary">Create New News and Events</a>
                @foreach($newsandevents as $news)
                    <tr>
                        <td>{{$news['id']}}</td>
                        <td>{{$news['news_events']}}</td>
                        <td>{{$news['valid_from']}}</td>
                        <td>{{$news['valid_to']}}</td>
                        <td>{{$news['active_ind']}}</td>
                        
                        <td><a href="{{ route('adminEditNewsAndEventsForm',['id' => $news['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteNewsAndEvents',['id' => $news['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $newsandevents->links() }}
</div>

@endsection
