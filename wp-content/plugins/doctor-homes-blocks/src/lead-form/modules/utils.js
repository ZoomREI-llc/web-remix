export function loadScript(src) {
    console.log("Appending script:", src);
    const script = document.createElement("script");
    script.type = "text/javascript";
    script.src = src;
    script.async = true;
    script.defer = true;
    script.onload = function() {
        console.log("Google Maps API script loaded.");
    };
    document.head.appendChild(script);
}