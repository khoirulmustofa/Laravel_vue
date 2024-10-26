<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { reactive, ref } from 'vue';


const count = ref(0);
const pesan = ref('Hello');

const siswa = reactive({
    name: 'Ahmad',
    age: 21
})



// ref primitive data type string, number, boolean
// reactive => object, array, collection
</script>

<template>
    <GuestLayout>
        <div class="flex justify-center">
            <h1 class="align-center font-bold text-xl">Ref() & Reactive() - State Reactivity</h1>

        </div>
        <hr>
        {{ count }} - {{ pesan }} - {{ siswa.name }} - {{ siswa.age }}
    </GuestLayout>

</template>