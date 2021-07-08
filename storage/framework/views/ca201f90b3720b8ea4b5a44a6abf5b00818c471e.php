<?php $__env->startSection('title', 'パスワード再設定'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">Right-Hand</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">パスワード再設定</h2>

            <?php echo $__env->make('error_card_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(session('status')): ?>
              <div class="card-text alert alert-success">
                <?php echo e(session('status')); ?>

              </div>
            <?php endif; ?>

            <div class="card-text">
              <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>

                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required>
                </div>

                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">メール送信</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>