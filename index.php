<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculatrice</title>
  <style>
    form {
      margin: auto;
      background-color: blueviolet;
      border: 1px solid #000;
    }
    label {
      display: block;
      margin-bottom: 8px;
      border: 1px solid #000;
    }
  </style>

  <script>
    function calcul() {
      var nombre1 = parseFloat(document.getElementById('number1').value);
      var nombre2 = parseFloat(document.getElementById('number2').value);

      if (isNaN(nombre1) || isNaN(nombre2)) {
        alert("VALEUR INVALIDE.");
        return;
      }

      if (nombre2 === 0) {
        alert("IMPOSSIBLE DE DIVISER PAR 0.");
        return;
      }

      var Somme = nombre1 + nombre2;
      var Multiplication = nombre1 * nombre2;
      var Division = nombre1 / nombre2;
      var Soustraction = nombre1 - nombre2;

      document.getElementById('somme').innerText = 'La somme est de : ' + Somme;
      document.getElementById('multiplication').innerText = 'La multiplication est de : ' + Multiplication;
      document.getElementById('division').innerText = 'La division est de: ' + Division;
      document.getElementById('soustraction').innerText = 'La soustraction est de: ' + Soustraction;
    }
  </script>
</head>
<body>
    <h1>BIENVENUE</h1>
    <h2> Enoncée: Faire une Calculatrice</h2>
    <h3>NOM: BEYE</h3>
    <h3>PRENOM: Amadou Mapathe</h3>
    <h3>MATRICULE: 220241</h3>
    <h3>CLASSE : BIG2</h3>
  <form id="calcul">
    <label for="number1">VEUILLEZ ENTRER LE PREMIER NOMBRE :</label>
    <input type="text" id="number1" required>

    <label for="number2">VEUILLEZ ENTRER LE DEUXIÈME NOMBRE :</label>
    <input type="text" id="number2" required>

    <button type="button" onclick="calcul()">Calculer</button>
  </form>

  <h2>Résultats :</h2>
  <p id="somme"></p>
  <p id="multiplication"></p>
  <p id="division"></p>
  <p id="soustraction"></p>

</body>
</html>
