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
#### Aplicacions Web

---

# Funcions en PHP

Les funcions són troços de codi reutilitzable que poden ser cridats des del nostre programa.

Les funcions poden ser:

*  internes "built-in funcions" : https://www.w3schools.com/php/php_ref_overview.asp
*  extrernes: llibreries
*  definides per nosaltres

---

# Definició d'una funció

```php

<?php
    function nomFuncio(){
        /* aquesta funcio escriu 
        un hello world */
        echo "Hello world";
    }

    nomFuncio();
?>
```

Mirau de posar noms significatius a les funcions i documentau el que fa amb els comentaris.

---

# Funcions amb arguments

A una funció li podem passar paràmetres que es poden fer servir dins la pròpia funció. Per definir-los basta posar les variables dins el parèntesi

```php
<?php
    function holaMon($nom){
        echo "Hola $nom";
    }

    function suma($a, $b) {
        echo $a+$b;
    }
?>
```
---

# Retornant valors

Les funcions poden retornar un valor quan les cridam, això es fa amb la paraula clau `return`

```php
<?php
    function suma($a, $b){
        return $a+$b;
    }

    function iva($base, $taxa){
        /* Calcula l'iva expresat com a tant per cent
        exemple: iva(100, 21) retorn 21
        */
        return $base*$taxa/100;
    }
?>

```
---

# Pas de paràmetres

Els paràmetres d'una funció **es passen per valor** això vol dir que es passa una còpia del valor a la funció i la variable original no canvia.

Hi ha vegades que ens interessa poder canviar la variable, llavores es diu que pass per **referència**

```php
<?php
    function potencia(&$a) {
        $a = $a*$a;
    }
    $valor = 3;
    potencia($valor);
    echo $valor;
?>
```


