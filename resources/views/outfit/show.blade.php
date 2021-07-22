@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{$outfit->type}}</div>
               <div class="card-body">
                    <div class="form-group">
                        <small class="form-text text-muted">Outfit type: {{$outfit->type}} </small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted"><b style="color:{{$outfit->color}};">Color:</b> {{$outfit->color}}</small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">Outfit size: {{$outfit->size}}</small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">About outfit: <div>{!!$outfit->about!!}</div></small>
                    </div>
                    <div class="form-group">                     
                        <small class="form-text text-muted">Master: {{$outfit->masterOfOutfit->name}} {{$outfit->masterOfOutfit->surname}}</small>
                    </div>
                    <a href="{{route('outfit.edit', [$outfit])}}" class="btn btn-success">Edit</a>
                    <a href="{{route('outfit.pdf', [$outfit])}}" class="btn btn-success">Download PDF</a>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection