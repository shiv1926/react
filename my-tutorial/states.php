<?php include('header.php'); ?>
<h4>States</h4>
<div>State and lifecycle metdhos are used with class component. to get all state and lifecycle featrures in functional component we use hooks. we are going to use functional components in complete series.</div>
<ul>
    <li>State is one of the most important concept of React.</li>
    <li>State means a specific condition of someone or something at a specific time.</li>
    <li>we use state and props to update the content on browser, in javascript and jquery we directly update the dom using .html(), .text() methods.</li>
    <li>In real life every element have some state, it may be idle state, active state, running state, sitting state etc. Similarly every element in React have some state like initial state, rendering state, loading state, error state, executing state etc.</li>
    <li>In React "State" is an object that represents the part of the app that can change. Every component maintain their own state.</li>
    <li>Simply put, if you’d like your app to do anything – if you want interactivity, adding and deleting things, logging in and out – that will involve state.</li>
    <li>The best way to use state is to keep state in the “container” components.</li>
    <li>Everytime when the state object changes, the component re-renders, and output get change according to the new values.</li>

    <li>Props and state both are use to send data to the component.</li>
	<li>props and state are both plain JavaScript objects.</li>
    <li>Both are different in one important way: props are passed to the component (similar to function parameters) whereas state is managed within the component (similar to variables declaration within a function).</li>
    <li>State is similar to props, but it is private and fully controlled by the component.</li>
    <li>state means component's state. </li>
    <li>As we know that there are two types of components, and both have different way to use state and lifecycle. class component uses inbuilt objects to work with state and lifecycle while functional component uses inbuilt functions(hooks) to work on state and lifecycles.</li>
    <li>If you are using Redux, you actually will have one big state object that describes the entire app. That’s basically what Redux does: one huge object represents the app’s state, and then reducers and mapStateToProps carve it up into pieces relevant to each component.</li>
    <li>State changes are asynchronous.</li>
    <li>How react knows that the state has changed : useState function second parameter tell the state has changed.</li>
</ul>


<h4>Refrence</h4>
<ul>
    <li>https://daveceddia.com/visual-guide-to-state-in-react/</li>
</ul>


what are state variables
stateful component and stateless component
Should I use a state management library like Redux or MobX or recoil?
Maybe.



<?php include('footer.php'); ?>