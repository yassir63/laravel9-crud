<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teachers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div style="text-align: center;">
                    <br><br><br>
                    <h2>Teachers</h2>
                    <br><br><br>
                </div>


            </div>
            <div class="pull-right mb-2" style="text-align: center;" >
                <a class="btn btn-danger" href="{{ route('teachers.create') }}"> Create teacher</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>teacher Nom</th>
            <th>teacher Prenom</th>
            <th>teacher matiere</th>
            <th>teacher Email</th>
            <th>teacher Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->nom }}</td>
                <td>{{ $teacher->prenom }}</td>
                <td>{{ $teacher->matiere }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->address }}</td>
                <td>
                    <form action="{{ route('teachers.destroy',$teacher->id) }}" method="Post">
                        <a class="btn btn-danger" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
{!! $teachers->links() !!}
</body>
</html>
