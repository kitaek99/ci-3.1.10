<?php

class Test extends CI_Controller {

    /**
     * http://localhost/index.php/test/t1
     */
    public function t1()
	{
		$this->load->view('test/t1');
	}
	
	public function t2()
	{
	    $this->load->view('test/t2');
	}
}
