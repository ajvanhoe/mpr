
<!-- <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$modal}}">- button -</button> -->

<!-- Modal -->
<div class="modal fade" id="modal{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> - text - </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        - text - 

      </div>
      <div class="modal-footer">
       
       <button type="button" class="btn btn-secondary" data-dismiss="modal"> - button 1 -</button>
       <button type="submit" class="btn btn-primary btn-danger" form="form:{{$modal}}"> - button 2 -</button>
    
      </div>
    </div>
  </div>
</div>
                