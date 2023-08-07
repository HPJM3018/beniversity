@extends('admin.layouts.app')

@section('content')
<div class="content-body">

    <div class="container text-center">
  <div class="row">
    <div class="col">
       <a href="{{route('blogs.store')}}"><button type="button" class="btn btn-primary btn-lg">Ajouter un blog</button></a> 
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary btn-lg">Supprimer un blog</button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary btn-lg">Editer un blog</button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary btn-lg">Modifier un blog</button>
    </div>
  </div>
</div>
        
    </div>
    
    
@endsection