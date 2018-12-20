<template>
    <div class="selection">
        <div class="errors" v-if="errors.length">
            <p v-for="error in errors" class="danger">
                {{error.msg}}
            </p>
        </div>
        <h2>
            Select Your Priorities
        </h2>
        <div class="full">
            <div class="small-half">
                <div class="priority_zone">
                    <fieldset class="priority_selection">
                        <h3>Move the priorities</h3>
                        <draggable v-model="selectors" :options="{group:'people'}" @start="drag=true" @end="drag=false" class="half zone" @change="changeLocation()" >
                            <div v-for="(element, index) in selectors" :key="element.id">
                                <span>{{ default_ranking[index] }}</span><div class="btn-primary" v-on:click="setActive(element.id)">{{element.type}}</div>
                            </div>
                        </draggable>
                    </fieldset>
                </div>
            </div>
            <div class="bigger-half" v-show="findZone(0)">
                <metatype :selector="getSelector('Metatype')"></metatype>
            </div>
            <div class="bigger-half" v-show="findZone(1)">
                <attribute :selector="getSelector('Attributes')"></attribute>
            </div>
            <div class="bigger-half" v-show="findZone(2)">
                <magic :selector="getSelector('Magic')"></magic>
            </div>
            <div class="bigger-half" v-show="findZone(3)">
                <skill :selector="getSelector('Skills')"></skill>
            </div>
            <div class="bigger-half" v-show="findZone(4)">
                <resources :selector="getSelector('Resources')"></resources>
            </div>
        </div>
    </div>
</template>

<script>
    import draggable from 'vuedraggable';
    import metatype from './modules/MetatypeSelection';
    import attribute from './modules/AttributeSelection';
    import magic from './modules/MagicSelection';
    import skill from './modules/SkillComponent';
    import resources from './modules/ResourcesSelection';
    import { mapGetters, mapState } from 'vuex';

    export default {
        props: {currentStep: Number},

        components: {draggable, metatype, attribute, magic, skill, resources},

        data() {
            return {
                loading: false,
                default_resources: [
                    450000, 275000, 140000, 50000, 6000
                ],
            }
        },
        computed: {
            ...mapGetters({
                default_ranking: 'creation/default_ranking',
                errors: 'creation/errors',
                special_points: 'creation/special_points',
            }),
            selectors: {
                get () {
                    return this.$store.state.creation.selectors;
                },
                set (value) {
                    this.$store.commit('creation/PRIORITY_UPDATE_PRIORITIES', value);
                    this.$store.commit('creation/UPDATE_DATA', value);
                },
            },
        },
        methods: {
            changeLocation: function() {
                //this.$store.dispatch("creation/METATYPE_UPDATE_DATA", metatypeSelector);
                //this.$store.dispatch("creation/ATTRIBUTE_UPDATE_DATA", {selector: attributeSelector, special_points: this.special_points});
            },
            getSelector: function(type) {
                for (let i = 0; i < this.selectors.length; i++) {
                    if(this.selectors[i].type === type) {
                        return this.selectors[i];
                    }
                }
            },
            findZone: function(id) {
                for(let i = 0; i<this.selectors.length; i++) {
                    if(this.selectors[i].id === id) {
                        return this.selectors[i].show
                    }
                }
            },
            setActive: function(current_id) {
                let selector = {};
                for(let i = 0; i<this.selectors.length; i++) {
                    this.selectors[i].show = false;
                    if(this.selectors[i].id === current_id) {
                        selector = this.selectors[i];
                    }
                }
                selector.show = true;
            }
        },
    }
</script>
