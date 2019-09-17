@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container">

      @if(isset($page))
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{ $page['title'] }}<hr>
          <small>{{ $page['category'] }} @if($page['subcategory']) - {{$page['subcategory']}}@endif</small>
        </h1>

      @else
      <h1 class="mt-4 mb-3">
        Pretraga
        <hr>
      </h1>
       @endif

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

       @if(isset($results) && $results->isNotEmpty()) 

      
          @foreach($results as $result)

               <?php 
                $this_result = $result->id; 
                $naslovna = $result->media->shift(); 
               ?>

          <!-- Blog Post -->
          <div class="card mb-4">
@if($naslovna !== null)
<img  class="card-img-top" style="max-width:750px; max-height:300px;" src="{{asset('media/'.$type.'s/'.$naslovna->file)}}" title="{{$result->title}}">
@else 
<img class="card-img-top" style="max-width:750px; max-height:300px;" src="{{ asset('images/blank.png') }}" title="{{$result->title}}">
@endif  
             <div class="card-body">
              <h2 class="card-title">{{$result->title}}</h2>
              <p class="card-text">

                        <!-- info -->
            <!-- <div class="col-md-8"> -->
                              
                <table class="table table-striped table-borderless" >
                  <tbody>
                  
                  @if(isset($result->author))
                    <tr>
                      <td style="width:15%">Autor:</td>
                      <td colspan="2">{{ $result->author }}</td>
                    </tr>
                  @endif

                   <tr>
                    <td style="width:15%">Izdavač:</td>
                    <td colspan="2">{{ $result->publisher }}</td>
                  </tr>

                  @if(isset($result->press))
                    <tr>
                      <td style="width:15%">Štamparija:</td>
                      <td colspan="2">{{ $result->press }}</td>
                    </tr>
                  @endif

                  @if(isset($result->edition))
                    <tr>
                      <td style="width:15%">Tiraž:</td>
                      <td colspan="2">{{ $result->edition }}</td>
                    </tr>
                  @endif

                  <tr>
                    <td style="width:15%">Cena:</td>
                    <td colspan="2"><strong>{{ $result->price }}</strong></td>
                  </tr>



                  </tbody>
                </table>
            <!-- </div> --> <!--  /.col-md8 -->
               
               <hr>
                {{$result->description}}


              </p>
              <!-- <a href="#" class="btn btn-primary">Read More &rarr;</a> -->
            </div>
            <div class="card-footer text-muted">
              {{$result->category}} / {{$result->subcategory}}
            </div>
          </div>
       
          @endforeach
        

        @else
     
          <div class="card mb-4" style="min-height: 500px;">
            <!-- <div class="card-header text-white bg-primary"><strong>Pretraga</strong></div> -->
             <div class="card-body">
              <h2 class="card-title">Rezultati:</h2>
              <p class="card-text">Nije pronađen ni jedan rezultat.</p>
            </div>

            <div class="card-footer text-muted">
              <a href="{{route('frontpage')}}">&rarr; nazad na početnu stranu<a>
            </div>
          </div>
        @endif
        </div> <!-- Blog Entries Column --> 

    
          @if(isset($page))
          <!-- Pagination -->
          {{ $results->links() }}

          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->
          @endif

     

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          @include('partials.search-side-widgets')
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



    <!-- Footer -->
    @include('partials.footer')

@endsection