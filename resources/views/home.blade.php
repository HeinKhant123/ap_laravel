@extends('layout')

@section('content')
    <!-- <h3>Home page</h3>
    <?php 
       // foreach($data as $key =>$value){
          //  echo $key .'=' . $value . '<br>';
        
    ?> -->
    <!-- @foreach($data as $key=>$value)
        {{$key .'='.$value}}
    @endforeach -->



<div class="container">
    <div class="card">
        <div class="card-header" style="text-align:center">
           Contents
        </div>
        <div class="card-body">
            <!-- {{$data}} -->
            @foreach($data as $post)
                <div>
                    <h5 class="card-title">{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div><br>
            @endforeach
            
        </div>
    </div>
</div>


    @endsection