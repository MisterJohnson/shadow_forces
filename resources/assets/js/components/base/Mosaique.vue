<template>
    <div>
        <div id="mosaique">
            <label for="limit_article"># of Articles</label>
            <input id="limit_article" class="form-control" type="text" value="15">
            <div class="item" v-for="article in articles">
                <div class="card">
                    <article v-if="article.type === 'article'">
                        <div class="article-img" v-bind:id="article.id">
                            <a v-bind:href="article.link" v-bind:title="article.title">
                                <img v-bind:src="article.background_image" v-bind:alt="article.title" />
                            </a>
                        </div>
                        <div class="article-data-title" v-bind:id="article.id">
                            <div class="inner-title">
                                <div class="data-meta"></div>
                                <h4>
                                    {{ article.title }}
                                </h4>
                                <span class="read-more">
                                    <a v-bind:href="article.link">Read More</a>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article v-else-if="article.type === 'video'">
                    </article>
                    <article v-else-if="article.type === 'file'">
                    </article>
                    <article v-else-if="article.type === 'quote'">
                    </article>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Mosaique.vue",

        data() {
            return {
                articles : [],
            }
        },

        mounted() {
            // get the articles
            axios.get('/api/articles/')
                .then( response => {
                    this.articles = response.data;
                })
        }
    }

</script>

<style scoped>

</style>
