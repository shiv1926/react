<?php include('header.php'); ?>
<ul>
    <li>In every react have we have multiple components.</li>
    <li></li>
</ul>

props drilling



Context API
If your global state consists of a couple things that rarely change (current user, current theme, current language, etc), you don’t need a library to pass that stuff around.

The Context API + useContext are good for passing around simple global state managed by useReducer.

The Context API was re-done in React 16.3. The old contextType thing is out, and the old guidance about avoiding Context unless you’re a library maintainer has been gone for a while. The useContext hook makes it really nice to use.

There’s some long-standing confusion about whether to use Context or Redux, and what the differences are. Check out Mark Erikson’s blog post about Context vs. Redux for an in-depth comparison.


https://blog.isquaredsoftware.com/2021/01/context-redux-differences/

<?php include('footer.php'); ?>