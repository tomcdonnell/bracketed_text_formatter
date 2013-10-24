<?php
/**************************************************************************************************\
*
* vim: ts=3 sw=3 et wrap co=100 go -=b
*
* Filename: "index.php"
*
* Project: Programming tools - Bracketed Text Formatter.
*
* Purpose: The main file for the project.
*
* Author: Tom McDonnell 2009-04-18.
*
\**************************************************************************************************/

// Global variables. ///////////////////////////////////////////////////////////////////////////////

$filenamesJs = array
(
   '../../lib/tom/js/contrib/jquery/1.7/jquery_minified.js'          ,
   '../../lib/tom/js/contrib/utils/DomBuilder.js'                    ,
   '../../lib/tom/js/general_objects/BracketedTextFormatter.js'      ,
   '../../lib/tom/js/general_objects/BracketedTextParser.js'         ,
   '../../lib/tom/js/gui_elements/other/BracketedTextFormatterGui.js',
   '../../lib/tom/js/utils/utils.js'                                 ,
   '../../lib/tom/js/utils/utilsArray.js'                            ,
   '../../lib/tom/js/utils/utilsDOM.js'                              ,
   '../../lib/tom/js/utils/utilsObject.js'                           ,
   '../../lib/tom/js/utils/utilsString.js'                           ,
   '../../lib/tom/js/utils/utilsValidator.js'                        ,
   'index.js'
);

// HTML code. //////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>
 <head>
<?php
 $timestamp = time();
 foreach ($filenamesJs as $filename)
 {
?>
  <script src='<?php echo "$filename?$timestamp"; ?>'></script>
<?php
 }
?>
  <title>Bracketed Text Formatter</title>
 </head>
 <body></body>
</html>
<?php
/*******************************************END*OF*FILE********************************************/
?>
