# Nivelación HTML, CSS, JS

### Seminario Gráfica Computacional I / Diseño Gráfico / UCH

#### Lunes 20 de marzo, 2017

## HTML

Cada elemento de HTML se escribe, generalmente, entre etiquetas:
`<etiqueta>contenido</etiqueta>`

Cada elementos HTML es un sandwich, con las etiquetas como rebanadas de pan, y el contido es su relleno. Aunque también hay elementos HTML que nos obligan a cambiar la analogía del sandwich por canapé, por ejemplo: `<hr>`, `<br>`, `<img>`, `<meta>` 

**Con cada elemento definimos qué se ve en una página web.** 

Cada elemento, en su etiqueta de inicio, puede estar determinado por uno o varios atributos; cada atributo tiene su variable.

`<etiqueta atributo="variable">contenido</etiqueta>`

Deben notar que atributos y variables se escriben solo en la primera etiqueta, la de apertura, nunca en la de cierre.
Mediante atributos y variables pueden cambiar un simple párrafo:

`<p>esto es un párrafo</p>`

Este elemento puede seguir teniendo el mismo contenido, pero podría tener las características de una clase "alumna" y ser único por una identidad "mariana".

`<p class="alumna" id="mariana">esto es un párrafo</p>`

Atributos y variables también nos permiten establecer vínculos, relaciones y recursos. Así, por ejemplo, puedo establecer un recurso de imagen que se llama "selfie", que tiene extensión "jpg", y se guarda en la carpeta "images", al mismo nivel que el documento HTML. Además puedo indicar que tenga una clase "destacada":

```
<img src="images/selfie.jpg" class="destacada">
<!--eso fue un canapé, y esto es un comentario-->
```

## CSS

Cada regla de CSS se escribe, generalmente, así:

`selector{propiedad:valor;}`

Con cada regla definimos cómo deberían verse los elementos en el HTML. Esta definición exige una conexión entre el HTML y el CSS. 

Esta conexión se hace:

A nivel de cada regla: El selector debe apuntar a elementos, partes, estados, clases o identidades

A nivel de conjunto de reglas: El CSS debe estar incrustado-en o vinculado-a el documento(s) HTML correspondiente(s).

Veamos primero la conexión a nivel de cada regla, considerando el caso de los elementos:

```
body{
  color:white;
  background:black;
  font-family:Helvetica, Arial, sans-serif;
  font-size:1em;
}
```

Sigamos con la conexión a nivel de cada regla, considerando ahora las partes de un elemento (pseudoelemento):

```
p::first-line{
  text-transform: uppercase;
}
```

Sigamos con la conexión a nivel de cada regla, considerando ahora un estado espacial del elemento (pseudoclase):

```
a:hover{
  text-decoration: underline;
}
```

Otra más de conexión a nivel de cada regla, con una clase (class):

```
.destacada{
  border:5px solid rgba(255,255,255,1);
}
```

Y la última conexión a nivel de cada regla, con una identidad (id):

```
#mariana{
  color:rgba(255,200,200,1);
}
```

Ahora, para cerrar, veamos la conexión a nivel de conjunto de reglas CSS.

Bien puedes agregar un poco entre las líneas de código en el cuerpo (body) del HTML, usando atributos y variables:

`<p style="color:red;">esto es un párrafo</p>`

Mejor sería hacerlo una vez para todo el documento dentro de la cabeza (head) del documento HTML:

```
<style>
body{
  color:white;
  background:black;
  font-family:Helvetica, Arial, sans-serif;
  font-size:1em;
}

#mariana{
  color:rgba(255,200,200,1);
}

/* Este es un comentario en CSS */
</style>
```

Pero lo más efectivo sería trabajar en un documento CSS independiente, que se vincule con uno o varios documentos HTML

`<link rel="stylesheet" href="css/estilo.css" type="text/css">`

Este documento, que ha servido para presentarles los contenidos de la clase, es un documento HTML, cuyo estilo está definido mediante un documento CSS.

## JS (JavaScript) 

Este lenguaje es utilizado para programar scripts que se ejecutan del lado del cliente. Cuando [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript/Guide) se ejecuta, no modifica directamente el código fuente de la página web sino que el [DOM](https://es.wikipedia.org/wiki/Document_Object_Model) de la misma; podemos seguirle la pista a esta ejecución mediante la [Consola de JavaScript](https://transferwise.com/es/help/article/2247654/tecnico-navegador/como-abrir-la-consola-de-tu-navegador) que incluyen los navegadores.

El código JavaScript se puede incluir o vincular al documento HTML entre etiquetas `<script></script>` y en cualquier parte del documento, aunque se suele ubicar según la prioridad de carga (si ejecuta algo clave, va arriba; si su ejecución es secundaria respecto del texto, va abajo).

Para reducir el trabajo con JavaScript a la medida de lo justo y necesario, se acostumbra a usar librerías (bibliotecas). Una de las más usadas por los diseñadores es [jQuery](http://jquery.com/), con ella pueden agregar sliders, acordeones, tabs, etc.

Pueden encontrar tutorial básico de [jQuery](http://jquery.com/) en el siguiente vínculo:

- http://web.tursos.com/tutorial-jquery-rapido-facil-lo-basico/

--------

[Clase anterior](https://github.com/profesorfaco/dgp502-1-2017-01/) | [Siguiente clase](https://github.com/profesorfaco/dgp502-1-2017-03/)
