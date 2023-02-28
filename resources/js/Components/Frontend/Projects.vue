<template>
         <!-- <div id="projects" class="container mx-auto">            
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button @click="filterProject('all')" :class="[selectedSkill==='all' ? 'text-light-tail-500':'']" class="inline-block p-4 border-b-2 rounded-t-lg" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
                    </li>
                    <li class="mr-2" role="presentation" v-for="skill in skills.data" :key="skill.id">
                        <button @click="filterProject(skill.id)" :class="[selectedSkill===skill.id]" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">{{skill.name}}</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <Project v-for="project in projects.data" :key="project.id" :project="project"/> -->
                <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div> -->
            <!-- </div>
         </div>
         <div class="container mx-auto"> -->
<div class="container mx-auto">
    <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
      <ul class="flex flex-col lg:flex-row justify-evenly items-center">
        <li class="cursor-pointer capitalize m-4">
          <button
            @click="filterProjects('all')"
            class="
              flex
              text-center
              px-4
              py-2
              hover:bg-accent
              text-white
              rounded-md
            "
            :class="[
              selectedSkill === 'all'
                ? 'bg-accent'
                : 'bg-light-tail-500 dark:bg-dark-navy-100',
            ]"
          >
            All
          </button>
        </li>
        <li
          class="cursor-pointer capitalize m-4"
          v-for="projectSkill in skills.data"
          :key="projectSkill.id"
        >
          <button
            @click="filterProjects(projectSkill.id)"
            class="
              flex
              text-center
              px-4
              py-2
              hover:bg-accent
              text-white
              rounded-md
            "
            :class="[
              selectedSkill == projectSkill.id
                ? 'bg-accent'
                : 'bg-light-tail-500 dark:bg-dark-navy-100',
            ]"
          >
            {{ projectSkill.name }}
          </button>
        </li>
      </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
      <Project
        v-for="project in filteredProjects"
        :key="project.id"
        :project="project"
      />
    </section>
    </div>   
</template>
<script setup>
import  Project  from "@/Components/Frontend/Project.vue";
import { ref } from "vue";
const props=defineProps({
   skills:Object,
   projects:Object
});
const filteredProjects=ref(props.projects.data);
const selectedSkill=ref('all');
const filterProject=(id)=>{
    if(id==='all'){
        filteredProjects.value=props.projects.data;
        selectedSkill.value=id;
    }else{
        filteredProjects.value=props.projects.data.filter(project=>{
            return project.skill.id===id;
        });
        selectedSkill.value=id;
    }
};
</script>