<template>
    <div>
        <button 
            class="bg-blue-500 
                   text-white 
                   px-4 py-1 
                   rounded-lg
                   active:bg-blue-200 
                   active:ring-2
                   active:ring-opacity-50
                   focus:outline-none"
            @click="followUser">
            Follow
        </button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],
        mounted() {
            console.log('Component Successfully Mounted');
        },
        methods: {
            followUser(){
                axios.post('/follow/'+this.userId)
                .then(response => {
                    alert(response.data)
                });
            }
        },
    }
</script>