@extends('admin.layouts.app')

@section('content')
<div class="content-body" style="margin-left:250px;">
<div class="container text-center">
    <div class="row">
        <div class="col">
        <a href="{{route('blog.create')}}"><button type="button" class="btn btn-primary btn-lg">Ajouter un blog</button></a> 
        </div>
    </div>
</div>
<br><br>
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
  @foreach($blogs as $blog)
    <tr>
      <th scope="row" style="color:black;">{{$blog->id}}</th>
      <td style="color:black;">{{$blog->titre}}</td>
      <td style="color:black;">{{$blog->description}}</td>
      <td style="color:black;"> <a href="{{route('blog.edit',['id'=>$blog->id,])}}"> <button type="button" class="btn btn-primary btn-lg">Modifier </button></a></td>
      <td style="color:black;"><a href="{{route('blog.destroy',['id'=>$blog->id])}}">  <button type="button" class="btn btn-primary btn-lg">Supprimer 
        
    </button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection