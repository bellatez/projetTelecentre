<template>
    <body>
        <main role="main">
            <div class="container">

            </div>
        </main>
    </body>
</template>

<script>
export default {
    data() {
        return {
            id:this.$route.params.id,
            epreuves: [],
        }
    },

    created() {
        console.log(id);
    },
}
</script>

<style  scoped>

</style>