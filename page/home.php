<div class="homepage-section" style="--bgposx:0px; --ptposx:0px; --stposx:0px; --cpposx: 0px;">
  <div class="welcome-wrapper">
    <div class="primary-text" style="overflow: hidden;">
      <h1>Strona internetowa</h1>
      <h2><?= $txt["primary-text"] ?></h2>
      <hr class="hr-slim mobile-only">
    </div>
    <div class="secondary-text" style="overflow: hidden;">
      <div class="phone-number">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>  
        <h3>(+48) 555 555 555</h3>
      </div>
      <div class="email-address">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
        <h3>kontakt@mojadomena.pl</h3>
      </div>
    </div>
    <div class="content-portal" style="overflow: hidden;">
      <button>
        <h4><?= $txt["content-portal"] ?></h4>
        <svg viewBox="0 0 384 512"><path d="M 192.00,384.00 C 183.81,384.00 175.62,380.88 169.38,374.62 169.38,374.62 9.38,214.62 9.38,214.62 -3.12,202.12 -3.12,181.88 9.38,169.38 21.88,156.88 42.13,156.88 54.63,169.38 54.63,169.38 192.00,306.80 192.00,306.80 192.00,306.80 329.40,169.40 329.40,169.40 341.90,156.90 362.15,156.90 374.65,169.40 387.15,181.90 387.15,202.15 374.65,214.65 374.65,214.65 214.65,374.65 214.65,374.65 208.40,380.90 200.20,384.00 192.00,384.00 Z" /></svg>
      </button>
    </div>
  </div>
</div>

<div class="homepage-section webpage-aligned homepage-textlore symetric-flex">
  <div class="symflex-side textlore-content vertical-centered-flex">
    <h5><?=$txt['section1']["side-left"]['title']?></h5>
    <hr class="hr-slim">
    <span><?=$txt['section1']["side-left"]['lore']?></span>
  </div>
  <div class="symflex-side textlore-content vertical-centered-flex">
    <h5><?=$txt['section1']["side-right"]['title']?></h5>
    <hr class="hr-slim">
    <span><?=$txt['section1']["side-right"]['lore']?></span>
  </div>
</div>

<div class="homepage-section homepage-products centered-flex">
  <h5><?=$txt['section2']['title']?></h5>
  <hr class="hr-slim">
  <div class="grid-table webpage-aligned">
    <?php for ($x = 0; $x <= 11; $x++) { echo '
    <div class="grid-elem">
    <span>'.$txt['section2']["items"][$x].'</span>
    </div>
    '; } ?>
  </div>
</div>

<div class="homepage-section webpage-aligned homepage-txtimglore symetric-flex">
  <div class="symflex-side textlore-content vertical-centered-flex">
    <h5><?=$txt['section4']['title']?></h5>
    <hr class="hr-slim">
    <span><?=$txt['section4']['lore']?></span>
  </div>
  <div class="symflex-side">
    <div style="display: flex; justify-content: center; align-items: center; height: inherit;"> <div>zdjęcie?</div> </div>
  </div>
</div>

<div class="homepage-section webpage-aligned homepage-txtimglore symetric-flex">
  <div class="symflex-side">
      <div style="display: flex; justify-content: center; align-items: center; height: inherit;"> <div>zdjęcie?</div> </div>
  </div>  
  <div class="symflex-side textlore-content vertical-centered-flex">
    <h5><?=$txt['section4']['title']?></h5>
    <hr class="hr-slim">
    <span><?=$txt['section4']['lore']?></span>
  </div>
</div>

<hr style="height: 4px; background: red;"/> <span style="font-weight: bold; color: red;">KONIEC</span>

<!-- <div class="homepage-section webpage-aligned symetric-flex">  
  <div class="symflex-side symetric-flex">
    <div class="symflex-side"></div>
    <div class="symflex-side"></div>
  </div>
  <div class="symflex-side">
      
  </div>
</div> -->

<script type="text/javascript" src="http://<?= $hostname ?>/js/parallax-scrolling.js"></script>