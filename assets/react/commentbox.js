var CommentBox = React.createClass({
	render: function(){
		return (
			<div className="commentBox">
				<h1> Hello! I am a CommentBox! </h1>
				<CommentList/>
				<CommentForm/>
			</div>
		);
	}
});

var CommentList = React.createClass({
	render() {
		return (
			<div>I amd CommentList!!!</div>
		);
	}
});

var CommentForm = React.createClass({
	render() {
		return (
			<div>I am a Form!!!!</div>
		);
	}
});
