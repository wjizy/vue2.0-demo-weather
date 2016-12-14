<template>
 <div class="today">
    <mt-cell title="城市" :value="weather.city"></mt-cell>
    <mt-cell title="天气" :value="weather.weather"></mt-cell>
    <mt-cell title="最低温度" :value="weather.temp1"></mt-cell>
    <mt-cell title="最高温度" :value="weather.temp2"></mt-cell>
    <mt-cell title="更新时间" :value="weather.ptime"></mt-cell>
  </div>
</template>
<script>
export default {
    name: "today",
    props: [
        'weather'
    ],
}
</script>
