<!DOCTYPE HTML>
<html lang="es">
  <head>
    <title> IES Zaidin vergeles @yield('title')</title>

    <style>
        * {margin:0px; padding: 0px;}
        body {position: relative;border: 3px;width: auto;height: 100%;margin: auto; background-color: black;}
        article {position: relative;border:3px green; width:auto; height: 768px; margin: 5px auto;background-color: lightgreen;}
        footer {position: relative;border:3px hotpink;width:auto;height: 40px;margin: 3px auto;background-color: indigo;}
        header {position: relative;border: 3px; width: auto;height: 100px;margin: 30px;background-color: lawngreen;}
        section.lista {position: relative;border: 2px solid black;width: 1100px;height: 550px;margin: 5px;background-color: lightsalmon;}
        aside {position: relative;border: 2px solid black;width: 200px;height: 740px;margin: 5px; background-color: grey;;float: right;}
        nav {position: relative;border: 2px solid transparent;width: 900px;height: 80px;margin: 3px auto;}
        ul {list-style-type: none;margin: 3px;padding: 5px;}
        li {font-size: 10px;font-variant: small-caps;color:magenta;text-align: center;text-decoration: none;float: left;
            background-color:mediumspringgreen;border: 1px solid transparent;width: 100px;height: 40px;margin: 10px;}
     </style>
  <head>
  <body>
    <header>
        
      
        <h3 style="text-align: center;">P&aacute;gina de interes</h3>
    </header>
    <nav>
      <ul>
        <li>PRIMER ENLACE</li>
        <li>SEGUNDO ENLACE</li>
        <li>TERCER ENLACE</li>
        <li>CUARTO ENLACE</li>
      </ul>
    </nav>

    <article>
      <aside>
        <h4> Publicidad </h4>
      </aside>
      <section>
        <h2 style="text-align: center;"> Probando, la secci&oacute;n </h2>
        <p>fdfdfdfdfd</p>
        <p>gfgfdgfdgfdgfgfgfgv</p>
        @yield('content')   
      </section>
     
    </article>

    <footer>
      <h2>Copyright de... </h2>
    </footer>
  </body>
</html>
