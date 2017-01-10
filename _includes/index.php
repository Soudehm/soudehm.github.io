
<form id="formation" method="POST">
      <p>Name:<input type="text" name="name"></p>
      <p>E-mail:<input type="email" name="email"></p>
      <p>Comment:<br><textarea name="comment" rows="5" cols="40"></textarea></p>
  <br>
  <input type="radio" name="urgency" value="generalinquiries" checked> General inquiries<br>
  <input type="radio" name="urgency" value="requestanappointment"> Request an appointment<br>
  <input type="radio" name="urgency" value="other"> Other <br>
  <input type="submit" name="submit" value="Send">  
  <br><br>
       <input type="hidden" name="_next" value="//www.juniorcareer.com/thankyou/"/>
        
   <script>
         var contactform = document.getElementById('formation');
         contactform.setAttribute('action','//formspree.io/'+'info'+'@'+'juniorcareer'+'.'+'com');
   </script>



