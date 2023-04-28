<?php 
    include_once 'header.php';
?>

<main>
    <section>
        <div class="functions">
            <h2>Functions</h2>
            <h3>Two things to take note of when working with functions</h3>
            <ol style="text-align:left">
                <li>Internal Functions - Build In Functions (methods)</li>
                <li>User Defined Functions</li>
            </ol>
            <hr>

            <?php
                echo "<h2>Built in Functions or Internal Functions to the language</h2>";
                $a = "Hello world.";
                // echo $a;
                echo "<br>";
                echo str_ireplace("world", "Regie!", $a);

                $b = "Hi";
                echo $b;
                echo "<br>";
                $greeting = " Egy,";
                echo str_repeat($greeting,3);
                echo "<br>";

                $a = "Hello World!";
                // $char = "He";
                // $char = "ll";
                // $char = "lo";
                $char = "wo";

                echo stripos($a, $char);

                echo "<hr>";
                echo "<h2>User Defined Functions</h2>"; 
                function displayMessage(){
                    echo "Hello world! This is a userDefined function I have Created";
                }

                displayMessage();
                
                /*function calculateAdd(int $num1, int $num2){
                    $add = $num1 + $num2;
                    return $add;
                }*/
            ?>
        </div>
    </section>

    <section>
        <div class="form">
            <form action="funcCalc.php" method="get">
                <input type="text" name="num1" placeholder="Number1">
                <select name="operations">
                    <label for="operations">Arithmetic Operations</label>
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                </select>
                <input type="text" name="num2" placeholder="Number2">
                <button type="submit">Calculate</button>

            </form>
        </div>
    </section>
</main>

<?php 
include_once 'footer.php';
?>