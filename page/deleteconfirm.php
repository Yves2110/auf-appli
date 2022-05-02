<SCRIPT LANGUAGE="JavaScript">
function confirmation() {
let msg = "Êtes-vous sur de vouloir supprimer cet abonné ?";
if (confirm(msg))
location.replace(icon.php);
}
</SCRIPT>

<INPUT TYPE="Button" onClick="confirmation();" VALUE="Supprimer">
 
<!-- 

<a href="tonscript.php" onclick="return confirm('Voulez-vous vraiment suprimer cette annonce ?');"> -->