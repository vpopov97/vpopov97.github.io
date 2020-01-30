


<div id="parent_popup">
    <div id="popup">
   
        <div id="contact_form">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            
            <form name="contact" action="#">
                <fieldset>
                    ФИО Сотрудника
                    <input type="text" id="name" size="30"  class="text-input" placeholder="введите ФИО" required>
                    
                    <br> 

                    Дата рождения
                    <input type="text" id="birth" size="30"  class="text-input" placeholder="дата рождения" required>
                      

                   <form action="">
                    Пол<br>
                    <input type="radio" class="gender" value="1" />Мужской
                    <input type="radio" class="gender" value="0" />Женский 

                    </form>
                    <input type="hidden" id="id" value="<?php echo $id?>">
                    <br>
                    

                    <br />
                    
                    
                    <button id="submit_btn">добавить</button>
                    
                    <button id="cls">отмена</button>
                </fieldset>
            </form>
            
        </div>
         
    </div>
</div>

<?php // ?><script src="/js/buttonAdd.js"></script>

 <script src="/js/buttonEsc.js"></script>