<?php include("snippets/header.php"); ?>

<form action="action.php" method="POST">
  <label>Prénom</label><input name="field1" type="text"/><br>
  <label>Nom</label><input name="field2" type="text"/><br>
  <label>Site(s)</label><input name="field3" type="text"/><br>
  <label>École(s)</label><input name="field4" type="text"/><br>
  <label>Discipline(s)</label><input name="field5" type="text"/><br>
  <label>Lieu(x)</label><input name="field6" type="text"/><br>
  <div>
    <label>Nom du Projet1</label><input name="field7" type="text"/><br>
    <label>Site(s) du Projet1</label><input name="field8" type="text"/><br>
    <label>Thème(s) Projet1</label><input name="field9" type="text"/><br>
    <label>Médium(s)</label><input name="field10" type="text"/><br>
    <label>Référence(s) théorique(s) du Projet1</label><input name="field11" type="text"/><br>
    <label>Référence(s) pratique(s) du Projet1</label><input name="field12" type="text"/><br>
    <label>Collaborateur(s) du projet1</label><input name="field13" type="text"/><br>
  </div>
  <input type="submit" name="submit" value="Save Data" id="save_data">
</form>

<?php include("snippets/footer.php"); ?>