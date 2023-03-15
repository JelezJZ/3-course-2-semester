<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div id="app" class="m-2">
                        <button class="btn btn-primary" @click="showModal">
                            Update records
                        </button>
                        <modal v-show="isModalVisible" @close="closeModal" />
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ExcelViewer />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import ExcelUploader from '@/Components/ExcelUploader.vue';
import ExcelViewer from '@/Components/ExcelViewer.vue';
import modal from '@/Components/ModalComponent.vue';
import vueJsonCompare from 'vue-json-compare';

export default {
    components: {
        ExcelUploader,
        ExcelViewer,
        modal,
        vueJsonCompare
    },
    data() {
        return {
            isModalVisible: false,
        };
    },
    methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    }
}
</script>

