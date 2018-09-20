<template>

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <h5> <strong>{{ this.weathers.title }} weather forecast for the next 6 days</strong> </h5>
        <br>
        <br>
        <br>
      </div>
    </div>

      <weather v-for="(weather, index) in weathers.consolidated_weather" :key="weather.woeid" :weather="weather" :index="index" :title="'getday'" :woeid="weathers.woeid" :city="weathers.title"></weather>
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
    // console.log(this.defaultcities);
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
          console.log(data);
          this.mute = false;
        });
    }
  },
  components: {
    weather
  }
};
</script>
