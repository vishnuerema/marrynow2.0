@include('header')
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<section class="edit_profs pads_no">
  <div id="frame">
  <div id="sidepanel">
    <div id="profile">
      <!-- <div class="wrap">
        <div class="all_btn">
          <button type="button" class="all_btns">Online</button>
        </div> 
        <div class="all_btn">
          <button type="button" class="all_btns">ALL</button>
        </div>  
         <div class="all_btn">
          <button type="button" class="all_btns">Male</button>
        </div> 
        <div class="all_btn">
          <button type="button" class="all_btns">Female</button>
        </div>  
      </div> -->
    </div>
    <div id=""> <!--  id="search"   commented for a specific line throw-->
      <!-- <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
      <input type="text" placeholder="Search peoples..." /> -->
      <h4 style="text-align:center">Online</h4>
      <br>
    </div>
    <div id="contacts">
      <ul>
      @for($i=0; $i< count($chatersDataon); $i++)
          @for($j=0; $j< count($chatersDataon[$i]); $j++)
        <li class="contact" onclick="ChatCurUsr(this.id)" id="{{$chatersDataon[$i][$j]->user_idk}}">
          <div class="wrap">
            <span class="contact-status online"></span>
            <img class="img-fluid chat_img" src="imgs/{{$chatersDataon[$i][$j]->profile_image}}" alt=""/>
            <div class="meta">
              <p class="name chat_white">{{$chatersDataon[$i][$j]->profile_name}}</p>
              <p class="preview chat_white"></p>
            </div>
          </div>
        </li>
        @endfor
      @endfor

      @for($i=0; $i< count($chatersDataoff); $i++)
      @for($j=0; $j< count($chatersDataoff[$i]); $j++)
    <li class="contact" onclick="ChatCurUsr(this.id)" id="{{$chatersDataoff[$i][$j]->user_idk}}">
      <div class="wrap">
        <span class="contact-status "></span>
        <img class="img-fluid chat_img" src="imgs/{{$chatersDataoff[$i][$j]->profile_image}}" alt=""/>
        <div class="meta">
          <p class="name chat_white">{{$chatersDataoff[$i][$j]->profile_name}}</p>
          <p class="preview chat_white"></p>
        </div>
      </div>
    </li>
    @endfor
  @endfor
      </ul>
    </div>
    <div id="bottom-bar">
     <!--  <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
      <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button> -->
    </div>
  </div>
  <div class="content" style="margin:0px;padding:0px">
    <div class="contact-profile">
<!--       <img id="imgSpc" src="imgs/vis1.jpg" alt="" />
 -->      <p class=" nameSpc"></p>
    </div>
<div style="display:flex;align-items:center;justify-content:center">
    <div class="messages chat_msgss"  >

    </div>

<!-- <div id="lst">hello</div> -->
    
</div>
    <div class="message-input">
      <div class="wrap"  >
      <input style="background-color:#d8c0c0;height:56px;font-size:20px" id="txtMsg" type="text" placeholder="Write your message..." />
      <button onclick="newChat()" class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
      <p style="display:none" id="cur_id" ></p>
      </div>
    </div>
  </div>
</div>
  </section>
 @include('footer')
<script>
 function ChatCurUsr(id){
  $("#cur_id").text(id);
  $("#txtMsg").val("");
  $(".txtSav").remove();
  $(".txtSav").remove();

  $.ajax({
          type: "post",
          url: "chat_with_user",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
            'id':id
             },
          success: function(data){
            console.log(data[0].msg);
                 var revArr = data.slice(0).reverse();

          for(var i=0; i<revArr.length; i++){
            if(data[i].from==<?php echo $_SESSION['id']; ?>){

            $('.messages').append('<div class="txtSav" style="margin-top:10px" ><div class="replies" style="float:right;background-color:#defd73;margin-right:10px;border-radius:7px;padding:10px;box-shadow:0 0 7px rgba(0,0,0,0.6)"><span>'+data[i].msg+'</span></div><br><br></div>');
            }
            else{
            $('.messages').append('<div class="txtSav" style="margin-top:10px" ><div class="sent" style="float:left;background-color:#524f59;margin-left:10px;border-radius:7px;padding:10px;color:#fff;box-shadow:0 0 7px rgba(0,0,0,0.6)"><span style="color:#fff;">'+data[i].msg+'</span></div><br><br></div>');
            }
          }
          $('.txtSav:last').append('<div id="lst"></div>');
        window.location.href="#lst";
          setTimeout(function(){ChatCurUsr(id)}, 40000);

          }
        });
 }


  function newChat(){
  var txtMsg=$("#txtMsg").val();
  var toId=$("#cur_id").text();
  if(txtMsg==""){
  return false;
  }
  else{
  $.ajax({
          type: "post",
          url: "chat_new",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
            'toId':toId,
            'txtMsg':txtMsg
             },
          success: function(data){
            console.log(data);
            $('.messages').append('<div class="txtSav" style="margin-top:10px" ><div class="replies" style="float:right;background-color:#defd73;margin-right:10px;border-radius:7px;padding:10px;box-shadow:0,0,7px rgba(0,0,0,0.6)"><p>'+txtMsg+'</p></div><br><br></div>')
            $("#txtMsg").val("");
          }
        });
}
 }
 </script>
