<template>
    <div class="d-flex" v-if="journals.length > 10">
        <button @click="$event => viewJourn = Array.from(journals)" class="btn btn-primary mx-2">All</button>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item m-1" v-for="n in Math.ceil(journals.length / 10)">
                    <a class="page-link" @click="$event => viewJourn = journals.slice(n * 10 - 10, n * 10)" href="#">{{ n }}</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="scroll-container" v-if="journals.length > 0">
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Курс</th>
                    <th scope="col">Группа</th>
                    <th scope="col">Название учебной дисциплины</th>
                    <th scope="col">Лекции</th>
                    <th scope="col">Практические (сем.) занятия</th>
                    <th scope="col">Лабораторные занятия</th>
                    <th scope="col">Модульный контроль</th>
                    <th scope="col">Семестр</th>
                    <th scope="col">Экзамен</th>
                    <th scope="col">Зачеты</th>
                    <th scope="col">Экзамены</th>
                    <th scope="col">Курсовые работы</th>
                    <th scope="col">ВКР бакалавов</th>
                    <th scope="col">ВКР специалистов</th>
                    <th scope="col">ВКР магистров</th>
                    <th scope="col">Руководство практикой</th>
                    <th scope="col">Госэкзамены</th>
                    <th scope="col">Рецензирование ВКР</th>
                    <th scope="col">Защита ВКР</th>
                    <th scope="col">Руководство аспирантами</th>
                    <th scope="col">Другие виды учеб. нагрузки</th>
                </tr>
            </thead>
            <tbody>
                <tr :key="viewJourn" v-for="(item, index) in viewJourn">
                    <td>
                        <button @click="$event => removeRecord($event)" class="btn btn-danger">X</button>
                    </td>
                    <td>{{ item.id }}</td>
                    <td>{{ item.date }}</td>
                    <td>{{ item.cource }}</td>
                    <td>{{ item.idSubject }}</td>
                    <td>{{ item.idGroup }}</td>
                    <td>{{ item.lecture }}</td>
                    <td>{{ item.practice }}</td>
                    <td>{{ item.lab }}</td>
                    <td>{{ item.module }}</td>
                    <td>{{ item.consulSemester }}</td>
                    <td>{{ item.consulExam }}</td>
                    <td>{{ item.test }}</td>
                    <td>{{ item.exam }}</td>
                    <td>{{ item.coursework }}</td>
                    <td>{{ item.wrcBachelor }}</td>
                    <td>{{ item.wrcSpecialist }}</td>
                    <td>{{ item.wrcMagister }}</td>
                    <td>{{ item.guidePractice }}</td>
                    <td>{{ item.gosExam }}</td>
                    <td>{{ item.wrcReview }}</td>
                    <td>{{ item.wrcDef }}</td>
                    <td>{{ item.guideRraduate }}</td>
                    <td>{{ item.another }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            journals: [],
            viewJourn: []
        }
    },
    mounted() {
        this.loadExcel()
    },
    methods: {
        async loadExcel() {
            await axios.get("/api/journal").then(resp => {
                this.journals = resp.data.data
                this.viewJourn = this.journals.slice(0, 10)
            })
        },
        async removeRecord(event) {
            let rowElem = event.target.parentNode.parentNode.cells
            await axios.delete('api/journal/' + rowElem[1].innerText)
            this.loadExcel()
        }
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
    white-space:nowrap;

}

td, th {
     vertical-align: middle;
     text-align: center; 
}

</style>