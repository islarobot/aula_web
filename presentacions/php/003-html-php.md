---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Tutorial d'HTML5 i PHP
#### Capítol 3

---

# HTML5 
```html

<!DOCTYPE html>
<html>
    <!-- capçalera-->
    <head>
        <meta charset="UTF-8">
        <title>Títol de la plana</title>
    </head>
    <!-- cos-->
    <body>
        <p>Paràgraf</p>
        <?php 
            /* Això ja és php */
        ?>
    </body>
</html>

```

---
# Mesclant PHP i HTML

La gràcia del PHP és que podem fer servir HTML i PHP dins un mateix document, però hem de saber molt bé si estam fent PHP o HTML.

Quan estam dins un bloc de PHP per a que surti el que volem per pantalla hem de fer un `print` o un `echo`.

Moltes vegades el que voldrem és que a més surti `HTML` i que el navegador ho interpreti.

Hem de procurar combinar-ho per a que resulti el més legible possible, i a vegades no és fàcil.

---

# Data 1

```html
<!DOCTYPE html>
<html>
    <head>
    <title>Exemple de data</title>
</head>
<body>
<p>
Avui és <b><?php echo date('Y/m/d') ?></b>
</p>
</body>
</html>
```
---

# Data 2

```html
<!DOCTYPE html>
<html>
    <head>
    <title>Exemple de data</title>
    </head>
<body>
<?php 
echo "<p>";
echo "Avui és <b>";
echo date('Y/m/d');
echo "</b>";
echo "</p>";
?>
</body>
</html>
```

---
# Data 3

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Exemple de data</title>
  </head>
<body>
<p>
<?php $avui = "<b>".date('Y/m/d')."</b>"; ?>
Avui és <?php echo $avui ?></b>
</p>
</body>
</html>
```
---

# Data 4

```html
<!DOCTYPE html>
<?php $avui = date('Y/m/d'); ?>
<html>
 <head>
	 <title>Avui és <?php echo $avui; ?></title>
 </head>
<body>
<p>
	Avui és <?php echo "<b>$avui</b>"; ?>
</p>
</body>
</html>
```
---

# Càlculs i programació

El que no posem como a `echo` o `print` no surt per pantalla quan estam dins un bloc PHP i l'intèrpret sap on som cada vegada.

Això ens permet fer càlculs a un lloc i utilitzar-los més endavant dins la plana

Mesclar HTML i `echo` segons ens convengui més
