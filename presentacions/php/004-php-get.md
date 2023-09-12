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
#### Capítol 4

---

# Interactuant amb el món

Una aplicació que no pot agafar dades de l'exterior o de l'usuari ens limita molt. El que volem sovint és poder dir a l'aplicació que faci alguna cosa a partir d'informació que li passarem nosaltres.

---

# El GET

Vam veure que hi ha un verb http que és el GET i que quan montam una url, li podem passar paràmetres, que s'enviaran al servidor amb aquesta url

Per exemple:

```html

http://aulabalear.org/?alumne=pep&edat=10

```

Això enviarà al servidor dos paràmetres `alumne` i `edat`

---

# Valor dels paràmetres

Els paràmetres que enviam poden tenir un valor, que és el que hi ha després de l'igual o no tenir-ne, si després de l'igual no hi ha res.

El que es tracta ara és de veure com al servidor podem agafar aquests paràmetres i fer coses.

Recordem que el PHP s'executa al servidor, al vostre Apache

---

# $_GET

`$_GET` ens permet obtenir el valor dels parèmetres que es passen per get i utilitzar-los per als nostres programes.

El més habitual és obtenir-los, varificar que el que ens passen és correcte i assignar-los a una variable per poder-hi fer feina.

De moment ens botarem la verificació, però recordau la regla de *mai confiar en informació que vengui d'un usuari*.

---

# Com s'agafa la informació

Al nostre exemple `http://aulabalear.org/?alumne=pep&edat=10` podríem fer per exemple

```php
<?php
$alumne = $_GET['alumne'];
$edat = $_GET['edat'];
?>
```

---

# No surt per pantalla?

* Hem agafat els valors i els hem posat a una variable
* Recordem que no surtirà res si no fem echo o print
* Important! Si feis servir un nom de paràmetre que no existeix *petarà* 

---

# Exercici 1

Modifica el codi del "Hello world" per a que agafi el nom a partir de la url a partir d'una variable que es digui `elmeunom` i que saludi dient-vos pel nom que heu passat.

---

# Exercici 2

Feis un programa que agafi com a paràmetres el nom i l'edat i que ens digui l'edat que tindrà la persona al 2050.

```php
	<?php
$nom = /* completau */
$edat = /* completau */
/* això ens permet agafar l'any actual
i ho posa a la variable ara */
$ara = date("Y");
/* calculam al 2050 i presentar el resultat */
/*
completau
*/
?>
```
