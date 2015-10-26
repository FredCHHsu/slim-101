window.CommentBox = React.createClass({
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
			<div>
      	<Comment author = "John"> The first Comment</Comment>
      	<Comment author = "Mary"> The second Comment</Comment>
      </div>
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

var Comment = React.createClass({
  render: function() {
    return (
      <div className="comment">
        <h2 className="commentAuthor">
          {this.props.author}
        </h2>
        {this.props.children}
      </div>
    );
  }
});