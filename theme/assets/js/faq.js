document.addEventListener('DOMContentLoaded', () => {
	const faqItems = document.querySelectorAll('.lawfirmpro-faq-item');

	// Open first FAQ by default
	if (faqItems.length > 0) {
		faqItems[0].classList.add('active');
	}

	faqItems.forEach((item) => {
		const title = item.querySelector('.faq-title');

		title?.addEventListener('click', () => {
			const isActive = item.classList.contains('active');

			// Close all FAQs
			faqItems.forEach((faq) => {
				faq.classList.remove('active');
			});

			// Re-open clicked one if it wasn't already open
			if (!isActive) {
				item.classList.add('active');
			}
		});
	});
});
