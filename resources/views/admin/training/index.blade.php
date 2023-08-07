@extends('admin.layouts.app')

@section('content')

<div class="content-body">

<div class="container text-center">
<div class="row">
<div class="col">
    <a href="{{route('trainings.store')}}"><button type="button" class="btn btn-danger btn-lg">Ajouter une formation</button></a>
</div>
<div class="col">
    <button type="button" class="btn btn-danger btn-lg">Supprimer une formation</button>
</div>
<div class="col">
    <button type="button" class="btn btn-danger btn-lg">Editer une formation </button>
</div>
<div class="col">
    <button type="button" class="btn btn-danger btn-lg">Modifier une formation</button>
</div>
</div>
</div>
    
</div>
@endsection