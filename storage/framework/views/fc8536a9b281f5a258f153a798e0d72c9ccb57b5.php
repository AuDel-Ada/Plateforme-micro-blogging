<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Modification of my profile')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="row row-x-center s-styles">

        <div class="column large-6 tab-12">
            <!-- Session Status -->
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <!-- Validation Errors -->
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 
            <form class="h-add-bottom" method="POST" action="<?php echo e(route('profile')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                <!-- Name -->
                <div>
                    <label for="name"><?php echo app('translator')->get('Name'); ?></label>  
                    <input 
                      id="name" 
                      class="h-full-width" 
                      type="text" 
                      name="name" 
                      placeholder="<?php echo app('translator')->get('Your name'); ?>" 
                      value="<?php echo e(old('name', auth()->user()->name)); ?>" 
                      required 
                      autofocus>
                </div>

                <!-- Email Address -->
                 <div>
                    <label for="email"><?php echo app('translator')->get('Email'); ?></label>  
                    <input 
                      id="email" 
                      class="h-full-width" 
                      type="email" 
                      name="email" 
                      placeholder="<?php echo app('translator')->get('Your email'); ?>" 
                      value="<?php echo e(old('email', auth()->user()->email)); ?>" 
                      required>
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password"><?php echo app('translator')->get('Password'); ?> (<?php echo app('translator')->get('optional'); ?>)</label> 
                    <input 
                        id="password" 
                        class="h-full-width" 
                        type="password" 
                        name="password" 
                        placeholder="<?php echo app('translator')->get('Your Password if you want to change it'); ?>">
                </div>
                
                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation"><?php echo app('translator')->get('Confirm Password'); ?></label> 
                    <input 
                        id="password_confirmation" 
                        class="h-full-width" 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="<?php echo app('translator')->get('Confirm your Password'); ?>">
                </div>

                 <!-- biography -->
                 <div>
                    <label for="biography"><?php echo app('translator')->get('Biography'); ?></label> 
                    <input 
                        id="biography" 
                        class="h-full-width" 
                        type="text" 
                        name="biography" 
                        placeholder="<?php echo app('translator')->get('Write Your Biography'); ?>">
                </div>
                <!-- photo -->
                <div>
                    <label for="img_profil"><?php echo app('translator')->get('Photo'); ?></label> 
                    <input 
                        id="img_profil" 
                        class="h-full-width" 
                        type="file" 
                        name="img_profil" >
                </div>

                
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'ml-3']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
                    <?php echo e(__('save')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> 
            </form>
            
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/auth/profile.blade.php ENDPATH**/ ?>