<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
     <table>
         <tr>
             <th>タイトル</th>
             <th>本文</th>
         </tr>
         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
                 <td><?php echo e($post->title); ?></td>
                 <td><?php echo e($post->content); ?></td>
             </tr>            
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
     </table>
 </body>
 
 </html>
<?php /**PATH /Applications/MAMP/htdocs/laravel-basic-kadai/resources/views/posts/index.blade.php ENDPATH**/ ?>