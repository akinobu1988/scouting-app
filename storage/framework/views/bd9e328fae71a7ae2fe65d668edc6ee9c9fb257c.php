下記のURLからパスワードの再設定を行って下さい。

<?php echo e($url); ?>


このURLの有効期間は<?php echo e($count); ?>分です。

このメールに心あたりがない場合は、第三者がメールアドレスの入力を誤った可能性があります。

その場合は、このメールは破棄していただいて結構です。

Right-Hand事務局(<?php echo e(url(config('app.url'))); ?>)<?php /**PATH /var/www/html/resources/views/emails/password_reset.blade.php ENDPATH**/ ?>