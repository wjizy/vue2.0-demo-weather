<template>
    <div class="search">
        <mt-popup
                v-model="popup"
                position="right"
                popup-transition="popup-fade">
            <mt-search @keyup.enter="submit" v-model="value"></mt-search>
        </mt-popup>
    </div>
</template>
<script>
    export default{
        name: 'search',
        props: [
            'popupVisible'
        ],
        data () {
            return {
                value: '上海',
                popup:this.popupVisible,
                weatherinfo: {},
            }
        },
        watch: {
            popupVisible (val) {
               this.popup = val
            },
            popup (val) {
               this.$emit("update-popup",val)
               if(val==false){
                    this.$emit("search-city",this.value)
               }
            },
        },
        methods: {
            submit () {
                this.popup = false;
            }
        }
    }
</script>
