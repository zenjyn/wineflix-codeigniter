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
              id: "<?php echo $video['id']; ?>",
              imageUrl: "<?php echo $video['image_url']; ?>",
              isNew: "<?php echo $video['is_new']; ?>",
              label: "<?php echo $video['label']; ?>",
              isFinished: "<?php echo $video['is_finished']; ?>",
              progress: <?php echo $video['progress']; ?>,
            },
          <?php endforeach; ?>
        ];
      },
      heroContent() {
        return {
          title: "<?php echo $hero_content['title']; ?>",
          subtitle: "<?php echo $hero_content['subtitle']; ?>",
          imageUrl: "<?php echo $hero_content['image_url']; ?>",
          description: "<?php echo $hero_content['description']; ?>",
        };
      },
      drinkAgain() {
        return this.videos.filter(wine => wine.isFinished);
      },
      keepDrinking() {
        return this.videos.filter(wine => wine.progress > 0);
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
        <hero-title
          :subtitle="heroContent.subtitle"
          :imageUrl="heroContent.imageUrl"
        />
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
          <li v-for="wine in drinkAgain" :key="wine.id">
            <wine-list-item :wine="wine" />
          </li>
        </ul>
      </section>
      <section class="category">
        <h2>Keep Drinking</h2>
        <ul>
          <li v-for="wine in keepDrinking" :key="wine.id">
            <wine-list-item :wine="wine" />
          </li>
        </ul>
      </section>
    </main>
    `
  }

  const app = Vue.createApp(App);
  app.component('user-avatar', UserAvatar);
  app.component('hero-title', HeroTitle);
  app.component('wine-list-item', WineListItem);
  app.mount('#app');
</script>
