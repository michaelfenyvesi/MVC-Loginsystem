<?php   require APPROOT . '/views/inc/header.php';?>
	<div id="container">
				<div id="erklärungs_box">
					<h1 class="ueberschrift">Kategorie</h1>
					<p id="p">Je höher der Gewinnwert, desto schwieriger werden die Fragen!</p>	
				</div>
		          
                 <?php if (!empty($data['kategorie_auswahl_err'])){?>
                    <div id="errormsgbox">
                        <span class="errormsg"><?php echo $data['kategorie_auswahl_err']; ?></span>
                    </div>
                <?php }?>
        
				<form action="<?php echo URLROOT;?>/fragen" method="post">
					<div id="kategorieall">
						<div class="spalte">
							<div class="kattegorie">
								<p class="text">TV</p>
							</div>
							
							<input id="TV1" class="antwort" name="kategorie_antwort" value="1" type="radio" /><label onclick="ButtonColor('TV1')" class="buttonkategorie" for="TV1"><span class="text">€ 100</span></label>
                            
							<input id="TV2" class="antwort" name="kategorie_antwort" value="2" type="radio" /><label onclick="ButtonColor('TV2')" class="buttonkategorie" for="TV2"><span class="text">€ 200</span></label>
							<input id="TV3" class="antwort" name="kategorie_antwort" value="3" type="radio" /><label onclick="ButtonColor('TV3')" class="buttonkategorie" for="TV3"><span class="text">€ 500</span></label>
							<input id="TV4" class="antwort"name="kategorie_antwort" value="4" type="radio" /><label onclick="ButtonColor('TV4')" class="buttonkategorie" for="TV4"><span class="text">€ 750</span></label>
						</div>
									
						<div class="spalte">
							<div class="kattegorie">
								<p class="text">SSD</p>
							</div>
							
							<input id="SSD1" class="antwort" name="kategorie_antwort" value="5" type="radio" /><label onclick="ButtonColor('SSD1')" class="buttonkategorie" for="SSD1"><span class="text">€ 100</span></label>
							<input id="SSD2" class="antwort" name="kategorie_antwort" value="6" type="radio" /><label onclick="ButtonColor('SSD2')" class="buttonkategorie" for="SSD2"><span class="text">€ 200</span></label>
							<input id="SSD3" class="antwort" name="kategorie_antwort" value="7" type="radio" /><label onclick="ButtonColor('SSD3')" class="buttonkategorie" for="SSD3"><span class="text">€ 500</span></label>
							<input id="SSD4" class="antwort"name="kategorie_antwort" value="8" type="radio" /><label onclick="ButtonColor('SSD4')" class="buttonkategorie" for="SSD4"><span class="text">€ 750</span></label>
							<input id="SSD5" class="antwort" name="kategorie_antwort" value="9" type="radio" /><label onclick="ButtonColor('SSD5')"class="buttonkategorie" for="SSD5"><span class="text">€ 1000</span></label>
						</div>
						
						<div class="spalte">
							<div class="kattegorie">
								<p class="text">Web</p>
							</div>
							
							<input id="WEB1" class="antwort" name="kategorie_antwort" value="10" type="radio" /><label onclick="ButtonColor('WEB1')" class="buttonkategorie" for="WEB1"><span class="text">€ 100</span></label>
							<input id="WEB2" class="antwort" name="kategorie_antwort" value="11" type="radio" /><label onclick="ButtonColor('WEB2')" class="buttonkategorie" for="WEB2"><span class="text">€ 200</span></label>
							<input id="WEB3" class="antwort" name="kategorie_antwort" value="12" type="radio" /><label onclick="ButtonColor('WEB3')" class="buttonkategorie" for="WEB3"><span class="text">€ 500</span></label>
							<input id="WEB4" class="antwort"name="kategorie_antwort" value="12" type="radio" /><label onclick="ButtonColor('WEB4')" class="buttonkategorie" for="WEB4"><span class="text">€ 750</span></label>
							<input id="WEB5" class="antwort" name="kategorie_antwort" value="14" type="radio" /><label onclick="ButtonColor('WEB5')"class="buttonkategorie" for="WEB5"><span class="text">€ 1000</span></label>
						</div>
						
						<div class="spalte">
							<div class="kattegorie">
								<p class="text">Sport</p>
							</div>
							
							<input id="SPORT1" class="antwort" name="kategorie_antwort" value="15" type="radio" /><label onclick="ButtonColor('SPORT1')" class="buttonkategorie" for="SPORT1"><span class="text">€ 100</span></label>
							<input id="SPORT2" class="antwort" name="kategorie_antwort" value="16" type="radio" /><label onclick="ButtonColor('SPORT2')" class="buttonkategorie" for="SPORT2"><span class="text">€ 200</span></label>
							<input id="SPORT3" class="antwort" name="kategorie_antwort" value=17 type="radio" /><label onclick="ButtonColor('SPORT3')" class="buttonkategorie" for="SPORT3"><span class="text">€ 500</span></label>
							<input id="SPORT4" class="antwort"name="kategorie_antwort" value="18" type="radio" /><label onclick="ButtonColor('SPORT4')" class="buttonkategorie" for="SPORT4"><span class="text">€ 750</span></label>
						</div>
						
						<div class="spalte">
							<div class="kattegorie">
								<p class="text">TUWIEN</p>
							</div>
							
							<input id="TUWIEN1" class="antwort" name="kategorie_antwort" value="19" type="radio" /><label onclick="ButtonColor('TUWIEN1')" class="buttonkategorie" for="TUWIEN1"><span class="text">€ 100</span></label>
							<input id="TUWIEN2" class="antwort" name="kategorie_antwort" value="20" type="radio" /><label onclick="ButtonColor('TUWIEN2')" class="buttonkategorie" for="TUWIEN2"><span class="text">€ 200</span></label>
							<input id="TUWIEN3" class="antwort" name="kategorie_antwort" value="21" type="radio" /><label onclick="ButtonColor('TUWIEN3')" class="buttonkategorie" for="TUWIEN3"><span class="text">€ 500</span></label>
							<input id="TUWIEN4" class="antwort"name="kategorie_antwort" value="22" type="radio" /><label onclick="ButtonColor('TUWIEN4')" class="buttonkategorie" for="TUWIEN4"><span class="text">€ 750</span></label>
							<input id="TUWIEN5" class="antwort" name="kategorie_antwort" value="23" type="radio" /><label onclick="ButtonColor('TUWIEN5')"class="buttonkategorie" for="TUWIEN5"><span class="text">€ 1000</span></label>
						</div>
						
					
					</div>
					
					<input id ="kategorie-submit" type="submit" name="kategoriesubmit" value="wählen">
				</form>
			</div>		
<?php require APPROOT . '/views/inc/footer.php'; ?>