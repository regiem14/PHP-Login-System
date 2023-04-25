<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGIE FIRST PHP SERVER</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script></head>
<body>
    <header>
        <div class="header">
            <?php
            echo "My first PHP Script with single quoutes";
            echo '<br>';
            echo "My third PHP Script with single quoutes";
             ?>
        </div>
    </header>

    <section>
        <h2>React Section</h2>
        <div class="mydiv"></div>
    </section>

    <section>
        <h2>What is PHP?</h2>
        <ul>
            <li>PHP is an acronmy for Hepertext Preprocessor.</li>
            <li>It is widely used and an open source scripting languange.</li>
            <li>PHP scripts are executed on the server</li>
            <li>PHP is free to download and use.</li>
            <li>It is a powerful scripting language that it is used by the biggest blogging system on the web - WordPress!</li>
        </ul>

        <hr>

        <h2>Two type common of Programming paradigm that you will encounter</h2>
        <ol>
            <li>Procedural Programming</li>
            <li>Object Oriented Programming</li>
        </ol>

        <hr>

        <h2>What can PHP Do?</h2>
        <li>It can generate dynamic page content</li>
        <li>It cant create, open, read, write, delete, and close files on the server</li>
        <li>Receive and send cookies</li>
        <li>Can perform CRUD - Create, Read, Updated, and Delete</li>
        <li>Setup control user-access</li>
        <li>Encrypt data</li>
    </section>

    <hr>
    <hr>
    <section>
        <h2>Two basic ways to get output</h2>
        <ul>
            <li>echo statement</li>
            <li>print statement</li>
        </ul>    
        <p>
            Hi, this is a paragraph content inside a paragraph element
        </p>
        <?php 
            echo "Hello World, I'm Regie!";
            echo "<br>";
            echo "This is also a paragraph inside of element tag";
            echo "<br>";
            echo "<br>";
            echo "<p>This is another <b> that got displayer php tags.</b></p>";
        ?>
    </section>

    <hr>

    <section>
        <h2>Without escaping</h2>
        <?php 
        if(1 == 1){
            echo "<p>This works alright with an if statement!</p>";
        }
        ?>
        
        <h2>With escaping</h2>
        <?php 
         if(1 == 1) { 
        ?>

        <p>This should work wiht the implement of the concept of escaping PHP!</p>
        
        <?php }?>
    </section>
    
    <section>
        <h2>Scalar data types</h2>
        <strong>Data Types</strong>

        <h3>12 Primitive Data Types</h3>
        <ul>
            <li>Strings</li>
            <li>Integers</li>
            <li>Floats</li>
            <li>Boolean</li>
        </ul>

        <h3>Compound</h3>
        <ul>
            <li>Array</li>
            <li>Object</li>
            <li>Callable</li>
            <li>Iterable</li>
        </ul>

        <h2>Special</h2>
        <ul>
            <li>Resource</li>
            <li>Null</li>
        </ul>

        <h2>Pseudo-Types</h2>
        
    </section>

    <div id="mydiv"></div>
​
    <script type="text/babel">
      function Hello() {
        return <h1>Hello World! This is example of REACT embedded on a php file</h1>;
      }
      
      const container = document.getElementById('mydiv');
      const root = ReactDOM.createRoot(container);
      root.render(<Hello />)
    </script>    
</body>
</html>