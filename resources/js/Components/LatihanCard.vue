<script setup>
const props = defineProps(['title', 'description']);
const emit = defineEmits(['klikFromChild']);
</script>

<template>


    <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                alt="Bonnie Avatar">
        </a>

        <div class="p-5">
            <slot name="slotAtas"></slot>
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#">{{ props.title }}</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{ props.description }}</p>
            <div class="flex flex-col">
            <button type="button" @click="emit('klikFromChild', props.title)" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Klik Form Child</button>
            <slot name="slotBawah"></slot>
        </div>
        </div>
    </div>

</template>