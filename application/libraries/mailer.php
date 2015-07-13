<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer {
    
    private $subject = '';
    private $body = '';
    private $from = '';
    private $to = '';
	
	function send_mail_to()
    {
    	$CI =& get_instance();
    	$CI->load->library('email');
        
       	$config['protocol'] = 'sendmail';
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
            	
        $CI->email->initialize($config);
                
        $CI->email->to($this->to);
		if($this->from != "noreply@perfectabrussels.be")
		{
			$CI->email->reply_to($this->from, "Perfecta");
		}
        $CI->email->from($this->from, 'Perfecta');
        $CI->email->subject($this->subject);
                
        $CI->email->message($this->body);
        $email_sent = $CI->email->send();

        return  ($email_sent)?true:false;
		        
	}
	
	function send_mail($to,$subject,$body,$from='noreply@perfectabrussels.be')
	{
		$this->subject = $subject;
		$this->to = $to;
		$this->body = $body;
        $this->from = $from;
     	$is_email_sent = $this->send_mail_to();
     	return $is_email_sent;   
	}
    
}  
