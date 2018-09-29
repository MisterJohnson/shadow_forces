<template>
    <div v-if="btn.class['left']">
        <button v-bind:class="btn.class" type="button" @click="previousPage()" v-show="btn.show">
            {{ btn.label }}
        </button>
    </div>
    <div v-else>
        <button v-bind:class="btn.class" type="button" @click="nextPage()" v-show="btn.show">
            {{ btn.label }}
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            currentStep: Number,
            btn: Object
        },
        methods: {
            previousPage: function() {
                this.$emit('previousStep', this.currentStep-1);
            },

            nextPage: function() {
                this.$emit('nextStep', this.currentStep+1);
            },
        },
    }
</script>
