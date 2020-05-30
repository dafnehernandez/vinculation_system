<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verify Your Email Address</h3>

                    <div class="box-body">
                        <?php if(session('resent')): ?>
                            <div class="alert alert-success" role="alert">A fresh verification link has been sent to
                                your email address
                            </div>
                        <?php endif; ?>
                        <p>Before proceeding, please check your email for a verification link.If you did not receive
                            the email,</p>
                        <a href="<?php echo e(route('verification.resend')); ?>">click here to request another'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/auth/verify.blade.php ENDPATH**/ ?>