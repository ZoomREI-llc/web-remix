
function lcpVirtueCarouselCallback() {
	let sections = document.querySelectorAll('.testimonial-carousel-wrapper')

	sections.forEach(function (section) {
		let sliderEl = section.querySelector('.swiper')
		let prevButtons = section.querySelectorAll('.js-swiper-prev')
		let nextButtons = section.querySelectorAll('.js-swiper-next')
		let pagination = section.querySelector('.swiper-pagination')
		let swiper = new Swiper(sliderEl, {
			slidesPerView: 'auto',
			spaceBetween: 48,
			speed: 600,
			pagination: {
				el: pagination,
				clickable: true
			},
			on: {
				slideChange: function () {
					updateButtons();
				}
			}
		})

		function updateButtons() {
			prevButtons.forEach(btn=>btn.disabled = swiper.isBeginning)
			nextButtons.forEach(btn=>btn.disabled = swiper.isEnd)
		}

		updateButtons()
		prevButtons.forEach(btn=>btn.addEventListener('click', function (e) {
			e.preventDefault()
			swiper.slidePrev()
		}))
		nextButtons.forEach(btn=>btn.addEventListener('click', function (e) {
			e.preventDefault()
			swiper.slideNext()
		}))
	})
}

document.addEventListener("DOMContentLoaded", function () {
	loadScript([
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
	], lcpVirtueCarouselCallback)
});
