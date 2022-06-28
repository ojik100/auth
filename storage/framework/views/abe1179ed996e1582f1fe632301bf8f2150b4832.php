<?php $__env->startSection('template_title'); ?>
	<?php echo trans('titles.exceeded'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<?php echo trans('titles.exceeded'); ?>

					</div>
					<div class="panel-body">
						<p>
							<?php echo trans('auth.tooManyEmails', ['email' => $email, 'hours' => $hours]); ?>

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rozi\Documents\auth\resources\views/auth/exceeded.blade.php ENDPATH**/ ?>