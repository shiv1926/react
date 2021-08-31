<?php include('header.php'); ?>
<h4>Lifecycle</h4>
<ul>
    <li>In every application we must free resources after use.</li>
    <li>lifecycle of component is also known as phase of component.</li>
    <li>Every component has different phases, and each phase has a different name and different methods, these methods are known as lifecycle methods.</li>
    <li>
        There are serveral phase of a component mentioned below
        <ul>
            <li>Mounting</li>
            <li>Updating</li>
            <li>Unmounting</li>
        </ul>
    </li>
    <li>
        <strong>Mounting</strong>
        <ul>
            <li>When any component is rendered first time in DOM, this is known as Mounting.</li>
            <li>Mounting the process of creating and inserting elements in DOM. This phase have two functions "componentWillMount" and "componentDidMount".</li>
            <li><strong>componentWillMount : </strong>This function invoke only once, immediate before inseting element in DOM.</li>
            <li><strong>componentDidMount : </strong>This function invoke only once, immediate after inseting element in DOM.</li>
componentWillMount is executed before rendering, on both the server and the client side.
componentDidMount is executed after the first render only on the client side. This is where AJAX requests and DOM or state updates should occur. This method is also used for integration with other JavaScript frameworks and any functions with delayed execution such as setTimeout or setInterval. We are using it to update the state so we can trigger the other lifecycle methods.
componentWillReceiveProps is invoked as soon as the props are updated before another render is called. We triggered it from setNewNumber when we updated the state.
shouldComponentUpdate should return true or false value. This will determine if the component will be updated or not. This is set to true by default. If you are sure that the component doesn't need to render after state or props are updated, you can return false value.
componentWillUpdate is called just before rendering.
componentDidUpdate is called just after rendering.
componentWillUnmount is called after the component is unmounted from the dom. We are unmounting our component in main.js.
        </ul>
    </li>
    <li>
        <strong>Updating</strong>
        <ul>
            <li></li>
        </ul>
    </li>
    <li>
        <strong>Unmounting</strong>
        <ul>
            <li>Umounting is the process of removing component from DOM. it is called immediate before unmounting element before DOM</li>
        </ul>
    </li>
    <li>We should always use setState method to re-render a component.</li>
</ul>

<?php include('footer.php'); ?>