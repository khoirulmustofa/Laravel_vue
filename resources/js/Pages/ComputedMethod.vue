<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { computed, reactive, ref } from 'vue';

const number = ref(0);


const mentor = reactive({
    name: 'Ahmad',
    totorials: [
        'php',
        'laravel',
        'vue',
        'react',
        'javascript',
    ]
})

const hasTotorial = computed(() => {
    return mentor.totorials.length > 0 ? "Yes" : "No";
})

// create method

function addNumber() {
    number.value++;
}

const downNumber = () => {
    number.value--;
}
</script>

<template>

    <GuestLayout>
        <p class="text-5xl text-gray-900">Computed Method</p>

        <p class="text-xl text-gray-900">{{ mentor.name }}</p>

        <p class="text-xl text-gray-900">Apakah Mentor Memiliki Totorial? {{ hasTotorial }}</p>

        <p>{{ number }}</p>

        <button @click="addNumber"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none dark:focus:ring-blue-800">{{
            number}}</button>


        <button @click="downNumber"
            class="text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none dark:focus:ring-blue-800">{{
            number}}</button>

    </GuestLayout>
</template>