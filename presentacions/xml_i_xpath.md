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
# Introducció a l'xml

* XML eXtensible Markup Language
* Està pensat per emmagatzemar dades
* S'ha de poder llegir tant per màquines com per persones
* Està format per tags que s'obrin i tancan englobant les dades

---

# Estructura d'un XML

Els xml's tenen estructura d'arbre 

```xml
<arrel>
    <branca>
        <fulla></fulla>
        <fulla></fulla>
    </branca>
     <branca>
        <fulla></fulla>
        <fulla></fulla>
    </branca>
</arrel>
```
---

# El pròleg

Defineix la versió de l'xml i la codificació de caràcters que es farà servir

```xml
<?xml version="1.0" encoding="UTF-8"?>
```

```xml
<?xml version="1.0" encoding="ISO-8859-1"?>
```
---

# L'arrel

Engloba tots els elements d'xml

```xml
<llibres>
    <llibre>Programació en PHP </llibre>
    <llibre>Programació en C++ </llibre>
</llibres>
```
---

# Els elements

* Formen el contingut de l'xml
* Comencen amb una llegra o un `_` i són sensibles a majúscules
* No poden contenir espais al nom ni comenxar amb xml o variacions
* S'han d'obrir i tancar
* Han de tenir un anidament correcte
* Poden tenir a la seva vegada elements i atributs
* Hi pot haver elements buids

A l'exemple anterior, *llibre* és un element.

---
# Els atributs

* Formen part del tag d'obertura de l'element
* Són del tipus clau -> valor 
* Sempre van entre cometes `"`
* N'hi pot haver més d'un

```xml
<?xml version="1.0" encoding="UTF-8"?>
<curs>
    <materia id="001" lang="ca">Fonaments de programació</materia>
    <materia id="002" lang="en">Sistemes operatius</materia>
    <horari materia="001">
        <dia nom="dilluns">10 a 12</dia>
        <dia nom="divendres">13 a 15</dia>
    <horari>
</curs>
```
---

# Comentaris

Es poden posar comentaris a l'XML per ajudar a entendre què és cada cosa.
Els comentaris són semblants als de l'XML.

```xml
<!-- això és un comentari -->
```

---

# Entitats especials

Hi ha caràcters que no es poden escriure directament, ja que tenen un significat especial. Així

```xml
&lt;	<	menor que
&gt;	>	major que 
&amp;	&	símbol and 
&apos;	'	apòstrof
&quot;	"	cometes
```

---

# Exercicis

1. Crea una estructura xml per guardar els pobles de Mallorca organitzats amb comarques.
2. Crea una estructura xml per informar de la predicció merereològica de la setmana.
3. Crea una estructura xml per mostrar els preus d'un hotel per tipus d'habitació i tipus de persona.
4. Crea una estructura xml per guardar els empleats d'una companyia classificats per departaments