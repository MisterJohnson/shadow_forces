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
                    <select id="magic" class="cancel_select" v-model="magic_id" @change="setMagicType()">
                        <option value="99" selected>what type of magic you want?</option>
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
                <input class="input cancel_select" type="text" id="magic_attr" :value="magic.magic_attribute + ' ' + translate_lang(magic.label, 'magic')" disabled>
            </div>
        </div>
        <div class="half spacing">
            <label for="magic_avail_skills">
                Number of Available Skill:
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="magic_avail_skills" :value="magic.number_of_skills + ' ' + translate_label('magic.skills_avail') + ' rating ' + this.magic.skill_rating" disabled>
            </div>
        </div>
        <div class="half spacing">
            <label for="number_spells">
                Number of spells / complex forms
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="number_spells" :value="magic.number_free_spell + ' ' + translate_label('magic.spells_avail')" disabled>
            </div>
        </div>
        <div class="metatype_descriptor">
            <div class="description">
                <h3>
                    {{ 'magic.' + magic.label | trans }}
                </h3>
                <p>
                    {{ 'magic.' + magic.description| trans }}
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
            }
        },
        computed: {
            ...mapGetters({
                magic_types: 'creation/magics',
                magic: 'creation/magic',
                magicId: 'creation/magicId',
            }),
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            magic_id: {
                get () {
                    return this.$store.state.creation.magicId;
                },
                set (value) {
                    this.$store.commit('creation/MAGIC_UPDATE_ID', value);
                },
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
                console.log(this.magic);
            },
            translate_lang: function (sentence, type) {
                return this.filter_lang(type+'.'+sentence);
            },
            translate_label: function (label) {
                return this.filter_lang(label);
            },
        }
    }
</script>

<style scoped>

</style>
