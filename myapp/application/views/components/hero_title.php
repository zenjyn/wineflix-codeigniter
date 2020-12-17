<script>
  const HeroTitle = {
    name: "HeroTitle",
    props: {
      subtitle: String,
      imageUrl: String,
    },
    template: `
      <h2 class="hero-title">
        <img alt="Rex Goliath" :src="imageUrl">
      </h2>
      <h3>{{ subtitle }}</h3>
    `
  }
</script>
