<template>
    <section id="contact" class="section bg-light-primary dark:bg-dark-primary ">
        <div  class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">Contact Me</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vero itaque neque placeat assumenda non deserunt qui distinctio optio in id quisquam quae veniam odit, consectetur soluta atque eligendi dignissimos.</p>
            </div>
            <div class="flex flex-col lg:flex-row ">
                <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:pt-2 lg:mb-0">
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">Have A Question ?</h4>
                            <p class="mb-1 text-paragraph">I'm Here To Help You?</p>
                            <p class="text-accent font-normal">Email Me At john@doe.com</p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">Current Location </h4>
                            <p class="mb-1 text-paragraph">Tirana ,Albania</p>
                            <p class="text-accent font-normal">Serving Clients WorldWide</p>
                        </div>
                    </div>
                </div>
                <form @submit.prevent="submit" class="space-y-8 w-full max-w-md">
                    <div v-if="showMessage" class="m-2 p-4 bg-light-tail-500 text-light-secondary rounded-lg">
                        Thank You For Contacting Me
                    </div>
                    <div class="flex gap-4">
                        <div>
                            <input type="text" class="input " v-model="form.name" placeholder="name">
                        <br/>
                            <span v-if="form.errors.name" class="text-sm m-2 text-red-400">{{form.errors.name}}</span>
                        </div>
                        <div>
                            <input type="email" class="input" v-model="form.email" placeholder="Email">
                        <br/>
                            <span v-if="form.errors.email" class="text-sm m-2 text-red-400">{{form.errors.email}}</span>
                        </div>
                        
                    </div>
                    <div class="flex gap-4">
                    <div>
                        <textarea name="notes" class="textarea" v-model="form.body" spellcheck="false" id="" cols="51" rows="10">Enter Your Message</textarea>
                    <br/>
                        <span v-if="form.errors.body" class="text-sm m-2 text-red-400">{{form.errors.body}}</span>
                        <br/>
                        <button type="submit" class="btn btn-lg bg-accent hover:bg-secondary text-white">Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</template>
<script setup>
import { ref } from "vue";
import { useForm } from '@inertiajs/inertia-vue3';

const showMessage=ref(false);
function setShowMessage(value){
    showMessage.value=value;
}
function cleanForm(){
    form.reset();
    setShowMessage(true);
    setTimeout(()=>setShowMessage(false),2000);
}
const form =useForm({
    name:'',
    email:'',
    body:'',
});
const submit=()=>{
    form.post(route('contact'),{
        preserveScroll:true,
        onSuccess: () => cleanForm()
    });
}
</script>