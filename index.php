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
   'index.js'                                                  ,
   'lib_tom/js/contrib/jquery/1.5/jquery_minified.js'          ,
   'lib_tom/js/contrib/utils/DomBuilder.js'                    ,
   'lib_tom/js/contrib/utils/firebugx.js'                      ,
   'lib_tom/js/general_objects/BracketedTextFormatter.js'      ,
   'lib_tom/js/general_objects/BracketedTextParser.js'         ,
   'lib_tom/js/gui_elements/other/BracketedTextFormatterGui.js',
   'lib_tom/js/utils/utils.js'                                 ,
   'lib_tom/js/utils/utilsArray.js'                            ,
   'lib_tom/js/utils/utilsDOM.js'                              ,
   'lib_tom/js/utils/utilsObject.js'                           ,
   'lib_tom/js/utils/utilsString.js'                           ,
   'lib_tom/js/utils/utilsValidator.js'
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
