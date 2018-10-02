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
                default_attributes: [
                    24, 20, 16, 14, 12
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
