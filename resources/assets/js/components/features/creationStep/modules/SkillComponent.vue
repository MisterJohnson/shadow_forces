<template>
    <div>
        <h2>Skills</h2>
        <hr />
        <div class="full-container">
            <div class="control has-icons-left">
                <div class="half">
                    <label for="skill_name">{{ 'label.filter.default' | trans }}</label>
                    <input type="text" id="skill_name" :placeholder="'label.filter.skill_name' | trans" v-model="filter_skill">
                </div>
                <div class="half">
                    <label for="skill_group">{{ 'label.filter.default' | trans }}</label>
                    <input type="text" id="skill_group" :placeholder="'label.filter.skill_group' | trans" v-model="filter_group">
                    <button class="btn" style="float:right; margin: 10px 0;" title="clear" type="button" v-on:click="clear_filter"><i class="fas fa-eraser"></i></button>
                </div>
            </div>
            <div class="control has-icons-left">
                <div class="half">
                    <label for="skill_points">{{ 'label.filter.skill_point' | trans }}</label>
                    <input type="text" id="skill_points" :value="avail_skill" disabled>
                </div>
                <div class="half">
                    <label for="skill_group_points">{{ 'label.filter.skill_group_point' | trans }}</label>
                    <input type="text" id="skill_group_points" :value="avail_skill_group" disabled>
                </div>
            </div>
        </div>
        <div class="full-container">
            <div class="skills">
                <skill v-for="skill in filteredSkills" :key="skill.id" :skill="skill"></skill>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    import skill from '../components/skill_component';

    export default {
        components: { skill },
        data() {
            return {
                filter_skill: '',
                filter_group: ''
            }
        },
        computed: {
            ...mapGetters({
                filterSkills: 'creation/filter_skills',
                skills: 'creation/skills',
                avail_skill: 'creation/remaining_skill_points',
                avail_skill_group: 'creation/remaining_skill_group_points',
                get_group_from_skill: 'creation/get_group_from_skill',
            }),
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            filteredSkills : function () {
                const payload = {group: this.filter_group, skill: this.filter_skill, translator: this.filter_lang};
                let skills = this.filterSkills(payload);
                return skills;
            }
        },
        methods: {
            clear_filter() {
                this.filter_skill = '';
                this.filter_group = '';
            }
        }
    }
</script>

<style scoped>

</style>
