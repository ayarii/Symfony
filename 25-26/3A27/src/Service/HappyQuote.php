<?php
namespace App\Service;

class HappyQuote
{
public function getHappyMessage(): string
{
$messages = [
'Believe you can and you are halfway there',
'The best way to predict the future is to create it.',
'Every day may not be good... but there’s something good in every day ! ',
'Great work! Keep going!',
];
$index = array_rand($messages);

return $messages[$index];
}
}