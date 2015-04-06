<? namespace Mailers;

//class InvalidContactInfoException extends \Exception{}

abstract class Mailer 
{
	protected $to;
	protected $email;
	protected $subject;
	protected $view;
	protected $data = [];



	
	public function __construct($body, $title)
	{
		$this->data = ['body' => $body, 'title' =>$title];
	} 
	

	public function deliver()
	{
		return \Mail::send($this->view, $this->data, function($message)
		{
			$message->to($this->email, $this->to)->subject($this->subject);
		}); 
	}

}