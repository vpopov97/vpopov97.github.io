submit.onclick = function() {
 
    //var name = $("input#name").val();
    //var phone = $("input#phone").val();
    var id = $("input#id").val();
     
    //alert(id);
    $.ajax({
  type: 'POST',
  url: '/models/process/processDelete.php',
  data: {jid:id},
    success: function() {
     document.getElementById('parent_popup').style.display='none';
   
    location.reload();

      
     
    }
  });
  return false;
  };