<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser.js"></script>
</head>
<body>
    <div id="content"></div>

    <script type="text/babel">
        var HelloWorld = React.createClass({
            render: function () {
                return <h1> My name is { this.props.name } </h1>
            }
        });

        ReactDOM.render(
            <div>
                <HelloWorld name="Dima" />
                <HelloWorld name="D" />
                <HelloWorld name="Di" />
            </div>,
            document.getElementById("content")
        );
    </script>
</body>
</html>