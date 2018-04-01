<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Данные обрабатываются...</title>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.arcticmodal.js" type="text/javascript"></script>
	
</head>

<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи. 
   Если не существуют, то мы их создаем.
   Если форма передала пустые значения мы их удаляем */       
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['number'])) {$number = $_POST['number']; if ($number == '') {unset($number);}}

/* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
$name = htmlspecialchars(trim($name));
$number = htmlspecialchars(trim($number));

/* Формируем сообщение */

$address = "andreyuspeshniy@gmail.com";
$sub = "Заказ обратного звонка";
$mes = "Имя: $name \nТелефон: $number";

/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
      if ($verify == 'true')
	  
     {

echo '<table id="tabl" align="center" style="width:100%;height:100%;background-color:rgba(0,0,0,.7);">
<tr>
<td>
  <div class="b-popup-content_3" style="width: 255px;margin: 115px auto 0;position: relative;">                                        
    <div class="f_pop_bl" style=" width: 100%;background: #fff;height: 70px;padding: 13px 0 0 0; margin: 0 0 -12px 0;">
      <p style=" font-size: 20px;color:#000;text-align: center;">Ваш заказ <span style="color:#ff893d;">получен!</span></p>
    </div>

    <div class="f_pop_bl_2" style="width: 100%;background: #2c2c2c;text-align: center;   height: 94px; ">
      <p style="font-size: 13px; text-align: center;color:#fff;padding: 22px 0 0 0;">В ближайшее время Вам <br> перезвонит менеджер и согласует : <br> адрес ,способ доставки и оплаты</p>
    </div>


  </div>
<script type="text/javascript">
function timer(){
var obj=document.getElementById("timer_inp");
obj.innerHTML--;
if(obj.innerHTML==0){history.go(-1);setTimeout(function(){},1000);}
else{setTimeout(timer,1000);}
}
setTimeout(timer,1000);
</script>
<p style="opacity:0;">Через <span id="timer_inp">2</span> секунд вы будите перенаправлены обратно..</p>
</td>
</tr>
</table>';

            }
            else 
            {
                
				echo '<table id="tabl" align="center">
<tr>
<td class="pagu" align="center">
<p><span style="color:red;">Error!</span> Ваше запрос не отправлен, попробуйте еще разок!</p>
<script type="text/javascript">
function timer(){
var obj=document.getElementById("timer_inp");
obj.innerHTML--;
if(obj.innerHTML==0){history.go(-1);setTimeout(function(){},1000);}
else{setTimeout(timer,1000);}
}
setTimeout(timer,1000);
</script>
<p text-indent=>Через <span id="timer_inp">2</span> секунд вы будите перенаправлены обратно.. 
</p>
</td>
</tr>
</table>';
				
            }	
    ?>	
	
	</body style="position: absolute;width: 99%;height: 100%;background: rgba(0,0,0,.7)">
</html>