// Move to board/bbs/list.php
<!--
<?header("content-type:text/html; charset=UTF-8");

    $id=$_POST[id];
    $user_id=$_POST[user_id];
    $name=$_POST[name];
    $pw=$_POST[pw];
    $memo=$_POST[memo];
    $regdate=date("YmdHis", time());
    $ip=getenv('REMOTE_ADDR')
    
    //$connect = mysql_connect('hostname','db_userid','pw');
    $connect = mysql_connect('localhost','root','');//mysql connecting
    //mysql_select_db('db_name','mysql_connect_name:$connect');
    mysql_select_db('root', $connect);//selecting db
    if(!$connect){
        echo 'fail to cnnect to MySQL'.mysql_error();
    }
    //sending query
    $query="insert into bbs_1(id, user_id, name, pw, memo, regdate, ip) 
    values('$id','$user_id','$name','$pw','$memo','$regdate','$ip')";
    mysql_query($query, $connect);

    mysql_close;

?>


<script>
    window.alert("query has been sent succesfully");
    location.href="./index.php";
</script>

-->
