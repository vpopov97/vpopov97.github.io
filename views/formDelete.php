<div id="parent_popup">
    <div id="popup">
   <?php   session_start();


    $birth=$_POST['birth'];
    $posName=24+strlen($birth);
    $id= $_POST['id'];
    $posName += stripos($_SESSION['table'], $birth);
    $offs = stripos($_SESSION['table'], "</div>",$posName);
    $offs=$offs-$posName;
    $rest = substr($_SESSION['table'], $posName, $offs);
    //$rest =mb_convert_encoding($rest , 'cp1251' , 'utf-8');
    $birth=$rest;

    
    $name=$_POST['name'];
    $posName=25+strlen($name);
    $id= $_POST['id'];
    $posName += stripos($_SESSION['table'], $name);
    $offs = stripos($_SESSION['table'], "</div>",$posName);
    $offs=$offs-$posName;
    $rest = substr($_SESSION['table'], $posName, $offs);
    //$rest =mb_convert_encoding($rest , 'cp1251' , 'utf-8');
    $name=$rest;
    //$name=$offs;

    $gender=$_POST['gender'];
    $posName=24+strlen($gender);
    $id= $_POST['id'];
    $posName += stripos($_SESSION['table'], $gender);
    $offs = stripos($_SESSION['table'], "</div>",$posName);
    $offs=$offs-$posName;
    $rest = substr($_SESSION['table'], $posName, $offs);
   
    $gender=$rest;
   


  
    ?>
        <div id="contact_form">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            
            <form name="contact" action="">
                <fieldset>
                    ФИО Сотрудника
                    <input type="text" id="name" size="30"  class="text-input" value="<?php echo $name?>" readonly>
                    
                    <br> 

                    Дата рождения
                    <input type="text" id="birth" size="30"  class="text-input" value="<?php echo $birth?>" readonly>
                      

                    
                    Пол:
                    <?php echo($gender)/*if ($gender) {
                        echo " Мужской";
                    } 
                    else    {echo " Женский";}*/?>
                    

                    
                    <input type="hidden" id="id" value="<?php echo $id?>">
                    
                    

                    <br />
                    
                    <input type="submit" name="submit"  id="submit" value="удалить" />
                    
                    <button id="cls">отмена</button>
                </fieldset>
            </form>
            
        </div>
         
    </div>
</div>

<?php // ?><script src="/js/buttonDelete.js"></script>

 <script src="/js/buttonEsc.js"></script>









         
    </div>
</div>

 <?php // ?><script src="/js/buttonEsc.js"></script>
 <script src="/js/buttonDelete.js"></script>