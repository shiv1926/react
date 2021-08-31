https://medium.com/@to_pe/how-to-add-react-to-a-simple-html-file-a11511c0235f

<div id="root"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js"></script>
<script type="text/babel">
class Greeting extends React.Component {
    render() {
        return (<p>Hello world</p>);
    }
}
ReactDOM.render(
    <Greeting />,
    document.getElementById('root')
);
</script>

here we have included babel js, because we want to use jsx and to convert jsx into react elements.
here we use text/babel in script tag because we want to convert our jsx code into react elements, and es6 to es5, to compitable at all browsers.