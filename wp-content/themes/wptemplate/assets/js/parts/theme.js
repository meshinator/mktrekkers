class Theme extends Component {

	init() {
		this.bindUIActions();
	}

	bindUIActions() {
		this.element
			.on( 'click', e => {
				console.log( e.currentTarget, this );
			});
	}
}

Theme.addComponent( 'body' );
