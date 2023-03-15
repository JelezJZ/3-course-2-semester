<template>
    <table class="table table-hover table-responsive" v-if="logs.length > 0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Тип</th>
                <th scope="col">Время</th>
            </tr>
        </thead>
        <tbody>
            <tr :key="logs" v-for="(item, index) in logs">
                <td>{{ item.id }}</td>
                <td>{{ item.type }}</td>
                <td>{{ item.created_at }}</td>
            </tr>
        </tbody>
    </table>

    <vueJsonCompare :key="{ oldData, newData }" :oldData="oldData" :newData="newData"></vueJsonCompare>
</template>

<script>
import vueJsonCompare from 'vue-json-compare'

export default {
    components: {
        vueJsonCompare
    },
    data() {
        return {
            logs: [],
            oldData: {
            },
            newData: {
            }
        }
    },
    mounted() {
        this.loadLog()
        this.loadJournal()
        this.loadOldJournal()
    },
    methods: {
        async loadLog() {
            await axios.get("api/log/")
            .then(resp => {
                this.logs = resp.data.data
            })
        },
        async loadJournal() {
            await axios.get("/api/journal")
            .then(resp => {
                this.newData = resp.data.data
            })
        },
        async loadOldJournal() {
            await axios.get("/api/journal/old")
            .then(resp => {
                this.oldData = resp.data.data
            })
        },
    }
}
</script>

<style>
.scroll-container {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    overflow: scroll;
    height: 500px;
}

.scroll-container .table {
    min-width: 2000px;
    white-space: nowrap;

}

td,
th {
    vertical-align: middle;
    text-align: center;
}
</style>