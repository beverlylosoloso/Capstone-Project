<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Category name', 'category_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('category_name', Input::post('category_name', isset($category) ? $category->category_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Category name')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>