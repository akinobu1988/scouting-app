<?php echo csrf_field(); ?>
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="<?php echo e($article->title ?? old('title')); ?>"> 
</div>
<div class="form-group">
  <article-tags-input
  :initial-tags='<?php echo json_encode($tagNames ?? [], 15, 512) ?>'
  :autocomplete-items='<?php echo json_encode($allTagNames ?? [], 15, 512) ?>'
  >
  </article-tags-input>
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文"><?php echo e($article->body ?? old('body')); ?></textarea> 
</div>
<?php /**PATH /var/www/html/resources/views/articles/form.blade.php ENDPATH**/ ?>