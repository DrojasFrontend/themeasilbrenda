import { Modal } from 'bootstrap'
import {} from "./menu-init";

import {
	initPlacesSwiper,
	initGallerySwiper,
	initPagePlacesSwiper,
} from "./swiper-init";
import { initClickableCards } from "./card-click-init";
import { initCountdown } from "./countdown-init";
import { initRSVPForm } from "./rsvp-init";


let Main = {
	init: async function () {
		document.addEventListener("DOMContentLoaded", () => {
			if (document.querySelector(".placeSwiper")) {
				initPlacesSwiper();
			}
			if (document.querySelector(".mySwiper")) {
				initGallerySwiper();
			}
			if (document.querySelector(".placePageSwiper")) {
				initPagePlacesSwiper();
			}
			initClickableCards(".clickeable");
			
			// Inicializar countdown si existe
			const countdownElement = document.querySelector("[data-countdown]");
			if (countdownElement) {
				const targetDate = countdownElement.getAttribute("data-countdown");
				const containerId = countdownElement.id;
				if (targetDate && containerId) {
					initCountdown(targetDate, containerId);
				}
			}

			// Inicializar formulario RSVP
			if (document.getElementById('rsvp-form-container')) {
				initRSVPForm();
			}
		});
	},
};
Main.init();
