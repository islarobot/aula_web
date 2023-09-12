---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Introducció a les bases de dades amb Mysql**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web


---

# Què és MySQL/MariaDB/Percona?

És un sistema de gestió de base de dades (SGBD) relacional desenvolupat al 1994 per MySQL AB, ara propietat d'Oracle, amb llicència dual i soportada per múltiples sistemes operatius.

---

# Model relacional

La totalitat de les dades que fa servir MySQL es guarden en forma de registres a taules relacionades entre sí per claus (key)

---

# Taules

Una taula està formada per files i columnes. Les columnes contenen un atribut de la informació que es guarda, una fila conté un registre.

---

# Clau primaria

És a l'atribut o conjunt d'atributs que identifiquen de manera única un registre d'una taula de la base de dades. Ha de ser única per tota la taula.

---

# Tipus de claus

* Claus naturals: amb informació semàntica i/o de negoci
* Claus subrogades: sense significat de negoci (id/uuid)

---

# Indexos

Els indexos ens permeten accedir a la informació més ràpidament. Bàsicament consisteixen en que part de la informació s'ordena prèviament i permet localitzar millor els registres.

---

# SQL

És el llenguatge que ens permet gestionar les taules (DDL) i accedir i gestionar la informació (DML). És el que es coneix com DSL (Domain Specific Language) i està especialitzat per administrar i recuperar informació de bases de dades relacionals.

Creat al 1970 per Edgar Frank Codd es va convertir en estàndard ANSI al 1987.

---

# Gestió de bases de dades amb PHPMyAdmin

Aquesta aplicació ens permet gestionar de manera gràfica la nostra base de dades. Permet crear bases de dades, taules, registre, etc.

Hi ha més gestors, tant gràfics com de consola per gestionar les BD.

---

# Crear una base de dades

1. Cream la base da dades i li posam un nom
2. Elegim el *collate* és a dir, les regles de comparació de caràcters
3. Crear les taules
4. Afegir els camps

---

# Tutorial/Resum

PHP i mysql són responable de gran part de l'èxit actual de la web. Podeu trobar un
tutorial a :

https://www.ionos.es/digitalguide/servidores/know-how/guia-para-aprender-a-utilizar-mysql/

---

# Exercici 1

Creau les següents taules amb l'editor i entregau quines sentències sql s'han fet servir internament.

1. Crear una base de dades anomenada escola
2. Crear la taula curs amb id, nom
3. Crear la taula estudiants amb id, nom, llinatge, email
4. Crear la taula tutor amb id, nom

---

# Exercici 3

Inserir a la taula *curs* de l'exerici anterior l'assinatura `aplicacions web` i digues sentència SQL ha fet servir.

---

# Exercici 4

Afegeix un uuid al la base da dades de l'exemple de redirecció i modifica el codi per a que el guardi i enlloc de al gràcies anar-hi per id que hi vagi per uuid. El uuid ha de ser únic.

---

# Exercici 5

Modifica el programa per a que permeti llistar, editar, afegir i esborrar contactes.
