---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Introducció a CSS**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# CSS

* **C**ascading **S**tyle **S**heets
* Descriu com s'ha de veure la plana en diferents mitjans
* Ens permet controla presentació i estructura
* Fa que els canvis siguin ràpids
  
---

# Sintaxi

`selector` {`propietat`:valor; `propietat`: valor;...}

que es pot posar en linea o com a bloc

![width:600px](https://mdn.mozillademos.org/files/11925/csspartes.) 

---

# Exemple

```css

h1 {
    color: blue;
    margin: 10px;
    font-size: 50px;
}

```

---

# Aplicar estils a varis elements

Es poden aplicar els mateixos estils a varis elements separant-los per comes.

```css
p,li,h1 {
  color: red;
}

```

---

# Tipus de selectors

Existeixen varis tipus de selectors que es poden fer servir a l'hora d'indicar-ne les seves propietas en css.

Aquí en veurem els més habituals. Si vols la llista completa pots anar a: [llista de selectors de Mozilla](https://developer.mozilla.org/es/docs/Learn/CSS/Building_blocks/Selectores_CSS)

---

# Selector d'element, etiqueta o tipus

```html

<p> --> p

```

---

# Identificador

```html

<p id="un-id"> --> #un-id

```

---

# selectors de classe

```html

<p class="test"> --> .test
<h1 class="un dos"> --> .un {
                            }

```

---

# Selectors d'atribut


```html

<img src="mimagen.png"> --> img[src]

```

---

# Selectors de pseudoclasses

```css
a:hover {}
```

Aplicarà l'estil sols quan el punter estigui sobre l'enllaç.

---

# On va el css

* A un arxiu extern, que és el més normal
* Dins l'arxiu mateix de l'html
* Inline, dins l'element que vol modificar

---


# CSS a l'arxiu extern

* Es posa al header de l'HTML
* `<link rel="stylesheet" type="text/css" href="arxiu.css" />`
* N'hi pot ahver més d'un

---

# CSS Intern

* Es posa al `head` de la plana

```css
<style>
h1 {
    color: blue;
    margin: 10px;
    font-size: 50px;
}
</style>
```

---

# CSS Inline

```html

<!DOCTYPE html>
<html>
<body>

<h1 style="color:red;font-size: 50px; margin:10px">Titular</h1>
<p style="color:blue;">Paràgref</p>

</body>
</html>

```

---

# Estils en cascada

Vol dir que els estils es van afegint i sobreescrivint segons unes regles específiues.

Així podem anar afegint estils amb difernts arxius que ens complementing o ens sobreescriguin propietats.

---

# Comentaris

Les fulles d'estil poden crèixer ràpid. Convé anar documentam el que fem i posar seccions. Els comentaris ajuden molt.

```css

/* estils de capçalera */
h1 {
    color: blue;
    font-size: 50px;
}
```
---

# Propietats més habituals

Podem trobar les propietats més habituals a https://www.w3schools.com/css

---

# El model de caixa

![model de caixa](https://mdn.mozillademos.org/files/16558/box-model.png)


---

# Exemple

```css
.box {
  width: 350px;
  height: 150px;
  margin: 10px;
  padding: 25px;
  border: 5px solid black;
}
```

---

# El model standard

![model de caixa](https://mdn.mozillademos.org/files/16559/standard-box-model.png)

---

# El model alternatiu

![model de caixa](https://mdn.mozillademos.org/files/16557/alternate-box-model.png)

```css
html {
  box-sizing: border-box;
}
*, *::before, *::after {
  box-sizing: inherit;
}
```

---

# Especificitat

Si ha dues regles conflictives que es refereixen al mateix elements, els navegadors segueixien regles per saber quina aplicar.

Més info: https://developer.mozilla.org/es/docs/Web/CSS/Especificidad

---

# Jerarquia

1. Estils inline
2. identificadors
3. classes, atributs i pseudo-claesses
4. elements i pseudo elements

---

# Com se calcula

* Començam a zero
* afegim 1000 per a cada atribut `style`
* afegim 100 per a cada id
* afegitm 10 per acada atribut, classe o pseudo-classe
* afegin 1 per element o pseudo element

---

# Mateixa especificitat

La darrera regla guanya

---

# Si tot falla `!important`

* es considera una mala pràctica

Exemple:

```css

table td    {height: 50px !important;}
.myTable td {height: 50px !important;}
#myTable td {height: 50px !important;}
```