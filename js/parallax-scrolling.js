$(window).on('scroll', ()=>{
  $('div.homepage-section:nth-child(3)').css('--bgposx', Number( ((window.pageYOffset * 0.6) / 4.5) + 180 )+'px');
  if (window.pageYOffset < 500) {
    $('div.homepage-section:nth-child(1)').css('--bgposx', Number(window.pageYOffset * 0.7)+'px');
    $('div.homepage-section:nth-child(1)').css('--ptposx', Number(window.pageYOffset * 2.00)+'px');
    $('div.homepage-section:nth-child(1)').css('--stposx', Number(window.pageYOffset / 1.55)+'px');
    $('div.homepage-section:nth-child(1)').css('--cpposx', Number(window.pageYOffset / 0.85)+'px');
  }
  if (window.pageYOffset > 380) {
    $('div.homepage-section .secondary-text div:nth-child(1)').css('visibility', 'hidden');
    $('div.homepage-section .secondary-text div:nth-child(2)').css('visibility', 'hidden');
  } else {
    $('div.homepage-section .secondary-text div:nth-child(1)').css('visibility', 'visible');
    $('div.homepage-section .secondary-text div:nth-child(2)').css('visibility', 'visible');
  } 
  if (window.pageYOffset > 340) {
    $('div.homepage-section .secondary-text div:nth-child(1)').css('opacity', '0');
    $('div.homepage-section .secondary-text div:nth-child(2)').css('opacity', '0');
  } else if (window.pageYOffset > 320) {
    $('div.homepage-section .secondary-text div:nth-child(1)').css('opacity', '0.5');
    $('div.homepage-section .secondary-text div:nth-child(2)').css('opacity', '0.5');
  } else {
    $('div.homepage-section .secondary-text div:nth-child(1)').css('opacity', '1');
    $('div.homepage-section .secondary-text div:nth-child(2)').css('opacity', '1');
  }
});

$('.content-portal button').on('click', ()=>{
  window.scroll(0,Number(Number($('.homepage-section:nth-child(1)').height() / 2) / 2.5));
});