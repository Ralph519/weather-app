<template>
  <div class="col-md-2">
    <weather v-for="(weather, index) in weathers.consolidated_weather" :key="weather.woeid" v-if="index==0" :weather="weather" :title="weathers.title" :woeid="weathers.woeid"></weather>
  </div>
</template>

<script>
import weather from "./weather-app";

export default {
  props: ["defaultcities"],
  data() {
    return {
      weathers: []
    };
  },
  mounted() {
    this.getCityWeatherDetails(this.defaultcities);
  },
  methods: {
    getCityWeatherDetails(defaultcities) {
      const t = this;
      axios
        .get(
          "https://cors-anywhere.herokuapp.com/https://www.metaweather.com/api/location/" +
            defaultcities
        )
        .then(({ data }) => {
          t.weathers = data;
          this.mute = false;
        });
    }
  },
  components: {
    weather
  }
};
</script>
