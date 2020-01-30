<?php   require APPROOT . '/views/inc/header.php';?>
<div id="container">
    <div id="box3">
        <h1 class="ueberschriftfragen">Fragen</h1>
        <div id="stand">
           
            <div id="gewinner">
                <p >Du bist der Gewinner und besitzt 1599€</p>
            </div>
            
            <div id="richtig">
                <p>Du hast richtig geantwortet:</p>
            </div>

            <div id="falsch">
                <p>Deadpool hat falsch geantwortet:</p>
            </div>
	
            <div id="standbox">
                <p id="stand"></p>
            </div>
        </div>

			<?php echo $data['kategorie_auswahl'];?>
        <div id="flexbox">
            <div id="fragebox">
				<p id="frage">Wie klein sind große Semmeln?</p>

				<form id="frageform" action="<?php echo URLROOT;?>/fragen/frage" method="post">
				    <input id="antwort1" type="checkbox" name="" value="">
				    <label for="antwort1" class="antworten">Was ist IT Strategie?</label>
				    <br>
                    <br>
                    <input id="antwort2" type="checkbox" name="" value="">
                    <label for="antwort2" class="antworten">Was ist IT Strategie?</label>
                    <br>
                    <br>
                    <input id="antwort3" type="checkbox" name="" value="">
                    <label for="antwort3" class="antworten">Was ist IT Strategie?</label>
                    <br>
                    <br>
                    <input id="antwort4" type="checkbox" name="" value="">
                    <label for="antwort4" class="antworten">Was ist IT Strategie?</label>
                    <br>
                    <br>

                    <input type="submit" name="fragensubmit" id="fragensubmit" value="antworten">
                  </form>
					
                  <b><p id="fragenstand">Fragen 2/10</p></b>
				
                  <div id="timerbox">
                      <p id="timer">Verbleibende Zeit: 00:30</p>
                      <meter id="timerline" min="0" low="20" value="100" max="100"></meter>
                  </div>
            </div>
				
            <div id="avatar">
                <div id="avatar1">
                    <img id="spieleravatar" src="img/black-widow_head.png">
                    <div class="avatartext">
                        <b><p class="avatarp">(Du)</p>
                        <p class="avatarp">1000 €</p></b>
                    </div>
                </div>

				<div id="avatar2">
                    <img id="computeravatar" src="img/deadpool_head.png" alt="avatar">
                    <div class="avatartext">
                        <p class="avatarp">Deadpool</p>
                        <p class="avatarp">400 €</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>