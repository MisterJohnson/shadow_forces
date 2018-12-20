<template>
    <div>
        <h2>Attributes</h2>
        <hr />
        <div class="half">
            <label for="attributes">
                Number of Attributes points:
            </label>
            <div class="control">
                <input :class="attributes_class" class="input cancel_select" type="text" id="attributes" :value="remaining.remaining_attributes" disabled>
            </div>
        </div>
        <div class="half">
            <label for="attributes">
                Number of Special Attributes points:
            </label>
            <div class="control">
                <input :class="special_class" class="input cancel_select" type="text" id="special_attributes_point" :value="remaining.remaining_special" disabled>
            </div>
        </div>
        <div :class="max_attr" class="attr_array">
            <h3>Attributes</h3>
            <div class="Rtable Rtable--2cols Rtable--collapse">
                <div style="order:0;" class="Rtable-cell Rtable-cell--head">
                    <h4>BODY</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('body', 'minus')">-</button>
                            <input type="text" :value="character_attributes.body" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('body', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.body_max }}</div>
                    </div>
                </div>
                <div style="order:1;" class="Rtable-cell">
                    <h4>AGILITY</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('agility', 'minus')">-</button>
                            <input type="text" :value="character_attributes.agility" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('agility', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.agility_max }}</div>
                    </div>
                </div>
                <div style="order:2;" class="Rtable-cell">
                    <h4>STRENGTH</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('strength', 'minus')">-</button>
                            <input type="text" :value="character_attributes.strength" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('strength', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.strength_max }}</div>
                    </div>
                </div>
                <div style="order:3;" class="Rtable-cell">
                    <h4>REACTION</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('reaction', 'minus')">-</button>
                            <input type="text" :value="character_attributes.reaction" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('reaction', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.reaction_max }}</div>
                    </div>
                </div>
                <div style="order:4;" class="Rtable-cell Rtable-cell--foot">
                    <h4>EDGE</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('edge', 'minus')">-</button>
                            <input type="text" :value="character_attributes.edge" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('edge', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.edge_max }}</div>
                    </div>
                </div>

                <div style="order:0;" class="Rtable-cell Rtable-cell--head">
                    <h4>WILLPOWER</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('willpower', 'minus')">-</button>
                            <input type="text" :value="character_attributes.willpower" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('willpower', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.willpower_max }}</div>
                    </div>
                </div>
                <div style="order:1;" class="Rtable-cell">
                    <h4>LOGIC</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('logic', 'minus')">-</button>
                            <input type="text" :value="character_attributes.logic" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('logic', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.logic_max }}</div>
                    </div>
                </div>
                <div style="order:2;" class="Rtable-cell">
                    <h4>INTUITION</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('intuition', 'minus')">-</button>
                            <input type="text" :value="character_attributes.intuition" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('intuition', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.intuition_max }}</div>
                    </div>
                </div>
                <div style="order:3;" class="Rtable-cell">
                    <h4>CHARISMA</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('charisma', 'minus')">-</button>
                            <input type="text" :value="character_attributes.charisma" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('charisma', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.charisma_max }}</div>
                    </div>
                </div>
                <div style="order:4;" class="Rtable-cell Rtable-cell--foot">
                    <h4>MAGIC</h4>
                    <div>
                        <div>
                            CURRENT : <br />
                            <button type='button' class='btn btn-md btn-danger' @click="incrementAttribute('magic', 'minus')">-</button>
                            <input type="text" :value="character_attributes.magic" />
                            <button type='button' class='btn btn-md btn-success' @click="incrementAttribute('magic', 'plus')">+</button>
                        </div>
                        <hr />
                        <div>MAX : 12</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        props: {
          selector : Object,
        },

        data() {
            return {
                default_attributes : [
                    24, 20, 16, 14, 12
                ],
                loading: false,
            }
        },
        mounted() {
            let current_ranking = this.selector;
            let ranking = this.getRanking(current_ranking.ranking);
            this.$store.commit('creation/ATTRIBUTES_SET_ATTRIBUTES', {attributes: this.default_attributes[ranking], special: this.special_points});
        },
        computed : {
            ...mapGetters({
                metatypes: 'creation/types',
                filtered_types: 'creation/filtered_types',
                metatype: 'creation/type',
                special_points: 'creation/special_points',
                metatype_attributes: 'creation/metatype_attributes',
                character_attributes: 'creation/current_attr',
                points: 'creation/available_point',
                remaining: 'creation/remaining_point',
            }),

            attributes_class: function () {
                let activate = false;
                if(this.remaining.remaining_attributes < 0) {
                    this.$toasted.show('You exceed the amount of available attribute!').goAway(2500);
                    activate = true;
                } else {
                    activate = false;
                }
                return {
                    'text-danger' : activate,
                    'border-danger' : activate,
                }
            },
            special_class: function () {
                let activate = false;
                if(this.remaining.remaining_special < 0) {
                    this.$toasted.show('You exceed the amount of available special attribute!').goAway(2500);
                    activate = true;
                } else {
                    activate = false;
                }
                return {
                    'text-danger' : activate,
                    'border-danger' : activate,
                }
            },
            max_attr: function () {
                let activate = false;
                let count_max = 0;
                Object.keys(this.character_attributes).forEach(key => {
                    let val = this.character_attributes[key]; // value of the current key
                    if(this.metatype_attributes[key+'_max'] === val) {
                        count_max++;
                    }
                });
                if(count_max > 1) {
                    activate = true;
                    this.$toasted.show('You have more than 1 attribute set to it\'s maximum').goAway(2500);
                } else {
                    activate = false;
                }
                return {
                    'border border-danger' : activate,
                    'text-danger' : activate,
                }
            },
        },
        methods : {
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
            incrementAttribute: function(name, increment) {
                this.$store.commit('creation/ATTRIBUTES_INCREMENT_ATTRIBUTE', {name: name, increment: increment});
            },
        }
    }
</script>

<style>

    .attr_calculator {
        text-align: center;
        padding: 5px;
        border: 1px dotted #ccc;
        margin: 2%;
    }
    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
    }
    .attr_array input {
        width: 30.5% !important;
    }
</style>
