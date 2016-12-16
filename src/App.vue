<template>
  <div id="app">
  <mt-header title="天气预报">
    <mt-button icon="search" @click="search" slot="right"></mt-button>
  </mt-header>

    <TodayWeather  :weather="weather"></TodayWeather>
    <Search :popupVisible="popupVisible" @search-city="request" @update-popup="updatePopup"></Search>

  </div>
</template>

<script>
import TodayWeather from './components/today.vue'
import Search from './components/search.vue'
export default {
  name: 'app',
  components: {
    TodayWeather,Search
  },
  data () {
    return {
      popupVisible: false,
      selected: 'today',
      weather: {}
    }
  },
  created: function () {
    this.request("上海")
  },
  methods: {
    request (city) {
    this.$indicator.open();
      this.$http.get('http://www.goodwithcode.com/weather/index.php?city='+city).then((res) => {
      console.log(res)
    this.$indicator.close();
      this.weather = res.body.weatherinfo
        }, (err) => {
        console.log(err)
      })
    },
    search () {
      this.popupVisible = true
    },
    updatePopup (val){
      this.popupVisible = val
    }
  }
}
</script>

