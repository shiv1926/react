<?php include('header.php'); ?>
<ul>
	<li>Components are like javascript function which take arbitrary parameters and return react elements.</li>
	<li>Components are individual reusable piece of code.</li>
	<li>Components are isolated piece of code.</li>
	<li>Components are smallest unit of code which is used to generate reusable UI components.</li>
	<li>The simplest way to define a component is to write a JavaScript function:
    <li>Components are just like HTML tag and props are just like HTMLM attributes.</li>
every react component return jsx element. which describe the user interface.


function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}
This function is a valid React component because it accepts a single “props” (which stands for properties) object argument with data and returns a React element. We call such components “function components” because they are literally JavaScript functions.</li>
	<li>You can also use an ES6 class to define a component:

class Welcome extends React.Component {
  render() {
    return <h1>Hello, {this.props.name}</h1>;
  }
}
The above two components are equivalent from React’s point of view.

</li>
<li>Always start component names with a capital letter. React treats components starting with lowercase letters as DOM tags. For example, <div /> represents an HTML div tag, but <Welcome /> represents a user defined component and requires Welcome to be in scope.</li>
<li>HTML Tags / DOM Tags knowns as default components</li>
<li>Previously, we only encountered React elements that represent DOM tags:

const element = <div />;
However, elements can also represent user-defined components:

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




components are the basic building blocks of react app.

advantages :
reuable components
open source / free
efficient and fast






</ul>
<?php include('footer.php'); ?>