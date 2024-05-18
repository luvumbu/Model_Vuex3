<div class="container">
   <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="form_log_mail"  value="root" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="form_log_password"  value="root" placeholder="Enter password" name="pwd">
    </div> 
    <div type="submit" class="btn btn-default" onclick="form_log_onclick(this)">Submit</div>
  </form>
</div>

<style>
  .container{
    margin-top: 100px;
  }
</style>