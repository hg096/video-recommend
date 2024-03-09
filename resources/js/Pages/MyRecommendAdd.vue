<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

import PrimaryButton from "@/Components/BaseComp/PrimaryButton.vue";
import TextAreaInput from "@/Components/BaseComp/TextAreaInput.vue";
import InputLabel from "@/Components/BaseComp/InputLabel.vue";
import TextInput from "@/Components/BaseComp/TextInput.vue";
import InputError from "@/Components/BaseComp/InputError.vue";
import TextTagInput from "@/Components/BaseComp/TextTagInput.vue";


const form = useForm({
    name: "",
    description: "",
    category: "",
    categoryLists: [],
    url: "",
});

const submit = () => {
    console.log(form.description);
    console.log(form.categoryLists);

    // form.post(route('login'), {
    //     onFinish: () => form.reset('password'),
    // });
};
</script>

<template>
    <Head title="my-recommend" />

    <AuthenticatedLayout>
        <div class="w-auto bg-white rounded-lg p-4 mt-6 mx-4 shadow-md">
            <div class=" ">
                <h1 class="mb-7">추천 추가하기</h1>

                <form @submit.prevent="submit" method="post">

                    <div class="my-2">
                        <InputLabel for="name" value="추천하는 것 (10자이내)" />
                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autocomplete="name"
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="my-2">
                        <InputLabel for="description" value="추천하는 이유" />
                        <TextAreaInput
                            id="description"
                            row="10"
                            v-model="form.description"
                            class="w-full h-[230px] mt-1"
                            required
                        ></TextAreaInput>
                        <InputError
                            class="mt-2"
                            :message="form.errors.description"
                        />
                    </div>

                    <div class="my-2">
                        <InputLabel
                            for="categoryLists"
                            value="카테고리 (5개까지)"
                        />
                        <TextTagInput
                            id="categoryLists"
                            :tagLists="form.categoryLists"
                            class="mt-1 block w-full"
                        ></TextTagInput>
                        <InputError
                            class="mt-2"
                            :message="form.errors.categoryLists"
                        />
                    </div>

                    <div class="my-2">
                        <InputLabel for="url" value="URL(구매링크 또는 홍보링크)" />
                        <TextInput
                            id="url"
                            type="url"
                            class="mt-1 block w-full"
                            v-model="form.url"
                            autocomplete="url"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.url" />
                    </div>

                    <PrimaryButton
                        class="mt-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        저장하기
                    </PrimaryButton>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
