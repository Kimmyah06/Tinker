<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tinker - Shirts and Shoes Aparell</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Basic-icons.css')}}">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid"><img src="{{ asset('img/Tinker.png')}}" width="5" height="10" style="width: 40px;height: 40px;padding-left: 0px;margin-left: 15px;" />
            <a class="navbar-brand" href="#" style="padding-left: 0px;margin-left: 15px;">Tinker</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav"></ul>
            </div><a class="btn btn-secondary" role="button" style="margin-right: 0px;padding-right: 11px;" href="{{ route('logout') }}">Log Out</a>
        </div>
    </nav><i class="fas fa-plus-circle text-end text-secondary align-self-baseline fixed-bottom" style="font-size: 49px;padding-left: 26px;padding-top: 26px;background: var(--bs-modal-border-color);padding-right: 26px;padding-bottom: 30px;margin-top: 0px;" data-bs-target="#modal-1" data-bs-toggle="modal"></i>
    <div class="table-responsive text-center" style="padding-left: 30px;padding-right: 30px;padding-bottom: 30px;margin-bottom: 0px;padding-top: 80px;">
        <table class="table">
            <thead>
                <tr>
                    <th style="margin-right: 0px;">Product Number</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_number }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td style="height: 55px;">{{ $product->quantity }}</td>
                        <td style="padding: 8px;padding-left: 0px;margin: 0px;margin-left: 1px;width: 190.344px;"><button class="btn btn-info editbtn" type="button" style="margin-right: 20px;">Edit</button><button class="btn btn-danger delete" type="button" data-bs-target="#modal-3" data-bs-toggle="modal" data-id={{ $product->product_number }}>Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- add modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('product.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Product Name</p><input type="text" class="form-control" name="product_name">
                        <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Description</p><input type="text" class="form-control" name="description">
                        <div class="row">
                            <div class="col-lg-5" style="margin-top: 15px;margin-bottom: 15px;padding-right: 0px;margin-right: 15px;padding-top: 0px;padding-left: 15px;">
                                <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Price</p><input type="number" class="form-control" style="width: 178px;" name="price">
                            </div>
                            <div class="col-lg-5" style="margin-top: 16px;padding-bottom: 0px;margin-bottom: 15px;">
                                <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Quantity</p><input type="number" class="form-control" name="quantity">
                            </div>
                        </div>
                        <div class="input-group"></div>
                        <div></div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="editmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('product.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="modal-body">
                            <input type="hidden" name="product_number" id="product_number">
                            <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Product Name</p><input type="text" class="form-control" id="product_name" name="product_name">
                            <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Description</p><input type="text" class="form-control" id="description" name="description">
                            <div class="row">
                                <div class="col-lg-5" style="margin-top: 15px;margin-bottom: 15px;padding-right: 0px;margin-right: 15px;padding-top: 0px;padding-left: 15px;">
                                    <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Price</p><input type="number" class="form-control" style="width: 178px;" id="price" name="price">
                                </div>
                                <div class="col-lg-6" style="margin-top: 16px;padding-bottom: 0px;margin-bottom: 15px;">
                                    <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Quantity</p><input type="number" class="form-control" id="quantity" name="quantity">
                                </div>
                            </div>
                            <div class="input-group"></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save changes</button></div>
                </form>
            </div>
        </div>
    </div>
    <!-- delete modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('product.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input id="product_number_delete_field" name="product_number" hidden>
                    <div class="modal-body">

                        <p>Are you sure to delete this product?</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Continue</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" defer></script>
    <script>
        $(document).ready(function(){
            $('.editbtn').on('click', function(){
                $('#editmodal').modal('show'); 

                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function(){
                    return $(this).text();
                })

                console.log(data);
                $('#product_number').val(data[0]);
                $('#product_name').val(data[1]);
                $('#description').val(data[2]);
                $('#price').val(data[3]);
                $('#quantity').val(data[4]);
            })
        })
        
        $(document).on('click', '.delete', function() {
            let id = $(this).attr('data-id');
            console.log(id);
            $('#product_number_delete_field').val(id);
        });
    </script>
</body>

</html>
