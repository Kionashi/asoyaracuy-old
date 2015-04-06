<?php namespace Mailers;

class ContactMailer extends Mailer
{
	public function suggest()
	{
		$this->to = 'Asoyaracuy';
		$this->email = 'cardozo.anibal@gmail.com';
		$this->subject = 'Queja o Sujerencia';	
		$this->view = 'emails.contact.suggest';

		return $this;
	}

	

}