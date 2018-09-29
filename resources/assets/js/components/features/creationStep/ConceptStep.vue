<template>
    <div class="concept">
        <h2>
            Choose your character
        </h2>
        <div class="full">
            <file_preview></file_preview>
            <div class="half">
                <fieldset>
                    <h3>Character Identity</h3>
                    <input type="text" v-model="form.name" id='name' placeholder="Character's name">
                    <input type="text" v-model="form.alias" id='alias' placeholder="Alias">
                </fieldset>
                <hr />
                <fieldset>
                    <h3>Character Physiology</h3>
                    <label for="gender" class="closing-up">Genre: </label>
                    <select v-model="form.gender" id="gender">
                        <option disabled value="">Please select one</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </fieldset>
                <fieldset>
                    <input type="text" v-model="form.height" id="Height" placeholder="Height: 1.75m" />
                    <input type="text" v-model="form.weight" id="Weight" placeholder="Weight: 78kg" />
                </fieldset>
                <fieldset>
                    <input type="text" v-model="form.age" id='age' placeholder="Age">
                    <input type="text" v-model="form.ethnicity" id='ethnicity' placeholder="Ethnicity">
                </fieldset>
                <fieldset>
                    <input type="text" v-model="form.hair" id='hair' placeholder="Hair">
                    <input type="text" v-model="form.eyes" id='eyes' placeholder="Eyes">
                </fieldset>
                <hr />
                <fieldset>
                    <h3>Character Background</h3>
                    <div class="full">
                        <label class="description">Personal Details: </label>
                        <wysiwyg v-model="form.details" />
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</template>

<style>
    .closing-up {
        margin-bottom: 0;
        margin-top: 10px;
    }
</style>

<script>
    import file_preview from '../../base/FilePreview';

    export default {
        props: {currentStep: Number},
        components : {
            file_preview,
        },
        data() {
            return {
                form: {
                    name : '',
                    alias : '',
                    gender : '',
                    height : '',
                    weight : '',
                    age : '',
                    ethnicity : '',
                    hair : '',
                    eyes : '',
                    details : '',
                },
            }
        },
        computed: {},
        methods: { },
    }
</script>
