<template>
    <div>
        <!-- Menu-main -->
        <div id='cssmenu' class="align-right">
            <ul>
                <li class="active"><a href='index.html'><span>Home</span></a></li>
                <li><a href='single.html'><span>About</span></a></li>
                <li><a href='archive.html'><span>Blog</span></a></li>
                <li class='last'><a href='contact.html'><span>Contacts</span></a></li>
            </ul>
        </div>
    </div>
</template>

<script>

    export default {
        mounted() {
            console.log('mounted!');
        },
    }
</script>

<style scoped>

</style>
