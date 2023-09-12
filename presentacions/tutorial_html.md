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

Hi ha dos tipus fonamentals d'elements en HTML5 segons com se comporten en la visualització.

* Elements de block
* Elements de línea

Tots ele elements comencen per un *tag* dinci i acaben per un *tag* de tancament

```html
<inici>contingut</inici>
```
---
# HTML i XML

* Ambdós tenen una estructura d'arbre
* L'HTML **no** es sensible a majúscules
* L'HTML no té en compte els espais
* Hi ha elements buids que no tenen tancament. Ex. `<br>`
* Els elements poden tenir atributs

---

# Les capçaleres

* És un element de block
* Van de `h1` .. `h6` 
* `<h1>Titular</h1>`

---

# El paràgraf 

* És un eleement de bloc
* `<p>texte</p>`
* Fa que el texte comenci i a acabi a una línea nova.
  
---
# Listes

* Són elements de bloc
* N'hi ha d'ordenades i no ordenades
* Les llistes se poden anidar

Exemple:<>

```html
<ol>
    <li>un</li>
    <li>dos</li>
</ol>
```
---

# Definicions

Es fan servir quan la llista té sentit de definició de termes.

```html

<dl>
    <dt>Terme</dt>
    <dd>Definició del terme anterior</dd>
    <dt>Terme 2</dt>
    <dd>Definició del terme 2</dd>
</dl> 

```
---

# Separador

* Mostra una línea horitzontal
* `<hr>`

---

# Divisions o seccions

* L'element `div` ens permet definir una divisió o secció
* Pot contenir altres elements de bloc
* Normalment duu un atribut `id` o `class` 

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

---

# Enllacos - Obrir a una nova finestra

Per obrir l'enllaç a una nova finestra afegirem a l'`<a>` l'atribut *target* amb el contingut **_blank**.
Tal que així:

```html
<a href="http://google.com" target="_blank">anar a google</a>
```
---

# Les àncores

Ens permeten botar a un lloc específic d'una plana al qui hem posat un identificador específic que farem servir per referenciar-lo a l'hiperenllaç

```html
<div id="ancora">hola</div>
<!-- paràgraf llarg -->
<p>
<a href="#ancora">ves</a>
</p>
```
---

# Les taules

Una taula ens serveix per representar informació que s'organitza semànticament en files i columnes.
Es defineix com `<table></table>`

Podem posar l'atribut `border` amb un valor per indicar que volem que es presenti el contron de la taula, per exemple amb un `border="1"`

---

# Files

Farem servir `<tr></tr>` per definir una fila.

---

# Columnes 

Farem servir `<td></td>` per definir les columnes dins una fila. Normalment el nombre de columnes serà sempre el mateix, però podem anar variant.

---

# Títol i capçaleres d'una taula

```html
    <table>
    <caption><p>Horari</p></caption>
    <tr>
        <th>Dilluns</th><th>Dimarts</th>
    </tr>
    <tr>
        <td>Programació</td><td>Xarxes</td>
    </tr>
    </table>
```
---

# Ajustant taules

Podem ajustar amb els atributs `colspan` i `colspan` amb el valor a ampliar als `td`

---

# Elements d'HMTL5

L'HTML5 afegeix un un nou conjunt d'elements semàntics

```html

<header>Per indicar capçaleres</header>
<footer>Per indicar el peu de la plana</footer>
<nav>Pels elements de navegació/Menús</nav>
<section>Per marcar una sección de plana</section>
<article>normalment dins una secció</article>

```

---

# L'element meter

Ens serveix per indicar un rang 

```html
<meter min="0" max="10" value="6">completat</meter>
```

---

# Altres 

l'HTML5 ens permet afegir també elements d'audio i vídeo como a part de l'especificació, així que no es necessiten *players* externs.

---

# Entrada d'informació

Una part molt important de l'HTML són els formularis que ens permeten interaccionar desde el navegador amb les aplicacions i els serveis que executen.

Els veurem en avançara a la programació PHP.