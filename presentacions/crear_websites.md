---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Crear Webs completes**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# Objectiu

* Volem crear una web complexa
* Amb moltes planes enllaçades
* Amb disseny i responsiva

---

# Treball en equip

Aquests tipus de web es fan en col·laboració de molta gent: gente de negoci, usabilita, disseny, maquetació, programaició front, back, sistemes, ...

Nosaltres veurem com passar d'un disseny estàtic a una web dinàmica fent servir PHP i també bases de dades.

---

# DRY : Don't Repeat Yourself

A una web és normal que hi hagi seccions que es repeteixen: capçalera, peu, notícies, etc. O seccions que son molt semblants en estructura. El que volem és evitar repetir, evitar haver de tocar a molts llocs per fer un canvi a un element comú.

---

# Trocejant

Podem separar les seccions que es van repetin en arxius separart i incloure's a la nostra plana segons els necesitem i en el punt que els encessitem.

* `include` *arxiu*
* `include_once` *arxiu*
* `require` *arxiu*
* `require_once` *arxiu*

---

# Include o require?

Amb `include` si l'arxiu no existeix no ens donarà error, en canvi amb `require` si que ho farà.

Feis la prova!

---

# On posam els troços

* Normalment es poden posar a una carpeta anomenada `include` però no hi ha un lloc predeterminat.
* Convé que posau nom significatiu per tenir-ho més fàcil a l'hora de llegir el codi.
* Pensau que el codi s'inclou tal com està en el punt que ho posau, podeu incloure variables, html, css, ...

---

# Cream la web

* Baixam el zip `elearning`i descomprimim
* Cercam l'index
* Revisam l'html i miram allò que es repeteix
* Passam a PHP, trocejam i fem includes
* Anam provant cada vegada
