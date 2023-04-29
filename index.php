<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBJECT ORIENTED PROGRAMMING - PHP</title>
</head>
<body>
    <h1>OOP - Object Oriented Programming with PHP</h1>
    
    <p>Compared to other OOP language (Object Oriented Programming) PHP is mush easier compared to some programming languages.</p>

    <p> C#, Python, Java and Ruby</p>

    <p>PHP5 and higeher </p>

    <h2>Why use OOP?</h2>
    <ul>
        <li>OOP is faster and eassuer to execute</li>
        <li>Providing a clear structure for you programs</li>
        <li>Practice DRY "Don't Repeat Yourself", we write code that is a lot eaiser to maintain and debug</li>
        <li>Create Reusable applications</li>
        <li>Companies want OOP</li>
        <li>Better for Group work!</li>
        <li>Better organize or code</li>
        <li>Medium - Large websites</li>
    </ul>

    <hr>

    <h2>MVC Model</h2>
    <h3>Tasks of PHP</h3>
    <ol>
        <li>Query and connect to db.</li>
        <li>Get input from users.</li>
        <li>Display things on the website.</li>
    </ol>

    <h2>FirstClass example from includes folder</h2>
    <?php
    echo "<hr>";
    echo "<h2>FirstClass Examples</h2>";
    echo "<br>";
    include_once 'includes/FirstClass.php';
    ?>

    
    <?php 
        class Fruit{
            public $name;
            public $color;

            function setName($name){
                $this->name= $name;
            }

            function getName(){
                return $this->name;
            }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->setName('Apple');
        $banana->setName('Banana');
        
        echo $apple->getName();
        echo "<br>";
        echo $banana->getName();
    ?>
    

<!-- <script>
    setTimeout(() => {
        
    }, timeout);
</script> -->
    
</body>
</html>