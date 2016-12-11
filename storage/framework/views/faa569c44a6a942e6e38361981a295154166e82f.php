<?php $__env->startSection('content'); ?>

<div class="table-responsive">
  <table class="table  table-hover">
    <thead>
      <tr>
      <th class="col-md-1">授業コード</th>
      <th class="col-md-4">講義名</th>
      <th class="col-md-2">担当教員</th>
      <th class="col-md-2">教室</th>
      <!-- <th class="col-md-1">入退室</th> -->
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($class->classid); ?></td>
        <td><a href="/<?php echo e($class->classid); ?>"><?php echo e($class->className); ?></a></td>
        <td><?php echo e($class->teacherName); ?></td>
        <td><?php echo e($class->roomNumber); ?>教室</td>
        <!-- <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td> -->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
    <tr>
      <td>現在開講されている授業はありません。</td>
    </tr>
    <?php endif; ?>

  </tbody>
  </table>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>