<?php
function url_get_contents($file){
if (ini_get('allow_url_fopen') == '1') {
  return file_get_contents($file); // use fopen() or file_get_contents() 
} 
   // initialize a new curl resource
   $ch = curl_init(); 

   // set the url to fetch
   curl_setopt($ch, CURLOPT_URL, $file); 

   // don't give me the headers just the content
   curl_setopt($ch, CURLOPT_HEADER, 0); 

   // return the value instead of printing the response to browser
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

   // use a user agent to mimic a browser
   curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 

   $content = curl_exec($ch); 

   // remember to always close the session and free all resources 
   curl_close($ch);
   return $content; 
}
