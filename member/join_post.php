<?header("content-type:text/html"); 
    include '../lib/db_user.php';
    $connect=dbconn();
    
    $id=$_POST[id];
    $user_id=$_POST[user_id];
    $name=$_POST[name];
    $birth=$_POST[birth];
    $sex=$_POST[sex];
    $tel=$_POST[tel];
    $email=$_POST[email];
    $pws=$_POST[pw];
    
    /*compulsary part*/
    if(!$user_id)Error("input your id");
    /* checking length of id*/
    if($user_id=substr($user_id,"12"))Error("id should be less than 12words");
    //id condition
    if(preg_match("/[^a_z 0-9]/",$user_id))Error("id should be in lower case & number");
    //if(preg_match("/[^a_z A-Z 0-9]/"))
    
    

    if(!$name)Error("input your name");
    // name condition
    if(strlen($name)<6 or strlen($name)>15)Error("이름은 2-5자 까지 가능"); //한글 1 글자 당 3byte
        
    if(!$birth)Error("input your Date of Birth");
    //BOD condition
    if(strlen($birth)<8 or strlen($birth)>8)Error("생년월일은 8자 입력하시오");
        
    if(!$tel)Error("input your Date of contact");
    //contact condition
    if(strlen($tel)<8 or strlen($tel)>15)Error("연락처 8-15");

    if(!$email)Error("input email address");
    if(preg_match("(^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)",$email)){
        Error("There's something wrong with your email address")
    };

    if(!$pw)Error("input your Date of password");
    
    

    $pw = md5($pws);

    //$regdate=date("YmdHis", time());
    //$ip=getenv("REMOTE_ADDR");

    $query="insert into member(id, user_id, name,birth, sex, tel, email, pw)
    values('$id', '$user_id', '$name','$birth', '$sex', '$tel', '$email', '$pw')";
    mysql_query($query, $connect);
    mysql_close;
  ?>

<script>
        window.alert("Sign in has been completed");
        location.href="../index.php"
</script>