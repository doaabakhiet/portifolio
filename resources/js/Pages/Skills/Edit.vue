<template>
    <Head title="Skills|Update" />
    <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Update Skills</h2>
            </template>
    
            <div class="py-12">
                <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form @submit.prevent="submit" class="p-4">
                            <div>
                                <InputLabel for="name" value="Name" />
                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    autofocus
                                />
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                            <div>
                                <img :src='/storage/+form.image' alt="img" height="60" width="60">
                                <InputLabel for="image" value="Image" />
                                <TextInput
                                    id="image"
                                    type="file"
                                    class="mt-1 block w-full"
                                   @input="form.image=$event.target.files[0]"
                                />
                             <!-- v-model="form.image"  -->
                                <InputError class="mt-2" :message="form.errors.image" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Update
                                </PrimaryButton>
                            </div>
                    </form> 
                </div>
            </div>
        </AuthenticatedLayout>
    </template>
    <script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import InputError from '@/Components/InputError.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { Head , useForm} from '@inertiajs/inertia-vue3';
    import { Inertia } from '@inertiajs/inertia';
    const props=defineProps({
        skill:Object
    });
    const form = useForm({
        name: props.skill.name,
        image: props.skill.image,
    });
    const submit = () => {
        Inertia.post(route('skills.update',props.skill),{
            _method:"put",
            'name':form.name,
            'image':form.image
        });
    };
    // export default{
        // setup(){
            
        // }
    // }
    </script>
    <style>
    </style>