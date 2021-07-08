<div class="card mt-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <a href="<?php echo e(route('users.show', ['name' => $person->name])); ?>" class="text-dark">
        <i class="fas fa-user-circle fa-3x"></i>
      </a>
      <?php if( Auth::id() !== $person->id ): ?>
        <follow-button
          class="ml-auto"
          :initial-is-followed-by='<?php echo json_encode($person->isFollowedBy(Auth::user()), 15, 512) ?>'
          :authorized='<?php echo json_encode(Auth::check(), 15, 512) ?>'
          endpoint="<?php echo e(route('users.follow', ['name' => $person->name])); ?>"
        >
        </follow-button>
      <?php endif; ?>
    </div>
    <h2 class="h5 card-title m-0">
      <a href="<?php echo e(route('users.show', ['name' => $person->name])); ?>" class="text-dark"><?php echo e($person->name); ?></a>
    </h2>
  </div>
</div>
<?php /**PATH /var/www/html/resources/views/users/person.blade.php ENDPATH**/ ?>