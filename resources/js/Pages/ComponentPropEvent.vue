<script setup>
import LatihanCard from '@/Components/LatihanCard.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { ref } from 'vue';
const name = ref('Ahmad');
const description = ref('Lorem Ipsum Dolor sit amet');

const messegeFromChild = (title) => {
    alert('Hello from Child' + title);
}
</script>

<template>
    <GuestLayout>
        <h2 class="text-4xl font-extrabold ">Component Prop Event</h2>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole
                        collection
                        of open-source web components and elements built with the utility classes from Tailwind</p>
                </div>
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                    <LatihanCard v-for="n in 10" :title="name + n" :description="description + n"
                        @klik-from-child="messegeFromChild">
                        <template v-slot:slotAtas>Ini Untuk Slot Atas</template>
                        <template v-slot:slotBawah>Ini Untuk Slot Bawah</template>
                    </LatihanCard>


                </div>
            </div>
        </section>
    </GuestLayout>
</template>