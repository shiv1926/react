<?php include('header.php'); ?>
<ul>
    <li>Strict Mode is introduced in Ecmascript 5.</li>
    <li>Strict mode is used to write "secure" JavaScript.</li>
    <li>The "use strict" is indicate that the code should be executed in "strict mode".</li>
    <li>The statement “use strict”; instructs the browser to use the Strict mode, which is a reduced and safer feature set of JavaScript.</li>
    <li>Strict mode can be used in two ways.
        <ul>
            <li>Used in global scope for the entire script.</li>
            <li>It can be applied to individual functions.</li>
        </ul>
    </li>
    <li>remember strict mode doesn’t work with block statements enclosed in {} braces.</li>
    <li>Variable hoisting, function hoisting are not allowed in strict mode, we should always first declare variable and functions.</li>
</ul>
<?php include('footer.php'); ?>