<?php

/**
 * User Model
 */
class User extends Model
{  
   protected $allowedColumns = [
    'name',
    'user_type',
    'nic',
    'contact_no',
    'email', 
    'password',
    'date',

   ]; 
    
   protected $beforeInsert = [
    'hash_password'
 ];

    public function validate($DATA)
    {
         $this->errors = array();


           //check for name
            if (empty($DATA['name']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['name'])) {
                $this->errors['name'] = "Only letters and spaces allowed in name";
            }

            //check for email
            if(empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL))
            {
                $this->errors['email'] = "email is not valid";
            }
            
            //check if email exists
            if($this->where('email' ,$DATA['email']))
            {
                $this->errors['email'] = "email is already taken";
            }

            
            //check for user_type
            $user_type= ['receptionist','medical-staff','daycare-staff','pet-ambulance-driver','veterinarian','admin']; 
            if(empty($DATA['user_type']) || !in_array($DATA['user_type'], $user_type ))
            {
                $this->errors['user_type'] = "Please select a user";
            }

            //check for nic
            if (empty($DATA['nic']) || !preg_match('/^[0-9]{9}[vVxX]|[0-9]{12}$/', $DATA['nic'])) {
                $this->errors['nic'] = "NIC is not valid";
            }
            

            //check for contactno
            if(empty($DATA['contact_no']) || !preg_match('/^[0-9]{10}$/', $DATA['contact_no']))
            {
                $this->errors['contact_no'] = "Contact No is not valid";
            }
            
            //check for address
            if(empty($DATA['address']))
            {
                $this->errors['address'] = "Address is not valid";
            }

            //check for password
            if(empty($DATA['password']) || $DATA['password'] != $DATA['password2'])
            {
                $this->errors['password'] = "Passwords do not match";
            }
            
            //check for password length
            if(strlen($DATA['password']) <=8)
            {
                $this->errors['password'] = "Passwords must be 8 characters long";
            }
            
            


            if(count($this->errors) == 0)
            { 
                return true;
            } 

        return false;

    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
  
}