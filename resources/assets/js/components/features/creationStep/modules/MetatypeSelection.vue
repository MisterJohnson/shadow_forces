<template>
    <div>
        <h2>Metatype</h2>
        <hr />
        <div class="half">
            <label for="metatypes">
                Choose your metatype :
            </label>
            <div class="control has-icons-left">
                <div v-bind:class="select_class">
                    <select id="metatypes" class="cancel_select" v-model="metatypeId" @change="setMetatype()">
                        <option selected>What will you be?</option>
                        <option v-for="metatype in filter_available_metatype" :key="metatype.id" :value="metatype.id">
                            {{ metatype.metatype }}
                        </option>
                    </select>
                </div>
                <span class="icon is-medium is-left">
                            <i class="fab fa-connectdevelop"></i>
                        </span>
            </div>
        </div>
        <div class="half">
            <label for="special_points">
                Special Points:
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="special_points" v-model="change_special_points" disabled>
            </div>
        </div>
        <div class="metatype_descriptor">
            <div class="description">
                <h3>
                    {{ metatype.metatype }}
                </h3>
                <p>
                    {{ metatype.description }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: { selector : Object },

        data() {
            return {
                loading: false,
                metatypes: [],
                metatypeId: 99,
                metatype: {},
            }
        },
        created() {
            this.getMetatypes();
        },

        computed: {
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            change_special_points: function() {
                if (this.metatypes.length > 0) {
                    if(this.metatypeId !== 99) {
                        console.log(this.metatype);
                        let current_ranking = this.selector;
                        let ranking = this.getRanking(current_ranking.ranking);
                        return this.metatype.special_points.split(',')[ranking];
                    }
                } else {
                    return 0;
                }
            },
            filter_available_metatype: function() {
                if (this.metatypes.length > 0) {
                    let filtered_metatype = [];
                    for (let i = 0; i < this.metatypes.length; i++) {
                        if (this.metatypes[i].priority_avail.includes(this.selector.ranking)) {
                            filtered_metatype.push(this.metatypes[i]);
                        }
                    }
                    return filtered_metatype;
                }
            }
        },
        methods: {
            getMetatypes: function() {
                this.loading = true;
                console.log('fetching metatypes data');

                // get the articles
                axios.get('/api/metatypes/')
                    .then( response => {
                        this.loading = false;
                        this.metatypes = response.data;
                        console.log(this.metatypes);
                    })
                    .catch(error => {
                        this.loading = false;
                        console.log(error);
                    });
            },
            getRanking: function(ranking) {
                let index = 0;
                switch (ranking) {
                    case 'A':
                        index = 0;
                        break;
                    case 'B':
                        index = 1;
                        break;
                    case 'C':
                        index = 2;
                        break;
                    case 'D':
                        index = 3;
                        break;
                    case 'E':
                        index = 4;
                        break;
                }
                return index;
            },
            getMetatype: function(metatype) {
                if(this.metatypeId === metatype.id) {
                    return metatype;
                }
            },
            setMetatype: function() {
                this.metatype = this.metatypes.find(this.getMetatype);
            },
        }
    }
</script>
