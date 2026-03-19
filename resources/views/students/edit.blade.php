<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow col-md-6 mx-auto">
            <div class="card-header bg-warning"><h4>Edit Student</h4></div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>