



<form action="confirmationPage.php" method="post">
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="inputName">Name</label>
      <input name="name" type="text" class="form-control" id="inputName" placeholder="First and Last Name">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputName">Subject</label>
      <input name="subject" type="text" class="form-control" id="inputSubject" placeholder="Subject">
    </div>
    <div class="form-group col-sm-12">
    <label for="inputMessage">Message</label>
    <textarea name="message" class="form-control" id="inputMessage" rows="3" placeholder="Type your Message Here"></textarea>
    <button id="submitBtn" type="submit" class="btn btn-light form-group col-sm-12">Send</button>
    </div>
    
</form>