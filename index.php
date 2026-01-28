<?php
// Vars
$page = "home";
$pagetitle = "Home | Disposition Opportunity";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




include("template-parts/header.php");
?>






<section class="hero">
  <h1>Real Estate Disposition Opportunities</h1>
  <p>Building strategic partnerships with acquisition companies —  
     <strong>Disposition Team You Always Needed</strong></p>
</section>

<section>
  <div class="section-title">
    <h2>Sold <span>Properties</span></h2>
  </div>

  <div class="cards">
    <div class="card">
      <img src="https://dummyimage.com/500x400/000/fff">
      <div class="card-body">
        <h4>Retail Property</h4>
        <p>123 Main Street, Cornwall, NY</p>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716">
      <div class="card-body">
        <h4>Industrial Building</h4>
        <p>45 Commerce Drive, Cornwall, NY</p>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
      <div class="card-body">
        <h4>Office Space</h4>
        <p>78 Executive Blvd, Cornwall, NY</p>
      </div>
    </div>
  </div>
</section>

<section class="partnership">
  <div class="section-title">
    <h2>Strategic <span>Partnerships</span></h2>
  </div>
  <p>
    We work directly with acquisition companies, investors, and operators to
    efficiently move commercial assets. Our disposition process is designed to
    maximize exposure, minimize friction, and close with certainty.
  </p>
</section>

<section>
  <div class="bio">
    <div>
      <h3>Anthony Rivas</h3>
      <p><strong>Agent. Advisor. Investor. Your Advantage.</strong></p>
      <p>
        With deep market insight and hands-on investment experience, Anthony Rivas
        provides strategic guidance to sellers and acquisition partners looking
        to execute commercial real estate transactions with confidence.
      </p>
    </div>
    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" style="width:100%; border-radius:6px;">
  </div>
</section>

<section class="testimonials">
  <div class="section-title">
    <h2>Client <span>Testimonials</span></h2>
  </div>

  <div class="cards">
    <div class="testimonial-card">
      <p>“Anthony delivered exactly what he promised. Clean process and strong buyers.”</p>
      <strong>— Acquisition Partner</strong>
    </div>

    <div class="testimonial-card">
      <p>“The disposition team we didn’t know we were missing.”</p>
      <strong>— Commercial Investor</strong>
    </div>
  </div>
</section>

<section id="free-guide">
  <div class="lead-form">
    <div class="section-title">
      <h2>Get Your <span>Free Guide</span></h2>
    </div>

    <form class="main-form">


      <div class="response-container">
        
      </div>


      <input type="text" placeholder="First Name"  class="firstname">
      <input type="text" placeholder="Last Name"  class="lastname">
      <input type="tel" placeholder="Phone"  class="phone">
      <input type="email" placeholder="Email"  class="email">

      <div class="checkbox-group">
        <label><input type="checkbox" class="businessowner"> Business Owner</label>
        <label><input type="checkbox" class="investor"> Investor</label>
        <label><input type="checkbox" class="looking_for_office"> Office Space</label>
        <label><input type="checkbox" class="looking_for_retail"> Retail Space</label>
        <label><input type="checkbox" class="looking_for_industrial"> Industrial Space</label>
      </div>

      <button type="submit" class="submit-btn">Get Free Guide Now</button>
    </form>
  </div>
</section>








<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var email = jQuery(".main-form .email").val();
      var phone = jQuery(".main-form .phone").val();



      if (jQuery(".main-form .businessowner").is(':checked')) {
        var businessowner = "1";
      } else {
        var businessowner = "0";
      }

      if (jQuery(".main-form .investor").is(':checked')) {
        var investor = "1";
      } else {
        var investor = "0";
      }

      if (jQuery(".main-form .looking_for_office").is(':checked')) {
        var looking_for_office = "1";
      } else {
        var looking_for_office = "0";
      }

      if (jQuery(".main-form .looking_for_retail").is(':checked')) {
        var looking_for_retail = "1";
      } else {
        var looking_for_retail = "0";
      }

      if (jQuery(".main-form .looking_for_industrial").is(':checked')) {
        var looking_for_industrial = "1";
      } else {
        var looking_for_industrial = "0";
      }


      


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          businessowner: businessowner,
          investor: investor,
          looking_for_office: looking_for_office,
          looking_for_retail: looking_for_retail,
          looking_for_industrial: looking_for_industrial

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");

            

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>

<?php include("template-parts/footer.php"); ?>