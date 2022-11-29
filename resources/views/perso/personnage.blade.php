

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Créé un personnage</h2>

    <form action="" method="POST">
    @csrf

    <label for="nom">Nom personnage:
        <input type="text" name="nom" id="nom">
    </label>

    <label for="description">Description :
        <input type="text" name="description" id="description">
    </label>

    <label for="cagetorie-">Choissiez de cagetorie</label>

<select name="cagetorie" id="cagetorie">
    <option value="">--Choissiez votre cagetorie--</option>
    <option value="Guerrier">Guerrier</option>
    <option value="Mage">Mage</option>
    <option value="Druide">Druide</option>
    <option value="Assassin">Assassin</option>
    <option value="Berserker">Berserker</option>
    <option value="Archer">Archer</option>
</select>

<input type="text" name="pseudo" value="ton_ps" disabled="disabled" />  

<p class="magie"></p>
<p class="force"></p>
<p class="agilité"> </p>
<p class="intelligence"> </p>
<p class="pv"></p>

</form>

<button class="reset">réinitialiser</button>








    <script src="/js/main.js"></script>
</body>
</html>