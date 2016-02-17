
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

	function remove(yourclassname){
		var list = document.getElementsByClassName(yourclassname);
		for(var i = list.length - 1; 0 <= i; i--)
		if(list[i] && list[i].parentElement)
		list[i].parentElement.removeChild(list[i]);
	}

	var t = [["29", "1", "27"],["16", "1", "SUMOHAN"],["16", "1", "30"],["2", "11", "9"],["2", "11", "22"],["19", "13", "24"],["19", "13", "42"],["205", "13", "36"],["MEDIAWIKI", "43", "CONCUR"],["MEDIAWIKI", "43", "40"]];

	var seld = opt;

	for(var i=0;i<=9;i++){
		//console.log("t"+i);
		var ifc = contains.call(t[i],seld);
		if(ifc == true){
			console.log(t[i]);
			for(var j=0;j<t[i].length;j++){
				if(t[j] == seld){
					continue;
					console.log('c');
				}
				else{
					remove(t[j]);
					console.log('r');
				}
			}
		}
	}
}
