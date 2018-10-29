<html>
    <head>
        <meta http-equiv="content-type" content="text/html;" />
        <link type="text/css" href="../lib/m_styole.css" rel="stylesheet" />
        <title>Writing post in the board</title>
        <?
        include("../../lib/db_connect.php");
        $connect = dbconn();
        $member = member();
        ?>
    </head>
    
    <body>
      
      <b> - Writing a post - </b>
      
      <form name="write" action="write_post.php" method="post">
          <input type="hidden" name="id" value="bbs1" />
      </form>
      
      
      <? 
      /*
      no
      id
      //level
      user_id
      name
      nick_name
      
      subject
      story
      hit
      regdate
      ip
      */
      ?>
     
      <tr>
          <td>
              <li>ID&nbsp;<input type="text" name="user_id" size="15" value="<?= $member[user_id] ?>" readonly="readonly" /> </li> 
          </td>
      </tr>  
      
      <tr>
          <td>
              <li>NAME &nbsp; <input type="text" name="name" size="15" value="<?= $member[name] ?>" readonly="readonly" /> </li>
              <li>NICK NAME &nbsp; <input type="text" name="nick_name" size="15" value="<?= $member[nick_name] ?>" readonly="readonly" /></li>
          </td>
      </tr> 
      <tr>
          <td>
              <li>SUBJECT &nbsp; <input type="subject" name="subject" size="30" value="<?= $member[subject] ?>" style="width:400px;" /></li>
          </td>
          
      </tr>
     <br/>
    <tr>
        <td >
            <textarea name="story" style="width:80%; height:400px;"></textarea>
        </td>
    </tr>
    <br/><br/>          
    <tr>
        <td width="100%" height="30" bgcolor="#E0E0E0" colspan="2" align="center" valign="middle">
            <input type="submit" value="submit" />
        </td>
    </tr>
                
      
    </body>
</html>