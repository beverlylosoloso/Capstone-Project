<div class="nav navbar-nav pull-right">
	<?php echo Html::anchor('admin/users/create_hospital', '<span class="glyphcon glyphicon-plus"></span>Hospital', array('class' => 'btn btn-primary')); ?>
</div>

<h2> DOH Staffs </h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Address</th>
			<th>Role</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->contact_number; ?></td>
			<td><?php echo $item->password;?></td>
			<?php foreach ($roles as $role): ?>
				<?php if ($role->id == $item->role_id): ?>
					<td><?php echo $role->role_description ?></td>
				<?php endif ?>
			<?php endforeach ?>
			<td><?php echo Html::anchor('admin/users/view/'.$item->id, 'View'); ?> </td>
			<td><?php echo Html::anchor('admin/users/edit/'.$item->id, 'Edit'); ?> </td>
			<td><?php echo Html::anchor('admin/users/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/users/create', 'Add new Staff', array('class' => 'btn btn-success')); ?>

</p>
