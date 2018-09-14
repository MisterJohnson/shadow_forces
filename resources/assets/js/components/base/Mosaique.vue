<template>
    <div>
        <div id="mosaique">
            <div class="selectPost">
                <label for="limit_article"># of Articles</label>
                <select name="limit_article" id="limit_article">
                    <option value="4">4 articles</option>
                    <option value="8">8 articles</option>
                    <option value="16">16 articles</option>
                </select>
            </div>
            <div class="items">
                <div class="item" v-for="article in articles">
                    <div class="card">
                        <article v-if="article.type === 'normal'">
                            <div class="article-img" v-bind:id="article.id">
                                <a v-bind:href="article.link" v-bind:title="article.title">
                                    <img v-bind:src="background_path(article.background_image)" v-bind:alt="article.title" width="100%" height="100%" />
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                articles : [],
            }
        },
        mounted() {
            console.log('mounted!');
            this.getArticles(4);
        },
        methods: {
            getArticles : function (limit) {
                // get the articles
                axios.get('/api/articles/4')
                    .then( response => {
                        this.articles = response.data;
                    });
            },
            background_path : function(filename) {
                return 'images/' + filename;
            }
        }
    }

</script>
