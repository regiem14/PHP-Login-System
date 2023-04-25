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

        <?php
            echo "Print statement can be used with or without ()";
            print "Hello World! <br>";
            print "This is an example of a print statement to display output on the browser";
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

    <section>
        <h2>String data types</h2>
        <ul>
            <li>Single quotes</li>
            <li>Double quotes</li>
        </ul>
        <p>It is important to take note of cancelling out double qoutes in side of our double quotes</p>
    <?php
        echo 'I\'m learning how to work with string in PHP! This is printed out with double quotes';
        echo '<br>';
        echo 'I\'m learning how to work with string in PHP! This is printed out with escape character';

    ?>

    <hr>
    <h2>Integer Data Types</h2>
    <?php 
        echo 20 . " This is an integer data type";
        echo "<br>";
        echo "20" . " This is a string data type";
        echo "<br>";
        echo "<p>'10' is not equal to 10 in PHP.</p>";
        if ("10" == 10){
            echo "This is not the same data type!";
        }
    ?>

    <hr>
    <h2>Float Data Type</h2>
    <?php 
        echo 24.5;
        echo "<br>";
        echo 10.35;
        echo "<br>";
        echo 1000.12345;

        echo "In PHP we don't need any extra keywords in defining float data types: "  . 20.5;
        echo "<br>";
        echo "Unlike with C# we neet define a float: " . '20.5f';
    ?>

    <hr>
    <h2> Adding Line Breaks</h2>
    <?php echo "if you view the page source \n you'll find a new line in this string";
    ?>
    <?php echo nl2br("if you view the page source \n you'll find a new line in this string");
    ?>
    
    <hr>
    <h2>Boolean</h2>
    <?php
    $a = true;
    if($a === true){
        echo "Variable A is equal to true";
    }
    ?>

    <hr>
    <h2>Declaring Variables</h2>
    <?php 
    echo "<h3>Rules in declaring variables</h3>";
    echo "<ul>";
    echo "<li>Don't start your variable name with a number</li>";
    echo "<li>A vabriable name can start with a letter and an underscore</li>";
    echo "<li>It cannot start with a number</li>";
    echo "<li>It is Case Sensitive</li>";
    echo "<li>A variable name can only have alphanumeric characters</li>";
    echo "</ul>";
    ?>

    <hr>
    <?php 
    print "<h2>Coding Challenge for Variables</h2>";

    echo "<p>Declare a variable and assign value of string data type</p>";
    $name = "Grey";
    echo "I am " . $name;

    echo "<br>";
    $number = 14;
    echo "My favorite number is " . $number;
    
    echo "<br>";
    $a = true;
    echo "The boolean value is " . $a;

    echo "<br>";
    $float = 1.1416;
    echo "The float Number is " . $float;
    ?>
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