<template>
    <div>
        <img class="w-full h-full files" 
            @click="viewPost"
            alt=""
        >
        <FileImg :file="{{files}}"/>
    </div>
</template>

<script>
    import FileImg from "./FileView.vue"
    export default {
        props: ['postId'],
        
        methods: {
            viewPost(){
                axios.post('/click/'+this.postId)
                .then(response => {
                        const res = response.data
                    }
                );
            }
        },
        components: {
            FileImg,
        },
        data(){
            return{
                files: res
            }
        }

    }
</script>