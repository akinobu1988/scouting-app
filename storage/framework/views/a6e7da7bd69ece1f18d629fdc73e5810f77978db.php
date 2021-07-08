<?php $__env->startSection('title', 'パスワード再設定'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">Right-Hand</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">新しいパスワードを設定</h2>

            <?php echo $__env->make('error_card_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card-text">
              <form method="POST" action="<?php echo e(route('password.update')); ?>">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="email" value="<?php echo e($email); ?>">
                <input type="hidden" name="token" value="<?php echo e($token); ?>">

                <div class="md-form">
                  <label for="password">新しいパスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="md-form">
                  <label for="password_confirmation">新しいパスワード(再入力)</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">送信</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>