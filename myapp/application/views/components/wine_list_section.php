<script>
  const WineListSection = {
    name: "WineListSection",
    props: {
      title: String,
      wineList: Array,
    },
    template: `
      <section class="category">
        <h2>{{ title }}</h2>
        <ul>
          <li v-for="wine in wineList" :key="wine.id">
            <wine-list-item :wine="wine" />
          </li>
        </ul>
      </section>
    `
  }
</script>
