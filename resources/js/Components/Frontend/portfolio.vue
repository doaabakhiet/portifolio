<template>
    <section id="portfolio" class="bg-light-primary min-h-[1400px] py-10">
         <div class="container mx-auto">
            <div class="flex flex-col items-center text-center" >
                <h2 class="section-title">My Latest Work</h2>
                <p class="subtitle">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae at, numquam corporis impedit ratione molestiae commodi? Sunt ullam pariatur numquam aut corporis iure obcaecati eveniet ab quas, enim modi ipsam?
                </p>
                <div>
                    <Projects :skills="skills" :projects="projects"/>
                </div>
            </div>
         </div>
    </section>
 </template>
 <script setup>
import  Projects  from "@/Components/Frontend/Projects.vue";
 defineProps({
    skills:Object,
    projects:Object
 });
 </script>