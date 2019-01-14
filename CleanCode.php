<?php
// Đặt tên biến
$currentDate = $moment->format('y-m-d');
$x = 5;
$myName = "Ten toi la";



// Viết hàm
function isShopOpen($day)
{
  if (empty($day)) {
    return false;
  }

  $openingDays = [
    'friday', 'saturday', 'sunday'
  ];

  return in_array(strtolower($day), $openingDays, true);
}



//Hàm quá nhiều biến
function createMenu($title, $body, $buttonText, $cancellable)
{
  // ...
}
// Nên viết lại như sau
class MenuConfig
{
  public $title;
  public $body;
  public $buttonText;
  public $cancellable = false;
}

$config = new MenuConfig();
$config->title = 'Foo';
$config->body = 'Bar';
$config->buttonText = 'Baz';
$config->cancellable = true;

function createMenu1(MenuConfig $config)
{
  // ...
}


