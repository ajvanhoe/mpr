	<!-- Modal -->
<div class="modal fade" id="modal{{$album->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{$album->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel{{$album->id}}">Obriši album?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovaj album? <br>
	   Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
	   <button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
		<button type="submit" class="btn btn-primary btn-danger" form="delete:{{$album->id}}">obriši</button>
	
      </div>
    </div>
  </div>
</div>
				