<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>Right-Hand</a>

  <ul class="navbar-nav ml-auto">

    <?php if(auth()->guard()->guest()): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('register')); ?>">ユーザー登録</a>
    </li>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('login')); ?>">ログイン</a>
    </li>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('articles.create')); ?>"><i class="fas fa-pen mr-1"></i>投稿する</a> 
    </li>
    <?php endif; ?>
    
    <?php if(auth()->guard()->check()): ?>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
            onclick="location.href='<?php echo e(route("users.show", ["name" => Auth::user()->name])); ?>'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="<?php echo e(route('logout')); ?>"> 
      <?php echo csrf_field(); ?> 
    </form>
    <!-- Dropdown -->
    <?php endif; ?>

  </ul>

</nav>
<?php /**PATH /var/www/html/resources/views/nav.blade.php ENDPATH**/ ?>