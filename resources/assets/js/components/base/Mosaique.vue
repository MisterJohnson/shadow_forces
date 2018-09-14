<template>
    <div>
        <div id="mosaique">
            <div class="selectPost">
                <label for="limit_article"># of Articles</label>
                <select name="limit_article" @change="getArticles()" id="limit_article" v-model="article_limit">
                    <option value="4">4 articles</option>
                    <option value="8" selected>8 articles</option>
                    <option value="16">16 articles</option>
                </select>
            </div>
            <div class="spin">
                <i  v-show="loading" class="fa fa-spinner fa-spin"></i>
            </div>
            <div class="items">
                <div v-bind:class="{ 'item': article.dimension === 'square', 'rectangle': article.dimension === 'horizontal_rectangle' }" v-for="article in articles">
                    <div class="card">
                        <article v-if="article.type === 'normal'">
                            <div class="article-data-title" v-bind:id="article.id">
                                <a v-bind:href="article.link | trans" v-bind:title="article.title | trans">
                                    <div class="outer-title">
                                        <div class="inner-title">
                                            <div class="data-meta"></div>
                                            <h4>
                                                {{ article.title | trans }}
                                            </h4>
                                            <span class="read-more">
                                                <a v-bind:href="article.link | trans">Read More</a>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-img" v-bind:id="article.id">
                                <img v-bind:src="background_path(article.background_image)" v-bind:alt="article.title | trans" width="100%" height="100%" />
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                articles : [],
                article_limit: "8",
                loading: false
            }
        },
        mounted() {
            console.log('mounted!');
            this.getArticles();
        },
        methods: {
            getArticles : function () {
                this.loading = true;

                // get the articles
                axios.get('/api/articles/' + this.article_limit)
                    .then( response => {
                        this.loading = false;
                        this.articles = response.data;
                    })
                    .catch(error => {
                        this.loading = false;
                        console.log(error);
                    });
            },
            background_path : function(filename) {
                return 'images/' + filename;
            }
        }
    }

</script>
