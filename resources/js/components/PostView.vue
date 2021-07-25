<template>
    <div>
        <img :src="userFiles"
            class="w-full h-full files"
            @click="viewPost"
            alt=""
        >
        <div class="flex justify-center items-center bg-black bg-opacity-50 h-100 absolute inset-0" :class="hide">
            <div class="bg-white shadow-md rounded-lg w-1/2 max-w-xl px-4 py-4">
                <div class="flex justify-between font-bold">
                    <p>User Images</p>
                    <svg @click="closeModal" xmlns="http://www.w3.org/2000/svg" id="close-modal" class="h-6 w-6 text-red-500 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <div class="mt-4 flex">
                        <img v-for="item in items" :key="item.file" :src="item.file" width="100" height="100" class="inline-flex">
                    </div>
                    <p>{{postItems.description}}</p>
                </div>
                <div class="mt-4 flex justify-end">
                    <button class="bg-red-500 text-white rounded-md px-6 py-2 outline-none" id="delete">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['postId', 'filePath'],

        data() {
            return{
                files: '',
                hide: 'hidden',
                userFiles: this.filePath,
                items: '',
                postItems: ''
            }
        },

        methods: {
            viewPost(){
                axios.get('/post/'+this.postId)
                .then(response => {
                        this.items = JSON.parse(response.data[0])
                        this.postItems = response.data[1]
                    }
                );
                this.hide = ''
            },
            closeModal(){
                this.hide = 'hidden'
            }
        },
    }
</script>