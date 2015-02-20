var page = getUrlVars()["p"];

function pageDown(){
	if(page>0){
		page = page-1;
	}
	
	document.getElementById("pageNumber").innerHTML = page;
}

function pageUp(){
	page = page+1;
	document.getElementById("pageNumber").innerHTML = page;

}

function getPage(){
	return page;
}