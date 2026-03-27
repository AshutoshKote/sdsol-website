/* ─── SD SOL — SITE SCRIPTS ─── */

/* Scroll-reveal animation — adds "visible" class when elements scroll into view */
function initReveal() {
  const observer = new IntersectionObserver( ( entries ) => {
    entries.forEach( ( e, i ) => {
      if ( e.isIntersecting ) setTimeout( () => e.target.classList.add( 'visible' ), i * 80 );
    } );
  }, { threshold: 0.08 } );
  document.querySelectorAll( '.reveal' ).forEach( el => observer.observe( el ) );
}

document.addEventListener( 'DOMContentLoaded', function () {
  initReveal();
} );
