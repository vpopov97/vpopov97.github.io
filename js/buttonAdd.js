submit_btn.onclick = function() {

    var name = $("input#name").val();
    var birth = $("input#birth").val();
    var gender = $('input.gender:checked').val();

   
    
  $.ajax({
  type: 'POST',
  url: '/models/process/processAdd.php',
  data: {jname:name, jbirth:birth, jgender:gender},
  success: function(data){
    $('.results').html(data);
    location.reload();
  }
});
  return false;
  }; 