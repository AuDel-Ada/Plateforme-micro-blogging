<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

   <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <?php echo e(__('my profile')); ?>

    </h2>
   <?php $__env->endSlot(); ?>

  <body class="antialiased">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

        <div class="text-center text-sm text-gray-500 sm:text-left">
          <div class="flex items-right mt-3 flex justify-left">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
              <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>

            <a href="/modifProfile" class="ml-1 underline ">
              Edit my profile
            </a>
            <a href="/writeNewPost" class="ml-1 underline ">
              New post
            </a>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center">
            <img src="<?php echo e($user->img_profil); ?>" class="w-12 mb-3 shadow-xl rounded-full mt-0">
            <div class="ml-4 text-lg leading-7 font-semibold"><?php echo e($user->name); ?></div>
          </div>
            <div class="flex items-center">
              <div class="ml-4 text-lg leading-7 font-semibold">Biography</div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <?php echo e($user->biography); ?>

              </div>
            </div>
        </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold">MyPosts</div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2" >
              <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="mt-5 text-gray-600 dark:text-gray-400 text-sm">

                <div>
                  <td><?php echo e($article->id); ?></td>
                  <td><strong><?php echo e($article->created_at); ?></strong></td>
                  
                  <div>
                    <td><?php echo e($article->description); ?></td>
                    <td><img src="<?php echo e($article->img_url); ?>"></td>
                    
                    <div  class="flex flex-row ml-20">
                      <td><a class="button is-warning border-2 mt-2" href="">Modifier</a>
                        <form action="" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          <button class="button is-danger border-2 mt-2 ml-2" type="submit">Supprimer</button>
                        </form>
                      </td>
                    </div>
                  </div>
                </div>

              </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

          </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
          <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Blurry Tof by Aurelie Delaunay
          </div>
        </div>

      </div>
    </div>
  </body>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/users/show.blade.php ENDPATH**/ ?>