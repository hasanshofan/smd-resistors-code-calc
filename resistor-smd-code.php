<?php
//recieving
$q = $_REQUEST["q"];

$q=strtoupper($q);
$qArr=explode(",",$q);
$last=substr($q ,-1);
//rr100


// Test if string contains the word "R"
if(strpos($q, "R")!==false && $last!="R"){
   if(strpos($q, "R")==0){echo (float)str_replace("R","0.",$q);} 
   else if(strpos($q, "R")>0){echo (float)str_replace("R",".",$q);}
   

}
else if ( is_numeric($q) ) {
$last=(int)substr($q ,-1);
$val=(int)substr_replace($q ,"",-1);
    echo $val*pow(10,$last);
} 
else {
//if(strpbrk($q,"ZA") !== false) // check if string contains any of these chars A or Z
$r=[100,102,105,107,110,113,115,118,121,124,127,130,133,140,137,143,147,150,154,158,162,165,169,174,178,182,187,191,196,200,205,210,215,221,226,232,237,243,249,255,261,267,274,280,287,294,301,309,316,324,332,340,348,357,365,374,383,392,402,412,422,432,442,453,464,475,487,499,511,523,536,549,562,576,590,604,619,634,649,665,681,698,715,732,750,768,787,806,825,845,866,887,909,931,953,976];
$EIA=[0.001,0.01,0.01,0.1,0.1,1,10,10,100,1000,10000,100000];
$temp="ZYRXSABHCDEF";
if(strpbrk($q,$temp) !== false){

$lastPos=strpos($temp, $last);
$EIA_val=$EIA[$lastPos];
$val=substr_replace($q ,"",-1);



if(is_numeric($val)){
if($val>0 && $val<97){ echo $r[(int)$val-1]*$EIA_val;}

}
else{echo 'error';}






}}

?>