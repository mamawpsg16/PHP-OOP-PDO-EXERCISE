<? 

class LoginContr extends Login{
    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;

        // echo 'Signup Controller';
    }

       
    public function loginUser() {
        if($this->emptyInput === false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->validateUsername === false){
            header("location: ../index.php?error=username");
            exit();
        }
     

        $this->creatUser($this->username, $this->email, $this->password);

    }
    private function emptyInput() {
        $result = '';
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirmation_password)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function validateUsername(){
        $result = '';
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }


 
  

}
