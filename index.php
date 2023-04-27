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
    
        echo "<hr>";
        echo "<h2>Constants In PHP</h2>";
    
        CONST PI = 3.14;
        CONST BALL_HEIGHT = 5;
        CONST BALL_WIDTH = 5;
    
        echo PI;
        echo "<br>";
        echo "The ball width is " . BALL_WIDTH;
        echo "<br>";
        echo "The ball height is " . BALL_HEIGHT;

        CONST PLAYER_HEIGHT = 5;
    ?>
    </section>
    
    <section>
        <h2>Expressions in PHP</h2>
        <ul>
            <li>Operators</li>
            <li>Conditions</li>
            <li>Loops</li>
        </ul>

        <hr>
        <h2>Operators</h2>
        <li>Arithmatic Operators</li>
        <li>Assignment Operator</li>
        <li>Comparison Operator</li>
        <li>Increment/Decrement Operators</li>
        <li>Logical Operators</li>
        <li>String Operators</li>
        <li>Array Operator</li>
        <li>Conditional Assignment Operator</li>
        <li>Operator Precedence</li>
        <li>Error Control Operators</li>
        <li>Execution Control Operators</li>
        <li>Type Operators</li>
        <li>Bitwise Operator</li>

        <hr>
    <?php 
        $num1 = 1;
        $num2 = 2;
        $sum;
        $product;
        $difference;
        $quotient;

        echo "<h3>Arithmetic Operators</h3>";
        $sum = $num1 + $num2;
        echo $sum;
        echo "<br>";

        $product = $num1 * $num2;
        echo $product;
        echo "<br>";

        $difference = $num1 - $num2;
        echo $difference;
        echo "<br>";

        $quotient = $num1 / $num2;
        echo $quotient;
    ?>

    <?php
        echo "<h3>Assignment Operators</h3>";
        echo "<h4>Compoudning assignment with augment</h4>";
        
        // $num1 += $num2;

        echo $num1;
        echo "<br>";
        $num1 = $num1 + $num2;
        print $num1;
    ?>

    <?php 
        echo "<h3>Comparison Operatos</h3>";

        $num1 == $num2;
        $num1 === $num2;
        $num1 != $num2;
        $num1 !== $num2;
        $num1 < $num2;
        $num1 > $num2;
        $num1 <= $num2;
        $num1 >= $num2;
        $num1 <=> $num2;
    ?>

    <?php
        $num1 = 1;
        $num2 = "2";
        // $num1 == $num2;
        // $num1 === $num2;
        echo "Variable \$num1 is an example of an integer";
        echo "<br>";
        echo gettype($num1);
        echo "<br>";
        echo "Variable \$num2 is an example of a string";
        echo "<br>";
        echo gettype($num2);
        echo "<br>";

        echo "<p>\$num1 with an assigned value of 1, is not equal to \$num2 with assigned value of '1'</p>";
        if($num1 != $num2){
            echo "This is printed after an if statement as an example of comparing two data types that are not equal to one another";
        }

        $num3 = "1";
        $num4 = 4;
        $num5 = "4";
        
        echo gettype($num4);
        echo gettype($num5);
        echo "<br>";
        echo "<br>";
        
        if($num4 != $num5){
            echo "This will not be printed out.";
        }else{
            echo "This gets printed because num4 and num5 are not equal to one another.";
        }
        
        $num6 = 4;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<hr>";

        
        echo "<h3>Greater than or less than comparison operator</h3>";

        $num1 = 1;
        $num2 = 2;
        $num3 = 3;
        $num4 = 4;
        $num5 = 5;
        $num6 = 5;

        if ($num1 < $num2){
            echo "num1 is less than num2";
        }
        
        echo "<br>";
        
        if ($num3 <= $num4){
            echo "num3 is less than or equal to num4";
        }
        
        echo "<br>";
        
        if ($num5 >= $num6){
            echo "num5 is greater than or equal to num6";
        }

        
        echo "<h3>Spaceschip comparison operators</h3>";

        $num1 = 1;
        $num2 = 3;
        $num3 = 3;

        if($num1 <=> $num2){
            print "If the one on the right is greater than the number on the left this should return -1";
        };

        echo "<br>";
        echo "<br>";

     /*   print($num2<=>$num3);
        if($num2 <=> $num3){
            print "if both numbers are equal to one another this should return 0.";
        };*/

        echo "<br>";
        echo "<br>";
        echo $num2 <=> $num3;

        echo "<br>";
        echo "<br>";
        echo $num2 <=> $num1;
        
        echo "<hr>";
        
        
        echo "<h3>Logical Operators : Logical <b>and &&</b></h3>";
        
        $num1 = 5;
        $num2 = 10;

        if($num1 === 5 and  $num2 ===10){
            echo "This is the <b>and</b> operator in action";
            echo "<br>";
        }


        if($num1 === 5 && $num2 ===10){
            echo "This is the <b>&&</b> shortband for the and operator in action";
            echo "<br>";
        }

        echo "<h3>Logicla Operator : Logical <b>or ||</b></h3>";

        if($num1 === 5 OR  $num2 ===1){
            echo "This is the <b>OR</b> operator in action";
            echo "<br>";
        }

        if($num1 === 1 || $num2 ===10){
            echo "This is the <b>&&</b> shortband for the and operator in action";
            echo "<br>";
        }


        echo "<h3>Locigal Operators : Logical <b>XOR</b></h3>";

        $num1 = 10;
        $num2 = 20;
        $num3 = 5;
        $num5 = 6;

        if ($num1 === 10 XOR $num2 ===20){
            $result = $num1 === 10 xor
            $num2 ===5;
            echo "<br>";
            echo "<br>";

            echo "true xor false";
            echo "<br>";

            echo "If one of these value are true display this text.";
            echo "<br>";
            echo $result ? "true" : "false";
        }

        echo "<h3>Logical Operators : <b>NOT EQUAL</b></h3>";

        $num1 = 100;

        var_dump($num1 !== 100);
        echo "<br>";
        var_dump($num1);

        echo "<br>";
        echo "<br>";

        echo "<hr>";

        echo "<h2>Increment and Decrement</h2>";

        $num1 = 9;
       /* $num1++;
        ++$num1;

        var_dump($num1++);
        var_dump(++$num1);*/

        ++$num1;
        var_dump(++$num1);

        $num1 = 9;
        $num1--;
        var_dump($num1--);

        
        echo "<hr>";

        echo "<h2>String Operators</h2>";

        $a = "My name ";
        $b = "is Regie.";
        $c = $a . $b;
        echo $a;
        
        echo "<br>";
        echo "<br>";
        echo $b;

        echo "<br>";
        echo "<br>";
        echo $c;

        echo "<br>";
        $g = "others name is ";
        $h = $g . 'Amey.';
        echo $h;
    ?>
    </section>

    <hr>
    <section>
    <h2>Control Structure</h2>
    
    <?php 
        echo "<h3>Conditional Statements</h3>";

        echo "<h4>If Conditional Statements</h4>";

        echo "if(condition>{";
        echo "<br>";
        echo "//code";
        echo "<br>";
        echo "};";
        echo "<br>";
        echo "<br>";


        $a = 20;
        $b = 5;

        if($a === $b){
            echo "Variable \$a is the same value with variable \$b";
        }elseif($b === 5){
            echo "Variable \$b is equal to 10";
        }else{
            echo "They are Not the same";
        }
        

        echo "<h3>Switch Conditional Statements</h3>";

        $a = 50;
        switch($a){
            case 50:
            echo "Variable is equal to 20.";
            break;
            case 100:
                echo "Variable is equal to 100.";
                break;
            default:
            echo "Did not find the equal value";
        }

        echo "<br>";
        $a = true;

        if($a == true){
            echo "variable is true";
        }

        elseif($a === false){
            echo "varaible is false";
        }

        echo "<br>";
        echo "<h4>Loops</h4>";
    
        $a = 20;
        $b = 20;

        if($a === $b){
            echo "These values aret the same";
        }
    
        echo "<hr>";
        echo "<h4>While Loops</h4>";
    
        $a = 0;
        $b = 10;

        while ($a    < $b){
            $a++;
            echo "Keep looping this!";
            echo "<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<h4>Infinite Loop<pan style='color: red'>This is Bad!</h4>";

        echo "while (true === true{";
        echo "<br>";
        echo "echo 'This will continuou to run Forever.' <span style='color: red'>Don't do This!</span>";
        echo "<br>";
        echo "}";

        echo "<hr>";
        echo "<h4>Do While Loops</h4>";

        $a = 0;

        do {
            echo "loop number" . $a++;
            echo "<br>";
        }while ($a <= 10);

        while ($a <= 5){
            $a++;
            echo "Keep lopping this";
            echo "<br>";
            echo "<br>";
        }
    
    
        echo "<br>";

        echo "<h4>For Loops</h4>";
    
        for ($i=0; $i < 10;
        $i++){
            echo "This should run 10 times";
            echo "<br>";
        }

    
        echo "<br>";
        $array = ["Egy", "Amey", "Grey", "Syndra", "Tax", "Ran", "Eight"];
    
        echo "<hr>";
        echo "<h4>Foreach Loops</h4>";
    
        foreach($array as $value){
            echo $value;
            echo "<br>";
        };


        echo "<br>";
        echo "<br>";
            $person = [
                "First Name" => "Regie",
                "Last Name" => "Marzan",
                "Eye Color" => "Brwon"
            ];

            foreach($person as $key => $value){
                echo $key . ": " . $value;
                echo "<br>";
            }

        ?>
    </section>
    
    <hr>
    <section>
        <?php 
        echo "<h2>Break and Continou Statements</h2>";

        $a = 1;

        while ($a <= 10){
            if($a === 7){
                break;
            }
            echo $a++;
            echo "<br>";
        }


        echo "<h3>Hested While Loop</h3>";
        echo "<br>";
        $a = 1;

        while ($a++){
            echo $a;
            while ($a >= 10){
                break 2;
            }
            echo "<br>";
        }

        echo "<br>";
        echo "<h2>Continue Statements</h2>";
        $a = 0;

        while ($a < 10){
            $a++;
            if ($a === 5){
                continue;
            }
            echo $a;
            echo "<br>";
        }
        ?>
    </section>

    <div id="mydiv"></div>
​
    <script>
        const PLAYER_SPEED = 10;
      console.log(PLAYER_SPEED);
    </script>

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