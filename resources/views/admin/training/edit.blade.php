@extends('admin.layouts.app')

@section('content')

<div class="content-body"> 
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            margin: bottom 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <h1>Editer {{$training->titre}}</h1>
        
    <div class="my-5">
        @foreach($errors->all() as $error)
            <span class="block text-danger-500">{{$error}} </span>
        @endforeach
    </div>
    

    <form  action="{{route('training.update',['id'=>$training->id,'titre'=>$training->titre,'lieu'=>$training->lieu,'description'=>$training->description])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" value="{{$training->titre}}">

        <label for="lieu">Lieu :</label>
        <input type="text" id="lieu" name="lieu" value="{{$training->lieu}}">
        
        <label for="image">Image :</label>
        <input type="file" id="image" name="image">

        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" cols="50" > {{$training->description}}</textarea>
        
        
        <button type="submit">Modifier</button>
    </form>

</div>
@endsection