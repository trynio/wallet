<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="title">
      <h1>Kontroluj wydatki</h1>
      <p>W szybki i prosty sposób kontroluj swoje wydatki, dodając je poniżej</p>
    </div>
    <form class="form--add" method="post" id="api_add_form">
      <div class="flex margin-1">
        <label class="flex-item--label" for="tytul">Tytuł:</label>
        <input class="input" type="text" name="tytul" id="tytul">
      </div>
      <div class="flex margin-1">
        <label class="flex-item--label" for="kategoria">Kategoria:</label>
        <select class="input" name="kategoria" id="kategoria">
          <option value="Jedzenie">Jedzenie</option>
          <option value="Samochod">Samochód</option>
          <option value="rozrywka">Rozrywka</option>
          <option value="dom">Dom</option>
          <option value="inne">Inne</option>
        </select>
      </div>
      <div class="flex margin-1">
        <label class="flex-item--label" for="kwota">Kwota:</label>
        <input class="input" type="number" name="kwota" id="kwota">
        <input type="hidden" name="action" id="action" value="insert">
        
      </div>
      <div class="flex center margin-1">
          <label class="flex-item--label" ></label>
        <input type="submit" class="submit" value="Dodaj">
      </div>
    </form>
  </div>
  <div class="container">
    <p class="title">Filtry po kategoriach</p>
    <button class="button">Jedzenie</button>
    <button class="button">Rozrywka</button>
    <button class="button">Dom</button>
    <button class="button">Samochód</button>
    <button class="button">Inne</button>
  </div>
  <div class="container">
      <table class="grid">
        <thead>
          <tr class="head">
            <th>Data</th>
            <th>Tytuł</th>
            <th>Kategoria</th>
            <th>Kwota</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr class="row">
            <td></td>
            <td></td>
            <td>suma</td>
            <td>2123.75</td>
          </tr> -->
          <!-- <tr class="row">
            <td>2019-03-21 19:02</td>
            <td>Zakup produktow na obiad</td>
            <td>jedzenie</td>
            <td>134.75</td>
          </tr> -->
        </tbody>
      </table>
  </div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
</body>
</html>