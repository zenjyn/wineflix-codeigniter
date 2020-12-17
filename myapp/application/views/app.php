<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://unpkg.com/vue@3"></script>
<script>
  const App = {
    name: "App",
    computed: {
      videos() {
        return [
          <?php foreach ($videos as $video): ?>
            {
              id: `<?php echo $video->id; ?>`,
              imageUrl: `<?php echo $video->image_url; ?>`,
              isNew: `<?php echo $video->is_new; ?>`,
              label: `<?php echo $video->label; ?>`,
              isFinished: `<?php echo $video->is_finished; ?>`,
              progress: `<?php echo $video->progress; ?>`,
            },
          <?php endforeach; ?>
        ];
      },
      heroContent() {
        return {
          title: `<?php echo $hero_content->title; ?>`,
          subtitle: `<?php echo $hero_content->subtitle; ?>`,
          imageUrl: `<?php echo $hero_content->image_url; ?>`,
          description: `<?php echo $hero_content->description; ?>`,
        };
      },
    },
    template: `
    <header class="hero">
      <img class="hero-image" src="https://sika-wineflix.web.app/wine-hero.webp">
      <nav class="navigation">
        <section class="primary-navigation">
          <h1>WineFlix</h1>
          <ul class="navigation-links">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Whites</a>
            </li>
            <li><a href="#">Reds</a>
            </li>
            <li><a href="#">Blends</a></li>
          </ul>
        </section>
        <section class="secondary-navigation">
          <user-avatar letter="S" />
        </section>
      </nav>
      <div class="hero-content">
        <h2>
          <img alt="Rex Goliath" src="https://sika-wineflix.web.app/rex-goliath-logo.png">
        </h2>
        <h3>His Royal Majesty is back.</h3>
        <p>
          America's most unhinged rooster is out of retirement, and this time? He's mad
          as hell.  Experience the unapologetic flavor burst of Rex Goliath.
        </p>
        <ul class="controls">
          <li>
            <button class="primary-action">
              <span> > </span>
              <span>Drink</span>
            </button>
          </li>
          <li>
            <button class="secondary-action">
              <span> i </span>
              <span>More Info</span>
            </button>
          </li>
        </ul>
      </div>
    </header>
    <main>
      <section class="category">
        <h2>Drink Again</h2>
        <ul>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <span class="new-badge">New!</span>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <span class="new-badge">New!</span>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <span class="new-badge">New!</span>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
            </div>
          </li>
        </ul>
      </section>
      <section class="category">
        <h2>Keep Drinking</h2>
        <ul>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
          <li>
            <div class="wine">
              <img src="https://sika-wineflix.web.app/red-wine.jpg" alt="Wine">
              <div class="amount-consumed">
                <progress min="0" max="100" value="22"></progress>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </main>
    `
  }

  const app = Vue.createApp(App)
  app.component('user-avatar', UserAvatar)
  app.mount('#app')
</script>
