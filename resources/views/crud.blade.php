@extends('layouts.widepage')
@section('title')
	Crud
@endsection

@section('page_content')
<div class="panel panel-default">
 <div class="panel-heading">Osnovni crud</div>
 <div class="panel-body">
					

			<div class="row">
				<div class="col-md-6">

					<div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">Input forma</h3>
                        </div>
                        <div class="panel-body">
                                

                             <form role="form">
                              



                                  <div class="form-group">
                                      <label>Text Input</label>
                                      <input class="form-control">
                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>

                                  <div class="form-group">
                                      <label>Text Input with Placeholder</label>
                                      <input class="form-control" placeholder="Enter text">
                                  </div>

                                  <div class="form-group">
                                      <label>Static Control</label>
                                      <p class="form-control-static">email@example.com</p>
                                  </div>



                             </form>




                        </div>
                    </div>

                </div>

				<div class="col-md-6">

					<div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">spisak iz baze</h3>
                      </div>
                      <div class="panel-body">
                          ovde ide...
                      </div>
                    </div>
                </div>

            </div>







 </div>
</div>

@endsection