<!-- Modal -->
<div class="modal fade" id="modal{{$this_knjiga}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Obriši knjigu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovu knjigu? <br>
       Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
       <button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
        <button type="submit" class="btn btn-primary btn-danger" form="delete:{{$this_knjiga}}">obriši</button>
    
      </div>
    </div>
  </div>
</div>