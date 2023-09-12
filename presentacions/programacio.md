---
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.jpg')
marp: false
---

![bg left:40% 80%](http://www.aulabalear.org/IMG/siteon0.png)

# **Introducció a la programació**

## Aula Balear
### 2n Curs Grau Mitjà: sistemes Microinformàtics i Xarxes
#### Aplicacions Web

---
# PHP : Hypertext Preprocessor

* És un llenguatge script que s'executa al servidor
* Normalment es fa servir per generar planes web (HTML)
* Genera contingut dinàmic (xml, pdf)
* Ens permet interactuar amb base de dades, processar formlaris, etc
---

# Hello world

```php
<?php
echo "Hola món!";
?>
```

Podem fer servir repl.it i triar `php cli` per executar el programa i fer les proves.
`php cli` treu rels resultats per la consola, que veureu a la dreta.


---

# Comentaris

Els comentaris es fan servir per documentar el codi, per dir què fa o per aclarir algun aspecte. És millor dir què fa que com ho fa.

En PHP hi ha dos tipus de compentaris:

* De bloc ```php /* un comentari de bloc */ ```
* De línea `//` o `#`

--- 

# Comentaris 
Exemple:

```php
<?php
/* Exemple de hello world 
(c) Pau Hami Pascual
*/

echo "Hello world!"; // escriu

?>
```

---

# Regles bàsiques

1. S'obri amb `<?php`  i se tanca amb `?>`
2. Les instruccions acaben amb un punt i coma `;`
3. És sensible a majúscules i minúscules

---

# Variables

Les variables ens permeten guardar valors per utilitzar-los més tard. Són la base de la programació. En PHP les variables s'identificen amb el signe del `$`

```php
<?php 
$a = 10;        // enter
$b ="hola";     // text
$total = 10.23; // real ó coma flotant
$is_gran = true; // boolean que pot ser true ó false
?>
```
A més també veurem els arrays i objectes. A poc a poc.

# Tipat 

PHP té tipat dinàmic, això vol dir que intenta endivinar de quin tipus és la variable segons l'assignació que li facem.

També ho fa a les operacions

```php
<?php 
$cadena="10";    //això és texte
$num=2;         //això és un nombre sencer
echo $cadena+$num
?>
```
Surt :

```bash
12
```

---

# Forçant els tipus

A vegades ens interessarà fer que el PHP no endevini, sinó que volem forçar el tipus de dades per evitar que l'intèrpret faci de les seves.

Per això se posa el tipus que volem forçar entre parènteis davant de la variable.

* `(int)` per passar a sencer
* `(real)` `(double)` `(float)` per passar a real
* `(string)` passam a cadena

--- 

Per exemple: 

```php
<?php
$num="10";
$num = (int) $num;
?>
```
---

# Operadors

* `+ `  Suma
* `-`   Resta
* `*`   Multiplicació
* `/`   Divisió
* `%`   Reste de la divisió sencera (mòdul)
* `**`  Exponenciació
* `=`   Assignació
* `.`   Concatenació
* Es poden combinar amb assignació `$a += 5`

---

# Exercici 1

1. A una oferta en diu que un preu de 283 € està rebaixat un 15%. Fes un programa que ens calculi què hem de pagar.

2. El preu d'un PC és de 653 € més IVA, que és d'un 21%. Calcula quin preu hem de pagar.

--- 
# Exercici 2

3. El comerciant anterior ens diu que per ser nosaltres ens aplica un 5% de descompte abans d'IVA al PC anterior. Calcula quan hem de pagar.

4. La fórmula de l'interés simple és `i = c*r*t/100`, on c és el capital, i r l'interés amb tant per cent i t el temps en anys . Si els de la tarja de crèdit ens cobren un 5% mensual, calcular quant pagarem en 3 mesos. I en un any?

---

# Comparació

* `==`  igualtat
* `!=`  distint - també `<>`
* `===` exactament iguals
* `!==` diferents en valor o tipus
* `<` menor `>` major `>=`, `<=`

---

# Lògica

Els operadors lògics ens retornaran un valor vertader `true` o fals `false` segons el contingut que estiguem operant

`valor1` `operador` `valor2`

* `and` o `&&` vertader si ambdos valors són vertaders
* `or` o `||` si un dels valors és vertader
* `xor` si un és vertader però no els dos
* `!` negació, si és vertader passa a fals o viceversa.

---

# Operadors d'increment/decrement

* `++$variable`     `--$variable` 
* `$variable++`     `$variable++`

*pre* :     incrementam i retornam
*post*  :   retornam i incrementam

---

# Excercici

Feis un programa on es vegin els distints usos i valors dels operadors increment i decremetn amb pre i post.

---

# Cadenes

Una cadena va entre cometes deobles `"` o bé entre cometes simples `'`. Les dobles fan que el PHP interpreti el que hi ha dins, fent la substitució de variables pel seu valor

```php
<?php 
$a = "món";
echo "Hola $a \n";
echo 'hola $a \n';
?>
```

```console
Hola món 
hola $a \n 
```

---

# Caràcters especials

També s'anomenen *escape characters* 

* `\n`  salt de línea
* `\r`  retorn de carro
* `\t`  tabulador
* `\\`  escriu `\`
* `\$`  escriu el `$`
* `\"`  escriu `"`

---

# Estructures de control

Una estructura de control ens permet controlar el fluxe d'execució de l'aplicació. Un programa normalment s'executa línea a línea i una estructura de control ens permet d'alterar-ne el fluxe, a partir de certes condicions o paràmetres.

---
# Exemple

![estructures de control](https://moodle.nigul.coop/pluginfile.php/11640/mod_resource/content/1/php-control-structures-and-loops-if-condition-flow.png)

---

# Estructures més habituals

* if (if/else) (if/elseif/else)
* switch
* while
* do - while
* for
* foreach

---

# if

Un `if` simple. Fixem-nos que el que s'ha d'executar si la condició s'acompleix va entre claus `{}`
```php
<?php
$age = 50;
 
if ($age > 30)
{
  echo "Your age is greater than 30!";
}
?>
```
---
# if - else

Serveix per executar codi en funció de que la condició es compleixi o no.

```php
<?php
$age = 50;
 
if ($age < 30)
{
  echo "Your age is less than 30!";
}
else
{
  echo "Your age is greater than or equal 30!";
}
?>
```
---
# if - elseif - else

```php
if (expression1)
{
  // codi si se cujpleix expression1
}
elseif (expression2)
{
  // comprovam expression2 si s'acompleix s'executa
  // aquest codi.
}
elseif (expression3)
{
  // si no s'ha executat res de lo d'abans comprovam
  // expression3 i si és vertader s'executa
}
/*
Tants elfif(expression) com necessitem
*/
else
{
  // Si no s'ha executat cap del codi anterior
  // s'executa aquest codi
}
```

---

# Exercici 3

Escriu un programa que a partir d'un nombre que posarem a la variable `$edat` ens digui dins quin rang d'edat ens trobam.

Entre 0 i 3 anys : infants
Entre 4 i 17 : nins
18 - 64: adults
i més de 64 : senior

---

# Switch

Quan hi ha molts `elseif` és fa complicat gestionar el codi i PHP té una estructura adient per aixó: `switch`

```php
<?php 
switch ($variable) {
    case "valor1":
        /* codi a executar si la variable té aquest valor'*/
        break;
    case "valor2":
        /* codi a executar si la variable té aquest valor'*/
        break;
    /* etc */
    default:
        /* si tot falla arribam aquí */
}
?>
```
---
# Alerta amb el break!

Si no posam el break podem executar més d'un bloc `case` i això normalment no és el que volem.

---

# El bucle for

Serveix per executar un troç de codi un nombre determinat de vegades

```php
<?php 
    for (inici; condicio; increment) {
        /* codi a executar */
    }
?>
```
**Important**: alerta amb els `;` i assegurau la sortida.

---
# Exemple, la taula del 7

```php
<?php 
    echo "Taula del 7 \n";
    for ($i=1; $i<=10; ++$i) {
        echo "$i x 7 = $".$i*7."\n";
    }
?>
```

---

# Arrays

Hi ha tres tipus de taules / *arrays* en PHP

* Indexats (els més comuns)
* Associatius, amb claus amb nom
* Multidimensionals, que tene un o més arrays

---

# Arrays indexats

1. Comencen a indexar-se pel zero
2. Es poden definir explícita o implícitament.

```php
<?php 
    $assignatures = array('Programació', 'Llatí', 'Matemàtiques', 'Física');
    echo $assignatures[0]." \n";
    echo "Tamany de l'array: ".count($assignatures);
?>
```

---

# Exemple

```php
<?php
    $assignatures[0] = "Programació";
    $assignatures[1] = "Llatí";
    $assignatures[2] = "Matemàtiques";
    $assignatures[3] = "Física";
    echo $assignatures[30];
    $assignatures[30] = "Nova";
    echo var_dump($assignatures);
?>
```
* Nota * : `var_dump` ens permet veure què hi ha a una variable.

---

# Array associatiu

Es creen o s'hi fa referència amb clau:valor

```php
<?php 
    $lang['es'] = 'Español';
    $lang['ca'] = 'Català';
    $lang['en'] = 'English';

    echo $lang['en']; 
?>
```

---

# Definició explícita

```php
<?php 
$lang = array ('es' => "Español", "ca" => "Català", "en" => "English");
echo $lang['en'];
?>
```

---

# Text amb els arrays

```php
<?php 
$lang = array ('es' => "Español", "ca" => "Català", "en" => "English");
echo "es correspon a l'idioma {$lang['es']} \n";
?>

``` 

---
# Recorrem un array indexat amb un for

```php
<?php 
$assignatures = array('Programació', 'Llatí', 'Matemàtiques', 'Física');
for ($i=0; $i<count($assignatures); ++$i) {
  echo "$i)\t{$assignatures[$i]} \n";
}
?>
```
---

# Recorre arrays amb `foreach`

En arrays indexats

```php
<?php 
$fruits = array('apple', 'banana', 'orange', 'grapes');
foreaºch ($fruits as $fruit)
{
  echo "$fruit \n";
}
?>
```

---

# Arrays associatius amb `foreach`

Com que s'accedeix per clau valor, mapejam cada element amb la clau i el valor corresponents.

```php
<?php 
$lang = array ('es' => "Español", "ca" => "Català", "en" => "English");
echo "Taula d'idiomes\n";
foreach ($lang as $idioma => $nom) {
  echo "$idioma : \t $nom\n";
}
?>
```

---

# Exercici 4

1. Crea un array indexat amb les assignatures que tens, posant un codi per assignatura.
2. Crea un array indexat amb les assignatures que tens cada dia.

---

# El bucle do-while

Sempre s'executa el contingut. La condició s'avalua al final. Si és vàlida continua el bucle, en cas contrari surt.
```php
<?php
do
{
  // codi a executar
} while (expression);
?>
```
---

# El bucle while
Primer s'avalua la condició, per la qual cose el codi pot executar-se o no.

```php
<?php
while (expression)
{
  // codi a executar
}
?>
```
---

# Manipulant bucles

* `continue` salta a la següent iteració
* `break` surt del bucle

---

# Exercici 5

Escriu un programa que imprimeixi els 100 primers nombres naturals, de manera que si és multiple de tres enlloc del número imprimesqui "idò sí", si és múltiple de 5 imprimeixi "idò no" i si és múltiple de 15 imprimeixi "baixa del carro".