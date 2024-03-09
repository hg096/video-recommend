<script setup>
import { computed, onMounted, ref } from "vue";

const props = defineProps({
    tagLists: {
        type: Array,
        default: [],
    },
    tagMaxLang: {
        type: Number,
        default: 5,
    },
});

const input = ref("");

const tags = computed({
    get: () => props.tagLists,
    set: (value) => emit("update:tagLists", value),
});

const addTag = () => {
    if (input.value !== "") {
        if (tags.value.length < props.tagMaxLang) {
            tags.value.push(input.value);
        }
        input.value = "";
    }
};

const removeTag = (index) => {
    tags.value.splice(index, 1);
};

onMounted(() => {
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div>
        <div class="flex">
            <input
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                type="text"
                v-model="input"
                @keydown.enter.prevent="addTag"
                placeholder="태그를 입력하세요 (Enter로 추가)"
            />
            <button
                @click="addTag"
                class="rounded-full px-2 py-1"
                type="button"
            >
                +
            </button>
        </div>

        <div class="flex my-2">
            <div
                v-for="(tag, index) in tags"
                :key="index"
                class="bg-slate-100 pl-1 text-[10px] rounded-full mx-1 flex items-center"
            >
                <p class="ml-1">
                    {{ tag }}
                </p>
                <button
                    @click="removeTag(index)"
                    class="rounded-full px-2 py-1"
                    type="button"
                >
                    X
                </button>
            </div>
        </div>
    </div>
</template>
