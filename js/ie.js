 /**
  Target IE 10 with JavaScript and CSS property detection.
  
  # 2013 by Tim Pietrusky
  # timpietrusky.com
 **/

 // IE 10 only CSS properties
 var ie10Styles = [
     'msTouchAction',
     'msWrapFlow',
     'msWrapMargin',
     'msWrapThrough',
     'msOverflowStyle',
     'msScrollChaining',
     'msScrollLimit',
     'msScrollLimitXMin',
     'msScrollLimitYMin',
     'msScrollLimitXMax',
     'msScrollLimitYMax',
     'msScrollRails',
     'msScrollSnapPointsX',
     'msScrollSnapPointsY',
     'msScrollSnapType',
     'msScrollSnapX',
     'msScrollSnapY',
     'msScrollTranslation',
     'msFlexbox',
     'msFlex',
     'msFlexOrder'];

 var ie11Styles = [
     'msTextCombineHorizontal'];

 /*
  * Test all IE only CSS properties
  */
 var d = document;
 var b = d.body;
 var s = b.style;
 var ieVersion = null;
 var property;

 // Test IE10 properties
 for (var i = 0; i < ie10Styles.length; i++) {
     property = ie10Styles[i];

     if (s[property] != undefined) {
         ieVersion = "ie10";
         createEl("IE10 style found: " + property);
     }
 }

 // Test IE11 properties
 for (var i = 0; i < ie11Styles.length; i++) {
     property = ie11Styles[i];

     if (s[property] != undefined) {
         ieVersion = "ie11";
         createEl("IE11 style found: " + property);
     }
 }

 if (ieVersion) {
     b.className = ieVersion;
     $('#versionId').html('Version: ' + ieVersion);
 } else {
     createEl('Not IE10 or 11.');
 }

 /*
  * Just a little helper to create a DOM element
  */
 function createEl(content) {
     el = d.createElement('div');
     el.innerHTML = content;
     b.appendChild(el);
 }

 /*
  * List of IE CSS stuff:
  * http://msdn.microsoft.com/en-us/library/ie/hh869403(v=vs.85).aspx
  */