<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

/* print_r function basically uses to 
  print the array.

  <pre> tag defines the performatted textText in a <pre> element is displayed in a fixed-width font, 
  and the text preserves both spaces and line breaks. The text will be displayed exactly as written in the HTML source code.
*/
echo $_SERVER['HTTP_HOST'];
ECHO "<BR>";
echo $_SERVER['PHP_SELF'];

  ?>