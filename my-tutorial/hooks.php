<?php include('header.php'); ?>
<ul>
    <li>hooks are new feature in react. it is introduced inn 16.8 version.</li>
    <li>hooks allow us to use state, lifecycle and other features of react without writing a class.</li>
    <li>hooks works with functional component. hooks does not work with class component. </li>
    <li>React provide several built-in (predefined) hooks to access state and other features.</li>
    <li>Hook functions are always start with "use" keyword.</li>
    <li>hooks always should be used at the top level of functions. we shoud always use hooks at the top of the react functions.</li>
    <li>We should not call hooks from regular javascript functions. </li>
    <li>As we have seen that there are several phases of states in class component like componentMount, componentDidMount etc, similarly functional component also have several phases of states. </li>
</ul>

<h4>Rules for Hooks</h4>
<ul>
    <li>Only call hooks at the top level of your function. Don’t put them in loops, conditionals, or nested functions. In order for React to keep track of your hooks, the same ones need to be called in the same order every single time.</li>
    <li>Only call hooks from React function components, or from custom hooks. Don’t call them from outside a component. Keeping all the calls inside components and custom hooks makes your code easier to follow too, because all the related logic is grouped together.</li>
    <li>The names of hooks must start with “use” keyword. Like useState, useEffect or useContext and many more.</li>
</ul>

<h4>Refrence</h4>
<ul>
    <li>https://daveceddia.com/react-hooks/</li>
    <li></li>
</ul>
<?php include('footer.php'); ?>