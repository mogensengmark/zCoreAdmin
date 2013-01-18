
<div class="wrap">
	<div id="errorMessage"></div>
	<form name="zCoreRegistrationForm" id="zCoreRegistrationForm" action="" method="post">
		<div id="formSection01" class="formSection">
			<h2>Brugeroplysninger</h2><br />
			<div class="formRow">
				<div class="fieldSection fieldSectionLeft">  
					Fornavn<br />
					<input type="text" name="firstName" id="firstName" placeholder="Angiv fornavn"/>
				</div>
				<div class="fieldSection"> 
					Efternavn<br />
					<input type="text" name="lastName" id="lastName" placeholder="Angiv efternavn"/>
				</div>
			</div> <!-- .formRow -->
			<div class="formRow">
				<div class="fieldSection fieldSectionLeft">  
					Brugernavn<br />
					<input type="text" name="userName" id="username" placeholder="Angiv brugernavn"/>
				</div>
				<div class="fieldSectionMiddle fieldSectionLeft"> 
					Kodeord<br />
					<input type="password" name="passwordFirst" id="passwordFirst" placeholder="Angiv kodeord"/>
				</div>
				<div class="fieldSection"> 
					Gentag Kodeord<br />
					<input type="password" name="passwordSecond" id="passwordSecond" placeholder="Gentag kodeord"/>
				</div>
				<div class="fieldSection">
					Brugertype:<br />
					<select name="userType" id="userType" class="registrationFormSelect">
						<option "">Vælg brugertype</option>
						<option "member">Medlem</option>
						<option "parentMom">Forælder - Mor</option>
						<option "parentDad">Forælder - Far</option>
						<option "guardian">Værge</option>
						<option "other">Andet</option>
					</select>
				</div>
			</div> <!-- .formRow -->


		</div> <!-- #formSection01" -->

		<div id="formSection02" class="formSection">
			section 02
		</div> <!-- #formSection02" -->
		<div id="formSection03" class="formSection">
			section 03
		</div> <!-- #formSection03" -->

	</form>
</div> <!-- .wrap -->