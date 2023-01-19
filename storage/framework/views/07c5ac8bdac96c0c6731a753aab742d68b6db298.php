

<?php $__env->startSection('content'); ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded mt-5"
                        width="250px" height="150px" src="<?php echo e($profile->image_url); ?>"><span class="font-weight-bold"><?php echo e($profile->name); ?></span><span
                        class="text-black-50"><?php echo e($profile->email); ?></span><span>
                        <div class="socials-footer">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="<?php echo e($profile->facebook_link); ?>" class="link-one">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo e($profile->youtube_link); ?>" class="link-one">
                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form method="post" action="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input name="name" type="text"
                                    class="form-control" value="<?php echo e($profile->name); ?>"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email"
                                    class="form-control" value="<?php echo e($profile->email); ?>"></div>
                            
                            <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" name="phone"
                                    class="form-control" placeholder="" value="<?php echo e($profile->phone); ?>"></div>
                            <div class="col-md-12"><label class="labels">Profile Link</label><input type="text" name="image_url"
                                    class="form-control" placeholder="" value="<?php echo e($profile->image_url); ?>"></div>
                            <div class="col-md-12"><label class="labels">Link to your Facebook</label><input type="text" name="facebook_link"
                                    class="form-control" placeholder="" value="<?php echo e($profile->facebook_link); ?>"></div>
                            <div class="col-md-12"><label class="labels">Link to your
                                    Youtube</label><input type="text" class="form-control" name="youtube_link"
                                    value="<?php echo e($profile->youtube_link); ?>"></div>
                            <div class="col-md-12">
                                <label class="labels">Description</label>
                                <textarea class="form-control" name="description"><?php echo e($profile->description); ?></textarea>
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSI\Desktop\RealE\resources\views/pages/dashboard/profile.blade.php ENDPATH**/ ?>