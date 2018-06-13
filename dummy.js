<script language="javascript">
function SelectRedirect(){
							// ON selection of section this function will work
							//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "milk":
window.location="/home/eswecha/Desktop/doorknockers'/a8.jpg";
break;

case "vegetables":
window.location="../asp-tutorial/site_map.php";
break;

case "food":
window.location="../sql_tutorial/site_map.php";
break;

							/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; 				// if no selection matches then redirected to home page
break;
}									// end of switch 
}
										////////////////// 
</script>
