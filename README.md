Here’s the README file in GitHub Markdown format:

---

# Vue.js Composition API - Learning Guide with `<script setup>`

This guide introduces the Vue 3 Composition API using the `<script setup>` syntax. It covers `ref()` & `reactive()`, `computed` properties & methods, built-in directives, watchers, and components with props and events.

## Table of Contents

1. [Introduction](#introduction)
2. [Getting Started](#getting-started)
3. [Ref & Reactive](#ref--reactive)
4. [Computed Properties & Methods](#computed-properties--methods)
5. [Built-in Directives](#built-in-directives)
6. [Watchers](#watchers)
7. [Components, Props, and Events](#components-props-and-events)
8. [Conclusion](#conclusion)

## Introduction

The Composition API provides a flexible, modular approach to writing Vue components, and `<script setup>` simplifies component syntax by eliminating the need for `export default`. Let’s get started!

## Getting Started

1. Install Laravel use Insetia Vue:


## Ref & Reactive

### `ref()`

Use `ref()` to create a reactive reference to a primitive or object:

```vue
<template>
  <div>
    <p>Count: {{ count }}</p>
    <button @click="increment">Increment</button>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const count = ref(0);
const increment = () => {
  count.value++;
};
</script>
```

### `reactive()`

Use `reactive()` for creating a reactive object, useful for complex structures:

```vue
<template>
  <p>Name: {{ user.name }}, Age: {{ user.age }}</p>
</template>

<script setup>
import { reactive } from 'vue';

const user = reactive({
  name: 'John Doe',
  age: 30,
});
</script>
```

## Computed Properties & Methods

### `computed`

`computed` properties are cached based on dependencies and update only when dependencies change.

```vue
<template>
  <p>Total Price: {{ total }}</p>
</template>

<script setup>
import { ref, computed } from 'vue';

const price = ref(100);
const quantity = ref(2);
const total = computed(() => price.value * quantity.value);
</script>
```

### Methods

Define reusable methods directly in `<script setup>`:

```vue
<template>
  <button @click="greet">Greet</button>
</template>

<script setup>
const greet = () => alert('Hello, Vue!');
</script>
```

## Built-in Directives

### Examples of Built-in Directives

- **`v-if`**: Conditionally render elements.
- **`v-for`**: Render a list.
- **`v-model`**: Two-way data binding.

```vue
<template>
  <div v-if="show">Hello World</div>
  <input v-model="name" placeholder="Enter your name" />
</template>

<script setup>
import { ref } from 'vue';

const show = ref(true);
const name = ref('');
</script>
```

## Watchers

Watchers observe changes to specific data and allow you to perform actions accordingly:

```vue
<template>
  <button @click="count++">Increase Count</button>
</template>

<script setup>
import { ref, watch } from 'vue';

const count = ref(0);

watch(count, (newValue, oldValue) => {
  console.log(`Count changed from ${oldValue} to ${newValue}`);
});
</script>
```

## Components, Props, and Events

### Creating a Component

Using `<script setup>`, define props directly in the component.

```vue
<!-- ChildComponent.vue -->
<template>
  <div>{{ message }}</div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  message: String,
});
</script>
```

### Using Props

Pass data from parent to child components using props.

```vue
<!-- ParentComponent.vue -->
<template>
  <ChildComponent message="Hello from parent" />
</template>

<script setup>
import ChildComponent from './ChildComponent.vue';
</script>
```

### Emitting Events

To emit events from a child to a parent component:

```vue
<!-- ChildComponent.vue -->
<template>
  <button @click="$emit('clicked')">Click Me</button>
</template>

<script setup>
import { defineEmits } from 'vue';

const emit = defineEmits(['clicked']);
</script>
```

In the parent component:

```vue
<!-- ParentComponent.vue -->
<template>
  <ChildComponent @clicked="handleClick" />
</template>

<script setup>
import ChildComponent from './ChildComponent.vue';

const handleClick = () => {
  alert('Button clicked in child component');
};
</script>
```

## Conclusion

With this guide, you’ve learned how to use Vue 3’s Composition API with `<script setup>` for building reactive, scalable, and maintainable applications. Dive into each concept to strengthen your understanding.

--- 

Happy Coding! 🎉

Khoirul Mustofa