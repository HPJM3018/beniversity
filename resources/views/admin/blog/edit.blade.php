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
    <h1>Ajouter un nouveau Blog</h1>
    
    <form >

        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="image">Image :</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea>

        <button type="submit">Ajouter</button>
    </form>

</div>
@endsection