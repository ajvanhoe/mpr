					 
<form method="POST" action="/albumi/create" role="form" id="create" enctype="multipart/form-data">

<br>

  <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" form="create">
    <p class="help-block"><em><small>naziv albuma</small></em></p>
  </div>

	<hr><br>
  
  <div class="form-group">
		  <select name="type" class="form-control col-md-8" form="create">
		  
				<option value="" selected><em>odaberite tip...</em></option>
				
				<option value="Popunjen" style="font-size: 10px;">
					Popunjeni
				</option>
				
				<option value="Prazan" style="font-size: 10px;">
					Prazan
				</option>
				
				<option value="Za popunjavanje" style="font-size: 10px;">
					Za popunjavanje
				</option>
				
				<option value="Slabo popunjen" style="font-size: 10px;">
					Slabo popunjen
				</option>
					
				<option value="Materijali" style="font-size: 10px;">
					Materijali
				</option>
				
				<option value="Kesice" style="font-size: 10px;">
					Kesice
				</option>
				
				<option value="Sličice" style="font-size: 10px;">
					Sličice
				</option>
		   </select>
		<p class="help-block"><em><small>tip</small></em></p>
   </div>
   
   
    <div class="form-group">
		  <select name="category" class="form-control col-md-8" form="create">
		  
				<option value="" selected><em>odaberite žanr...</em></option>
	
				<option value="sport" style="font-size: 10px;">
					Sport
				</option>
				<option value="Auto-moto i saobraćaj" style="font-size: 10px;">
					Auto-moto i saobraćaj
				</option>
				<option value="Biljke i životinje" style="font-size: 10px;">
					Biljke i životinje
				</option>
				<option value="Umetnost" style="font-size: 10px;">
					Umetnost
				</option>
				<option value="Crtani" style="font-size: 10px;">
					Crtani junaci
				</option>
				<option value="Nauka" style="font-size: 10px;">
					Nauka
				</option>

				<option value="Ostalo" style="font-size: 10px;">
					Ostalo
				</option>
				
		   </select>
		<p class="help-block"><em><small>žanr</small></em></p>
   </div>
  
  
    <!-- obavezno -->
    {{ csrf_field() }}  
	<hr>
	<br>
	<button type="submit" class="btn btn-lg btn-primary">Dalje...</button>&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="reset" class="btn btn-danger">Reset</button>    	
    

</form>