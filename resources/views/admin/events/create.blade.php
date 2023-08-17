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
                    <h4 class="card-title">Créer un événement</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">

                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Nom de l'événement
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="1234 Main St" name="name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description de l'événement
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea name="description" class="form-control" id="description" lang="fr" rows="10" cols="50" placeholder="La description du département" ></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" placeholder="1234 Main St" name="date">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Heure de début
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="time" class="form-control" placeholder="1234 Main St" name="start_time">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Heure de fin
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="time" class="form-control" placeholder="1234 Main St" name="end_time">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Lieu
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="1234 Main St" name="location">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input">
                                        <label class="custom-file-label">Image
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="valider" class="btn btn-primary">Valider</button>
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