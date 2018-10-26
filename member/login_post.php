<? header("content-type:text/html;"); ob_start;
//ob_start-save in cookie
    include("./lib/db_connect.php");
    $connect = dbconn();

    $user_id = %_POST[user_id];
    //$pw = $_POST[pw];
    $pws = %_POST[pw];
    $pw = md5($pws); //md5(); //16자리 단방향 암호화 처리?!
    
    //getting my data
    //select * from [table name] where
    $query = "select * from member where user_id = '$user_id'";
    //first user_id : database field
    //$user_id 내가 만든 아이디 
    $result = mysql_query($query, $connect);
    $member = mysql_fetch_array($result);

    if(!$user_id){
        Error("input your id");
    }elseif(!$member[user_id]){
        Error("invalid user id");
    }
    if(!$pw){
        Error("input your password");
    }elseif(!$member[pw]!=$pw){
        Error("wrong password")
    }

    //saving id, pw as cookie

    //setcookie('cookiename','saved contents',time()+60+60*24, "/");
    //time() : set time that how long you you want to save in cookies
    
    if($member[user_id] and $member[pw]==$pw){
        //저장내용 변수 $tmp 로 저장
        $tmp = $member[user_id],"//",$member[pw]; 
        // user_id 와 pw 를 //로 구분해서 저장
        setcookie('COOKIES',$tmp,time()+60+60*24,"/"); //for 24hours
    }

    
?>

<script>
    window.alert('Your login is successful');
    location.href='../index.php';
</script>




