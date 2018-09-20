<template>
  <div class="input-group">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" v-on:keyup.enter="search()" v-model="newSearch">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit" v-on:click="search()">Search</button>
  </div>
</template>
<script>
import swal from "sweetalert";

export default {
  data() {
    return {
      weathers: [],
      newSearch: "",
      city: "",
      woeid: ""
    };
  },
  methods: {
    search() {
      const t = this;
      axios
        .get(
          "https://cors-anywhere.herokuapp.com/https://www.metaweather.com/api/location/search/?query=" +
            t.newSearch
        )
        .then(({ data }) => {
          if (data.length == 0) {
            swal("No results were found.", "Try changing the keyword!");
          } else {
            t.weathers = data;
           
            t.city = t.weathers[0].title;
            t.woeid = t.weathers[0].woeid;
            location.href = "/search/" + t.city + "/" + t.woeid;
           
          }
        });
    }
  }
};
</script>
