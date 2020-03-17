<template>
    <div>
        <form @submit.prevent="addArticle">
            <div class="form-group mt-5 " style="width: 30rem;">
                <label >Title</label>
                <input v-model="article.title" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Write the title">
            </div>
            <div class="form-group" style="width: 30rem;">
                <label >Body</label>
                <textarea v-model="article.body" type="text" class="form-control" placeholder="Write the blog..."></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'AddArticle',

        components: {
            
        },
        
        data() {
            return {
                article: {
                    id: '',
                    title: '',
                    body: '',
                },
                edit: false
            }
        },

        methods: {
            addArticle() {
                if(this.edit === false) {
                    fetch('api/article', {
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'applicaiton/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.article.title = ''; //to clear the form after submitting
                        this.article.body = '';
                        alert('Article added!');
                    })
                } 
            }
        }
    }
</script>

<style>

</style>