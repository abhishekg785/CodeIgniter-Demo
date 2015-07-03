<?php
class cont1_715 extends CI_Controller
{
public function display()
{
$this->load->view('view1_715');
if($this->input->post('sub'))
{
$n=$this->input->post('Name');
$m=$this->input->post('mail');
$a=$this->input->post('add');
$roll=$this->input->post('roll');
$this->load->model('model1_715');
$this->model1_715->insdata($n,$m,$a,$roll);
//display data//
$res['data']=$this->model1_715->display();
$this->load->view('contact_display.php',$res);

}
}
}
?>