
<html>
  <head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <script type="text/javascript">
      var verifyCallback = function(response) {
        alert( response );
      };
      var widgetId1;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6Lcvhc4ZAAAAAAPMvUDwQ8yvLetUarwazNfCr4D8',
          'theme' : 'light'
        });
      };

      function ola(){
        var xd = grecaptcha.getResponse(widgetId1);
        if(xd == ''){
          alert("xd");
        }else{
          alert("gg");
        }
      }
    </script> 
  </head>
  <body>
    <!-- The g-recaptcha-response string displays in an alert message upon submit. -->
    <form action="javascript:ola();">
      <div id="example1"></div>
      <div id="error_ca" type="hidden"> captcha no llenado</div>
      <br>
      <input type="submit" value="getResponse">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>