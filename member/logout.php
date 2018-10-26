<?header("content-type:text/html");
    //setcookie('cookie name',0,0,'cookie값')//0으로 하면 쿠키값 지워짐
     setcookie("COOKIES"," ",0,"/"); //delete cookie
?>


<script>
    window.alert('You are logged out');
    location.href="../index.php";
</script>