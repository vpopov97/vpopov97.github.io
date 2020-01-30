 table.onclick = function(event) {
  let target1 = event.target.id; 

  
if (target1.indexOf('addWorker') == 0) { 
  
   $('#formAdd').load("views/formAdd.php");
    return false;
   }

if (target1.indexOf('delWorker') == 0) { 
   target1=target1.replace(/[^0-9]/g,'');
 
   name='name'+target1;
   birth='birth'+target1;
   gender='gender'+target1; 
   id=target1;
  
   $('#formDelete').load("views/formDelete.php",{name:name, birth:birth, gender:gender, id:id});
    return false;
   }

if (target1.indexOf('name') == 0 || target1.indexOf('birth') == 0|| target1.indexOf('gender') == 0) { 
   target1=target1.replace(/[^0-9]/g,'');
 
   name='name'+target1;
   birth='birth'+target1;
   gender='gender'+target1; 
   id=target1;
  
   $('#formSend').load("views/formSend.php",{name:name, birth:birth, gender:gender, id:id});
    //return false;
   }
};