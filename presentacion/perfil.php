
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:#9a9a9a;font-family:Mailpile-Normal;">Sign Up</h4>
            </div>
            <div class="modal-body" style="text-align:left;">
                <form role="form" id="signup" action="/users" method="post">
                    <div class ="form-group">
                        <p class="text-muted">username</p>
                        <div class="right-inner-addon ">
                          <button style="display:none" class="success btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                          <button style="display:none" class="fail btn btn-warning"><span class="glyphicon glyphicon-flash"></span></button>
                          <input size="35" id="user_name" name="user[username]" type="text" class="form-control"placeholder="choose a cool name" />
                        </div>
                    </div>
                    
                    <div class ="form-group">
                        <p class="text-muted">email</p>
                        <div class="right-inner-addon ">
                            <button style="display:none" class="success btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                            <button style="display:none" class="fail btn btn-warning"><span class="glyphicon glyphicon-flash"></span></button>
                            <input size="35" id="user_email" name="user[email]" type="email" class="form-control"placeholder="yourname@example.com" />
                          </div>
                      </div>
  
                      <div class ="form-group">
                          <p class="text-muted">password</p>
                          <div class="right-inner-addon ">
                              <button style="display:none" class="success btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                              <button style="display:none" class="fail btn btn-warning"><span class="glyphicon glyphicon-flash"></span></button>
                             <input size="35" id="user_password" name="user[password]" type="password" class="form-control"placeholder="at least 6 characters" />
                          </div>
                      </div>

                      <div class ="form-group">
                          <p class="text-muted">password confirmation</p>
                          <div class="right-inner-addon ">
                              <button style="display:none" class="success btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                              <button style="display:none" class="fail btn btn-warning"><span class="glyphicon glyphicon-flash"></span></button>        
                              <input size="35" id="user_password_confirmation" name="user[password_confirmation]" type="password" class="form-control"placeholder="" />
                            </div>
                      </div>
                      <button class="btn btn-default create">CREATE MY ACCOUNT</button>
                  </form>
                </div><!--end of modal body-->
            </div><!--end of modal content-->
        </div><!--end of model dialog-->
    </div><!--end of moal-->
