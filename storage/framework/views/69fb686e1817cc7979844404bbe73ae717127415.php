<div class="card mt-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <a href="<?php echo e(route('users.show', ['name' => $user->name])); ?>" class="text-dark">
        <i class="fas fa-user-circle fa-3x"></i>
      </a>
      <?php if( Auth::id() !== $user->id ): ?>
        <follow-button
          class="ml-auto"
          :initial-is-followed-by='<?php echo json_encode($user->isFollowedBy(Auth::user()), 15, 512) ?>'
          :authorized='<?php echo json_encode(Auth::check(), 15, 512) ?>'
          endpoint="<?php echo e(route('users.follow', ['name' => $user->name])); ?>"
        >
        </follow-button>
      <?php endif; ?>
    </div>
    <h2 class="h5 card-title m-0">
      <a href="<?php echo e(route('users.show', ['name' => $user->name])); ?>" class="text-dark">
        <?php echo e($user->name); ?>

      </a>
    </h2>
  </div>
  <div class="card-body">
    <div class="card-text">
      <a href="<?php echo e(route('users.followings', ['name' => $user->name])); ?>" class="text-muted">
        <?php echo e($user->count_followings); ?> フォロー
      </a>
      <a href="<?php echo e(route('users.followers', ['name' => $user->name])); ?>" class="text-muted">
        <?php echo e($user->count_followers); ?> フォロワー
      </a>
    </div>
  </div>
</div>
<?php /**PATH /var/www/html/resources/views/users/user.blade.php ENDPATH**/ ?>