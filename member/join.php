<html>
<head>
<title>Sign in</title>
</head>
<body>
    <b>Sign in</b>
    <br/><br/>
    <form action="./join_post.php" name="member" method="post">
        <input type="hidden" name="id" value="test">
        <li>Account id : <input type="text" name="user_id" size="10"></li>
        <li>Name : <input type="text" name="name" size="10"></li>
        <!--<li>Nick name : <input type="text" name="nick_name" size="10"></li>-->
        <li>Date of Birth : <input type="text" name="birth" size="10"></li>
        <li>Sex : <input type="radio" name="sex" size="10">Male
                <input type="radio" name="sex" size="10">Female</li>
        <li>Telephone : <input type="text" name="tel" size="10"></li>
        <li>Email : <input type="text" name="email" size="10"></li>
        <li>Password : <input type="text" name="pw" size="10"></li>
        <!--<li>Address1 : <input type="text" name="addr_1" size="10"></li>-->
        <!--<li>Address2 : <input type="text" name="addr_2" size="10"></li>-->
        <br/><br/>
        <input type="submit" value="Sign in">
    </form>
</body>
</html>