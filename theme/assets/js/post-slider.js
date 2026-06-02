document.addEventListener('DOMContentLoaded', function () {
	function initNativeGutenbergSliders() {
		document
			.querySelectorAll('.custom-post-slider')
			.forEach(function (slider) {
				const track = slider.querySelector('.wp-block-post-template');
				if (!track) return;

				const slides = track.children;
				if (slides.length === 0) return;

				let currentIndex = 0;

				track.style.transition =
					'transform 0.4s cubic-bezier(0.25, 1, 0.5, 1)';
				track.style.display = 'flex';

				function getVisibleCardsCount() {
					if (window.innerWidth <= 767) return 1;
					if (window.innerWidth <= 991) return 2;
					return 3;
				}

				function moveSlider() {
					const visibleCards = getVisibleCardsCount();
					const maxIndex = Math.max(0, slides.length - visibleCards);

					if (currentIndex > maxIndex) currentIndex = maxIndex;
					if (currentIndex < 0) currentIndex = 0;

					const movePercentage = currentIndex * (100 / visibleCards);
					track.style.transform = `translateX(-${movePercentage}%)`;

					// Handle disabled tracking natively via CSS classes on block wrappers
					const prevBtnWrapper = slider.querySelector('.slider-prev');
					const nextBtnWrapper = slider.querySelector('.slider-next');

					if (prevBtnWrapper) {
						if (currentIndex === 0)
							prevBtnWrapper.classList.add('disabled');
						else prevBtnWrapper.classList.remove('disabled');
					}
					if (nextBtnWrapper) {
						if (currentIndex === maxIndex)
							nextBtnWrapper.classList.add('disabled');
						else nextBtnWrapper.classList.remove('disabled');
					}
				}

				// Select inner <a> tag click nodes inside Gutenberg block frameworks
				const nextBtnLink = slider.querySelector('.slider-next a');
				if (nextBtnLink) {
					nextBtnLink.addEventListener('click', function (e) {
						e.preventDefault();
						const visibleCards = getVisibleCardsCount();
						if (currentIndex < slides.length - visibleCards) {
							currentIndex++;
							moveSlider();
						}
					});
				}

				const prevBtnLink = slider.querySelector('.slider-prev a');
				if (prevBtnLink) {
					prevBtnLink.addEventListener('click', function (e) {
						e.preventDefault();
						if (currentIndex > 0) {
							currentIndex--;
							moveSlider();
						}
					});
				}

				moveSlider();
				window.addEventListener('resize', moveSlider);
			});
	}

	initNativeGutenbergSliders();
});
