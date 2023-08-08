@extends('admin.layouts.app')

@section('content')

<div class="content-body">

    <div class="container text-center">
        <div class="row">
                <div class="col">
                    <a href="{{route('training.create')}}"><button type="button" class="btn btn-danger btn-lg">Ajouter une formation</button></a>
                </div>
        </div>
    </div>
</div>
<div class="content-body">
    <table class="table">
    <thead>
        <tr>
        <th scope="col" style="background-color: red; color:black;">id</th>
        <th scope="col" style="background-color: red; color:black;">Titre</th>
        <th scope="col" style="background-color: red; color:black;">Description</th>
        <th scope="col" style="background-color: red; color:black;"> Action </th>
        <th scope="col" style="background-color: red; color:black;"> Action </th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($trainings as $training)
        <tr>
        <th scope="row" style="color:black;">{{$training->id}}</th>
        <td style="color:black;">{{$training->titre}}</td>
        <td style="color:black;">{{$training->description}}</td>
        <td style="color:black;"> <a href="{{route('training.edit',['id'=>$training->id,])}}"> <button type="button" class="btn btn-primary btn-lg"> Modifier </button></a></td>
        <td style="color:black;"><a href="#"> <button type="button" class="btn btn-primary btn-lg">Supprimer </button></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection