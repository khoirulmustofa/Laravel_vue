<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { ref, watch } from 'vue';

const count = ref(0)
const pesan = ref('Hello')
const isWarning = ref(false)

watch(
    pesan,
    (newValue, oldValue) => {
        console.log(newValue, oldValue)
        if (newValue.length < 10) {
            isWarning.value = true
        } else {
            isWarning.value = false
        }
    }
)
</script>
<template>
    <GuestLayout>
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
            We invest in the world’s potential</h1>

        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First name</label>
            <input type="text" id="first_name" v-model="pesan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="----" required />
            <p v-if="isWarning" class="mt-2 text-sm text-red-600"><span class="font-medium">Oh, snapp!</span> Some error
                message.</p>
        </div>
    </GuestLayout>
</template>