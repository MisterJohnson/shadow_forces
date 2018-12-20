<template>
    <div :class="select_class">
        <div class="name">
            {{ skill.skill_label | trans }}
        </div>
        <div class="groups">
            {{ get_group_from_skill(skill.id) | trans }}
        </div>
        <div class="selectors">
            <div>
                <input type="text" id="rating" :value="skill.skill_rating" class="input" />
                <div class="btns" v-if="skill.is_group === 0">
                    <div>
                        <button class="btn btn-md btn-success" type="button" v-on:click="add()">+</button>
                    </div>
                    <div>
                        <button class="btn btn-md btn-danger" type="button" v-on:click="remove()">-</button>
                    </div>
                </div>
                <div class="btns" v-if="skill.is_group === 1">
                    <div>
                        <button class="btn btn-md btn-success" type="button" v-on:click="addToGroup()">+</button>
                    </div>
                    <div>
                        <button class="btn btn-md btn-danger" type="button" v-on:click="removeFromGroup()">-</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    export default {
        props: { skill: Object },
        computed: {
            ...mapGetters({
                get_group_from_skill: 'creation/get_group_from_skill',
            }),
            select_class: function () {
                return {
                    'white': (this.skill.id % 2 === 0),
                    'skill': true,
                }
            },
        },
        methods: {
            add: function() {
                let id = this.skill.id;
                this.$store.commit('creation/SKILL_ADD', id-1);
            },
            remove: function() {
                let id = this.skill.id;
                this.$store.commit('creation/SKILL_REMOVE', id-1);
            },
            addToGroup: function() {
                let id = this.skill.id;
                this.$store.commit('creation/SKILL_GROUP_ADD', id-1);
            },
            removeFromGroup: function() {
                let id = this.skill.id;
                this.$store.commit('creation/SKILL_GROUP_REMOVE', id-1);
            }
        }
    }
</script>

<style scoped>

</style>
