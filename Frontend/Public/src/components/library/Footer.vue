<template>
   <footer style="margin-top: 100px;">
    <p>{{copyright}}</p>
   </footer>
</template>

<script>
export default {
    data () {
        return{
            copyright: 'Copyright 2019@telecenter'
        }
    },
}
</script>

<style scoped>
    footer{
        background: #222;
        padding: 10px;
        
    }


    p{
        color:lightgreen;
        text-align: center;
    }


</style>
