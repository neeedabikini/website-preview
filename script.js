window.onbeforeunload = () => {
	for (const form of document.getElementsByTagName('form')) {
		form.reset();
	}
};

document.getElementById('place-order').onclick = function () {
	window.location.href = 'order-success.htm';
};
