<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#</title>
  <link rel="stylesheet" href="../../assets/css/header.css">
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/user.css">
  <link rel="stylesheet" href="../../assets/css/footer.css">

  <link rel="stylesheet" href="../../assets/css/fonts.css">
</head>
<body>
  <header>
    <h1>Accedi</h1>
    <h2>Registrati per un trasferimento migliore</h2>
    <?php include '../components/header.php'; ?>
  </header>
  <div class = "container-main-content">
    <h2>Login</h2>
    <form action="process.php" method="post" class="form-user">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
  </div>

  <div class="form-group">
    <label for="cognome">Cognome:</label>
    <input type="text" id="cognome" name="cognome" required>
  </div>

  <div class="form-group">
    <label for="data-nascita">Data di Nascita:</label>
    <input type="date" id="data-nascita" name="data-nascita" required>
  </div>

  <div class="form-group">
    <label>Lingua/i:</label>
    <div class="checkbox-group">
      <input type="checkbox" name="lingua[]" value="italiano" id="italiano">
      <label for="italiano">Italiano</label>

      <input type="checkbox" name="lingua[]" value="inglese" id="inglese">
      <label for="inglese">Inglese</label>

      <input type="checkbox" name="lingua[]" value="altro" id="altro">
      <label for="altro">Altro</label>
    </div>
  </div>

  <div class="form-group">
    <label>Cittadino Italiano UE o Extra UE:</label>
    <select name="cittadino">
      <option value="italiano">Italiano</option>
      <option value="ue">Cittadino UE</option>
      <option value="extra-ue">Cittadino Extra UE</option>
    </select>
  </div>

  <div class="form-group">
    <label for="telefono">Numero di Telefono:</label>
    <input type="tel" id="telefono" name="telefono">
  </div>

  <div class="form-group">
    <label for="motivo">Motivo per cui vuoi andare in UE:</label>
    <textarea id="motivo" name="motivo" rows="4" cols="50"></textarea>
  </div>

  <div class="form-group">
    <label for="indirizzo">Indirizzo:</label>
    <input type="text" id="indirizzo" name="indirizzo">
  </div>

  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" id="city" name="city">
  </div>

  <div class="form-group">
    <label for="CAP">CAP:</label>
    <input type="text" id="CAP" name="CAP">
  </div>

  <div class="form-group">
    <label>Genere:</label>
    <div class="radio-group">
      <input type="radio" name="genere" value="maschile" id="maschile">
      <label for="maschile">Maschile</label>

      <input type="radio" name="genere" value="femminile" id="femminile">
      <label for="femminile">Femminile</label>

      <input type="radio" name="genere" value="altro" id="altro-genere">
      <label for="altro-genere">Altro</label>
    </div>
  </div>

  <div class="form-group">
    <label for="nazionalita">Nazionalità:</label>
    <input type="text" id="nazionalita" name="nazionalita">
  </div>

  <div class="form-group">
    <label for="documento">Carica Documento di Identità:</label>
    <input type="file" id="documento" name="documento">
  </div>

  <div class="form-group">
    <label for="professione">Professione:</label>
    <input type="text" id="professione" name="professione">
  </div>

  <div class="form-group">
    <label>Consenso per il Trattamento dei Dati:</label>
    <div class="checkbox-group">
      <input type="checkbox" name="consenso" value="accettato" id="consenso-accettato">
      <label for="consenso-accettato">Accetto</label>

      <input type="checkbox" name="consenso" value="non-accettato" id="consenso-non-accettato">
      <label for="consenso-non-accettato">Non accetto</label>
    </div>
  </div>

  <div class="form-group">
    <input type="submit" value="Invia">
  </div>
</form>
  </div>

  <?php include '../components/footer.php'; ?>

</body>
</html>