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
?>