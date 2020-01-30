field.onclick = function() {
    let target1 = event.target.id; 

  
if (target1.indexOf('addJob') == 0) { 
    slug=target1.replace(/[^0-9]/g,'');
    start = prompt('введите дату начала работы', '1995-11-11');
    finish = prompt('введите дату окончания работы', '2995-11-11');
    company = prompt('введите название компании', 'S7');
    if(start!=null && start!=null && company!=null){
    
    alert("новые данные будут доступны после перезагрузки страницы");
    $.ajax({
    type: 'POST',
  url: '/models/process/processAddJob.php',
  data: {jstart:start, jfinish:finish, jcompany:company,slug:slug},
    success: function(data) {
    document.getElementById('parent_popup').style.display='none'; 
    alert(data+" добавлено")  
     
    

    }
  });}
    else{alert("вы не ввели данные")};
    return false;
   }


if (target1.indexOf('company') == 0 || target1.indexOf('start') == 0 || target1.indexOf('finish') == 0) { 
   id=target1.replace(/[^0-9]/g,'');
     
  
   start = document.getElementById( "start"+id+" ").innerHTML;
   finish = document.getElementById( "finish"+id).innerHTML;
   company = document.getElementById( "company"+id).innerHTML;
   
    
    start = prompt('введите дату начала работы', start);
    finish = prompt('введите дату окончания работы', finish);
    company = prompt('введите название компании', company);

    if(start!=null && start!=null && company!=null){
    
   
    $.ajax({
    type: 'POST',
  url: '/models/process/processSendJob.php',
  data: {jstart:start, jfinish:finish, jcompany:company,id:id},
    success: function(data) {
    document.getElementById('parent_popup').style.display='none'; 
    alert(data+" добавлено")  
     
    

    }
  });}
    else{alert("вы не ввели данные")};
    return false;
   }


if (target1.indexOf('delJob') == 0) { 
  target1=target1.replace(/[^0-9]/g,'');
   id=target1;
   
$.ajax({
    type: "POST",
    url: "/models/process/processDeleteJobs.php",
    data: {jid:id},
    success: function(data) {
     
    alert(data+" удалено")  
    $("#"+data).html("удалено")  
    

    }
  });
  return false;
   }

   


if (target1.indexOf('cls') == 0) { 
  
                   
          document.getElementById('parent_popup').style.display='none';
          
          
    return false;
        

 
   }
if (target1.indexOf('job') == 0) { 
   
   var id = $("input#id").val();
    $.ajax({
    type: "POST",
    url: "/models/process/processJob.php",
    data: {jid:id},
    success: function(data) {
   
    $('#place').html( data);

    }
  });
  return false;
   }


if (target1.indexOf('submit_btn') == 0) { 
    var name = $("input#name").val();
    var birth = $("input#birth").val();
    var gender = $('input.gender:checked').val();
    var id = $("input#id").val();
    
    $.ajax({
    type: 'POST',
  url: '/models/process/processSend.php',
  data: {jname:name, jbirth:birth, jgender:gender, jid:id},
    success: function() {
     document.getElementById('parent_popup').style.display='none';
     location.reload();
      
      
          // alert("#name"+id);
     //$('#tableId').load("views/phone.php");
     }
  });
  return false;
  };
   

  };