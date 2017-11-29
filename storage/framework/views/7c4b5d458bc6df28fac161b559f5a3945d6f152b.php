<?php $__env->startSection('content'); ?>
    <div class="container">
      <h2>All</h2>
      <!-- div.col-sm-6.col-md-4.col-lg-3.col-xl-2*8>img[src=http://via.placeholder.com/300x200]+h3{Metachannel $}+p{just a test} -->
      
      <?php $__currentLoopData = $metachannels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metachannel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
          <a href="<?php echo e(url('metachannels').'/'.$metachannel->id); ?>">
            <img src="http://via.placeholder.com/300x200" alt="">
            <h3><?php echo e($metachannel->name); ?></h3>
          </a>
          <p>
            Channels:
            <?php $__currentLoopData = $metachannel->channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="https://www.youtube.com/channel/<?php echo e($channel->ytid); ?>"><?php echo e($channel->name); ?></a>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </p>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      <!--
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 1</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 2</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 3</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 4</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 5</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 6</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 7</h3>
        <p>just a test</p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <img src="http://via.placeholder.com/300x200" alt="">
        <h3>Metachannel 8</h3>
        <p>just a test</p>
      </div>
      -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>