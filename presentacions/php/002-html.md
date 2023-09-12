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
#### Tutorial d'HTML5
#### Capítol 2
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
    </body>
</html>

```

---

# Tipus d'elements

"En general els elements comencen per un *tag* d'inci i acaben per un *tag* de tancament

Hi ha dos tipus fonamentals d'elements en HTML5 segons com 
se comporten en la visualització.

* Elements de block
* Elements de línea

```html
<inici>contingut</inici>
```
---

# Les capçaleres

* És un element de block
* Van de `h1` .. `h6` 
* `<h1>Titular</h1>`
* Serveixen per indicar que un text ha de resaltar-se
* Com a un escrit amb titular, subtitular, títol, etc.

---

# El paràgraf 

* És un eleement de bloc
* `<p>texte</p>`
* Fa que el texte comenci i a acabi a una línea nova.
* Els salts de línea del text no es tenen en compte
  
---

# Listes

* Són elements de bloc
* N'hi ha d'ordenades (*ol*) i no ordenades (*ul*)
* Els elements es defineixen entre tags *li*
* Les llistes se poden anidar

Exemple:

```html
<ol>
    <li>un</li>
    <li>dos</li>
</ol>
```
---

---

# Salt de línea

* `<br>`
* Crea un salt de línea a un document HTML

---

# Elements de format strong i em

Són elements de línea que ens permeten decorar el text
Els preferim a `<b>` i `<i>` per raons de semàntica

* `<strong>negreta, important</strong>`
* `<em>itàlica, èmfasi</em>`

---

# Imatges

Són part fonamental del contingut de la majoria de planes web.

Sintaxi: 

```html
<img src="url" alt="text descriptiu">
```

---

# Imatges

* Com a url podem posar una url absoluta o relativa
* Podem indicar-ne l'amplada en pixles o % amb l'atribut `width`
* Podem indicar-ne l'alçada en pixles o amb % l'atribut `height`

Exemple:

```html
    <img src="https://www.w3.org/html/logo/downloads/HTML5_Logo_64.png" alt="html logo">
```

---

# Enllaços

* És el que ha permet a la W3 ser el que és
* Ens permeten botar a una altra plana, domini o secció

```html
<a href="http://google.com">anar a google</a>
```
