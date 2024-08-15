const embedIframes = document.querySelectorAll('div.ratio.embed-iframe.bg-body-secondary.rounded');

embedIframes.forEach((parentEmbed) => {
  const iframeEl = parentEmbed.querySelector('iframe');
  const loadingEl = parentEmbed.querySelector('.iframe-loading');

  iframeEl.addEventListener('load', function () {
    loadingEl.style.display = 'none';
    iframeEl.style.opacity = 1;
  });
})
