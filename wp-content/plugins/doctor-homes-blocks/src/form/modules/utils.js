export function loadScript(src) {
	const script = document.createElement("script");
	script.type = "text/javascript";
	script.src = src;
	script.async = true;
	script.defer = true;
	document.head.appendChild(script);
}
