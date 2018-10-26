<html>
    <head>
       
        <title></title>
    </head>
    <body>
        
        <? if ($member[user_id]){
            echo "Welcome, " $member[name];
        }else{?>
            <a href="./member/login.php"><strong>[ Sign in ]</strong></a> &nbsp;
            <a href="./member/login.php"><strong>[ Log in ]</strong></a>
        <?}?>
        
        <? if($member[user_id]){?>
            <a href="./member/logout.php"><strong>[ Logout ]</strong></a>
        <?}?>
        
        <br/><br/>
        <!--no/id/user_id/name/pw/memo/rdgdate/ip -->
        <form action="./test2.php" name="test" method="post">
           <input type='hidden' name="id" value="test">
           <li>id : <input type="text" name="user_id" size="10">
           <li>name : <input type="text" name="name" size="10">
           <li>password : <input type="password" name="pw" size="10">
           <li>memo : <br/>
           <textarea name="memo"></textarea>
           <input type="submit" value="send">
           
           <?
               /*
               $connect = mysql_connect('localhost','root','');
               mysql_select_db('local',$connect);
               if(!$connect)die("can't connect to mySql".mysql_error());
               */
               include("./lib/db_connect.php");
               $connect=dbconn();
               $member= member();
               
               //calling data from query
               $query = "select * from bbs_1 where id='id'";
               $result = mysql_query($query, $connect);
               while($data = mysql_fetch_array($result)){
                   
                   $date_Y=substr($data[regdate],0,4);
                   $date_m=substr($data[regdate],4,2);
                   $date_d=substr($data[regdate],6,2);
                   $date_h = substr($data[regdate],8,2);
                   $date_i = substr($data[regdate],10,2);
                   
                   -name : <?= $data[user_id]; ?>
                   -id : <?= $data[id]; ?>
                   -memo : <?= $data[memo]; ?>
                   -date : <?= $data_Y ?>.<?= $data_m ?>.<?= $data_d?>
                  
                   
               }
            ?>
        </form>
    </body>
</html>