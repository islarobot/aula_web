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
#### Aplicacions Web - Entorn de desenvolupament

---

# Xampp

XAMPP té per objetiu crear una distribució LAMP fàcil d'instal·lar i molt orientada al desenvolupament. Permet tenir una configuració independent de la màquina i gestonar-la.

Podeu baixar la darrera versió  ( XAMPP For Linux ) a [apachefriends](https://apachefriends.org).

---

# Instal·lació

1. Baixau-vos l'instal·lador
2. Executau l'instal·lador com a sudo, poser haureu de canviar els permisos
3. Seleccionau les dues opcions d'instal·lació i seguiu les instruccions
5. Això instal·la xampp a `/opt/lampp`
6. Sortirà una finestra que ens permet iniciar els serveis
7. Posau com a port `9080`
8. Aturau i sortiu

---

# Configuració del depurador

1. Executau `sudo /opt/lampp/bin/pecl update-channels` per actualitzar els canals de pecl (paqueteria)
2. Executau `sudo /opt/lampp/bin/pecl install Xdebug` i esperau que finalitzi per crear el mòdul Xdebug
3. Anotau/copia l'adreça del mòdul que us dona el pas anterior
4. Si tot ha ana bé tendreu `xdebug.so` a in `/opt/lampp/lib/php/extensions/xxxxx`
5. Executau `sudo /opt/lampp/manager-linux-x64.run`
6. Reiniciau i mirau amb el `phpinfo()` que tenim l'extensió `xdebug` activada

---

# Configuram php.ini

Obriu `etc/php.ini` com a `sudo` a la carpeta `lampp` 

Al final de l'arxiu afegiu

```ini
[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
zend_extension=/opt/lampp/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so
```

Reiniciau xampp.

---

# Directori de treball

* Treballarem a `htpdocs`
* Hem de donar accés al nostre usuari, caviant el propietari
* Per exemple `sudo sudo chown -R aaloy:aaloy /opt/lampp/htdocs` 
* Executau l'ordre anterior amb el vostre usuari, feis servir `whoami` si no el sabeu.

---

# Configuram vscode

1. Instal·lau vscode
2. Instal·lau les extensions PHP Extenesion Pack, PHP Debug de Felix Becker i PHP IntelliSense
3. Configurau vscode a settings (files/preferences/settings) per a que `php.validate.executabelPath` apunti al binari de xampp
4. Comprovau al run que existeix l'executor de PHP i si no l'afegiu a Add configurtions
5. Creau una aplicació php i posau-en un punt de ruptura
6. Comprovau que executant en Debug com " s'atura al punt i podem veure les variables.