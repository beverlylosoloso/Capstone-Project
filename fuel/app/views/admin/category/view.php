<h2>Viewing #<?php echo $category->id; ?></h2>

<p>
	<strong>Category name:</strong>
	<?php echo $category->category_name; ?></p>

<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/category', 'Back'); ?>