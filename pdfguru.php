<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('dbadmin/vendor/autoload.php');
use Dompdf\Dompdf;

class Pdfguru extends Dompdf{
    public $filename;

    public function __construct()
    {
        parent::__construct();
        $this->filename = "cetakguru.pdf";
    }
    function ci()
    {
        return get_instance();
    }
    function load_view($view,$data = array())
    {
        $html = $this->ci()->load->view($view,$data,true);
        $this->load_html($html);
        $this->render();
        $this->stream($this->filename, array('Attachment' => false));
    }
}

?>