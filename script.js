function prep(){
let smd_val=res_val.value;
res_val.innerText=smd_val.toUpperCase()
sending(smd_val)
}
function sending(str) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  //result coming from server
		  
        fromServer(this.responseText);

		
      }
    };
	
	// sending to server
      // xmlhttp.open("GET", "english_test.php?q=" + str, true);
	 xmlhttp.open("GET", "https://wiki-arabic.com/php_programs/resistor-smd-code.php?q=" + str, true);

    xmlhttp.send();
}

function fromServer(response){
console.log(response)
let unit="Ω";
response=Number(response)
if(response>999999){response/=1000000;unit="MΩ"}
else if(response>999){response/=1000;unit="kΩ"}
result.innerHTML=" = "+response+unit
}
    