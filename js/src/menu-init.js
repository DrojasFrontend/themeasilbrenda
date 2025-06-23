import $ from "jquery";

$("[data-toggle-menu]").on("click", function () {
	$("[data-menu-mobile]").toggleClass("active");
});

$("[data-close-menu]").on("click", function () {
	$("[data-menu-mobile]").removeClass("active");
	$(".customHeader li").removeClass("active");
});
