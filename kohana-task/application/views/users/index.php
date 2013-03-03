
<form method="POST" action="<?php echo 'users/delete_all';?>" >

<table border="1">
	<caption>Users for Sidnet</caption>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Surname</th>
		<th>Personal_Number</th>
		<th>Job Position</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Delete 2</th>
	</tr>	
	<?php foreach($users as $r): ?>
	<tr>
		<td><?php echo $r->id; ?></td>
		<td><?php echo $r->name; ?></td>
		<td><?php echo $r->surname; ?></td>
		<td><?php echo $r->personal_number; ?></td>
		<td><?php echo $r->job_position; ?></td>
		<td><?php echo HTML::anchor("users/edit/".$r->id, "Edit"); ?></td>
		<td><a onclick="return confirm('Are you sure?')" href="<?php echo "users/delete/".$r->id;?>">Delete</a></td>
		<td><input type="checkbox" name="idi[]" value="<?php echo $r->id?>"/></td>
	</tr>	
	<?php endforeach ?>
  </table>
  <br/> 
  <a href="<?php echo "users/new/";?>"><input type="button" value="Add Employee"/></a>
  
  <input type="submit" value="Delete 2" onclick="return confirm('Are you sure?')"/>
</form>
  
 