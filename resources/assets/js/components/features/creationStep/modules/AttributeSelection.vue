<template>
    <div>
        <h2>Attributes</h2>
        <hr />
        <div class="half">
            <label for="attributes">
                Number of Attributes points:
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="attributes" :value="change_attributes_points" disabled>
            </div>
            <div class="attr_array">
                <table>
                    <thead>
                    <tr>
                        <th>
                            Body
                        </th>
                        <th>
                            Agility
                        </th>
                        <th>
                            Strength
                        </th>
                        <th>
                            Reaction
                        </th>
                        <th>
                            Willpower
                        </th>
                        <th>
                            Logic
                        </th>
                        <th>
                            Intuition
                        </th>
                        <th>
                            Charisma
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="body"></label><input type='text' name='body' :value='metatype_attributes.body_min' class='qty' id="body" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.body_min }} / {{ metatype_attributes.body_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="agility"></label><input type='text' name='agility' :value='metatype_attributes.agility_min' class='qty' id="agility" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.agility_min }} / {{ metatype_attributes.agility_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="strength"></label><input type='text' name='strength' :value='metatype_attributes.strength_min' class='qty' id="strength" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.strength_min }} / {{ metatype_attributes.strength_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="reaction"></label><input type='text' name='reaction' :value='metatype_attributes.reaction_min' class='qty' id="reaction" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.reaction_min }} / {{ metatype_attributes.reaction_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="willpower"></label><input type='text' name='willpower' :value='metatype_attributes.willpower_min' class='qty' id="willpower" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.willpower_min }} / {{ metatype_attributes.willpower_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="logic"></label><input type='text' name='logic' :value='metatype_attributes.logic_min' class='qty' id="logic" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.logic_min }} / {{ metatype_attributes.logic_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="intuition"></label><input type='text' name='intuition' :value='metatype_attributes.intuition_min' class='qty' id="intuition" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.intuition_min }} / {{ metatype_attributes.intuition_max }}
                            </em>
                        </td>
                        <td>
                            <div class="attr_calculator">
                                <div><button type='button' class='qty_btn qtyminus'>+</button></div>
                                <div><label for="charisma"></label><input type='text' name='charisma' :value='metatype_attributes.charisma_min' class='qty' id="charisma" /></div>
                                <div><button type='button' class='qty_btn qtyplus'>-</button></div>
                            </div>
                            <em data-title="Current metatype minimum and maximum limit">
                                {{ metatype_attributes.charisma_min }} / {{ metatype_attributes.charisma_max }}
                            </em>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
                loading: false,
                default_attributes: [
                    24, 20, 16, 14, 12
                ],
            }
        },
        computed : {
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
            change_attributes_points: function() {
                let current_ranking = this.selector;
                let ranking = this.getRanking(current_ranking.ranking);
                return this.default_attributes[ranking];
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
    button.qtyplus { width:25px; height:25px; margin: 5px;}
    button.qtyminus { width:25px; height:25px; margin: 5px;}
</style>
