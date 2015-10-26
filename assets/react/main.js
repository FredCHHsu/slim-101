var Hello = React.createClass({
	render() {
		return (
			<div>
				<h1>Hello React!</h1>
			</div>
		);
	}
});

ReactDOM.render(
	<Hello />, document.getElementById('example') 
	);
