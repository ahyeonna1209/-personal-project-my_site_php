<?
    function dbconn(){
        $host_name="localhost"; 
        $db_user_id="root"; 
        $db_name="bbs_1";
        $db_pw=" ";
        
        //$connect=mysql_connect('hostname','id','pw');
        $connect=mysql_connect($host_name,$db_user_id,$db_pw);
        mysql_select('bbs_1',$connect);
        !if($connect)die('fail to connect to database'.mysql_error());
        return $connect; //return something || finish php script
    };
    
    //error msg
    function Error($msg){
        echo "
        <script>
            window.alert('$msg');
            history.back(1);
        </script>";
        exit; //displaying the most top function 
    }
    
    function member(){
        global $connect;
        $temps=$_COOKIE['COOKIES'];
        //explode('구분기준문자','처리할 내용')
        $cookies = explode("//",$temps);
        
        //id $cookies[0];
        //pw $cookies[1];
        
        ///회원정보 가져오기 ///
        $query = "*select *from member where user_id = '$cookies[0]'";
        mysql_query("set names utf8", $connect);
        $result = mysql_query($query, $connect);
        $member = mysql_fetch_array($result);
        return $member;
        
    }
?>