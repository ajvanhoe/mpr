<!-- Modal  za brisanje -->
<div class="modal fade" id="modal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{$category->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel{{$category->id}}">Obriši kategoriju?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovu kategoriju? <br>
	  Time brišete i sve pripadajuće podkategorije a nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
	   <button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
		<button type="submit" class="btn btn-primary btn-danger" form="delete:{{$category->id}}">obriši</button>
	
	
      </div>
    </div>
  </div>
</div>