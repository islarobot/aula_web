---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Formularis**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# Formularis

Els formularis ens permeten obitenir dades mitjançant el navegador i enviar-los al servidor, bé mitjançant parametres de la url o bé dins el cos de la petició.

Ens serveixen per cercar, editar, modificar, crear o borrar dades de la nostra aplicació.

L'HTML ens defineix tant la sintaxi del formulari i la petició com els controls que podem trobar.

---

# Enviament de la informació

Els formularis bàsicament poden enviar les peticions al servidor fent serivr dos mètodes: `GET` i `POST`. 

És important saber quan fer-ne servir un o altre i les seves implicacions.

---

# GET

La informació s'envia de forma visible i codificada dins la URL en el que es coneix com un `Query String` amb un format de clau valor separat per `&`

---

# Usos i limitacions

* Màxim 2000 caràcters
* La informació és visible
* No es poden enviar dades binàries
* El seu us és ideal per peticions que no modifiquen dades

---

# Exemple en PHP

```php

<<html>
<body>
<form action="." method="get">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_GET["nom"]) ? print $_GET["nom"] : ""; ?><br>
El teu e-mmail és: <?php isset($_GET["email"]) ? print $_GET["email"] : ""; ?>
</body>
</html>
```
---

# POST

La informació es codifica i s'envia en el cos *body* de la petició del HTTP Request i no és visible a la url.

---

# Usos i limitacions

* No está limitat en volum a enviar
* La informació no és visible. Junt amb https fa que la comunicació sigui segura.
* Es pot enviar text normal i binaris
* És ideal per peticions que modifiquen les dades.

---

# Exemple en PHP

```php
<html>
<body>
<form action="." method="post">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_POST["nom"]) ? print $_POST["nom"] : ""; ?><br>
Email: <?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?>
</body>
</html>

```

---

# Enviant arxius

Quan volem enviar arxius li hem de dir al formlari, per indicar que volem que les dades es xapin en múltiples parts: una per a cada arxiu i una per les dades del body del formulari.

---

# Exemple

```html

<form method="post" action="https://www.example.com" enctype="multipart/form-data">
  <div>
    <label for="file">Selecciona un raxiu</label>
    <input type="file" id="file" name="myFile">
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>

```

---

# Elements dels formularis

Els elements més comuns d'un formulari ès l'`input` que agafa diversos tipus segons el que volguem obtenir.

En HTML5 a més ens permet fer autocompletat, validacions i mostrar diversos controls segons la dada a obtenir.

---

# Referències

Vegeu: https://developer.mozilla.org/es/docs/Web/HTML/Elemento

---

# action

L'action serveix per indicar la url al la que s'enviarà la informació. Si no posam res o un punt `.` s'entén que l'enviarem de tornada a la mateixa url de partida.

---

# Obtenir la informació

La informació d'un formulari vendrà a _la variable `$_GET` o a la variable `$_POST` segons el mètode.

Amb `isset` podem comprovar si tenim les dades i processar-les.

---

# Testejant si és un GET o un POST

```php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // obtenim la info
}
```

És important validar les dades i verificar que el format és correcte!
---
