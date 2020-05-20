@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Image</th>            
                    <th>Edit Image</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('adminCreateCarouselImageForm') }}" class="btn btn-primary">Create New Carousel Image</a>
                @foreach($carouselimages as $carouselimage)
                    <tr>
                        <td>{{$carouselimage['id']}}</td>
                        <td><img src="{{asset ('storage')}}/images/{{$carouselimage['carousel_image']}}" alt="{{asset ('storage')}}/images/{{$carouselimage['carousel_image']}}" width="100" height="100" style="max-height:220px" ></td>
                    <!-- <td>  <img src="{{ Storage::url('images/'.$carouselimage['carousel_image'])}}"
                                alt="<?php echo Storage::url($carouselimage['carousel_image']); ?>" width="100" height="100" style="max-height:220px" >   </td> -->
                        
                        <td><a href="{{ route('adminEditCarouselImageForm',['id' => $carouselimage['id'] ])}}" class="btn btn-primary">Edit Image</a></td>
                        <td><a href="{{ route('adminDeleteCarouselImage',['id' => $carouselimage['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $carouselimages->links() }}
</div>

@endsection