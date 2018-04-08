# Bootstrap

### Seminario Gráfica Computacional I / Diseño Gráfico / UCH

#### Lunes 10 de abril, 2017

### Introducción

Bootstrap es un [Framework](https://es.wikipedia.org/wiki/Framework) de [HTML](https://developer.mozilla.org/es/docs/Glossary/HTML), [CSS](https://developer.mozilla.org/es/docs/Glossary/CSS) y [JS](https://developer.mozilla.org/es/docs/Glossary/JavaScript) para implementar [diseño web adaptable](https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable). Es una opción entre varias que se podrían explorar: [Top 10 Front-End Frameworks of 2016](https://www.keycdn.com/blog/front-end-frameworks/), [Best Front-end frameworks to try in 2016](https://hashnode.com/post/best-front-end-frameworks-to-try-in-2016-cin1unmcn00tvrb535out1y08). Optar por Bootstrap es optar por lo más popular, por asegurarse la disponibilidad de mucha ayuda en línea.

Sin más preámbulo, vamos al [sitio oficial de Bootstrap](http://getbootstrap.com). En el menú busquen la opción **customize** (quien esté usando Safari podrían tener problemas, le recomiendo el uso de otro navegador). En la página customize encontrarán muchas opciones que revisaremos más adelante. Por ahora avancen hasta el final de la página y presionen el botón: **Compile and Download**. Con esa descarga obtendrán la siguiente carpeta:

```
bootstrap/
  ├── config.json
  ├── css/
  │    ├── bootstrap.css
  │    ├── bootstrap.min.css
  │    ├── bootstrap-theme.css
  │    └── bootstrap-theme.min.css
  ├── fonts/
  │    ├──  glyphicons-halflings-regular.eot
  │    ├──  glyphicons-halflings-regular.svg
  │    ├──  glyphicons-halflings-regular.ttf
  │    ├──  glyphicons-halflings-regular.woff
  │    └──  glyphicons-halflings-regular.woff2
  └── js/
       ├── bootstrap.js
       └── bootstrap.min.js
```

Podemos eliminar algunos documentos, porque, por el momento, sólo necesitamos: 

```
bootstrap/
  ├── config.json
  ├── css/
  │    └── bootstrap.min.css 
  ├── fonts/
  │    ├──  glyphicons-halflings-regular.eot
  │    ├──  glyphicons-halflings-regular.svg
  │    ├──  glyphicons-halflings-regular.ttf
  │    ├──  glyphicons-halflings-regular.woff
  │    └──  glyphicons-halflings-regular.woff2
  └── js/
       └── bootstrap.min.js
```

Ahora vamos a otro sitio web: [http://jquery.com](http://jquery.com), para descargar **the compressed, production jQuery 3.2.0**. El código que descarguen, debe:

- renombrarse “jquery.min.js”
- incluirse en la carpeta “js”, dentro de “bootstrap”. 

Con eso queda:

```
bootstrap/
  ├── config.json
  ├── css/
  |    └── bootstrap.min.css
  ├── fonts/
  │    ├──  glyphicons-halflings-regular.eot
  │    ├──  glyphicons-halflings-regular.svg
  │    ├──  glyphicons-halflings-regular.ttf
  │    ├──  glyphicons-halflings-regular.woff
  │    └──  glyphicons-halflings-regular.woff2
  └── js/
       ├── bootstrap.min.js
       └── jquery.min.js
```

Ya podemos abrir la carpeta como un nuevo proyecto en [Atom](https://atom.io/). Lo primero que haremos en este editor será crear:

- un documento `index.html`
- un documento `style.css`
- una carpeta `images`

En el documento `index.html` tenemos que escribir: 

```
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hola mundo!</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      <div class="container">
      <div class="row">
      <div class="col-sm-12">
      <h1>Hola mundo!</h1>
      </div>
      </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
</html>
```

El documento `style.css` y la carpeta `images` pueden quedar vacías por ahora. Ya tenemos lo básico para comenzar a trabajar con Bootstrap:

```
bootstrap/
├── config.json
├── css/
|    └── bootstrap.min.css
├── fonts/
│    ├──  glyphicons-halflings-regular.eot
│    ├──  glyphicons-halflings-regular.svg
│    ├──  glyphicons-halflings-regular.ttf
│    ├──  glyphicons-halflings-regular.woff
│    └──  glyphicons-halflings-regular.woff2
├── images/
├── index.html
└── js/
│    ├── bootstrap.min.js
│    └── jquery.min.js
└── style.css
```

#### Al trabajar con Bootstrap nos conviene recordar que: 

- en una fila (`.row`) podemos usar hasta 12 columnas (`.col-`) de una grilla. [Las columnas que usemos hacen el ancho de un bloque](http://getbootstrap.com/examples/grid/);
- podemos usar distintas cantidades de columnas (`.col-`) para el mismo bloque, como opciones a distintos tamaños de ventanas (`col-xs-`, `col-sm-`, `col-md-`, `col-lg-`);
- las columnas (`col–xs-`,`col–sm-`,`col–md-`,`col–lg-`) van dentro de filas (`.row`), y las filas van dentro de contenedores, que pueden tener anchos fijos (`.container`) o fluidos (`.container-fluid`).

#### También podemos aprovechar estas referencias:

- [Bootstrap Classes Reference](https://www.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp)
- [Bootstrap 3 Cheat Sheet](https://www.cheatography.com/masonjo/cheat-sheets/bootstrap/)
- [CSS · Boostrap](http://getbootstrap.com/css/)
- [Components · Boostrap](http://getbootstrap.com/components/)

#### Si necesitamos más ayuda, podemos consultar algunos manuales:

- [Bootstrap 3, el manual oficial](https://librosweb.es/libro/bootstrap_3/)
- [Bootstrap 3 Tutorial](https://www.w3schools.com/bootstrap/)

### Aplicación

Durante esta clase, y desde lo básico, armaremos un sitio web. Vamos a poner a prueba la "misión" de este [Framework](https://es.wikipedia.org/wiki/Framework) de [HTML](https://developer.mozilla.org/es/docs/Glossary/HTML), [CSS](https://developer.mozilla.org/es/docs/Glossary/CSS) y [JS](https://developer.mozilla.org/es/docs/Glossary/JavaScript):

> Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.

Para evaluar el sitio web que desarrollen, deben crear un repositorio en GitHub y poner su sitio en línea mediante GitHub Pages. 

**Sólo serán evaluados los trabajos de quienes informaron el dato de su cuenta de GitHub en la encuesta enviada la semana recién pasada**.

En la evaluación de su sitio web en línea, se considerará el cumplimiento de los siguientes requisitos: 

- [x] Implementar un prototipo funcional, de estructura clara y consistente, que aproveche CSS, Componentes y Javascript básicos de Bootstrap.

- [x] Disponer de una página `index.html`, donde se incluyan al menos 3 *abstracts* de artículos que aporten a su tema de investigación, con un vínculo a cada artículo, además de su referencia redactada en formato APA.

- [x] Disponer de una página `about.html`, donde se incluyan al menos 1 párrafo sobre su tema de investigación y 1 párrafo sobre su relación con el tema (motivación), siendo ambos redactados con atención a: [How Users Read on the Web](https://www.nngroup.com/articles/how-users-read-on-the-web/) y [Stanford Guidelines for Web Credibility](http://credibility.stanford.edu/guidelines/index.html).

### Entregas

**Lunes 10 de abril, 2017. Estudiantes de Seminario de Gráfica Computacional I. Diseño UCH**

- **(1 pto.)** [Aravena Maldonado, Matheus](https://matheusaravena.github.io/identidad-contracultural/)
- **(0 pto.)** Blasco Barraza, Catherine Alejandra
- **(0 pto.)** Carrizo Acosta, Javier Alejandro
- **(2 pts.)** [Castro Andrews, Javiera Constanza](https://javieracastroa.github.io/clase-10-abril)
- **(1 pto.)** [Chung Astudillo, Catalina Constanza](https://chungkat.github.io/computacion-10-abril/)
- **(2 pts.)** [Cid Sepúlveda, Carlos Andrés](https://carlos-cid.github.io/clase10-04/)
- **(2 pts.)** [Cornejo Guevara, Catalina Francisca](https://catalinaconejoguevara.github.io/clase-10-abril/)
- **(2 pts.)** [Faúndez Ibaceta, Jessica Daniela](https://jessydfaundez.github.io/10-abril-2017/)
- **(2 pts.)** [Gómez Mercado, Martín Andrés](https://martingomezm.github.io/bootstrap-10-04-2017/)
- **(2 pts.)** [Günsche Pinto, Paula Daniela](https://paulagunsche.github.io/computacion-10-abril/)
- **(0 pto.)** Jarpa Videla, Marisol Andrea
- **(2 pts.)** [Monroy Kleemann, María José](https://cotemonroy.github.io/clase-10abril2017/)
- **(2 pts.)** [Núñez Olea, María Paz](https://mpaznunez.github.io/10_abril_2017/)
- **(1 pto.)** [Quiroz Marambio, Pamela Andrea](https://quizozi.github.io/Computacion-10-04/)
- **(0 pto.)** Rocha Gómez, Aline Anaís
- **(2 pts.)** [Rojas Vergara, Nicolás Gastón](https://nicoconfused.github.io/computacion-10-abril/)
- **(2 pts.)** [Solís Alcaíno, Ignacio Enrique](https://ignaciosolis.github.io/computacion-10-abril/)
- **(0 pto.)** Suil Aravena, Katherine Veronica
- **(1 pts.)** [Vega Olivares, Romina Paz](https://rominavegaolivares.github.io/computacion-10-abril/)
- **(2 pts.)** [Venegas Suzarte, Camila Fernanda](https://camilavenegass.github.io/comp-10-abril/)
- **(2 pts.)** [Vera Hablares, Brian Antonio](https://bverahablares.github.io/computacion-10-abril/)

--------

[Clase anterior](https://github.com/profesorfaco/dgp502-1-2017-04/) | [Siguiente clase](https://github.com/profesorfaco/dgp502-1-2017-06/)

