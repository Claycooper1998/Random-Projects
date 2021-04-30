<?php include "header.php";?>


    <header>
		<h1 class="text-center text-white text-2xl my-5">This is where everything from W3schools for php will be posted</h1>
	</header>


    <div class="text-white text-center w-full bg-gray-500">
        <h1 class="text-xl py-2">Intro</h1>
        <div class="bg-gray-400 p-1">
            <p class="text-black">&lt;?php echo "My first PHP script!"; ?&gt;</p>
            <p>PHP stands for "Hypertext Preprocessor"</p>
            <p>the scripts are executed on the server</p>
            <p>PHP is the core of wordpress</p>
            <h1 class="font-bold text-black">PHP files</h1>
                <p>contain: text, HTML, CSS, JavaScript, and PHP code</p>
                <p>The code is excecuted on the server and it returned as plain HTML, images, PDF files, flash movies, and text on the browser</p>
            <h1 class="font-bold text-black">What can it do?</h1>
                <p>- can generate dynamic page content</p>
                <p>- create, open, read, write, delete, and close files on the server</p>
                <p>- Collect form data</p>
                <p>- send and receive cookies</p>
                <p>- add, delete, modify data in your database</p>
                <p>- control user access</p>
                <p>- encrypt data</p>
            <h1 class="font-bold text-black">Why PHP</h1>
                <p>- runs on almost all platforms (windows, linux, unix, mac os x)</p>
                <p>- compatable with almost all servers</p>
                <p>- supports almost all databases</p>
                <p>- easy to learn and runs efficiently on the server side</p>
        </div>
        <h1 class="text-xl py-2">Syntax</h1>
        <div class="bg-gray-400 p-1">
            <p>- a PHP script is executed on the server, and the plain HTML result is sent badck to the browser</p>
            <p>- A PHP script always start  with <span class="text-red-500">&lt;?php</span> and ends with <span class="text-red-500">?&gt;</span></p>
            <p>- A PHP file normally has HTML tags in it, and also PHP scripting code</p>
            <p>- PHP has the function "echo" that outputs the text inside of it. Example:</p>
            <p class="text-black">&lt;?php echo "Hello World"; ?&gt;</p>
            <p>This will display "Hello World" as regular text. Just make sure to end it with a semicolon ;</p>
            <h1 class="font-bold text-black">PHP Case Sensitivity</h1>
            <p>- Keywords, classes, functions, and user-defined functions like: if, else, while, echo, etc. are <span class="text-black font-semibold">NOT</span> case-sensitive</p>
            <p>- All varible names are case-sensitive (variables are created by the user with a "$name"</p>
        </div>
        <h1 class="text-xl py-2">Comments</h1>
        <div class="bg-gray-400 p-1">
            <p>- the comment is not a excexcuted piecec of code, it is just for a programmer to see, or someone looking at the code</p>
            <p>- Comments are good for other to understand your code, and to remind you what the code is doing or what it's for</p>
            <p> ways to right comments:</p>
            <p> "// to comments a single line"</p>
            <p> "# This is also a single-line comment"</p>
            <p> "/* This is a multiple-lines comment block that spans over multiple lines */</p>
            <p> // You can also use comments to leave out parts of a code line $x = 5 /* + 15 */ + 5; echo $x;</p>
        </div>
        <h1 class="text-xl py-2">Variables</h1>
        <div class="bg-gray-400 p-1">
            <p>- Variables are "containers" for storing information to be used somewhere else</p>
            <p>- in PHP, a variable starts/delcared with "$" followed by the name of the variable</p>
            <p>- &lt;?php $txt = "hello world!"; ?></p>
            <p>- &lt;?php echo $txt; ?></p>
            <p>- this will display "Hello world!"</p>
        </div>
        <h1 class="text-xl py-2">Output variables</h1>
        <div class="bg-gray-400 p-1">
            <p>"echo" is often used to output the data on the screen</p>
        </div>
        <h1 class="text-xl py-2">Variable Scopes</h1>
        <div class="bg-gray-400 p-1">
            <p>Just like in all other languages, PHP has scores that can be local, global, and static</p>
            <p>- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function</p>
            <p>- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function</p>
            <p> the word "global" can be used inside of a function to be able to use a a variable from outside</p>
            <p>- Naturally, PHP holds all global variables in an array call $GLOBALS[index] and can access any global variable by using $GLOBALS["name"]</p>
            <p>- The Scope static helps make sure no variables are deleted after the execution of the code and is still local to the function</p>
        </div>
        <h1 class="text-xl py-2">echo and Print statements</h1>
        <div class="bg-gray-400 p-1">
            <p>There are two baisc outputs for PHP: echo and print</p>
            <p>echo can take multiple parameters and is faster and print can only take one</p>
            <p>echo can be used with or without parentheses: echo or echo()</p>
            <p>with echo, you can implement CSS into it</p>w
            <p>print can be used with or without parentheses: print or print()</p>
        </div>
        <h1 class="text-xl py-2">Data Types</h1>
        <div class="bg-gray-400 p-1">
            <p> there are 8 different data types :</p>
            <p>String, Integer, Float, Boolean, Array, Object, NULL, Resource</p>
            <p>1. String - Sequence of characters</p>
            <p>2. Integer - non-decimal number, must have one digit, no decimal point, can be both positive and negative</p>
            <p>3. Float - A number with a decimal point or exponential form</p>
            <p>4. Boolean - True or False</p>
            <p>5. Array - Storage of multiple values in a single variable</p>
            <p>6. Object - Classes and Objecrs are the two main aspects of object-oriented programming</p>
            <p>7. NULL - No value is assigned to it. You can empty a value by setting it to NULL</p>
            <p>8. Resource - Not an actual data type, it is the storing of a reference to functons and resources exernal to PHP (a database call)</p>
        </div>
        <h1 class="text-xl py-2">Strings</h1>
        <div class="bg-gray-400 p-1">
            <p>- A string is a sequence of characters</p>
            <p>- The PHP strlen() function returns the length of a string</p>
            <p>&lt;?php echo echo strlen("Hello world!"); ?&gt;</p>
            <p>- it shows an output of 12</p>
            <p>- The PHP str_word_count() function counts the number of words in a string.</p>
            <p>&lt;?php echo str_word_count("Hello world!"); ?&gt;</p>
            <p>- it has a output of 2 because there are two words</p>
            <p>- The PHP strrev() function reverses a string.</p>
            <p>&lt;?php echo strrev("Hello world!"); ?&gt;</p>
            <p>- this will have an outputs of !dlrow olleH</p>
            <p>- The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>
            <p>-&lt;?php echo strpos("Hello world!", "world"); ?&gt;</p>
            <p>- This outputs 6</p>
            <p>- The PHP str_replace() function replaces some characters with some other characters in a string.</p>
            <p>- &lt;?php echo str_replace("world", "Dolly", "Hello world!"); ?&gt;</p>
            <p>- the outputs "Hello Dolly!"</p>
        </div>
        <h1 class="text-xl py-2">Numbers</h1>
        <div class="bg-gray-400 p-1">
            <p>One thing to notice about PHP is that it provides automatic data type conversion. This can be bad and sometimes break code</p>
        </div>
        <h1 class="text-xl py-2">Math</h1>
        <div class="bg-gray-400 p-1">
            <p>There are many functions in math, pi(), min(), max(), abs(), and many more that are natural to regular math problems</p>
            <p>rand() will generate a random number you can set a limit to where the numbers will generate from rand(number, number)</p>
            <p>There is a complete list of math functions</p>
        </div>
        <h1 class="text-xl py-2">Constants</h1>
        <div class="bg-gray-400 p-1">
            <p>Constants are like variables except that once they are defined they cannot be changed or undefined.</p>
            <p>Unlike variables, constants are automatically global across the entire script.</p>
            <p>To create a constant, use the define() function.</p>
            <P>"define(name, value, case-insensitive)"</P>
            <P>Parameters: </P>
            <p>name: Specifies the name of the constant</p>
            <p>value: Specifies the value of the constant</p>
            <p>case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false</p>
            <p>You can even create an Array in a define()</p>
        </div>
        <h1 class="text-xl py-2">Operators</h1>
        <div class="bg-gray-400 p-1">
            <p>Operators are used to perform operations on variables and values.</p>
            <p>These operators are similar to Javascript and other programming languages</p>
            <p>The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.</p>
            <p> == means equal</p>
            <p> === means identical</p>
            <p> !== means not identical</p>
            <p> !=  not equal</p>
            <p> ++$x is a pre-increment which means it adds 1 to x</p>
            <p> --$x is a pre-decrement which takes away 1 form x</p>
            <p> "&&" "and", $x and/&& $y means that both x and y are true</p>
            <p> "or" "||", $x or/|| $y means either x or y is true, one or the other</p>
            <p> "xor" means $x xor $y, means true if either $x or $y is true, but not both</p>
            <p> !  means not, !$x true if x is not true</p>
        </div>
        <h1 class="text-xl py-2">if...else...elseif Statements</h1>
        <div class="bg-gray-400 p-1">
            <p>Conditional statements are used to perform different actions based on different conditions.</p>
            <p>"if" statement - executes some code if one condition is true</p>
            <p>if (condition) { code to be executed if condition is true;   }</p>
            <p>"if... else" statement - exectues some code if a condition is true and another code if that condition is false</p>
            <p>if (condition) { code to be executed if condition is true;   } else {    code to be executed if condition is false;  }</p>
            <p>"if...elseif...else" statement - executes different codes for more than two conditions</p>
            <p>if (condition) { code to be executed if this condition is true;    } elseif (condition) {  code to be executed if first condition is false and this condition is true;   } else {    code to be executed if all conditions are false;  }</p>
            <p>"switch" statement - selects one of many blocks of code to be executed</p>
        </div>
        <h1 class="text-xl py-2">Switch Statements</h1>
        <div class="bg-gray-400 p-1">
            <p>Use the switch statement to select one of many blocks of code to be executed.</p>
        </div>
        <h1 class="text-xl py-2">Loops</h1>
        <div class="bg-gray-400 p-1">
            <p>When writting code, sometimes you want to run that code over and over again for a certain number of times, so instead of adding several number of lines of code, you can just write a simple loop</p>
            <p>Types of loops:</p>
            <p>while - loops through a block of code while a condition is true</p>
            <p>do...while - loops though a block of code once, then repeats that block creating a loop while the condition is true</p>
            <p>for - loops through a block of code for a specific number of times</p>
            <p>foreach - loops through a block of code for each element in an array</p>
        </div>
        <h1 class="text-xl py-2">while loop</h1>
        <div class="bg-gray-400 p-1">
            <p>while (condition is true) {</p>
            <p>code to be executed;</p>
            <p>}</p>
        </div>
        <h1 class="text-xl py-2">do...while loop</h1>
        <div class="bg-gray-400 p-1">
            <p>do {</p>
            <p>code to be executed;</p>
            <p>} while (codition is true);</p>
        </div>
        <h1 class="text-xl py-2">for loop</h1>
        <div class="bg-gray-400 p-1">
            <p>for (init counter; test counterl increment counter) {</p>
            <p>code to be executed for each iteration;</p>
            <p>}</p>
        </div>
        <h1 class="text-xl py-2">foreach loop</h1>
        <div class="bg-gray-400 p-1">
            <p>foreach ($array as $value) {</p>
            <p>code to be executed;</p>
            <p>}</p>
        </div>
        <h1 class="text-xl py-2">break and continue</h1>
        <div class="bg-gray-400 p-1">
            <p>The break statement is used to jump out of a loop</p>
            <p>The continue statement skips/breaks one iteration in the loop then continues with the rest</p>
        </div>
        <h1 class="text-xl py-2">Functions</h1>
        <div class="bg-gray-400 p-1">
            <p>This is where the main power in PHP comes from</p>
            <p>There are more than 1000 built-in functions</p>
            <p>- a function is a block of statements that can be used repeatedly in a program</p>
            <p>- a function will not execute automatically when a page loads</p>
            <p>- a function will be executed when it is called</p>
            <p>Creating a function : </p>
            <p>function functionName() {</p>
            <p>code to be executed;</p>
            <p>}</p>
            <p>information can be passed to functions through arguments. An argument is just like a variable</p>
            <p>Arguments are specified after the function name, inside of the parentheses. You can add as many argumetns as you want. just separate them with a comma</p>
            <p>W3Schools has a good example of using <a class="text-black" href="https://www.w3schools.com/php/php_functions.asp"> arguments</a></p>
        </div>
        <h1 class="text-xl py-2">Arrays</h1>
        <div class="bg-gray-400 p-1">
            <p>An array stores multiple values in one single variable</p>
            <p>There are many useful functions that can help explore arrays</p>
            <p>the count() function us used to return the length or the number of elements in the array</p>
            <p>To many an array:</p>
            <p>$name = array(information);</p>
        </div>
        <h1 class="text-xl py-2">Associative Arrays</h1>
        <div class="bg-gray-400 p-1">
            <p>Associative arrays are arrays that use named keys that you assign to them</p>
            <P>$age = array("Clayton"=>"22", "Jasmine"=>"22");</P>
            <p>or</p>
            <p>$age["Clayton"] = "22";</p>
            <p>$age["Jasmine"] = "22";</p>
            <p>you can loop through this information with a foreach loop</p>
        </div>
        <h1 class="text-xl py-2">Sorting Arrays</h1>
        <div class="bg-gray-400 p-1">
            <p>You can sort arrays alphabetically, numerically, descending or ascending</p>
            <P>sore() - sorts arrays in ascending order</P>
            <p>rsort() - sort arrays in descending order</p>
            <p>asort(), ksort(), arsort(), krsort() are all sorting functions for associative arrays</p>
        </div>
        <h1 class="text-xl py-2">Global Variables - Superglobals</h1>
        <div class="bg-gray-400 p-1">
            <p>Built-in variables that are always available in all scopes</p>
            <p>The PHP superglobal variables are:</p>
            <p>$GLOBALS - a superglobal variable which is used to acces global variables from anywhere in the PHP script, functions, or methods</p>
                <p>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable</p>
            <p>$_SERVER - holds information about headers, paths, and script locations. There is a long list of options to look for about the server</p>
            <p>$_REQUEST - This is a variable that collects data after submitting an HTML form</p>
            <p>$_POST - Used to collect form data after submitting an HTML form with method="post"</p>
            <p>$_GET - Used to collect form data after submitting an HTML form with method="get". It can collect data sent in the URL</p>
            <p>$_FILES</p>
            <p>$_ENV</p>
            <p>$_COOKIE</p>
            <p>$_SESSION</p>
        </div>
    </div>