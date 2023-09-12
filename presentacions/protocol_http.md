---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **El protocol HTTP**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# Introducció a l'HTTP

* Data del 1990 i ha anat evolucionat
* Significa Hipertext Transfer Protocol
* És un protocol de capa d'aplicació
* Enes permet fer una petició de dades i recursos
* Forma la base del wue es la World Wide Web junt amb HTML i URI
* És un protocol client servidor
* Parlam de peticions (request) i respostes (response)


---

# Característiques

* És senzill
* És extensible
* Amb sessions però sense estat
* Evolutiu

---

# Què podem controlar

* Cache
* Capçaleres de petició
* Autenticació
* Proxies
* Sessions

---

# Usos

* Obtenció d'arxius
* Planes web
* API Rest
* WebDav
* Multimèdia
  
---

# Fluxe d'una petició

* El client posa una adreça
* El navegador obre una conexió TCP i fa la connexió al servidor
* El servidor envía la info:
  * codi d'estat
  * capçalera
  * cos del missatge
* Se llegeix la resposta
* Es presenta al client
* Es tanca la connexió

---

# Mètodes nés importants

*  HEADER
*  GET
*  POST
*  PUT
*  DELETE

---

# Còdis de resposta

* 200 : OK
* 301 : Moved permanently
* 304 : Not Modified
* 401 : Unauthorized
* 403 : Forbidden
* 404 : Not Found 
* 500 : Internal Server Error
* 503 : Service Unavailable
* 418 : I'm a teapot

---

# Exemples 

![basic](http://www.aulabalear.org/local/cache-gd2/358b7d971319cacaadfb6d15f64465ed.jpg)

---

# Servidors web

+ Apache
+ Ngnix
+ Tomcat
* Ligthttpd
* IIS

---

# Aplicacions web complexes

* Estan pensades per tenir múltiples servidors
* Orientades a serveis
* Van afegint capes:
  * Cachés
  * Bases de dates replicades
  * BD NoSQL
  * Sistemes batch
  * Orquestació de contenidors