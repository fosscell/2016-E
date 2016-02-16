
function validateForm(){
var formD = document.forms["payment_form"];

var name = formD["billing_address_first_name"].value;
var email = formD["customer_email"].value;
var phoneno = formD["customer_phone"].value;
var orgname = formD["Field_72942"].value;

if(name == null || name == "" || email == null || email == "" || phoneno == null || phoneno == "" || orgname == null || orgname == ""){
	alert("empty fields");
    return false;
}
}

function ws_prefs(opt){
	
	var contains = function(needle) {
		// Per spec, the way to identify NaN is that it is not equal to itself
		var findNaN = needle !== needle;
		var indexOf;
		if(!findNaN && typeof Array.prototype.indexOf === 'function') {
			indexOf = Array.prototype.indexOf;
		} else {
			indexOf = function(needle) {
				var i = -1, index = -1;
				for(i = 0; i < this.length; i++) {
					var item = this[i];
					if((findNaN && item !== item) || item === needle) {
						index = i;
						break;
					}
				}
				return index;
			};
		}

		return indexOf.call(this, needle) > -1;
	};
	
	var t0 = ["29", "1", "27"];
	var t1 = ["16", "1", "SUMOHAN"];
	var t2 = ["16", "1", "30"];
	var t3 = ["2", "11", "9"];
	var t4 = ["2", "11", "22"];
	var t5 = ["19", "13", "24"];
	var t6 = ["19", "13", "42"];
	var t7 = ["205", "13", "36"];
	var t8 = ["MEDIAWIKI", "43", "CONCUR"];
	var t9 = ["MEDIAWIKI", "43", "40"];
	
	var seld = document.getElementById(opt).value;
	
	for(var i=0;i<=9;i++){
		console.log("t"+i);
		var ifc = contains.call("t"+i,seld);
		if(ifc == true){
			console.log("t"+i);
			break;
		}
	}
	
	/*
	switch(opt){
		case 0:
		
		break;
		
		case 1:
		
		break;
		
		case 2:
		
		break;
		
		case 3:
		
		break;
		
		case 4:
		
		break;
		
		case 5:
		
		break;
		
		case 6:
		
		break;
		
		case 7:
		
		break;
		
		case 8:
		
		break;
		
		case 9:
		
		break;
		
	}
	*/
}