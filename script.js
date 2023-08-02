function setCookieAccepted() {
    localStorage.setItem('cookieAccepted', 'true');
    hideCookieBanner();
  }
  
  function hideCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    cookieBanner.style.display = 'none';
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const acceptBtn = document.getElementById('accept-btn');
  
    acceptBtn.addEventListener('click', function() {
      setCookieAccepted();
    });
  
    const isCookieAccepted = localStorage.getItem('cookieAccepted');
  
    if (!isCookieAccepted) {
      const cookieBanner = document.getElementById('cookie-banner');
      cookieBanner.style.display = 'block';
    }
  });
  