<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="res/style.css">
</head>
<body>
<form action="signup-check.php" method="post">
    <h2>SIGN UP</h2>
    <?php if (isset($_GET['error'])) 
    { 
    ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php 
    } 
    ?>

    <?php if (isset($_GET['success'])) 
    { 
        ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php 
    } 
    ?>

    <label for="name">Name</label>
    <?php if (isset($_GET['name'])) 
    { 
    ?>
        <input type="text" 
               id="name" 
               name="name" 
               placeholder="Name"
               value="<?php echo $_GET['name']; ?>" 
               autocomplete="name"><br>
    <?php 
    } 
    else 
    { 
    ?>
        <input type="text" 
               id="name" 
               name="name" 
               placeholder="Name"
               autocomplete="name"><br>
    <?php 
    }
    ?>

    <label for="uname">User Name</label>
    <?php if (isset($_GET['uname'])) 
    { 
    ?>
        <input type="text" 
               id="uname" 
               name="uname" 
               placeholder="User Name"
               value="<?php echo $_GET['uname']; ?>" 
               autocomplete="username"><br>
    <?php 
    }
    else 
    { 
    ?>
        <input type="text" 
               id="uname" 
               name="uname" 
               placeholder="User Name"
               autocomplete="username"><br>
    <?php 
    }
    ?>

    <label for="password">Password</label>
    <input type="password" 
           id="password" 
           name="password" 
           placeholder="Password" 
           autocomplete="new-password"><br>

    <label for="re_password">Re Password</label>
    <input type="password" 
           id="re_password" 
           name="re_password" 
           placeholder="Re Password" 
           autocomplete="new-password"><br>

    <button type="submit">SIGN UP</button>
    <a href="index.php" class="ca">Already have an account</a>
</form>
</body>
</html>