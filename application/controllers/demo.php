<?php 
class Demo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
 
    function index($page = 0)
    {
        // To Display Basic Info without Database
        $data['username'] = 'Bhumi'; 
      
        // To Display Basic Info without Database
        $data['company'] = 'CreativeDev'; 
        
         // To load view file.
        $this->load->view('v_demo', $data);
        
         // To load model file.
        $this->load->model('m_demo');

         // To get resultset of query
        $result = $this->m_demo->getRows($page);
        
        echo "<table border=1><tr><td><b>CATEGORY</b></td></tr>";
        
        foreach($result as $item) {
            echo "<tr><td>" . $item['name'] . '</td></tr>';
        }
 
        echo "</table>";
    }
}
?>