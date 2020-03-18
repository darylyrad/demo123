
	<input type="text" id="name_s" >	
	<button  onclick="EnterName()">Add Names</button>
	<button  onclick="startRaffle()">Start Raffle</button>
	<p>random name: <h1 id="present"></h1></p>
	<p >List of Name: <h3 id="list_name"></h3></p>

<script type="text/javascript">
	const arrName = [];
	function EnterName(){
		name_s = document.getElementById('name_s').value;
		if(name_s != ""){
			checkValue(name_s);
		}else{
			alert("Please Enter name")
		}

	}

	function checkValue(name_s){
		if(arrName.indexOf(name_s) !== -1){
	        alert("Value exists!")
	    } else{
			arrName.push(name_s);
			document.getElementById('list_name').innerHTML += name_s+"<br>";
	    }
	}

	function startRaffle(){
		if(arrName.length < 1){
			alert("No Data");
		}else{
				var value_s = arrName[Math.floor(random(0, arrName.length))]; 
				removeValue(value_s);
		}

		
	}

	function random(mn, mx) {  
            return Math.random() * (mx - mn) + mn;  
    }  

    function printedName(){
    	document.getElementById('list_name').innerHTML = "";
    	for (let i = 0; i < arrName.length; i++) {
		  document.getElementById('list_name').innerHTML += arrName[i] +"<br>";
		}
    }

    function removeValue(val){
		var index = arrName.indexOf(val);
	 
	    if (index > -1) {
	       arrName.splice(index, 1);
	       document.getElementById('present').innerHTML = val;
	       printedName();
	    }
	    console.log(arrName);
    }
</script>
