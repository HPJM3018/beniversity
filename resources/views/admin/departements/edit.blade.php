@extends('admin.layouts.app')

@section('content')

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div><br />
        @endif

        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editer un département</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
	                    <form method="POST" action="{{ route('departements.update', $departement) }}" enctype="multipart/form-data" >

		                @method('PUT')

                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Nom du département</label>
                                    <input type="text" value="{{ $departement->name }}" class="form-control" placeholder="1234 Main St" name="name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description du département</label>
                                    <textarea name="description" class="form-control" id="description" lang="fr" rows="10" cols="50" placeholder="La description du département" >{{ $departement->description }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Image</label>
                                    <div>
                                        <img src="{{ url('departements/'.$departement->picture) }}" alt="" width="50" height="50">
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="picture" class="custom-file-input">
                                        <label class="custom-file-label">Image</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection