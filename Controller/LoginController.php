<?php
require_once './setup.php';
//$databaseManager->connect();

class LoginController
{
    private $databaseManager;
   
    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    //if ($_POST['login'] == )
    //TODO: start database (if login submit)
    //TODO: select role of profile 


    public function login($role,$email,$password)
    {


        $sql = "SELECT * FROM $role WHERE email=?";
      
           $results = $this->databaseManager->database->prepare($sql);
                    
           $results->execute([$email]);

          
         foreach($results as $result){
             if($result["password"]==$password){
                 echo "correct";
             }else{
                 echo "not correct";
             };
         }

         //TODO: need to put error msg if password incorrect + role not match
         
        
    }



}