@extends('layouts.master')

@section('content')

     <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Kontakt</h1>
      <hr>

      <!-- Content Row -->
      <div class="row">
       
        <!-- Contact Details Column -->
        <div class="col-lg-6 mb-4">

          <p>
            Pavla Vujisića 18 Altina
            <br>Beograd
            <br>
          </p>
          <p>
            Telefon: (123) 456-7890
          </p>
          <p>
            Email: <a href="mailto:name@example.com">malaprodavnica@gmail.com</a>
          </p>
          <p>
           Radno vreme: Ponedeljak - Petak: 9:00 AM to 5:00 PM
          </p>
          <p> -dodati jos teksta - </p>
        </div>

         <!-- Map Column -->
        <div class="col-lg-6 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>

      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-6 mb-4">
          <h3>Kontaktirajte nas porukom</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Ime i prezime:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefon:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Poruka:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Pošalji poruku</button>
          </form>
        </div>

        <div class="col-lg-6 mb-4">
          
          <p>
            - dodati jos teksta - 
          </p>
        </div>

      </div>
      <!-- /.row -->

      <hr>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')

@endsection

@section('scripts')
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
   <!--  <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script> -->
@endsection

