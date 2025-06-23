import $ from "jquery";
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, Thumbs, FreeMode, Grid } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import "swiper/css/effect-fade";
import "swiper/css/thumbs";
import "swiper/css/free-mode";
import "swiper/css/grid";

export const initPlacesSwiper = () => {
	const swiper = new Swiper(".placeSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 24,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			clickable: true,
			disabledClass: "swiper-nav-disabled",
		},
		pagination: {
			el: ".swiper-pagination",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			1200: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
		},
	});
};

export const initPagePlacesSwiper = () => {
	const swiper = new Swiper(".placePageSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 24,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			clickable: true,
			disabledClass: "swiper-nav-disabled",
		},
		pagination: {
			el: ".swiper-pagination",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			1200: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
		},
	});
};

export const initGallerySwiper = () => {
	const swiper = new Swiper(".mySwiper", {
		modules: [Pagination, Navigation, Autoplay, FreeMode, Grid],
		spaceBetween: 10,
		slidesPerView: 4,
		slidesPerGroup: 4,
		grid: {
			rows: 5,
			fill: 'row',
		},
		freeMode: false,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 3,
				slidesPerGroup: 3,
				grid: {
					rows: 5,
					fill: 'row',
				},
			},
			768: {
				slidesPerView: 3,
				slidesPerGroup: 3,
				grid: {
					rows: 5,
					fill: 'row',
				},
			},
			1024: {
				slidesPerView: 4,
				slidesPerGroup: 4,
				grid: {
					rows: 5,
					fill: 'row',
				},
			},
		},
	});
	const swiper2 = new Swiper(".mySwiper2", {
		modules: [Pagination, Navigation, Autoplay, Thumbs],
		spaceBetween: 0,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		thumbs: {
			swiper: swiper,
		},
	});
};

// Inicialización de Swipers
document.addEventListener('DOMContentLoaded', function () {
	initPlacesSwiper();
	initGallerySwiper();
	initPagePlacesSwiper();
});
