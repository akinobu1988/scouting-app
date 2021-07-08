<ul class="nav nav-tabs nav-justified mt-3">
  <li class="nav-item">
    <a class="nav-link text-muted <?php echo e($hasArticles ? 'active' : ''); ?>"
       href="<?php echo e(route('users.show', ['name' => $user->name])); ?>">
      投稿
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted <?php echo e($hasLikes ? 'active' : ''); ?>"
       href="<?php echo e(route('users.likes', ['name' => $user->name])); ?>">
      いいね
    </a>
  </li>
</ul><?php /**PATH /var/www/html/resources/views/users/tabs.blade.php ENDPATH**/ ?>