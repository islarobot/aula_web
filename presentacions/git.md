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

# Introducció a git

1. Control de versions
   1. Permet seguir els canvis d'un projecte
   2. Ens permet treballar en equip
   3. Ens permet crear versions del nostre programa
   4. Permet saber qui ha tocat el codi (blame)

---
# Git

   1. Creat per Linus Towrarlds al 2005 per desenvolupar el kernel de Linux
   2. És codi obert i lliure
   3. S'ha convertit en l'starndard per desenvolupament

---
# Github

* Junt a Gitlab és un dels serveis git més populars
* Té una part social: seguiment, estrelles, issues
* Fomenta el compartir i col·laborar
* Si voleu desenvoupar conve ser-hi i particiar-hi
* Si feis sistemes, git us ajudarà a guardar configuracions.

---

# Instal·lació

```bash

    sudo apt install git-all
    git config --global user.name "Antoni Aloy" 
    git config --global user.email "aaloy@aulabalear.org"

```

Es pot fer feina amb git en local, sense un servidor central.
Convé acosutmar-se a fer-ho per tot el que sigui text.

---

# Crear compta a github

* Feis servir la Google de l'escola
* Sols és registrar-se i començar

---

# Conceptes clau

* Git té moltes comandes i potser complicat de fer anar al començament
* Però coneguent els conceptes claus és bo de fer servir
* Les comandes més complexes s'aprenen en necessitar-les
* Sempre hi ha una manera de fer les coses

---

# Snapshot

* És la manera en que git guarda les versions
* Permet fer el seguiment a un punt de temps
* És responsabilitat del programador decidir quan fa un *snapshot*
* Podem anar a un *snapshot* en qualsevol moment
* Es creen amb la comanda `commit`

---

# commit


Un commit ens permet crear un *snapshot* i va acompanyat d'un comentari que explica el motiu del canvi


* Conté 3 peces d'informació rellevant:
  1. Informació del canvi
  2. Referència al *commit* anterior (*parent*)
  3. Un *hash* que l'identifica

`git commit -m "missatge explicatiu`

---

# repositori (repo)

* És la col·lecció d'arxius i història dels canvis d'aquests arxius d'un projecte.
* És a dir, la col·lecció de tots els *commits* que hem fet
* Poden estar a una màquina local o a un servidor remot
* L'acció d'obtenir una còpia del repositori es diu **clonar** (*clone*)
* L'acció d'obtenir els canvis del repositori és diu fer *pull*
* L'acció de guardar els nostres canvis al repo es diu fer *push*

---

# repositori local

* Podeu crear un repositori local amb `git init`
* Sempre ho podreu pujar més tard al cloud
* Però si podeu començau a cloud, estalviareu temps

---

# branques (branch)
  
* Ens permeten separar la feina
* Tot commit pertany a una branca
* La branca principal d'un projecte s'anomena (main o master)
* *HEAD* és la referència al commit més recent

---

# Fent feina

* La manera més senzilla és utilitzar un servidor
* Creau un repositori anomenat `tutorial` al Github

```bash

git clone https://<url del repo>

```

a una carpeta. Convé que ho poseu tot al mateix lloc. Per exemple
jo faig servir `workspace`

---

# Taller

1. Crear arxiu HTML base `hello.html`
2. Crear arxiu `README.md` amb el text "Tutorial de git"
3. Afegir l'arxiu, ho marcam com a *staging*
   1. `git add <arxiu>` per a cada arxiu creat
   2. Feis `git status` per veure què hi ha a *staging*
4. Fem commit dels canvis (cream un snapshot)
   1. `git commit -m "creat el hello world"`
5. Fem un `git push` per enviar-ho al repositori
6. Anau al github i verificau que hi ha els arxius


# Taller

1. Feis el tutorial https://learngitbranching.js.org/?locale=es_ES
