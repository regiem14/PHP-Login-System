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

    <br>
    <br>
    <section>
        <h2>Two basic ways to get output</h2>
        <ul>
            <li>echo statement</li>
            <li>print statement</li>
        </ul>    
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