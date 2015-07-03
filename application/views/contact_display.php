<table>

	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Roll no</th>
	</tr>
<?php
foreach($data as $v)
{
	echo "<tr>";
	echo "<td>".$v->name."</td>";
	echo "<td>".$v->email."</td>";
	echo "<td>".$v->address."</td>";
	echo "<td>".$v->roll_no."</td>";
echo "</tr>";
}
?>
</table>