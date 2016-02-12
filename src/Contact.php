<?php
    class Contact
    {
        private $name;
        private $phone_number;
        private $address;

        function __construct($contact_name, $contact_phone_number, $contact_address)
        {
            $this->name = $contact_name;
            $this->phone_number = $contact_phone_number;
            $this->address = $contact_address;
        }
// SETTERS
        function setName($contact_name)
        {
            $this->name = $contact_name;
        }

        function setPhoneNumber($contact_phone_number)
        {
            $this->phone_number = $contact_phone_number;
        }

        function setAddress($contact_address)
        {
            $this->address = $contact_address;
        }
// GETTERS
        function getName()
        {
            return $this->name;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function getAddress()
        {
            return $this->address;
        }
    }
?>
