<template>
    <div class="selection">
        <h2>
            Select Your Priorities
        </h2>
        <div class="full">
            <div class="small-half">
                <div class="priority_zone">
                    <fieldset class="priority_selection">
                        <draggable v-model="selectors" :options="{group:'people'}" @start="drag=true" @end="drag=false" class="half zone" @change="changeLocation()" >
                            <div v-for="(element, index) in selectors" :key="element.id">
                                <span>{{ default_ranking[index] }}</span><div class="btn-primary" v-on:click="">{{element.type}}</div>
                            </div>
                        </draggable>
                    </fieldset>
                </div>
            </div>
            <div class="bigger-half">
                <h2>Metatype</h2>
                <hr />
                <div class="half">
                    <label for="metatypes">
                        Choose your metatype :
                    </label>
                    <div class="control has-icons-left">
                        <div v-bind:class="select_class">
                            <select id="metatypes" class="cancel_select" v-model="metatype">
                                <option selected>What will you be?</option>
                                <option v-for="metatype in metatypes" :key="metatype.id" :value="metatype.special_points">
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
                        <input type="text" id="special_points" v-model="change_special_points" disabled>
                    </label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import draggable from 'vuedraggable';

    export default {
        props: {currentStep: Number},

        components: {draggable},

        mounted() {
            this.getMetatypes();
        },
        data() {
            return {
                loading: false,
                default_ranking: [
                    'A', 'B', 'C', 'D', 'E'
                ],
                selectors: [
                    { type: 'Metatype', ranking: 'A', id: 0, data: '' },
                    { type: 'Attributes', ranking: 'B', id: 1, data: '' },
                    { type: 'Magic', ranking: 'C', id: 2, data: '' },
                    { type: 'Skills', ranking: 'D', id: 3, data: '' },
                    { type: 'Resources', ranking: 'E', id: 4, data: '' },
                ],
                metatypes: [],
                metatype: '',
                special_points: 0,
            }
        },
        computed : {
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            change_special_points: function() {
                if (this.metatypes.length > 0) {
                    if(this.metatype !== undefined) {
                        let current_ranking = this.getSelector('Metatype');
                        let ranking = this.getRanking(current_ranking.ranking);
                        return this.metatype.split(',')[ranking];
                    }
                } else {
                    return 0;
                }
            }
        },
        methods: {
            changeLocation: function() {
                for(let i = 0; i<this.selectors.length; i++) {
                    this.selectors[i].ranking = this.default_ranking[i];
                }
            },
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
            getSelector: function(type) {
                for (let i = 0; i < this.selectors.length; i++) {
                    if(this.selectors[i].type === type) {
                        return this.selectors[i];
                    }
                }
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
            }
        },
    }
</script>
