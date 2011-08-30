<div class="welcome">
   <div class="blurb">
      Zombie PHP is a PHP/jQuery web application framework.<br />
      It is fast, powerful, feature-rich, and eats brainz.<br />
   </div>
   <br />
   <br />

   <div class="slider-titles">
      <h2 class="slide active" id="about">About Zombie</h2>
      <h2 class="slide" id="features">Features</h2>
      <h2 class="slide" id="get-started">Getting Started</h2>
   </div>

   <div class="slider-cont">
      <div class="slider-slide">
         <div id="slider-about" class="slider">

            <h3>Fast</h3>
            If you need something that is fast and scalable, your are in the right place.<br />
            <br />

            <h3>All AJAX</h3>
            Zombie runs 100% on AJAX, out of the box.<br />
            This AJAX framework makes Zombie ideal for low bandwidth<br />
            scenarios by giving the highest possible responsiveness<br />
            for the least amount of bandwidth.<br />
            <br />

            <h3>Secure</h3>
            We already took care of authentication and security measures for you.<br />
            The zombie framework protects against SQL Injection, XSS, and CSRF attacks.<br />
            <br />

            <h3>SEO optimized</h3>
            Pretty url's come standard along with W3C valid html.
            <br />

         </div>
         <div id="slider-features" class="slider">


            <h3>MVC</h3>
            Separate logic, presentation, and storage to help you wrap your head around your code.<br />
            <br />

            <h3>No configuration</h3>
            Just set up your database and start hacking!<br />
            <br />

            <h3>undead.js</h3>
            Our javascript library is tightly integrated with the PHP framework to create seamless and effortless interactions.<br />
            It is built with jQuery and comes with a plethora of helpful tools.<br />
            <br />

            <h3>Authentication</h3>
            We have already written the code for authentication, users, groups, and more.<br />
            You can get right to work on your application.<br />
            <br />

            <h3>Code Generator</h3>
            A built-in code generator allows to to skip the monotonous and immediatly get to work.<br />
            It also allows for creating your own templates if you have different needs or don't like ours.<br />

         </div>
         <div id="slider-get-started" class="slider">
            What are you waiting for? Start coding your brainz out!<br />
            <a href="/download">Download</a> | 
            <a href="/tutorials">Tutorials</a> | 
            <a href="/docs">Documentation</a>
            <br />
         </div>
      </div>
   </div>

</div>
<script type="text/javascript">
$(document).ready(function() {
   $("#about").click(function() {
      $(".slider-slide").animate({"left":"0px"}, "slow");
      $("h2.slide").removeClass("active");
      $(this).addClass("active");
   });
   $("#features").click(function() {
      $(".slider-slide").animate({"left":"-580px"}, "slow");
      $("h2.slide").removeClass("active");
      $(this).addClass("active");
   });
   $("#get-started").click(function() {
      $(".slider-slide").animate({"left":"-1180px"}, "slow");
      $("h2.slide").removeClass("active");
      $(this).addClass("active");
   });
});
</script>
