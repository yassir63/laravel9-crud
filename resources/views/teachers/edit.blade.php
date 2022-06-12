<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit teacher Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="text-align: center;">
                <h2>Edit teacher</h2>
            </div>
            <div class="pull-right">

        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('teachers.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Nom:</strong>
                    <input type="text" name="nom" value="{{ $teacher->nom }}" class="form-control"
                           placeholder="teacher nom">
                    @error('nom')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Prenom:</strong>
                    <input type="text" name="prenom" value="{{ $teacher->prenom }}" class="form-control"
                           placeholder="teacher prenom">
                    @error('prenom')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher matiere:</strong>
                    <input type="text" name="matiere" value="{{ $teacher->matiere }}" class="form-control"
                           placeholder="teacher matiere">
                    @error('matiere')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="teacher Email"
                           value="{{ $teacher->email }}">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Address:</strong>
                    <input type="text" name="address" value="{{ $teacher->address }}" class="form-control"
                           placeholder="teacher Address">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-danger ml-3">Submit</button>
                <a class="btn btn-danger" href="{{ route('teachers.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
            </div>

        </div>
    </form>
</div>
</body>
</html>
