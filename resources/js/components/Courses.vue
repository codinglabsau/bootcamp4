<template>
    <div>
        <div class="flex mb-4">
            <div class="w-1/5 h-max"></div>

            <div class="w-3/5 h-max my-12 py-12 grid grid-cols-2 justify-between gap-10">
                <div class="max-w-sm rounded overflow-hidden shadow-lg" style="width: 45rem;" v-bind:key="course" v-for="course of coursesList">
                
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png">
                    
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <router-link :to="{ name: 'comments', params: { course }}" class="nav-item nav-link">{{course.title}}</router-link> 
                        </div>

                        <p class="text-gray-700 text-base">
                            {{course.detail}}      
                        </p>
                    </div>

                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                    </div>
                </div>   
            </div>

            <div class="w-1/5 h-max"></div>
        </div>

        <div class="flex mb-4">
            <div class="w-1/5 h-max"></div>

            <div class="w-3/5 h-max">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li v-bind:class="[{disabled :!paginationDict.previousPage}]" class="page-item">
                            <a class="page-link" href="#" @click="displayArticles(paginationDict.previousPage)">Previous</a>
                        </li>

                        <li class="page-item disabled text-dark">
                            <a class="page-link" href="#" @click="displayArticles(paginationDict.nextPage)">Page {{paginationDict.currentPage}} of {{paginationDict.lastPage}}</a>
                        </li>

                        <li v-bind:class="[{disabled :!paginationDict.nextPage}]" class="page-item">
                            <a class="page-link" href="#" @click="displayArticles(paginationDict.nextPage)">Next</a>
                        </li> 
                    </ul>
                </nav>
            </div>

            <div class="w-1/5 h-max"></div>
        </div>
    </div>
</template>

<script>
    import AddArticle from './AddArticle'

    export default {
        name: 'Courses',

        components: {
            AddArticle
        },

        data() {
            return {
                coursesList: [],
                paginationDict: {}
            }
        },

        created() {
            this.displayArticles();
        },

        methods: {
            displayArticles(page_url) { //page_url is passed from the template nevigation
                let this2 = this //for createPagination function because using this will overwrite current function and wont give any answers
                page_url = page_url || 'courses'

                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.coursesList = res.data;
                    this2.createPagination(res.meta, res.links)
                })
            },
            createPagination(meta, links) {
                let pagination = {
                    currentPage: meta.current_page,
                    lastPage: meta.last_page,
                    nextPage: links.next,
                    previousPage: links.prev
                };

                this.paginationDict = pagination;
            },
        }
    }
</script>

<style>

</style>