<? 

class SignupContr extends Signup{
    private $email;
    private $username;
    private $password;
    private $confirmation_password;

    public function __construct($email, $username, $password, $confirmation_password){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmation_password = $confirmation_password;

        // echo 'Signup Controller';
    }

       
    public function insertUser() {
        // if($this->emptyInput === false){
        //     header("location: ../index.php?error=emptyinput");
        //     exit();
        // }
        // if($this->validateUsername === false){
        //     header("location: ../index.php?error=username");
        //     exit();
        // }
        // if($this->validateEmail === false){
        //     header("location: ../index.php?error=email");
        //     exit();
        // }
        // if($this->passwordConfirmation === false){
        //     header("location: ../index.php?error=password");
        //     exit();
        // }
        // if($this->checkUserExists === false){
        //     header("location: ../index.php?error=useroremailtaken");
        //     exit();
        // }

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

    private function validateEmail(){
        $result = '';
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function passwordConfirmation(){
        $result = '';
        if($this->password !== $this->confirmation_password){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function checkUserExists(){
        $result = '';
        if(!$this->checkUser($this->username,$this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
  

}
