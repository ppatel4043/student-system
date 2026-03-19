<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .navbar { background: #2d3436; }
        .card { border: none; border-radius: 12px; }
        .table thead { background-color: #f1f2f6; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(route('students.index')); ?>">🎓 SMS Pro</a>
            <div class="ms-auto">
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success shadow-sm">+ Add Student</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6">
                <h3 class="fw-bold">Student Directory</h3>
            </div>
            <div class="col-md-6">
                <form action="<?php echo e(route('students.index')); ?>" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2 shadow-sm" placeholder="Search by name or email..." value="<?php echo e(request('search')); ?>">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Search</button>
                    <?php if(request('search')): ?>
                        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-link">Clear</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr class="text-secondary">
                            <th class="ps-4">ID</th>
                            <th>Student Name</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="align-middle">
                            <td class="ps-4 text-muted">#<?php echo e($student->id); ?></td>
                            <td class="fw-semibold"><?php echo e($student->name); ?></td>
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->phone); ?></td>
                            <td class="text-end pe-4">
                                <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-sm btn-outline-warning rounded-pill px-3">Edit</a>
                                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3" onclick="return confirm('Delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">No students found matching your search.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\Harsh Prajapati\Desktop\Student_management\student_management\resources\views/students/index.blade.php ENDPATH**/ ?>