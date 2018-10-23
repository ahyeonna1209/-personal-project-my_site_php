<?header("content-type:text/html"); 
    
include '../library/db_user.php';
    $connect=dbconn();
    
    $id=$_POST[id];
    $user_id=$_POST[user_id];
    $name=$_POST[name];
    $birth=$_POST[birth];
    $sex=$_POST[sex];
    $tel=$_POST[tel];
    $email=$_POST[email];
    $pw=$_POST[pw];

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
