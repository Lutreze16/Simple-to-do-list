<div>
    <div class="flex flex-col min-h-screen container mx-auto items-center w-full space-y-4 py-8">
        <div class="max-w-md w-full mx-auto">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <input wire:model="todo" type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add todos..." required />
                <button wire:click="add" type="button" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add
                </button>
            </div>
        </div>
        <ol class="max-w-md w-full mx-auto text-gray-500 divide-y-2 list-decimal list-inside dark:text-gray-400">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="p-2">
                    <span class="font-semibold text-gray-900 dark:text-white">
                        <?php echo e($todo); ?>

                    </span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </ol>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\To-do-list\resources\views/livewire/simple-to-do.blade.php ENDPATH**/ ?>