<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{   
        public $firstName;
	public $name;
        public $country;
        public $city;
	public $email;
        public $phone;
	public $subject;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('firstName,name,country, city, email,phone, subject', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			
                        'firstName' => 'Apellidos',
                        'name' => 'Nombre/s',
                        'country' => 'País',
                        'city' => 'Ciudad',
                        'phone' => 'Telefono/Celular',
                        'email' => 'Email',
                        'subject' => 'Asunto',
                       
		);
	}
}