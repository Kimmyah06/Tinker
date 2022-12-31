<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shirts and Shoes Inventory</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('css/Login-Form-Basic-icons.css')); ?>">
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center" style="padding-top: 60px;">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center" style="color: var(--bs-card-border-color);border-style: solid;border-color: var(--bs-secondary);border-radius: 15px;box-shadow: 0px 11px 20px var(--bs-gray-500);height: 350px;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="--bs-secondary: #f3969a;--bs-secondary-rgb: 243,150,154;background: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" action="<?php echo e(route('login.auth')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-secondary);">Login</button>
                                    <!-- <a class="btn btn-primary d-block w-100" role="button" href="Dashboard.html" style="background: var(--bs-secondary);">Login</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" defer></script>
</body>

</html><?php /**PATH C:\Users\Kimberly_PC\Documents\GitHub\Serverus\resources\views/login.blade.php ENDPATH**/ ?>