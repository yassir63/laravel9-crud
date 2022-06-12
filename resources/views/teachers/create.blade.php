<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add teacher Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb" style="text-align: center;">
            <div class="pull-left mb-2" style="text-align: center;">
                <h2>Add teacher</h2>
            </div>
            <div class="pull-right">

            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Nom:</strong>
                    <input type="text" name="nom" class="form-control" placeholder="teacher nom">
                    @error('nom')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Prenom:</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="teacher prenom">
                    @error('prenom')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher matiere:</strong>
                    <input type="text" name="matiere" class="form-control" placeholder="teacher matiere">
                    @error('matiere')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="teacher Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>teacher Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="teacher Address">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-danger ml-3">Submit</button>
                <a class="btn btn-danger" href="{{ route('teachers.index') }}"> Back</a>
            </div>

        </div>
    </form>
</body>
</html>
