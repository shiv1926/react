<?php include('header.php'); ?>
<ul>
  <li>components are the basic building blocks of react app.</li>
<li>Components are like javascript function which take arbitrary parameters and return react elements.</li>
<li>Components are individual reusable piece of code.</li>
<li>Components are isolated piece of code.</li>
<li>Components are smallest unit of code which is used to generate reusable UI components.</li>
<li>The simplest way to define a component is to write a JavaScript function:
<li>Components are just like HTML tag and props are just like HTML attributes.</li>
<li>every react component return jsx element. which describe the user interface.</li>
<li>You can also use an ES6 class to define a component:
<li>Always start component names with a capital letter. React treats components starting with lowercase letters as DOM tags. For example, <?php echo htmlspecialchars('<div />'); ?> represents an HTML div tag, but <?php echo htmlspecialchars('<Welcome />'); ?> represents a user defined component and requires Welcome to be in scope.</li>
<li>HTML Tags / DOM Tags knowns as default components</li>
<li>Previously, we only encountered React elements that represent DOM tags:



functional component also known as stateless component, bacause they do not hold or manage states.




const element = <Welcome name="Sara" />;
When React sees an element representing a user-defined component, it passes JSX attributes and children to this component as a single object. We call this object “props”.

For example, this code renders “Hello, Sara” on the page:

function Welcome(props) {
return <h1>Hello, {props.name}</h1>;
}

const element = <Welcome name="Sara" />;
ReactDOM.render(
element,
document.getElementById('root')
);</li>

there are two types of react component, functional component and class component
functional component are much faster and simpler than class component. but class component have more features than functional component.

difference between functional component and class component : 
we can not change the data dynamically in prop but in state we can change data dynamically.




</ul>
<?php include('footer.php'); ?>