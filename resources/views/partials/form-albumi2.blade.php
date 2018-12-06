<form method="POST" action="/album/{{$album->id}}/edit" role="form" id="details" enctype="multipart/form-data">

   		<!-- Izdavac -->				
	<div class="form-group">
		<input type="text" class="form-control" id="izdavac" name="izdavac" form="details">
		<p class="help-block"><em><small>izdavač</small></em></p>
	</div>
		<!-- Godina -->
	<div class="form-group">
		<input type="number" min="1900" class="form-control col-md-6"  id="godina" name="godina" form="details">
		<p class="help-block"><em><small>godina</small></em></p>
	</div>
	
		<!-- Tiraz -->
	<div class="form-group">
		<input type="number" min="1" class="form-control col-md-6" id="tiraz" name="tiraz" form="details">
		<p class="help-block"><em><small>tiraž</small></em></p>
	</div>
	
	<hr>

		<!-- Opis -->
	<div class="form-group">
		<textarea class="form-control" rows="3" id="opis" name="opis" form="details"></textarea> 
		<!--<textarea class="form-control" id="article-ckeditor" name="opis" form="create" rows="5" cols="20"></textarea>-->
		<p class="help-block"><em><small>opis</small></em></p>
	</div>

	<!-- Dodati podkategoriju! -->

    <div class="form-group">
		  <select name="kategorija" class="form-control col-md-10" form="details">
		  
				<option value="" selected><em>odaberite kategoriju...</em></option>
		  
				<option value="Sport">
					______________________________ Sport
				</option>
				
				<option value="Fudbal svetska prvenstva" style="font-size: 10px;">
					Fudbal - svetska prvenstva
				</option>
				
				<option value="Fudbal evropska prvenstva" style="font-size: 10px;">
					Fudbal - evropska prvenstva
				</option>
				
				<option value="Fudbal domaće lige" style="font-size: 10px;">
					Fudbal - domaće lige
				</option>
				
				<option value="Fudbal strane" style="font-size: 10px;">
					Fudbal - strane lige					
				</option>
				
				<option value="Fudbal kartice" style="font-size: 10px;">
					Fudbal - kartice
				</option>
				
				<option value="Fudbal ostalo" style="font-size: 10px;">
					Fudbal - ostalo
				</option>
					
				<option value="Košarka domaće lige" style="font-size: 10px;">
					Košarka - domaće lige
				</option>
				
				<option value="Košarka kartice" style="font-size: 10px;">
					Košrka - kartice
				</option>
				
				<option value="Košarka ostalo" style="font-size: 10px;">
					Košarka - ostalo
				</option>
				
				
				<option value="Druga sportska takmičenja" style="font-size: 10px;">
					Druga sportska takmičenja
				</option>
				
				<option value="Sport ostalo" style="font-size: 10px;">
					Sport - ostalo
				</option>
	
				<option value="Auto-moto i saobraćaj">
					______________________________ Auto-moto i saobraćaj
				</option>
				
				
				<option value="Automobili" style="font-size: 10px;">
					Automobili
				</option>
				
				<option value="Motori" style="font-size: 10px;">
					Motori
				</option>
				
				<option value="Avijacija" style="font-size: 10px;">
					Avijacija i pomorstvo
				</option>
				
				<option value="Auto-moto ostalo" style="font-size: 10px;">
					Ostalo
				</option>
				
				
				
				<option value="Flora i fauna">
					______________________________ Flora i fauna
				</option>
				
				<option value="Biljke" style="font-size: 10px;">
					Biljke
				</option>
				
				<option value="Životinje" style="font-size: 10px;">
					Životinje
				</option>
				
				<option value="Flora ostalo" style="font-size: 10px;">
					Ostalo
				</option>
				
				
				<option value="">
					______________________________ Umetnost
				</option>
				
				<option value="Film" style="font-size: 10px;">
					Filmovi
				</option>
				
				<option value="Serije" style="font-size: 10px;">
					TV Serije
				</option>
				
						
				<option value="Film ostalo" style="font-size: 10px;">
					Film - ostalo
				</option>
				
				<option value="Likovna umetnost" style="font-size: 10px;">
					Likovna umetnost
				</option>
				
				<option value="Muzika" style="font-size: 10px;">
					Muzika
				</option>
				
				<option value="Umetnost ostalo" style="font-size: 10px;">
					Umetnost - ostalo
				</option>
				
				<option value="">
					______________________________ Crtani
				</option>
				
				<option value="Dizni crtaći" style="font-size: 10px;">
					Dizni crtaći
				</option>
				
				<option value="Ostali crtaći" style="font-size: 10px;">
					Ostali crtaći
				</option>
				
				<option value="Strip junaci" style="font-size: 10px;">
					Strip junaci
				</option>
				
				<option value="Crtani ostalo" style="font-size: 10px;">
					Ostalo
				</option>
	
				
				<option value="">
					______________________________ Nauka
				</option>
				
				<option value="Prirodne nauke" style="font-size: 10px;">
					Prirodne nauke
				</option>
				
				<option value="Tehnicke nauke" style="font-size: 10px;">
					Tehničke nauke
				</option>
				
				<option value="Istorija" style="font-size: 10px;">
					Istorija
				</option>
				
				<option value="Geografija" style="font-size: 10px;">
					Geografija
				</option>
				
				<option value="Astronomija" style="font-size: 10px;">
					Astronomija
				</option>
				
				<option value="Ostalo prirodne nauke" style="font-size: 10px;">
					Ostale prirodne nauke
				</option>
				
				<option value="Ostalo društvene nauke" style="font-size: 10px;">
					Ostale drustvene nauke
				</option>
				
				<option value="Nauka opšte" style="font-size: 10px;">
					Uopšteno
				</option>

		   </select>
		<p class="help-block"><em><small>Kategorija</small></em></p>
   </div>
  

	<!-- Cena -->
	
	<div class="form-group">
		<input type="number" min="1" class="form-control col-md-6" id="cena" name="cena" form="details">
		<p class="help-block"><em><small>cena</small></em></p>
	</div>

				<hr>
			
		 {{ csrf_field() }}  
		<button type="submit" class="btn btn-lg btn-primary"> <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Dodaj</button>

</form>
