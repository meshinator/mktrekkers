class Slider extends Component {

	init() {
		new Swiper( '.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}
}

Slider.addComponent( '.slider' );
