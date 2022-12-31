<!-- edit modal -->
<div class="modal fade" role="dialog" tabindex="-1" id="modal<?php echo e($product->product_number); ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Product Name</p><input type="text" value="<?php echo e($product->product_name); ?>">
                        <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 20px;">Description</p><input type="text" value="<?php echo e($product->description); ?>">
                        <div class="row">
                            <div class="col-lg-5" style="margin-top: 15px;margin-bottom: 15px;padding-right: 0px;margin-right: 15px;padding-top: 0px;padding-left: 15px;">
                                <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Price</p><span>$</span><input type="number" value="<?php echo e($product->price); ?>" style="width: 178px;">
                            </div>
                            <div class="col-lg-6" style="margin-top: 16px;padding-bottom: 0px;margin-bottom: 15px;">
                                <p style="font-size: 16px;color: var(--bs-black);padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;margin-right: 0px;">Quantity</p><input type="number" value="<?php echo e($product->quantity); ?>">
                            </div>
                        </div>
                        <div class="input-group"></div>
                        <div></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div><?php /**PATH C:\Users\Kimberly_PC\Documents\GitHub\Serverus\resources\views/update.blade.php ENDPATH**/ ?>