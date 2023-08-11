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
            <!-- row -->

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-money text-success border-success"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Donations</div>
                                <div class="stat-digit">{{ $donations->count() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des donations</h4>
                            <a href="{{ route('donations.create') }}" title="Créer un département" >Créer une nouvelle donation</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Titre du don</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Heure</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Résumé</th>
                                            <th colspan="2" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donations as $donation)
                                        <tr>
                                            <td>{{ $donation->id }}</td>
                                            <td><img src="{{ url('donations/'.$donation->picture) }}" alt="" width="50" height="50"></td>
                                            <td>{{ $donation->title }}</td>
                                            <td>{{ $donation->date }}</td>
                                            <td>{{ $donation->time }}</td>
                                            <td>{{ $donation->description }}</td>
                                            <td>{{ $donation->summary }}</td>
                                            <td>
                                                <a href="{{ route('donations.edit', $donation)}}" class="mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa fa-pencil color-muted"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('donations.destroy', $donation)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit"><i class="fa fa-close color-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection