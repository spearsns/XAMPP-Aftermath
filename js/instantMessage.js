jQuery(function($){
  var socket = io.connect('http://localhost:3000');
  var sender = username;
  var reciever = '';
  var messageCount = 0;
  var userCount = 0;

  var url = window.location.href;
  var pageIndex = url.indexOf('?');
  var page = url.substring(0, pageIndex);

//USERNAMES
  if(username != null){
    var data =  username;
    socket.emit('new user', data);
  }

  socket.on('usernames', function(data){
    var html = '';
    userCount = data.length;
    for(i=0; i < data.length; i++){
      if (data[i] !== username){
        html += "<div class='row py-1'><div class='col'><button type='button' class='btn btn-lg btn-warning btn-block border user' data-reciever='"+ data[i] +"'>";
        html += data[i] +"</button></div></div>";
      } else {
        continue;
      }
    } 
    
    $('#userList').html(html);

    if(userCount > 1){
        $('#onlineBtn').html('ONLINE ( ' + (userCount - 1) + ' )').addClass('btn-primary').removeClass('btn-light');
      } else {
        $('#onlineBtn').html('ONLINE').addClass('btn-light').removeClass('btn-primary');
      }
  });

// BOOT USER
  $('#bootList').on('click', '.user', function(e){ 
    e.preventDefault();
    data = $(this).data('reciever');
    $('#bootModal').modal('toggle');
    socket.emit('boot user', data);
  });

  socket.on('eject', function(){
    window.location.href = '../index.php';
  });

//SENDING MESSAGE
  $('#messageModalArea').on('click', '#sendMessageBtn', function(e){
    e.preventDefault();
    if(username !== undefined){
      $('#messageBox-'+ reciever).append( "<b>"+ username + " :</b> " + $('#sendTo-'+ reciever).val() + "<br/>" );
      socket.emit('send message', sender + '-' + reciever + '=' + $('#sendTo-'+ reciever).val(), function(data){
        $('#messageBox-'+ reciever).append('<span class="error">' + data + '</span><br/>');
      });
      $('#sendTo-'+ reciever).val('');
      $('#sendTo-'+ reciever).focus();
    } else {
      alert('You must login in order to use chat feature');
    }
  });

  $('#userList').on('click', '.user', function(e){ 
    e.preventDefault();
    reciever = $(this).data('reciever');
    var messageHtml =  '';
        messageHtml += '<div class="modal fade" id="message-'+ reciever +'" tabindex="-2" role="dialog" aria-labelledby="message-'+ reciever +'" aria-hidden="true">';
        messageHtml += '  <div class="modal-dialog modal modal-dialog-centered" role="document">';
        messageHtml += '    <div class="modal-content">';

        messageHtml += '      <div class="modal-header text-center bg-primary">';
        messageHtml += '        <h5 class="modal-title w-100 font-weight-bold text-light">- '+ reciever +' -</h5>';
        messageHtml += '      </div>';

        messageHtml += '      <div class="modal-body">';
        messageHtml += '        <div class="container-fluid">';
                
        messageHtml += '          <div class="row">';
        messageHtml += '            <div class="col messageBox" id="messageBox-'+ reciever +'"></div>';
        messageHtml += '          </div>';

        messageHtml += '          <br/>';

        messageHtml += '          <div class="row justify-content-center">';
        messageHtml += '            <div class="col-12 col-sm-9 px-0 py-1">';
        messageHtml += '              <div class="input-group input-group-lg">';
        messageHtml += '                <input type="text" class="form-control border text-center" id="sendTo-'+ reciever +'" autofocus />';
        messageHtml += '              </div>';
        messageHtml += '            </div>';

        messageHtml += '            <div class="col-6 col-sm-3 px-1 py-1 align-items-center">';
        messageHtml += '              <button type="button" class="btn btn-info btn-lg btn-block border" id="sendMessageBtn">SEND</button>';
        messageHtml += '            </div>';
        messageHtml += '          </div>';

        messageHtml += '        </div>';
        messageHtml += '      </div>';

        messageHtml += '      <div class="modal-footer">';
        messageHtml += '        <div class="col"></div>';
                
        messageHtml += '        <div class="col" id="closeBtn">';
        messageHtml += '          <button type="button" class="btn btn-danger btn-lg btn-block border" data-dismiss="modal">CLOSE</button>';
        messageHtml += '        </div>';
                
        messageHtml += '        <div class="col"></div>';

        messageHtml += '      </div>';

        messageHtml += '    </div>';
        messageHtml += '  </div>';
        messageHtml += '</div>';
    $('#onlineModal').modal('toggle');
    $('#whisperModal').modal('toggle');
    $('#messageModalArea').append(messageHtml);
    $('#message-' + reciever).modal({"backdrop": "static"});
    $('#sendTo-'+ reciever).focus();
  });

//MESSAGE BUTTON UPDATE
  function messageBtnBlue(){  
      if (messageCount == 1){
        $('#messageListBtn').html('MESSAGE ( 1 )').addClass('btn-primary').removeClass('btn-light');
      } else if (messageCount > 1) {
        $('#messageListBtn').html('MESSAGES ' + '( ' + messageCount + ' )' ).addClass('btn-primary').removeClass('btn-light');  
      }
      setTimeout(messageBtnWhite, 1000);
  }

  function messageBtnWhite(){
      clearInterval(messageBtnBlue);
      if (messageCount == 1){
        $('#messageListBtn').html('MESSAGE ( 1 )').addClass('btn-light').removeClass('btn-primary');
      } else if (messageCount > 1) {
        $('#messageListBtn').html('MESSAGES ' + '( ' + messageCount + ' )' ).addClass('btn-light').removeClass('btn-primary');  
      }
      setTimeout(messageBtnBlue, 1000);
  }
  
  function checkMessageCount(){
    if (messageCount < 0){
      messageCount = 0;
    } else if (messageCount >= 1){
      setInterval(messageBtnBlue, 1000);
    } else {
      $('#messageListBtn').html('MESSAGES').addClass('btn-light').removeClass('btn-primary'); 
    }
  }
  checkMessageCount();

//RECIEVING MESSAGE
  socket.on('new message', function(data){
    if (username == data.reciever){
      reciever = data.sender;
      messageCount += 1;
      
      if ( !$('.messageReply[data-target="'+ reciever +'"]').length){
        var messageListHtml = '';
        messages += 1;
        messageListHtml +=    '<div class="row" >';
        messageListHtml +=    ' <div class="col-10 px-1">';
        messageListHtml +=    '   <div class="input-group input-group-lg">';
        messageListHtml +=    '     <button class="btn btn-primary btn-lg btn-block border py-2 my-1 messageReply" data-target="'+ reciever +'">'+ reciever +'</button>'
        messageListHtml +=    '   </div>';
        messageListHtml +=    ' </div>';

        messageListHtml +=    ' <div class="col-2 px-1">';
        messageListHtml +=    '   <div class="input-group input-group-lg">';
        messageListHtml +=    '    <input type="text" class="form-control border text-center unread" data-target="'+ reciever +'" value="1" readonly />';
        messageListHtml +=    '   </div>';
        messageListHtml +=    ' </div>';
        messageListHtml +=    '</div>';

        $('#messageList').append(messageListHtml);  
      }

//INSTANT MESSAGING MODAL
      if( $('#message-' + reciever).length > 0 ){
        
        if ( $('#message-'+ reciever).hasClass('show') ){
          messageCount -= 1;
          $('.unread[data-target="'+ reciever +'"]').val(0);
        } else {
          var $target = $('.unread[data-target="'+ reciever +'"]');
          var messages = Number( $target.val() );
          if(messages == 0) $('.messageReply[data-target="'+ reciever +'"]').addClass('btn-primary').removeClass('btn-light');
          messages += 1;
          $target.val(messages);
        }       
        $('#messageBox-'+ reciever).append('<b>' + data.sender + ': </b>' + data.msg + '<br/>');
        $('#sendTo-'+ reciever).focus();

      } else {
        var messageHtml = '';
        messageHtml += '<div class="modal fade" id="message-'+ reciever +'" tabindex="-2" role="dialog" aria-labelledby="message-'+ reciever +'" aria-hidden="true">';
        messageHtml += '  <div class="modal-dialog modal modal-dialog-centered" role="document">';
        messageHtml += '    <div class="modal-content">';

        messageHtml += '      <div class="modal-header text-center bg-primary">';
        messageHtml += '        <h5 class="modal-title w-100 font-weight-bold text-light">- '+ reciever +' -</h5>';
        messageHtml += '      </div>';

        messageHtml += '      <div class="modal-body">';
        messageHtml += '        <div class="container-fluid">';
                  
        messageHtml += '          <div class="row">';
        messageHtml += '            <div class="col messageBox" id="messageBox-'+ reciever +'"></div>';
        messageHtml += '          </div>';

        messageHtml += '          <br/>';

        messageHtml += '          <div class="row">';
        messageHtml += '            <div class="col-9 px-0">';
        messageHtml += '              <div class="input-group input-group-lg">';
        messageHtml += '                <input type="text" class="form-control border text-center" id="sendTo-'+ reciever +'" autofocus />';
        messageHtml += '              </div>';
        messageHtml += '            </div>';

        messageHtml += '            <div class="col-3 px-1">';
        messageHtml += '              <button type="button" class="btn btn-info btn-lg btn-block border" id="sendMessageBtn">SEND</button>';
        messageHtml += '            </div>';
        messageHtml += '          </div>';

        messageHtml += '        </div>';
        messageHtml += '      </div>';

        messageHtml += '      <div class="modal-footer">';
        messageHtml += '        <div class="col"></div>';
                  
        messageHtml += '        <div class="col" id="closeBtn">';
        messageHtml += '          <button type="button" class="btn btn-danger btn-lg btn-block border" data-dismiss="modal">CLOSE</button>';
        messageHtml += '        </div>';
                  
        messageHtml += '        <div class="col"></div>';

        messageHtml += '      </div>';

        messageHtml += '    </div>';
        messageHtml += '  </div>';
        messageHtml += '</div>';
        $('#messageModalArea').append(messageHtml);
        $('#messageBox-'+ reciever).append('<b>' + data.sender + ': </b>' + data.msg + '<br/>');
      }
    } // END IF REPLY ALREADY EXISTS

    checkMessageCount();
  });         //new message

//MESSAGE REPLY
  $('#messageList').on('click', '.messageReply', function(e){ 
    e.preventDefault();
    reciever = $(this).data('target');
    var $target = $('.unread[data-target="'+ reciever +'"]');
    messageCount -= Number( $target.val() );
    $('#messageListModal').modal('toggle');
    $('#message-' + reciever).modal({"backdrop": "static"});
    $('#sendTo-'+ reciever).focus();
    checkMessageCount();
    $target.val(0);
    $(this).addClass('btn-light').removeClass('btn-primary');
  });

//ONLINE LIST UPDATE
  $('#onlineBtn').click(function(){
    $('#onlineModal').modal('toggle');
  });
  
  socket.on('logout', function(data){
    userCount -= 1;
    exiter = data.exiter;
    console.log(exiter);
    $.ajax({
        type:   "POST",
        url:      "inc/processLogout.php",
        data:     {'exiter' : exiter},
        dataType: "json",
      });
  });

  $('#messageListBtn').click(function(){
    $('#messageListModal').modal('toggle');
  });

});           //JQuery