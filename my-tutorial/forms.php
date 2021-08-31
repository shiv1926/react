<?php include('header.php'); ?>
<ul>
    <li>Forms are most important things in every app or website, which are used to collect data.</li>
    <li>Forms in React is little bit different from Forms in HTML.</li>
    <li>HTML form has their default behaviour and maintain their own state.</li>
    <li>Default behaviour of form includes :</li>
    <li>Action : an action where to send data</li>
    <li>Method : method to send data Get / Post</li>
    <li>Submit : A submit button, which submit the form on specified action using specified method. for this it refresh the page.</li>
    <li>Form inputs : All the forms input maintain their own state, we can add / update values many times.</li>
    <li>This default behavious also works in React. but in React we dont want to refresh the page. therefore we never use this default behavious.</li>
    <li>In React we don't refresh the page, therefore we use javascript functions that handle the form submission and have access to data entered in the form.</li>
    <li>HTML forms elements maintain their states internally and update it based on user input, but In React we have to use State concept for this.</li>
    <li>“single source of truth”</li>
    <li><strong>controlled component : </strong>In a controlled component, form data is handled by a React component</li>
    <li><strong>uncontrolled component : </strong>In uncontrolled component form data is handled by DOM itself.</li>
</ul>

<h4>Queries</h4>
<ul>
    <li>Form validation</li>
    <li>Captcha</li>
</ul>

<h4>Refrences</h4>
<ul>
    <li>Form attributes : https://www.w3schools.com/html/html_forms_attributes.asp</li>
    <li>Form Elements Attributes : https://www.w3schools.com/html/html_form_attributes.asp</li>
</ul>

The story around forms has continued to evolve. I remember using redux-form years ago, and how the app would freeze every time I pressed a key 😂 Looking back, “keep every ounce of state in Redux” was never really a good idea.

Formik and react-hook-form seem to be the favorites right now, with hook-form gaining steam.
<?php include('footer.php'); ?>