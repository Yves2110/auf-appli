

<script>
function confirmation() {
let msg = "Êtes-vous sur de vouloir supprimer cet abonné ?";
if (confirm(msg))
location.replace(Listes.php);
}
</script>

<input TYPE="Button" onClick="confirmation();" VALUE="Supprimer">
 
<!-- 

<a href="tonscript.php" onclick="return confirm('Voulez-vous vraiment suprimer cette annonce ?');"> -->