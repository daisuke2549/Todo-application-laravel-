(function() {
    'use strict';
  
    var cmds = document.getElementsByClassName('delete');
    var i;
  
    for (i = 0; i < cmds.length; i++) {
      cmds[i].addEventListener('click', function(e) {
        e.preventDefault();
        if (confirm('are you sure?')) {
          document.getElementById('form_' + this.dataset.id).submit();
        }
      });
    }
  
  })();

  $(".header_title").on("mouseover",function(){
    $(".header_title").css({
        color: "#4dc0b2",
        backgroundColor: "#ffc042"
    });
  });
  
  $(".header_title").on("mouseout",function(){
    $(".header_title").css({
        color: "",
        backgroundColor: ""
    });
  });