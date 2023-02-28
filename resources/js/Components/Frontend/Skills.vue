<template>
   <section id="skills" class="bg-light-tail-100 py-10">
        <div class="container">
            <div class="grid grid-cols-8 md:grid-flow-col">
                <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" class="lg:h-20" alt="">
                </div>
            </div>
        </div>
   </section>
</template>
<script setup>
defineProps({
    skills:Object
});
</script>