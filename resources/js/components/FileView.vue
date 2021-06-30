<template>
    <img :src="getFile" alt="">
</template>

<script>
    export default {
        props: {file: String},
        data(){
            return{
                getFile: this.file
            }
        }
    }
</script>