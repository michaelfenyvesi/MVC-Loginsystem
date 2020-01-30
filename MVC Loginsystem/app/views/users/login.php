<?php   require APPROOT . '/views/inc/header.php';?>
<div id="container">
    <div id="box">
        <form action="<?php echo URLROOT; ?>/Users/login" method="post">
            <h1 class="ueberschrift">Login</h1>
				
            <input type="email" name="email" placeholder="E-Mail Adresse" class="input">
            <?php if (isset($data['email'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['email_err']; ?></span>
            </div>
            <?php }?>
            
            
            <input type="password" name="passwort" placeholder="Passwort" class="input"><br>
            <?php if (isset($data['passwort'])){?>
                <span class="errormsg"><?php echo $data['passwort_err']; ?></span>
            <?php }?>
            <div id="submit_flexbox">
                <input type="submit" name="submit"id="main_login" value="login">
                <div id="lostpwd_box">
                    <a href="" id="lostpwd">Passwort vergessen?</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>