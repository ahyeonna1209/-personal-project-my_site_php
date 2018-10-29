<?header
    include("../lib/db_connect.php");
    $connect=dbconn();
    
        //$sql="CREATE TABLE, table name,(field)";
        //mysql_query();
        

        $sql="CREATE TABLE bbs1
        (no int not null auto_increment, 
        PRIMARY KEY(no),
        id char(15),
        level int,
        user_id char(15),
        name char(15),
        nick_name char(15),
        pw char(30),
        subject char(150),
        story text,
        hit int,
        regdate char(20),
        ip char(20)
        )";


        //$sql="alter table bbs1 drop column level" //deleting field
        //$sql="drop table bbs1" //deleting bbs1 table    
    
        //$sql = "alter table bbs1 add level int";//adding int type level in bbs1 table
        //$sql = "alter table bbs1 change level level2 varchar(20)"; //changing field name and type
        //$sql = "alter table bbs1 modify level2 int"; //field type changing
        //$sql = "alter table bbs1 rename bbs2"; // changing table name
        $sql="SHOW TABLES FROM bbs1";
        $result = mysql_query($sql);
        if(!$result){
        echo "mysql error".mysql_error();
        exit;
        }
        while($row=mysql_fetchrow($result)){
            echo "Table:".$row[0]."<br/>"

        })

        mysql_query($sql, $connect);
        if(!sql)die('fail to create table'.mysql_error());
        echo "<p>table has been created succesfully</p>";
?>