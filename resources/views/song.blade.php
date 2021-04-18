@extends('layouts.app')
@section('content')
<div class="container  m-5">
<div class="card bg-transparent  border border-primary start-50 translate-middle-x" style="width: 750px;">
    <img src={{$data1->big_img}} class="card-img-top p-2">
    <div class="card-body">
      <p class="card-text fs-3">
        {{$data1->name}} <br>
        <span class="text-secondary fs-5">{{$data1->singer}}</span>
    </p>
    <audio controls autoplay style="width: 700px" class="m-1">
        <source src={{$data1->url}}>

      Your browser does not support the audio element.
      </audio>
      <br>

    <span class="text-primary  fs-3 p-2 m-2">Lyrics</span>
    <div class="container border border-primary overflow-auto text-center" style="height: 250px;">
        {{$data1->lyrics}}
           </div>

    </div>
  </div>
</div>

<!--comment section-->
<div class="row" style="height:300px;">
    <div class="col-8 overflow-auto " style="height: 300px;">
        @foreach ($data2 as $data2)


        <div class="p-2 m-2 card border border-primary bg-transparent">
            <div class="card-header bg-secondary">
                {{$data2->user_name}}
              <span class="float-end">  {{$data2->releasedat}}</span>
            </div>
            <div class="card-body">
              <p class="card-text"> {{$data2->comm}}</p>
            </div>
          </div>
          @endforeach


    </div>
    <div class="p-3 col-4">

        <div class="mb-3">
          <form action="/song/{{$data1->id}}" method="POST">
            @csrf
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" name="name" id="validationDefault01" value="user" required style="width: 300px">
            <label for="exampleFormControlTextarea1" class="form-label">add comment</label>
            <textarea class="form-control " id="exampleFormControlTextarea1" name="comment" rows="3" style="width: 300px"></textarea>
            <button class="m-2 btn btn-primary" type="submit">Submit</button>
          </div>
    </div>

  </div>

@endsection
