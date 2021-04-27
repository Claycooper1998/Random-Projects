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

        </div>
    </div>