<template>

    <div class="padl">
    <div class="card card-default">

      <div v-if="this.title=='getday'" class="card-header text-center"> <strong>{{weather.applicable_date | moment}}</strong></div>
      <div v-else class="card-header text-center"> <strong>{{this.title}}</strong></div>

      <div class="card-body">
          <span>Temp: {{formatNumber(weather.the_temp) }} &deg;C</span>
          <br>
          <span>Max: {{ formatNumber(weather.max_temp)}} &deg;C</span>
          <br>
          <span>Min: {{ formatNumber(weather.min_temp)}} &deg;C</span>
          <br>
          <span class="text-center"> <img style="height: 50px;" v-bind:src="'https://www.metaweather.com/static/img/weather/' + weather.weather_state_abbr + '.svg'" alt="weather state"> <small> {{weather.weather_state_name}} </small></span>
      </div>

      <div v-if="this.title!='getday'" class="card-footer">
        <span> <a v-bind:href="'/weather/'+ woeid">More Details...</a> </span>
      </div>
    </div>
  </div>

</template>
<script>
import moment from "moment";

export default {
  props: ["weather", "index", "title", "woeid", "city"],
  methods: {
    formatNumber(value) {
      let val = value.toFixed(2);
      return val;
    }
  },
  filters: {
    moment: function(date) {
      return moment(date).format("dddd");
    }
  }
};
</script>
<style lang="scss" scoped>
.padl {
  padding: 1px;
}
</style>
