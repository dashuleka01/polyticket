function SubmitOnMouseOver(elmnt) {
  elmnt.style.background = '#2ca97d';
  elmnt.style.color = 'white';
}

function SubmitOnMouseOut(elmnt) {
  elmnt.style.background = 'white';
  elmnt.style.color = '#2ca97d';
}

function SubmitOnMouseOnClick(elmnt) {
  var Dialog = document.getElementById('saveorno');
  Dialog.showModal();
}

function YesButtonOnClick(){
	var Dialog = document.getElementById('saveorno');
    Dialog.close();
	
	var labelSaved = document.getElementById('saved');
	labelSaved.style.visibility = 'visible';
}

function CancelButtonOnClick(elmnt){
	var Dialog = document.getElementById('saveorno');
    Dialog.close();
}

function UpOnMouseOver(elmnt) {
  elmnt.style.opacity = 1;
}


function UpOnMouseOut(elmnt) {
  elmnt.style.opacity = .5;
}

