<template>
    <form class="p-3" @submit="formSubmit" onsubmit="return false" enctype="multipart/form-data">
        <input type="file" class="p-2 form-control" v-on:change="onChange">
        <button class="my-3 btn btn-primary btn-block">Upload</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            file: ''
        };
    },
    methods: {
        onChange(e) {
            this.file = e.target.files[0];
        },

        async formSubmit() {

            if (this.file['name'].split('.').pop() != 'xlsx') {
                alert('Допустимые форматы файлов: .xlsx, .xls')
                return
            }
            let data = new FormData();
            data.append('file', this.file);
            await axios.post('/api/upload-file', data)
        }
    }
}
</script>