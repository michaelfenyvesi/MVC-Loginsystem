<?php   require APPROOT . '/views/inc/header.php';?>
<div id="container">
    <div id="box">
        <form action="<?php echo URLROOT;?>/users/register" method="POST">
            <h1 class="ueberschrift">Registrieren</h1>
		
            <h2 class="ueberschrift" >Pers&oumlnliche Daten</h3>
                    
            <input type="text" name="vorname" placeholder="Vorname" class="input">
            <?php if (isset($data['vorname'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['vorname_err']; ?></span>
            </div>
            <?php }?>
                    
            <input type="text" name="nachname" placeholder="Nachname" class="input">
            <?php if (isset($data['nachname'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['nachname_err']; ?></span>
            </div>
            <?php }?>
                    
            <h2 class="ueberschrift">Spieldaten</h3>
                    
            <select name="avatar" class="input">
                <option value="blackwidow">Blackwidow</option>
                <option value="deadpool">Deadpool</option>
            </select>
                    
            <input type="text" name="uid" placeholder="Benutzername" class="input">
            <?php if (isset($data['username'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['username_err']; ?></span>
            </div>
            <?php }?>
                    
            <input type="text" name="email" placeholder="E-Mail" class="input">
            <?php if (isset($data['email'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['email_err']; ?></span>
            </div>
            <?php }?>
                    
            <input type="password" name="passwort1" placeholder="Passwort" class="input">
            <?php if (isset($data['passwort1'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['passwort1_err']; ?></span>
            </div>
            <?php }?>
                    
            <input type="password" name="passwort2" placeholder="Passwort Wiederholen" class="input">
            <?php if (isset($data['passwort2'])){?>
            <div class="errormsgbox">
                <span class="errormsg"><?php echo $data['passwort2_err']; ?></span>
            </div>
            <?php }?>
            
            <div id="submit_flexbox">
                
                <input type="submit" name="submit" id="main_login" value="registrieren"><br>

                <div id="lostpwd_box">
                    <a href="<?php echo URLROOT; ?>/users/login" id="lostpwd">Du hast einen Account?</a>
                </div>
            </div>
        </form>	
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>