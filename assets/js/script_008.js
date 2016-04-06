function Catalog_notice_open(par){
	window.open(par,'popup','resizable=yes,scrollbars=yes,toolbar=yes,status=yes,width=850,height=700');
	return false;
}

function Catalog_notice_close(){
	window.opener.location.reload();
	window.close();
}