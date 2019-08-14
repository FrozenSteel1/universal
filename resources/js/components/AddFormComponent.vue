<template>
<h2>Универсальная форма заполнения</h2>
</template>

<script>
    export default {
        name: "addFormComponent",
        props: ['viewData'],
        data:function () {
return {}
        },
        methods:{

        },
        mounted() {


            console.log(this.viewData)
        }
    }
</script>

<style scoped>

</style>
