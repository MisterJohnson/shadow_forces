<template>
    <div>
        <h2>Resources</h2>
        <hr />
        <div class="half">
            <label for="attributes">
                Available Resources
            </label>
            <div class="control">
                <input class="input cancel_select" type="text" id="attributes" :value="change_resources_points" disabled>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            selector : Object,
        },

        data() {
            return {
                loading: false,
                default_resources: [
                    450000, 275000, 1400000, 50000, 6000
                ],
            }
        },
        computed : {
            select_class: function () {
                return {
                    select: true,
                    'is-loading': this.loading,
                    'is-medium': true
                }
            },
            change_resources_points: function() {
                let current_ranking = this.selector;
                let ranking = this.getRanking(current_ranking.ranking);
                return this.default_resources[ranking] + ' Nuyen';
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
