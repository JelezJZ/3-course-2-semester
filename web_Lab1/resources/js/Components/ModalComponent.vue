<script>
export default {
    name: 'modal',
    methods: {
        close() {
            this.$emit('close');
        },
        async addNewRecord() {
            await axios.post('/api/journal', {
                p0: document.getElementById('exampleInput1').value,
                p1: document.getElementById('exampleInput2').value,
                p2: document.getElementById('exampleInput3').value,
                p3: document.getElementById('exampleInput4').value,
                p4: document.getElementById('exampleInput5').value,
                p5: document.getElementById('exampleInput6').value,
                p6: document.getElementById('exampleInput7').value,
                p7: document.getElementById('exampleInput8').value,
                p8: document.getElementById('exampleInput9').value,
                p9: document.getElementById('exampleInput10').value,
                p10: document.getElementById('exampleInput11').value,
                p11: document.getElementById('exampleInput12').value,
                p12: document.getElementById('exampleInput13').value,
                p13: document.getElementById('exampleInput14').value,
                p14: document.getElementById('exampleInput15').value,
                p15: document.getElementById('exampleInput16').value,
                p16: document.getElementById('exampleInput17').value,
                p17: document.getElementById('exampleInput18').value,
                p18: document.getElementById('exampleInput19').value,
                p19: document.getElementById('exampleInput20').value,
                p20: document.getElementById('exampleInput21').value,
                p21: document.getElementById('exampleInput22').value,
            })

            this.$emit('close');
        },
        async editRecord() {
            await axios.put('/api/journal', {
                p0: document.getElementById('exampleInput0').value,
                p1: document.getElementById('exampleInput1').value,
                p2: document.getElementById('exampleInput2').value,
                p3: document.getElementById('exampleInput3').value,
                p4: document.getElementById('exampleInput4').value,
                p5: document.getElementById('exampleInput5').value,
                p6: document.getElementById('exampleInput6').value,
                p7: document.getElementById('exampleInput7').value,
                p8: document.getElementById('exampleInput8').value,
                p9: document.getElementById('exampleInput9').value,
                p10: document.getElementById('exampleInput10').value,
                p11: document.getElementById('exampleInput11').value,
                p12: document.getElementById('exampleInput12').value,
                p13: document.getElementById('exampleInput13').value,
                p14: document.getElementById('exampleInput14').value,
                p15: document.getElementById('exampleInput15').value,
                p16: document.getElementById('exampleInput16').value,
                p17: document.getElementById('exampleInput17').value,
                p18: document.getElementById('exampleInput18').value,
                p19: document.getElementById('exampleInput19').value,
                p20: document.getElementById('exampleInput20').value,
                p21: document.getElementById('exampleInput21').value,
                p22: document.getElementById('exampleInput22').value,
            })

            this.$emit('close');
        }
    },
};
</script>
<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        Enter data

                        <button type="button" class="btn-close" @click="close" aria-label="Close modal">
                            x
                        </button>
                    </slot>
                </header>
                <section class="modal-body" id="modalDescription">
                    <slot name="body">
                        <form onsubmit="return false" class="m-2">
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput0" placeholder="ID">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput1" placeholder="Дата">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput2" placeholder="Курс">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput3" placeholder="Группа">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput4"
                                    placeholder="Название учебной дисциплины">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput5" placeholder="Лекции">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput6"
                                    placeholder="Практические (сем.) занятия">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput7" placeholder="Лабораторные занятия">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput8" placeholder="Модульный контроль">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput9" placeholder="Семестр">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput10" placeholder="Экзамен">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput11" placeholder="Зачеты">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput12" placeholder="Экзамены">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput13" placeholder="Курсовые работы">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput14" placeholder="ВКР бакалавов">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput15" placeholder="ВКР специалистов">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput16" placeholder="ВКР магистров">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput17" placeholder="Руководство практикой">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput18" placeholder="Госэкзамены">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput19" placeholder="Рецензирование ВКР">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput20" placeholder="Защита ВКР">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput21" placeholder="Руководство аспирантами">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput22"
                                    placeholder="Другие виды учеб. нагрузки">
                            </div>

                            <button @click="addNewRecord" type="submit" class="bg-primary btn btn-primary mx-2">Add</button>
                            <button @click="editRecord" type="submit" class="bg-primary btn btn-primary mx-2">Edit</button>
                        </form>
                    </slot>
                </section>
                <footer class="modal-footer">
                    <slot name="footer">
                        <button type="button" class="btn-green p-2" @click="close" aria-label="Close">
                            Close me!
                        </button>
                    </slot>
                </footer>
            </div>
        </div>
    </transition>
</template>

<style>
.modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);


    height: 500px;
    width: 800px;
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}

.modal-header,
.modal-footer {
    padding: 15px;
    display: flex;
}

.modal-header {
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    justify-content: flex-end;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
}

.btn-close {
    border: none;
    font-size: 20px;
    padding: 20px;
    cursor: pointer;
    font-weight: bold;
    color: #4AAE9B;
    background: transparent;
}

.btn-green {
    color: white;
    background: #4AAE9B;
    border: 1px solid #4AAE9B;
    border-radius: 2px;
}</style>