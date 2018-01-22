var returnValue="";
function getDate(field,strBil){
   var url ="js/CalendarCn.htm?field=" + field ;
   var calWin = window.showModalDialog (url,window,"dialogHeight: 250px; dialogWidth: 430px;  center: Yes; help: No; resizable: No; status: No");
   //显示HTML内容的模态对话框
	field.value=returnValue;
}
