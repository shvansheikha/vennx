<!--<template>-->
<!--    <AppLayout>-->
<!--        <div class="flex items-center justify-center min-h-screen">-->
<!--            <div class="flex-col items-center justify-center text-center p-8 h-full w-9/12 bg-stone-100 rounded-2xl">-->
<!--                <img src="/images/social_media.png">-->
<!--                <h2 class="text-2xl font-bold">You're In!</h2>-->
<!--                <p>Thank you for joining the VennX waitlist!</p>-->

<!--                    <p>-->
<!--                        You're now one step closer to finding the perfect co-founder, team member, or startup team. We'll keep you updated on our beta launch and exciting developments.-->
<!--                    </p>-->

<!--                <p>In the meantime, share VennX with your network and be part of the journey.-->
<!--                    Together, let's build the future!</p>-->
<!--                <button class="mt-8 bg-cyan-500 text-white px-4 py-2 rounded">OK</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </AppLayout>-->
<!--</template>-->

<!--<script setup lang="ts">-->
<!--import AppLayout from '@/Layouts/AppLayout.vue'-->
<!--</script>-->

<template>
    <div class="min-h-screen bg-gradient-to-r from-neutral-50 to-blue-50">
        <div class="max-w-3xl mx-auto p-6 flex flex-col items-center justify-center min-h-screen">
            <div class="bg-white rounded-2xl p-10 text-center w-full">
                <!-- Illustration -->
                <img
                    src="/images/social_media.png"
                    alt="Envelope with icons"
                    class="mx-auto mb-6 max-w-xs"
                />

                <!-- Heading -->
                <h1 class="text-3xl font-bold text-gray-800 mb-2">You're In!</h1>

                <!-- Description -->
                <p class="text-gray-700 mb-2">
                    Thank you for joining the VennX waitlist!
                </p>
                <p class="text-gray-600 mb-2">
                    You're now one step closer to finding the perfect co-founder, team member, or startup team. We’ll keep you updated on our beta launch and exciting developments.
                </p>
                <p class="text-gray-600 mb-6">
                    In the meantime, share VennX with your network and be part of the journey. <br />
                    Together, let's build the future!
                </p>

                <!-- Button -->
                <button class="bg-teal-400 hover:bg-teal-500 text-white px-6 py-2 rounded-lg transition-all duration-300">
                    Ok
                </button>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
// No logic required unless you want to navigate or do something on button click
</script>

