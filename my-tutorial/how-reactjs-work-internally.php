how react js works : react js works on the concept of virtual dom.


What makes this function a component is the fact that it returns something that React can render. The `<div>Hello world</div>` is a syntax called JSX, and it looks and works a lot like HTML. React calls the function, gets the JSX, and renders the equivalent HTML to the DOM.

Notice how the thing we're returning is not a string. It's not wrapped in quotes like return "<div>Hello World</div>";. React isn't turning these things directly into strings, either.

Before React runs, there's an extra step the code goes through that converts the JSX into function calls. This all happens under the hood (Babel is the tool that does the heavy lifting).

The fact that it's not a string might seem like an unimportant detail, but it's actually pretty cool: you can insert bits of JS code inside the JSX tags, and React will run them dynamically. We'll see that in a minute.




Write a new component called `MediaCard` that accepts 3 props: title, body, and imageUrl. Inside the component, render the title in an <h2> tag, the body in a <p> tag, and pass the imageUrl into an img tag like <img src={imageUrl}/>. Can you return all 3 of these things at once? Or do you need to wrap them in another element?
Render the MediaCard with the ReactDOM.render call, and pass in the necessary props. Can you pass a JSX element as a prop value? (hint: wrap it in single braces). Try bolding some parts of the body text without changing the implementation of MediaCard.
Make a component called Gate that accepts 1 prop called "isOpen". When isOpen is true, make the component render "open", and when isOpen is false, make it render "closed". Hint: you can do conditional logic inside JSX with the ternary (question mark, ?) operator, inside single braces, like this: {speed > 80 ? "danger!" : "probably fine"} (which evaluates to "danger!" if speed is over 80, and "probably fine" otherwise).



