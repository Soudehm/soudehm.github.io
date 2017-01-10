
<form id="formation" method="POST">
      <p>Name:<p> <input type="text" name="name"> <br />
      <p>E-mail:<p> <input type="email" name="email"> <br />
      <p>Comment: <br><textarea name="comment" rows="5" cols="40"></textarea>
  <br>
  <input type="radio" name="information" value="generalinquiries" checked> General inquiries<br>
  <input type="radio" name="information" value="requestanappointment"> Request an appointment<br>
  <input type="radio" name="information" value="other"> Other <br>
  <input type="submit" name="submit" value="Send">  
  <br><br>
       <input type="hidden" name="_next" value="//www.juniorcareer.com/thanks.md"/>
       <input type="text" name="_gotcha" style="display:none"/>
</form>        
   <script>
         var contactform = document.getElementById('formation');
         contactform.setAttribute('action','//formspree.io/'+'info'+'@'+'juniorcareer'+'.'+'com');
   </script>



