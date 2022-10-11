<? 

class Signup extends Dbh{

    
   protected function creatUser($username,$email,$password){
    $sql = 'INSERT INTO users(username, email, password) VALUES(?, ?, ?);';
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username,$email,$hashedPassword]);
    if(!$stmt){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $result = '';
    
    if($stmt->rowCount() > 0){
        $result = false;
    }else{
        $result = true;
    }

    return $result ;
   }
   protected function checkUser($username,$email){
    $sql = 'SELECT username FROM users WHERE username = ? OR email = ?;';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username,$email]);
    if(!$stmt){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $result = '';
    
    if($stmt->rowCount() > 0){
        $result = false;
    }else{
        $result = true;
    }

    return $result ;
   }
}
