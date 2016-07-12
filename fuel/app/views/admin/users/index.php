<h2>List of Registered Hospitals and Clinics in Davao City </h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Hospital/Clinic Name</th>
			<th>Address</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->contact_number; ?></td>
			<td><?php echo $item->hospital_name; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->Website; ?></td>
			<td><?php echo Html::anchor('admin/users/view/'.$item->id, 'View'); ?> </td>
			<td><?php echo Html::anchor('admin/users/edit/'.$item->id, 'Edit'); ?> </td>
			<td><?php echo Html::anchor('admin/users/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/users/create', 'Add new User', array('class' => 'btn btn-success')); ?>

</p>
