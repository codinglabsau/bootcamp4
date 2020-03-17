<template>
    <div class="flex mb-4">
        <div class="w-2/6 h-max"></div>

        <div class="w-2/6 h-max my-12 py-12">
            <div class="form-group" style="width: 30rem;">
                <input class="input" v-model="course">
                <div class="max-w-sm rounded overflow-hidden shadow-lg" style="width: 45rem;">
        
                    <img class="w-full" src="resources/js/images/pic1.jpg">
                    
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ course.id }}
                            {{ course.title }}
                        </div>

                        <p class="text-gray-700 text-base">
                            {{course.detail}}    

                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg" style="width: 45rem;" v-bind:key="comment" v-for="comment of commentsList"> 
                <div v-if="course.id == comment.course_id">
                    <p class="text-gray-700 text-base">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RRcgqBNuoXc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        {{comment.comment}}      
                    </p>  
                </div>                
            </div>
        </div>

        <div class="w-2/6 h-max"></div>
    </div>
</template>

<script>
    export default {
        name: 'Comments',

        props: ['course'],

        data() {
            return {
                commentsList: [],
            }
        },

        created() {
            this.displayComments();
        },

        methods: {
            displayComments(page_url) { //page_url is passed from the template nevigation
                page_url = page_url || 'comments'

                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.commentsList = res.data;
                    this2.createPagination(res.meta, res.links)
                })
            },
        }
    }
</script>

<style>
.input {
  display: none;
}
</style>