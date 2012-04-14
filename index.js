/**************************************************************************************************\
*
* vim: ts=3 sw=3 et wrap co=100 go-=b
*
* Filename: "index.js"
*
* Project: Programming Tools - Bracketed Text Formatter.
*
* Purpose: Start JavaScripts..
*
* Author: Tom McDonnell 2009-04-18.
*
\**************************************************************************************************/

window.addEventListener('load', onLoadWindow, false);

// Functions. //////////////////////////////////////////////////////////////////////////////////////

function onLoadWindow(e)
{
   try
   {
      var f = 'onLoadWindow()';
      UTILS.checkArgs(f, arguments, [Event]);
      DomBuilder.apply(window);

      var btf    = new BracketedTextFormatter();
      var btfGui = new BracketedTextFormatterGui(btf)

      document.body.appendChild
      (
         A
         (
            {style: 'font-size: small', href: 'http://www.tomcdonnell.net'},
            'Back to tomcdonnell.net'
         )
      );
      document.body.appendChild(H1({style: 'margin: 0'}, 'Bracketed Text Formatter'));
      document.body.appendChild
      (
         P
         (
            {style: 'font-size: small'},
            'General purpose text formatter designed for any structured' +
            ' text featuring balanced brackets eg. JSON.'
         )
      );
      document.body.appendChild(btfGui.getDiv());
   }
   catch (e)
   {
      UTILS.printExceptionToConsole(f, e);
   }
}

/*******************************************END*OF*FILE********************************************/
