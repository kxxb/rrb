
<?php 


$file = "хр";
echo transliterate($file);


// Транслитерация строк. 
function transliterate($st) { 
  $st = strtr($st, array( 
    "ё"=>'yo',    "х"=>'h',  "ц"=>'ts',  "ч"=>'ch', "ш"=>'sh',   
    "o"=>'shch',  "ю"=>'yu', "я"=>'ya', 
    "Ё"=>'Yo',    "Х"=>'H',  "Ц"=>'Ts',  "Ч"=>'Ch', "Ш"=>'Sh', 
    "Щ"=>'Shch',  "Ю"=>'Yu', "Я"=>'Ya', 
  )); 
//  $st = strtr($st,  
//    "abvgdegziyklmnoprstufieABVGDEGZIYKLMNOPRSTUFIE", 
//    "абвгдежзийклмнопрстуфыАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ"
//  );    
  return $st; 
} 

?>
