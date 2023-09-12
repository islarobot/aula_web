---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **La llibreira simpleXML**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---

# SimpleXML

Aquesta llibreria ens proporciona un conjunt d'utilitats per llegir i crear documents xml des de PHP.

En lectura convertix l'arxiu xml **ben format** en un objecte que pot ser processat amb selectors de propietas i iteradors d'arrays.

---

# Carregar un arxiu XML

Per carregar un arxiu xml executarem la funció ```simplexml_load_file```  passant-li com a paràmetre la localització de l'arxiu.

Heu de tenir en compte que la localització pot ser absoluta o relativa i que hi pot haver problemes de permisos si sortiu del directori on s'està executant l'aplicació.

---

# Exemple de càrrega

```php
if(!$xml = simplexml_load_file('/data/usuaris.xml')){
    echo "No s'ha pogut carregar l'arxiu";
    /* decidir què fem */
} else {
    echo "Arxiu carregar correctament";
}

```
---

# Carregar des d'un string

El procediment és semblant a l'anterior, sols que la funció que es fa servir és  `simplexml_load_string`

```php
$string='<usuaris><usuari id="1">toni</usuari>
<usuari id="2">maria</usuari>
</usuaris>'
$xml = simplexml_load_string($string);
```

---

# Carregar l'xml des d'una url

Per carregar l'xml d'una url primer hem d'obtenir el contingut de la url mitjançant la funció `file_get_contents` quen ens retorna una cadena i llavors passar-ho a la funció anterior  `simplexml_load_string`

---

# Exemple

```php
$url = "https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";
if (!$xml = file_get_contents($url)) {
    echo "No hem pogut carregar la url";
} else {
    $xml = simplexml_load_string($xml);
}
```

---

# Accés als elements

Una vegada carregat l'arxiu o texte s'ha transformat en un objecte que pot ser recorregut com un array d'arrays que pot ser recorregut i es pot navegar pels elements.

```php
foreach ($xml as $usuario) {
    echo "Nombre: {$usuario->nombre}<br>";
        echo "e-mail: {$usuario->contacto->email}<br>";

    }
```

---

# Anidament

Si els elements a la seva vegada formen una llista, es torna aplicar el mateix criteri, és a dir, els podem recorrer o accdir com si fos un array. També podem accedir-hi per posició.

---

# Atributs

Se pot accedir als atributs d'un element es amb el mètode `attributes()` de l'element i ens retornarà un array associatiu on la clau és l'atribut i el valor el valor de l'atribut que té per l'element.

```php
$atributs = $usuario->attributes();
$actiu = $atributs['activo'];
echo "Actiu: $actiu<br>";

```

---

# Crear xml per codi

La llibreria ens permet iterar, cercar per xpath i crear elements xml, podeu trobar-ne més informació a https://www.php.net/manual/es/book.simplexml.php