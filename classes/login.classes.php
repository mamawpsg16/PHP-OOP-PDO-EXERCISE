<? 

class Login extends Dbh{

    
   protected function getUser($username,$password){
    $sql = 'SELECT password FROM users WHERE username = ? OR email = ?;';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username,$password]);
    if(!$stmt){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $result = '';
    
    if($stmt->rowCount() === 0){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();$result = false;
    }
    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd = password_verify($password,$pwdHashed[0]['password']);
    if($checkPwd == false){
        $stmt = null;
        header("location: ../index.php?error=wrongpassword");
        exit();$result = false;
    }
    elseif($checkPwd == true){
        $sql = 'SELECT password FROM users WHERE username = ? OR email = ? AND password = ?;';

        if(!$stmt->execute([$username,$username,$password])){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() === 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $user = $stmt->fetchAll();
        session_start();
        $_SESSION['username'] = $user[0]['username'];
        $_SESSION['id'] = $user[0]['id'];

        $stmt = null;
    }
   }
}
