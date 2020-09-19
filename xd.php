<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://www.google.com/recaptcha/api.js"></script>

  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>
 
  <body>
  <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
 
    <form id="demo-form" action="index.php" method="post">
    
      <button class="g-recaptcha" 
        data-sitekey="6LdYucwZAAAAAPZUXj7hXT5qcW22hWD_V2sO15Tu" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
 
    </form>
 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>