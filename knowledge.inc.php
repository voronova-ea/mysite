<?php
$answer1 = 5+9*3-4/2;

$div1 = 2;
$div2 = 3;
$div3 = 5;

$answer2 = 'Нет';
$question = "Ответ на предыдущий вопрос делится на $div1, $div2 и $div3?";
  if($answer1%$div1 == 0 && $answer1%$div2 == 0 && $answer1%$div3 == 0)
      $answer2 = 'Да';
?>