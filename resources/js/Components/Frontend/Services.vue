<template>
    <section id="services" class="section bg-light-secondary">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">What I do For Clients</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vero itaque neque placeat assumenda non deserunt qui distinctio optio in id quisquam quae veniam odit, consectetur soluta atque eligendi dignissimos.</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-light-tail-100 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center mb-24 text-[28px]"></div>
                    <h4 class="text-xl font-medium mb-2">Web Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi harum eaque tempora nobis!</p>
                </div>
                <div class="bg-light-tail-100 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center mb-24 text-[28px]"></div>
                    <h4 class="text-xl font-medium mb-2">Branding</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi harum eaque tempora nobis!</p>
                </div>
                <div class="bg-light-tail-100 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center mb-24 text-[28px]"></div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi harum eaque tempora nobis!</p>
                </div>
                <div class="bg-light-tail-100 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center mb-24 text-[28px]"></div>
                    <h4 class="text-xl font-medium mb-2">SEO</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi harum eaque tempora nobis!</p>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props= defineProps({
//    project:Object
});
</script>