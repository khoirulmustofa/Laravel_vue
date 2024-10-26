<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { reactive, ref } from 'vue';

const message = ref('Hello this for Built HTML v-html <b><i class="text-red-500 text-2xl">Directive</i></b>')

const isMale = ref(true)
const isFemale = ref(false)

const nilai = ref(50);

const fruits = reactive(['apple', 'banana', 'orange']);

const students = reactive(
    [
        { 'name': 'Ahmad', 'age': 21 },
        { 'name': 'Budi', 'age': 22 },
        { 'name': 'Caca', 'age': 23 }
    ]
)

const pesanAlert = () => {
    alert('Hello');
}

const submitForm = () => {
    alert('Ini Submit Form');
}

const urlPicture = ref('https://cdn-icons-png.flaticon.com/512/3135/3135715.png');
const ukuran = ref(100);

const classCss = ref('border border-red-500 border-8');

const pesanTextAres = ref('This is Textarea');

</script>

<template>
    <GuestLayout>
        <div class="antialiased bg-gray-50">
            <h1 class="text-2xl font-bold">Built Directive</h1>

            <p class="underline text-2xl">v-html</p>
            <p v-html="message"></p>



            <p class="underline text-2xl">v-show</p>
            <p>Jika menggunakan v-show jika tidak ingin muncul status css set display to none</p>
            <div v-show="isMale"> MALE BROOO</div>

            <div v-show="isFemale"> FEMALE SIS</div>

            <p class="underline text-2xl">v-if</p>
            <div v-if="isMale"> MALE BROOO</div>

            <div v-if="isFemale"> FEMALE SIS</div>

            <p class="underline text-2xl">v-if v-else</p>

            <div v-if="nilai < 50"> KURANG 50</div>

            <div v-else-if="nilai == 50">PAS 50</div>

            <div v-else> LEBIH 50</div>

            <p class="underline text-2xl">v-for</p>

            <ul>
                <!-- looping fruits -->
                <li v-for="(fruit, index ) in fruits" :key="index">{{ index }} . {{ fruit }}</li>
            </ul>

            <ol>
                <!-- looping students -->
                <li v-for="(student, index ) in students" :key="index">{{ index }} . {{ student.name }} - {{ student.age
                    }}
                </li>
            </ol>

            <p class="underline text-2xl">v-on</p>

            <button @click="pesanAlert"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Pesan</button>

            <form class="max-w-sm mx-auto" action="https://inertiajs.com/" @submit.prevent="submitForm">
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                        email</label>
                    <input type="text" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="name@flowbite.com" required />
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>

            <div class="max-w-sm mx-auto">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First name</label>
                <input @keyup.enter="submitForm" type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="John" required />
            </div>


            <img class="h-auto max-w-lg rounded-lg" :src="urlPicture" :style="{ width: ukuran + 'px' }"
                :class="classCss" alt="image description">


            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
            <textarea id="message" v-model="pesanTextAres" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Write your thoughts here..."></textarea>

        </div>
    </GuestLayout>
</template>