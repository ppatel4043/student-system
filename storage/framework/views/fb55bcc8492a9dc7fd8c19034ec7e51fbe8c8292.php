<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Register New Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('students.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?> <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\Harsh Prajapati\Desktop\Student_management\student_management\resources\views/students/create.blade.php ENDPATH**/ ?>