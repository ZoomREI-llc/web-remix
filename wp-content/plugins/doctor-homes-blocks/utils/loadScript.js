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
  let shouldLoad = src.filter(item => !window.loadedScripts.includes(item.replace(/&callback=[^&]*/, '')));
  let hasCallbackInURL = false

  let allScriptsLoaded = src.every(script => window.fullyLoadedScripts.includes(script.replace(/&callback=[^&]*/, '')));

  if (allScriptsLoaded) {
    setTimeout(function () {
      callback();
    }, 10)
    return;
  } else {
    let notFullyLoaded = src.map(item=>item.replace(/&callback=[^&]*/, '')).filter(item => !window.fullyLoadedScripts.includes(item));

    if(!notFullyLoaded.length){
      callback(true) // true - loaded before
    } else {
      window.loadingQueue.push({
        scripts: src,
        callback: callback
      })
    }
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
      window.fullyLoadedScripts.push(scriptSrc.replace(/&callback=[^&]*/, ''))

      if(window.loadingQueue.length){
        let removeFromQueue = []

        window.loadingQueue.forEach((item, index) => {
          let thisAllScriptsLoaded = item.scripts.every(script => window.fullyLoadedScripts.includes(script.replace(/&callback=[^&]*/, '')));

          if (thisAllScriptsLoaded) {
            setTimeout(function () {
              item.callback(false);
            }, 10)
            removeFromQueue.push(index)
          }
        });

        if(removeFromQueue.length) {
          window.loadingQueue = window.loadingQueue.filter((_, index) => !removeFromQueue.includes(index));
        }
      }
    };
    script.src = scriptSrc;
    document.body.appendChild(script);
  })
}
