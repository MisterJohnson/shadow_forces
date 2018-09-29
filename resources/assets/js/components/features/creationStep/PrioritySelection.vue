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
                <div>
                    <label for="races">
                        Choose your race :
                    </label>
                    <select v-model="races" id="races">
                        <option v-for="race in races" :key="race.id" :value="race.id">
                            {{ race.metatype }}
                        </option>
                    </select>
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

        data() {
            return {
                default_ranking: [
                    'A', 'B', 'C', 'D', 'E'
                ],
                metatype: [
                    { id: 0, metatype: 'Human', traits: '', special_point: {A: 9, B:7, C:5, D:3, E:1}, variant: 'none'},
                    { id: 1, metatype: 'Elf', traits: 'Low-light Vision', special_point: {A: 8, B:6, C:3, D:0, E:0}, variant: 'none'},
                    { id: 2, metatype: 'Dwarf', traits: 'Thermographic Vision; Dwarf Networking; Resistance: Pathogens and toxins; Lifestyle Cost +20%', special_point: {A: 7, B:4, C:1, D:0, E:0}, variant: 'none'},
                    { id: 3, metatype: 'Ork', traits: 'Low-light Vision', special_point: {A: 7, B:4, C:0, D:0, E:0}, variant: 'none'},
                    { id: 4, metatype: 'Troll', traits: 'Thermographic Vision; Lifestyle Cost +20%', special_point: {A: 5, B:0, C:0, D:0, E:0}, variant: 'none'},
                    /* ===== MetaVariant ===== */
                    { id: 4, metatype: 'Troll', traits: 'Thermographic Vision; Lifestyle Cost +20%', special_point: {A: 5, B:0, C:0, D:0, E:0}, variant: 'Cyclops'},
                ]
            }
        },
        methods: {
            changeLocation: function() {
                for(let i = 0; i<this.selectors.length; i++) {
                    this.selectors[i].ranking = this.default_ranking[i];
                }
                console.log(this.selectors);
            }
        },
    }
</script>
