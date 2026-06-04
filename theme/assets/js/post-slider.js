document.addEventListener('DOMContentLoaded', function () {
	function initDragPostSliders() {
		document
			.querySelectorAll('.custom-post-slider')
			.forEach(function (slider) {
				const track = slider.querySelector('.wp-block-post-template');
				if (!track) return;
				const gridCols = getComputedStyle(track).gridTemplateColumns;

				let columns = 1;

				const match = gridCols.match(/repeat\((\d+),/);

				if (match) {
					columns = parseInt(match[1], 10);
				}
				const width = 100 / columns;

				track.querySelectorAll(':scope > *').forEach((item) => {
					item.style.flex = `0 0 ${width}%`;
					item.style.maxWidth = `${width}%`;
					item.style.boxSizing = 'border-box';
				});
				const slides = track.children;
				if (slides.length === 0) return;

				// Operational variables
				let isDragging = false;
				let startX = 0;
				let currentTranslate = 0;
				let prevTranslate = 0;
				let animationId = 0;
				let currentIndex = 0;
				let dragThreshold = 50; // Pixels needed to transition columns
				let isLinkPrevented = false;

				// Style configuration defaults
				track.style.display = 'flex';

				function getVisibleCardsCount() {
					if (window.innerWidth <= 767) return 1;
					if (window.innerWidth <= 991) return 2;
					return columns;
				}

				function getSlideWidth() {
					return track.offsetWidth / getVisibleCardsCount();
				}

				function getMaxTranslate() {
					const visibleCards = getVisibleCardsCount();
					const maxIndex = Math.max(0, slides.length - visibleCards);
					return -(maxIndex * getSlideWidth());
				}

				// Universal input router
				function getPositionX(event) {
					return event.type.includes('mouse')
						? event.pageX
						: event.touches[0].clientX;
				}

				// Drag actions initialization
				function dragStart(event) {
					isDragging = true;
					startX = getPositionX(event);
					track.style.transition = 'none'; // Disables transit delay for snappy tracking
					isLinkPrevented = false;

					// Track standard loop rendering
					animationId = requestAnimationFrame(animationLoop);
				}

				function dragMove(event) {
					if (!isDragging) return;
					const currentX = getPositionX(event);
					const currentDragDistance = currentX - startX;

					if (Math.abs(currentDragDistance) > 5) {
						isLinkPrevented = true; // User is dragging, do not trigger profile links
					}

					currentTranslate = prevTranslate + currentDragDistance;

					// Adding a physical stretch friction resistance effect at edge boundaries
					const maxTranslate = getMaxTranslate();
					if (currentTranslate > 0) {
						currentTranslate = currentTranslate * 0.3;
					} else if (currentTranslate < maxTranslate) {
						currentTranslate =
							maxTranslate +
							(currentTranslate - maxTranslate) * 0.3;
					}
				}

				function dragEnd() {
					if (!isDragging) return;
					isDragging = false;
					cancelAnimationFrame(animationId);

					const movedBy = currentTranslate - prevTranslate;
					const slideWidth = getSlideWidth();
					const visibleCards = getVisibleCardsCount();
					const maxIndex = Math.max(0, slides.length - visibleCards);

					// Analyze movement logic boundaries
					if (movedBy < -dragThreshold && currentIndex < maxIndex) {
						currentIndex++;
					} else if (movedBy > dragThreshold && currentIndex > 0) {
						currentIndex--;
					}

					// Snap element precisely onto grid coordinates
					setPositionByIndex();
				}

				function animationLoop() {
					if (isDragging) {
						track.style.transform = `translateX(${currentTranslate}px)`;
						requestAnimationFrame(animationLoop);
					}
				}

				function setPositionByIndex() {
					const slideWidth = getSlideWidth();
					currentTranslate = -(currentIndex * slideWidth);
					prevTranslate = currentTranslate;

					track.style.transition =
						'transform 0.4s cubic-bezier(0.25, 1, 0.5, 1)';
					track.style.transform = `translateX(${currentTranslate}px)`;
				}

				// Prevent card links from triggering on a dragging action release
				slider.addEventListener(
					'click',
					function (e) {
						if (isLinkPrevented) {
							e.preventDefault();
							e.stopPropagation();
						}
					},
					true
				);

				// Bind pointer inputs for touch devices and desktop mice
				slider.addEventListener('mousedown', dragStart);
				slider.addEventListener('mousemove', dragMove);
				window.addEventListener('mouseup', dragEnd);

				slider.addEventListener('touchstart', dragStart, {
					passive: true,
				});
				slider.addEventListener('touchmove', dragMove, {
					passive: true,
				});
				window.addEventListener('touchend', dragEnd);

				// Keeps responsive widths exact on screen size adjustment
				window.addEventListener('resize', setPositionByIndex);

				// Initialization trigger
				setPositionByIndex();
			});
	}

	initDragPostSliders();
});
