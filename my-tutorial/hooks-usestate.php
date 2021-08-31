<?php include('header.php'); ?>
<ul>
    <li>Declarating state</li>
    <li>accessing state</li>
    <li>updating state</li>
    <li>The useState hook takes the initial state as an argument (we passed false) and it returns an array with 2 elements: the current state, and a function to change the state.</li>
    <li>So it’s a pair: one value, one function. The value can be anything, of course – any JS type – a number, boolean, object, array, etc.</li>
    <li>Function components come with no state at all, but the useState hook allows us to add state as we need them.</li>
    <li>Keep in mind here that React is the one calling your component. React components – even function ones – have never been “self-rendering.” They don’t return HTML directly. Components rely on React to call them at the appropriate time, and they return an object structure that React can convert into DOM nodes.</li>
    In this article, we’ll cover useState with simple types, as well as useState with objects and arrays. We’ll also see a couple ways of storing multiple values.


    By calling React.useState inside a function component, you create a single piece of state associated with that component. (every hook starts with the word “use”; a call to useState literally lets you “use state” in a function component)

In classes, the state is always an object, and you can store multiple values in that object.
But with hooks, the state can be any type you want – you can useState with an array, useState an object, a number, a boolean, a string, whatever you need. Each call to useState creates a single piece of state, holding a single value of any type.


The useState hook is perfect for local component state, and a small-ish amount of it. For a larger app, or one that you intend to scale up, you’ll probably want to augment useState with some other state management solutions.



</ul>
<h4>Refrences</h4>
<ul>
    <li>http://www.tutorialswebsite.com/hooks-in-reactjs/</li>
    <li>https://daveceddia.com/usestate-hook-examples/</li>
</ul>
<?php include('footer.php'); ?>

