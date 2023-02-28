<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import  Frontend  from "@/Layouts/Frontend.vue";
import  Hero  from "@/Components/Frontend/Hero.vue";
import  Promote  from "@/Components/Frontend/Promote.vue";
import  About  from "@/Components/Frontend/About.vue";
import  Skills  from "@/Components/Frontend/Skills.vue";
import  portfolio  from "@/Components/Frontend/portfolio.vue";
import  Services  from "@/Components/Frontend/Services.vue";
import  ContactMe  from "@/Components/Frontend/ContactMe.vue";

defineProps({
    skills:Object,
    projects:Object
});
</script>

<template>
    <Head title="Welcome" />

   <Frontend>
        <!-- hero primary -->
        <Hero/>
        <!-- promote tail-100 -->
        <Promote/>
        <!-- About secondary -->
        <About/>
        <!-- Skills tail-100-->
        <Skills :skills="skills"/>
        <!-- Portifolio primary-->
        <portfolio :skills="skills" :projects="projects"/>
        <!-- Services secondary-->
        <Services/>
        <!-- Contact primary -->
        <ContactMe/>
   </Frontend>
</template>
