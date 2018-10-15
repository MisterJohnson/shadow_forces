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
                        <option value="99" selected>What do you wanna be?</option>
                        <option v-for="metatype in filtered_types" :key="metatype.id" :value="metatype.id">
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
                <input class="input cancel_select" type="text" id="special_points" v-model="special_points" disabled>
            </div>
        </div>
        <div class="metatype_descriptor">
            <div class="description" v-show="metatype.id !== 99">
                <h3>
                    {{ metatype.metatype }}
                </h3>
                <p>
                    {{ metatype.description }}
                </p>
            </div>
        </div>
        <hr />
        <div class="attr_array" v-if="metatype.id !== 99">
            <h3>Attributes</h3>
            <div class="Rtable Rtable--2cols Rtable--collapse">

                <div style="order:0;" class="Rtable-cell Rtable-cell--head">
                    <h4>BODY</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.body_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.body_max }}</div>
                    </div>
                </div>
                <div style="order:1;" class="Rtable-cell">
                    <h4>AGILITY</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.agility_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.agility_max }}</div>
                    </div>
                </div>
                <div style="order:2;" class="Rtable-cell">
                    <h4>STRENGTH</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.strength_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.strength_max }}</div>
                    </div>
                </div>
                <div style="order:3;" class="Rtable-cell Rtable-cell--foot">
                    <h4>REACTION</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.reaction_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.reaction_max }}</div>
                    </div>
                </div>

                <div style="order:0;" class="Rtable-cell Rtable-cell--head">
                    <h4>WILLPOWER</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.willpower_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.willpower_max }}</div>
                    </div>
                </div>
                <div style="order:1;" class="Rtable-cell">
                    <h4>LOGIC</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.logic_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.logic_max }}</div>
                    </div>
                </div>
                <div style="order:2;" class="Rtable-cell">
                    <h4>INTUITION</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.intuition_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.intuition_max }}</div>
                    </div>
                </div>
                <div style="order:3;" class="Rtable-cell Rtable-cell--foot">
                    <h4>CHARISMA</h4>
                    <div>
                        <div>MIN : {{ metatype_attributes.charisma_min }}</div>
                        <hr />
                        <div>MAX : {{ metatype_attributes.charisma_max }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        props: { selector : Object },

        data() {
            return {
                loading: false,
                metatypeId: 99,
            }
        },
        computed: {
            ...mapGetters({
                metatypes: 'metatype/types',
                filtered_types: 'metatype/filtered_types',
                metatype: 'metatype/type',
                special_points: 'metatype/special_points',
                metatype_attributes: 'attributes/metatype_attributes',
            }),
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
        },
        mounted() {
            this.$store.commit('metatype/FILTER_METATYPE', this.selector.ranking);
        },
        methods: {
            getMetatype: function(metatype) {
                if(this.metatypeId === metatype.id) {
                    return metatype;
                }
            },
            setMetatype: function() {
                this.$store.commit('metatype/TYPE_UPDATED', this.metatypes.find(this.getMetatype));
                this.$store.commit('attributes/SET_CURRENT_METATYPE_ATTRIBUTES', this.metatype.attributes_id);
                this.$store.commit("metatype/UPDATE_DATA", this.selector);
            },
        }
    }
</script>

<style>
    .attr_array {
        margin-top: 25px;
    }
    .attr_array table {
        text-align: center;
    }
    .attr_array tr, .attr_array td, .attr_array thead th{
        text-align: center !important;
    }
    .attr_array td div:first-child, .attr_array td div:last-child{
        vertical-align: middle;
        height: 10px;
    }

    /* Variables
================================== */
    /* Tables
    ================================== */
    .Rtable {
        display: flex;
        flex-wrap: wrap;
        margin: 0 0 3em 0;
        padding: 0;
    }
    .Rtable-cell {
        box-sizing: border-box;
        flex-grow: 1;
        width: 100%;
        padding: 0.8em 1.2em;
        overflow: hidden;
        list-style: none;
        border: solid 3px white;
        background: rgba(112, 128, 144, 0.2);
    }
    /* Table column sizing
    ================================== */
    .Rtable--2cols > .Rtable-cell {
        width: 50%;
    }
    .Rtable--3cols > .Rtable-cell {
        width: 33.33%;
    }
    .Rtable--4cols > .Rtable-cell {
        width: 25%;
    }
    .Rtable--5cols > .Rtable-cell {
        width: 20%;
    }
    .Rtable--6cols > .Rtable-cell {
        width: 16.6%;
    }

    /* Apply styles
    ================================== */
    .Rtable {
        position: relative;
        top: 3px;
        left: 3px;
    }
    .Rtable-cell {
        margin: -3px 0 0 -3px;
        background-color: white;
        border-color: #e2e6e9;
    }
    /* Cell styles
    ================================== */
    .Rtable-cell--dark {
        background-color: slategrey;
        border-color: #5a6673;
        color: white;
    }
    .Rtable-cell--dark > h1,
    .Rtable-cell--dark > h2,
    .Rtable-cell--dark > h3,
    .Rtable-cell--dark > h4,
    .Rtable-cell--dark > h5,
    .Rtable-cell--dark > h6 {
        color: white;
    }
    .Rtable-cell--medium {
        background-color: #b8c0c8;
        border-color: #a9b3bc;
    }
    .Rtable-cell--light {
        background-color: white;
        border-color: #e2e6e9;
    }
    .Rtable-cell--highlight {
        background-color: lightgreen;
        border-color: #64e764;
    }
    .Rtable-cell--alert {
        background-color: darkorange;
        border-color: #cc7000;
        color: white;
    }
    .Rtable-cell--alert > h1,
    .Rtable-cell--alert > h2,
    .Rtable-cell--alert > h3,
    .Rtable-cell--alert > h4,
    .Rtable-cell--alert > h5,
    .Rtable-cell--alert > h6 {
        color: white;
    }
    .Rtable-cell--head {
        background-color: slategrey;
        border-color: #5a6673;
        color: white;
    }
    .Rtable-cell--head > h1,
    .Rtable-cell--head > h2,
    .Rtable-cell--head > h3,
    .Rtable-cell--head > h4,
    .Rtable-cell--head > h5,
    .Rtable-cell--head > h6 {
        color: white;
    }
    .Rtable-cell--foot {
        background-color: #b8c0c8;
        border-color: #a9b3bc;
    }
    /* Responsive
    ==================================== */
    .Rtable-cell h4 {
        width: 30%;
        height: 100%;
        display: inline-block;
        vertical-align: top;
    }
    .Rtable-cell div{
        width: 65%;
        display: inline-block;
    }

    @media all and (max-width: 900px) {
        .Rtable-cell h4 {
            width: 100%;
            height: 15%;
            display: block;
            vertical-align: top;
        }
    }
    @media all and (max-width: 500px) {
        .Rtable--collapse {
            display: block;
        }
        .Rtable--collapse > .Rtable-cell {
            width: 100% !important;
        }
        .Rtable--collapse > .Rtable-cell--foot {
            margin-bottom: 1em;
        }
    }

    .no-flexbox .Rtable {
        display: block;
    }
    .no-flexbox .Rtable > .Rtable-cell {
        width: 100%;
    }
    .no-flexbox .Rtable > .Rtable-cell--foot {
        margin-bottom: 1em;
    }
</style>
