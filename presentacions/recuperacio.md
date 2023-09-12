---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Recuperació**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# General

* Heu de pujar-ho tot al github privat compartit amb mi.
* S'han d'anar pujant les tasques així com se fan
* S'ha de fer feina també a casa.
* A classe repassam dubtes.
* Anau actualitzant el readme del projecte
* Posau tasques pendents al github per saber què us queda i on estau.

---


# HTML

Heu de crerar primer la plana web sols amb HTML i CSS, posant la informació que volgueu,
aquesta informació serà la que després posem a base de dades.

L'heu de pujar al servidor i que sigui vissible.

Utilitzau Bootstrap per facilitar-vos la tasca.

---

# Creació de la base de dades

Instal·lau phpMyadmin i creau la base de dades (pensau a guardar la clau)

Creau les taules amb l'estructura necessària per guardar informació de les activitats

Posau les activitats que voleu mostrar a la base de dades.

Creau també una taula pels contactes

---

# Mostar info

Canviau l'html per PHP mostrant la info que heu posat a la base de dades.

Podeu fer servir includes per no haver de fer cada cop la connexió

---

# Contacte

* Creau un formulari de contacte: nom, e-mail, assumpte, descripció i acceptació de condicions legals.
* Pensau a fer el redirect després de fer el post


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
Després d'un post hi ha d'haver un redirect. 

---

# El redirect

```php
header( $header, $replace, $http_response_code )
``` 

Vegeu la info a: https://code.tutsplus.com/es/tutorials/how-to-redirect-with-php--cms-34680
