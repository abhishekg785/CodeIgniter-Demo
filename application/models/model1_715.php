<?php
class model1_715 extends CI_Model
{

function insdata($n,$m,$a,$roll)
{

     $name=$this->input->post('Name');
	$query="insert into members 
	values('$n','$m','$a','$roll')";
	$this->db->query($query);

	echo "Hello<h1>$name</h1>,your details have been saved";
	echo "your entered data is";
	/*$query="select * from members";
	$que=$this->db->query($query);
	echo "<table border='2px'>";
	foreach($que->result() as $v)
	{
		echo "<tr>";

       echo "<td>$v->name</td>";
       echo "<td>$v->email</td>";
        echo "<td>$v->address</td>";
        echo "<td>$v->roll_no</td>";

     echo "<tr/>";
	}
  echo "</table>";*/
}



function display()
{

	  //let us load the data into the controller using return statemnet//
 $query="select * from members";
 $que=$this->db->query($query);
 return $que;
}
}
?>