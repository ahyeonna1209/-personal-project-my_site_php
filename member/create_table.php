<?header
    include("../library/db_connect.php");
    $connect=dbconn();
        //$sql="CREATE TABLE, table name,(field)";
        //mysql_query();
        $sql="CREATE TALBE member
        (no int not null auto_increment, 
        PRIMARY KEY(no),
        id char(15),
        user_id char(15),
        name char(15),
        birth char (8),
        sex char(6),
        tel char(12),
        email char(30),
        pw char(30)
        )";
        mysql_query($sql, $connect);
        if(!sql)die('fail to create table'.mysql_error());

?>
