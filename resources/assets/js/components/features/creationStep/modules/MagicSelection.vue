<template>
    <div>
        <h2>Magic</h2>
        <hr />
        <div class="half">
            <label for="magic">
                Select Magic or Resonance :
            </label>
            <div class="control has-icons-left">
                <div v-bind:class="select_class">
                    <select id="magic" class="cancel_select" v-model="magicId" @change="setMagicType()">
                        <option v-for="magicType in filtering_magic_types" :key="magicType.id" :value="magicType.id">
                            {{ 'magic.' + magicType.label | trans }}
                        </option>
                    </select>
                </div>
                <span class="icon is-medium is-left">
                <i class="fab fa-connectdevelop"></i>
            </span>
            </div>
        </div>
        <div class="half">
            <label for="magic_attr">
                Magic Attribute:
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="magic_attr" v-model="change_magic_attribute" disabled>
            </div>
        </div>
        <div class="half spacing">
            <label for="magic_avail_skills">
                Number of Available Skill:
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="magic_avail_skills" v-model="filter_number_of_skills" disabled>
            </div>
        </div>
        <div class="half spacing">
            <label for="number_spells">
                Number of spells / complex forms
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="number_spells" v-model="filter_number_free_spell" disabled>
            </div>
        </div>
        <div class="metatype_descriptor">
            <div class="description">
                <h3>
                    {{ 'magic.' + magic_type.label | trans }}
                </h3>
                <p>
                    {{ 'magic.' + magic_type.description| trans }}
                </p>
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
                magicId: 99,
                magic_type: {},
            }
        },
        computed: {
            ...mapGetters({
                magic_types: 'magic/magics',
            }),
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            change_magic_attribute: function() {
                if (this.magic_types.length > 0) {
                    if(this.magicId !== 99) {
                        console.log(this.magic_type);
                        let label = (this.magic_type.label.includes('tech'))? this.filter_lang('magic.resonance_rating') : this.filter_lang('magic.magic_rating');
                        return this.magic_type.magic_attribute + ' ' + label;
                    }
                } else {
                    return 0;
                }
            },
            filtering_magic_types: function() {
                if (this.magic_types.length > 0) {
                    let filtered_magic_types = [];
                    let ranking = this.selector.ranking;
                    for (let i = 0; i < this.magic_types.length; i++) {
                        if(ranking === this.magic_types[i].magic_attribute_grade) {
                            filtered_magic_types.push(this.magic_types[i]);
                        }
                    }
                    return filtered_magic_types;
                }
            },
            filter_number_of_skills: function() {
                if(this.magicId !== 99) {
                    return this.magic_type.number_of_skills + ' ' + this.filter_lang('magic.skills_avail') + ' rating ' + this.magic_type.skill_rating;
                }
            },
            filter_number_free_spell: function() {
                if(this.magicId !== 99) {
                    return this.magic_type.number_free_spell + ' ' + this.filter_lang('magic.spells_avail');
                }
            }
        },
        methods: {
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
            getMagicType: function(magic) {
                if(this.magicId === magic.id) {
                    return magic;
                }
            },
            setMagicType: function() {
                this.magic_type = this.magic_types.find(this.getMagicType);
            },
        }
    }
</script>

<style scoped>

</style>
