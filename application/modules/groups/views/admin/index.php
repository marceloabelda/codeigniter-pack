<div class='mainInfo'>	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<table id="datatable">
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
		<?php foreach ($groups as $group):?>
			<tr>
				<td><?php echo $group->name?></td>
				<td><?php echo $group->description?></td>
			</tr>
		<?php endforeach;?>
	</table>
</div>
