function loadScript(src, callback = ()=>{}) {
  if(typeof window.loadedScripts === 'undefined') {
    window.loadedScripts = [];
  }
  if(typeof window.fullyLoadedScripts === 'undefined') {
    window.fullyLoadedScripts = [];
  }
  if(typeof window.loadingQueue === 'undefined') {
    window.loadingQueue = [];
  }
  if(typeof src === 'string'){
    src = [src];
  }
  let loadedScripts = 0;
  let shouldLoad = src.filter(item => !window.loadedScripts.includes(item.replace(/&callback=[^&]*/, '')));
  let shouldLoadCount = shouldLoad.length
  let hasCallbackInURL = false

  if(!shouldLoadCount){
    let notFullyLoaded = src.map(item=>item.replace(/&callback=[^&]*/, '')).filter(item => !window.fullyLoadedScripts.includes(item));

    if(!notFullyLoaded.length){
      callback(true) // true - loaded before
    } else {
      window.loadingQueue.push({
        scripts: src,
        callback: callback
      })
    }

    return;
  }

  window.loadedScripts = Array.from(new Set([...window.loadedScripts, ...shouldLoad.map(item=>item.replace(/&callback=[^&]*/, ''))]));

  shouldLoad.forEach(function (scriptSrc) {
    const script = document.createElement("script");

    if(scriptSrc.indexOf('callback=') > -1){
      hasCallbackInURL = true
    }
    script.type = "text/javascript";
    script.async = true;
    script.defer = true;
    script.onload = function() {
      loadedScripts++

      if(loadedScripts === shouldLoadCount) {
        window.fullyLoadedScripts = Array.from(new Set([...window.fullyLoadedScripts, ...shouldLoad.map(item=>item.replace(/&callback=[^&]*/, ''))]));

        if(!hasCallbackInURL) {
          callback(false) // false - not loaded before
        }
        if(window.loadingQueue.length){
          window.loadingQueue.forEach((item, index) => {
            const allScriptsLoaded = item.scripts.every(script => window.fullyLoadedScripts.includes(script.replace(/&callback=[^&]*/, '')));

            if (allScriptsLoaded) {
              item.callback(false);
              window.loadingQueue.splice(index, 1)
            }
          });
        }
      }
    };
    script.src = scriptSrc;
    document.body.appendChild(script);
  })
}
