<template>
    <AppLayout>
        <div class=" flex flex-col lg:flex-row items-center justify-between max-w-7xl mx-auto mt-10 p-8">

            <div class="w-full lg:w-1/2 space-y-8 order-2 md:order-1">
            <h1 class="text-3xl font-bold mb-6">The Smartest Way to Build Your <span class="text-sky-600">Startup</span> Team</h1>
            <form @submit.prevent="submit" class="space-y-8 sm:mr-32 md:mr-0bg-white p-6 rounded-xl">

                <h1>Get Started</h1>
                <input v-model="form.email" type="email" placeholder="Email" class="input bg-white" />
                <span v-if="form.errors.email" class="text-red-500 text-sm ">{{ form.errors.email }}</span>

                <input v-model="form.linkedin" type="text" placeholder="Linkedin" class="input bg-white" />
                <span v-if="form.errors.linkedin" class="text-red-500 text-sm">{{ form.errors.linkedin }}</span>

                <select v-model="form.are_you" class="input bg-white">
                    <option disabled value="">Are you</option>
                    <option value="1">I'm a Founder building a team</option>
                    <option value="2">I'm looking to join a startup</option>
                    <option value="3">I'm scaling my next big idea</option>
                    <option value="4">I'm an investor or mentor</option>
                </select>

                <div class="flex flex-col gap-2">
                    <label>What stage startup are you building?</label>
                    <div class="flex gap-2 flex-wrap">
                        <button
                            v-for="stage in stages"
                            :key="stage"
                            @click.prevent="toggleStage(stage)"
                            :class="[
                'px-4 py-2 rounded-lg border',
                form.looking_to?.includes(stage) ? 'text-cyan-400 border-cyan-400' : ' text-neutral-700 border-neutral-300 bg-white'
              ]"
                        >
                            {{ stage }}
                        </button>
                    </div>
                </div>

                <div>
                    <label>What’s your area of expertise?</label>
                    <select v-model="form.expertize" class="input bg-white">
                        <option disabled value="">Select one</option>
                        <option value="1">Tech (Frontend)</option>
                        <option value="2">Tech (Backend)</option>
                        <option value="3">Business Dev</option>
                        <option value="4">Product</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-teal-400 text-white py-2 rounded font-semibold">Submit</button>
            </form>
            </div>


            <div class="order-1 md:order-2 w-full flex flex-col justify-center items-center lg:w-1/2 mt-12 lg:mt-0">
                    <img src="/images/mask_group.png" class="h-72">

                <div class="mb-12">
                    <div class="p-6 rounded-xl max-w-xl mx-auto">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Why Join the Waitlist?</h2>

                        <ul class="space-y-1 text-gray-700" v-for="(reason, i) in reasons" :key="i">

                            <li class="flex items-center space-x-2 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-teal-400 size-5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>

                                <span>{{ reason }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/Layouts/AppLayout.vue'
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    linkedin: '',
    are_you: '',
    looking_to: [],
    expertize: '',
    reason: ''
});

const stages = ['Idea Stage', 'MVP', 'Early Growth', 'Scaling']
const reasons = [
    'Get early access to the VennX beta',
    'Be among the first to connect with startups and co-founders',
    'Help us shape the future of startup hiring'
]

function toggleStage(stage) {
    const index = form.looking_to.indexOf(stage)
    if (index === -1) form.looking_to.push(stage)
    else form.looking_to.splice(index, 1)
}

function submit() {
    form.post(route('form-submit'), {});
}
</script>

<style scoped>
.input {
    width: 100%;
    padding: 0.5rem;
    border-radius: 0.5rem;
    border: 1px solid #ccc;
}
</style>
