$(document).ready(function(){
 
  var isDown = false;   // Tracks status of mouse button
 
  $(document).mousedown(function() {
    isDown = true;      // When mouse goes down, set isDown to true
  })
  .mouseup(function() {
    isDown = false;    // When mouse goes up, set isDown to false
  });
 
  $("#ch input[type=checkbox]").mouseover(function(){
    if(isDown) {        // Only change css if mouse is down
       $(this).attr('checked', 'checked');
    }
  });
});

$(document).ready(function(){
    $("#ch").change(function(){
        $.ajax({
            type: "POST",
            url: "core/wheelide/preview.php",
            data: $("#ch").serialize(),
            success : function(data) {$("#prw").html(data);
                                      $("#cplace").html(data);}
        });
    })
});

$(document).ready(function(){
    $("#view").bind('input propertychange', function(){
        $.ajax({
            type: "POST",
            url: "core/wheelide/viewer_processing.php",
            data: $("#view").serialize(),
            success : function(data) {$("#result").html(data);
                                      $("#result").html(data);}
        });
    })
});

$(document).ready(function(){
    $("#enc").bind('input propertychange', function(){
        $.ajax({
            type: "POST",
            url: "core/wheelide/encoder_processing.php",
            data: $("#enc").serialize(),
            success : function(data) {$("#code").html(data);
                                      $("#code").html(data);}
        });
    })
});

$(document).ready(function(){
    $("#decoder").bind('input propertychange', function(){
        $.ajax({
            type: "POST",
            url: "core/wheelide/decoder_processing.php",
            data: $("#decoder").serialize(),
            success : function(data) {$("#colorcode").html(data);
                                      $("#colorcode").html(data);}
        });
    })
});

$(document).ready(function(){
    $("#cashtxt").bind('input propertychange', function(){
        $.ajax({
            type: "POST",
            url: "core/cash/cashcalc.php",
            data: $("#cashtxt").serialize(),
            success : function(data) {$("#cashresult").html(data);
                                      $("#cashresult").html(data);}
        });
    })
});
