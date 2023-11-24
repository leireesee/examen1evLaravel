<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
        </div>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight max-w-7xl mx-auto sm:px-6 lg:px-8">
        <?php echo e(__('Manzanas')); ?>

    </h2>

    <?php $__currentLoopData = $manzanas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manzana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <p><strong>Id: </strong><?php echo e($manzana->id); ?></p>
                <p><strong>Tipo: </strong><?php echo e($manzana->tipoManzana); ?></p>
                <p><strong>Precio/Kilo: </strong><?php echo e($manzana->precioKilo); ?></p>

                <div style="display: flex">
                    
                    <form action="<?php echo e(route('dashboard.eliminar', $manzana)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" style="z-index: 1000000; background-color: black; color: white; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            Eliminar
                        </button>
                    </form>

                    
                    <a href="<?php echo e(route('formModificar', $manzana)); ?>" style="background-color: #1536a3; color: white; padding: 10px; border-radius: 10px; margin-top: 10px; margin-left: 10px">Modificar</a>
                </div>
                

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>