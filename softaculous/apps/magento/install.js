//////////////////////////////////////////////////////////////
// install.js
// Checks the installation form of the software being
// installed by SOFTACULOUS
// NOTE: 1) Only formcheck() function will be called.
//       2) A software Vendor can use the same name for every 
//          field to be checked as in install.xml . It can be
//          called using $('fieldname').value or any property
//       3) Must Return true or false
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
// (c)Softaculous Inc.
//////////////////////////////////////////////////////////////

// Check if there is a number in random generated password
function update_admin_pass(){
	
	if(typeof jQuery('#admin_pass').val() == "undefined"){
		setTimeout('update_admin_pass();', 500);
		return;
	}
	
	var admin_pass = jQuery('#admin_pass').val();
	var isnum = /\d+/.test(admin_pass);
	
	if(!isnum){
		admin_pass = admin_pass+Math.floor((Math.random() * 10) + 1);
		jQuery('#admin_pass').val(admin_pass);
	}
}

update_admin_pass();

function formcheck(){
	
	//Check the Admin Email
	if(window.check_punycode){
		if(!check_punycode($('admin_email').value)){
			alert('{{err_ademail}}');
			return false;
		}
		return true;
	}
	
	return true;
};