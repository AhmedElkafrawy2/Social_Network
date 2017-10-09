    <div class="create-post col-lg-12" role="dialog">
        <div class="create-post-border">   
            <div class="create-page-header col-lg-12">

                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span>Create Post</span>

            </div>
            <div class="create-post-body col-lg-12">

                <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
                
                 
                 <textarea  form="create-post-form" class="creaate-post-textarea" placeholder="What Is In Your Mind , {{ Auth::user()->firstname }} "></textarea>
                    
               
                <div class="border-top-create-post">
                    <div class="create-page-footer col-lg-12">
                        <div class="creaet-post-upload-iamge col-lg-4">Upload Image</div>
                        <div class="creaet-post-feeling col-lg-4">Feelings</div>
                        <div class="creaet-post-more col-lg-4">More</div>
                        <div class="create-post-inputfile-div">
                            <form id="create-post-form" action="/post/insert" method="post" enctype="multipart/form-data">  
                                {{ csrf_field() }}
                                <input type="file" name="create-post-upload-post-image[]" class="create-post-upload-post-image" multiple="multiple" />        
                            </form>
                        </div>
                       
                    </div>
                </div>
                <div class="create-post-submit-button">
                    <button type="submit" form="create-post-form" class="create-post-submit btn btn-primary">Post</button>
                </div>

            </div>

        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">&times;</button>
          <h4 class="modal-title">What's Your Feeling ,<span class="feeling-username">{{  Auth::user()->firstname }}</span></h4>
        </div>
        <div class="modal-body feeling-modal-body">
            <p class="display-emotion-modal"></p>
          <?php  
              $emotionnames = ['pleased','triumphant','attentive','attentive','dreamu','peaceful'
              ,'delighted','louing','sleepy','loustruck','hopeful','sheeppish','withdrawn','thoughful'
              ,'serprised','good','glade','proud','jolly','assured','bashful','idiotic','innocent','admiring'
              ,'kind','nervous','humiliated','weak','astonished','jealous','arrogant','anxious','aggressive'
              ,'eavesdrop','hopless','gloomy','heart','contemptuous','impatient','prudish','idiotic','innocent'] ;
              
              for($i=0 ; $i < count($emotionnames) ; $i++){
                  
                  echo "<div class='col-lg-2 emotions-title-image'><img class='' style='width:42px;height:42px' src='images/emotions/". $i .".png' /><p style='width:70px'>". $emotionnames[$i] ."</p></div>";
              }
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-feeling-close btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn-feeling-save btn btn-primary">save</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  <!--  post privacy Modal -->
  <div class="see-post-modal modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">&times;</button>
          <h4>Set Your Post Privacy</h4>
        </div>
        <div class="modal-body">
            <p>Who Can See Your Post</p>
            <div class="form-group hold-all-options">
                <select class="form-control options-privacy" form="create-post-form">
                    
                    
                    <option value="1">All Users</option>
                    <option value="2">Friends</option>
                    <option value="3">Only Me</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-privacy-close btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn-privacy-save btn btn-primary">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
