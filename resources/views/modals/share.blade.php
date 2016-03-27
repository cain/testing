
                    
<!-- Modal -->
<div id="shareModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-">

    <!-- Modal content-->
    <div class="modal-content">


      <div class="modal-body" style="padding:50px; padding-top:10px; padding-bottom:115px;" >
       

                  <form action="" method="POST" role="form">
                    <h1 class="login-brand"><a href="/"><i class="fa fa-hand-peace-o fa-2x"></i></a></h1>
                <h4 style="text-align:center;"><b>Share Music!</b></h4>
                
                <div class="form-group">
                    <label for="">Genre</label><br>
                    
                     <select class="selectpicker form-control" style="">
                                      <option>HOUSE</option>
                                      <option>TECHNO</option>
                                      <option>TRANCE</option>
                                      <option>DUBSTEP</option>
                                      <option>CHILL</option>
                                      <option>TRAP</option>
                                      <option>HARDSTYLE</option>
                    </select>
                        
                </div>
                <div class="form-group">
                    <label for="">Song Name</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Artist </label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div> 
                
                <div class="form-group">
                    <label for="">URL </label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Description </label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>


                <div class="form-group">
                <button  type="submit" class="btn btn-primary col-xs-12"><i class="fa fa-arrow-up"></i> Share</button>
                </div>
             
            </form>
          
            
                <button data-dismiss="modal" class="btn btn-danger col-xs-12" style="margin-top:10px;"><i class="fa fa-close"></i> Close</button>
                
      </div>

    </div>

  </div>
</div>
@if (Auth::check())
logged in
@else
logged out
@endif