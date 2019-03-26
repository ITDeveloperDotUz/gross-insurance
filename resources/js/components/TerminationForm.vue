<template>
    <div id="vue-component" class="form_content">
        <div class="card-header"><h2 class=" header">Расторжение</h2></div>
        <div class="card-body">
            <div id="contract" class="row labels form-inline">
                <div class="col-md-4">Договор страхоZвания №</div>
                <div class="col-md-3">
                    <input @blur="getTmp" required="required" placeholder="1101/21/0001" v-model="contract" name="contract" class="form-control" type="text">
                    <input v-model="tmpl" name="tmpl" type="hidden">
                    <input v-model="contract_type" name="contract_type" type="hidden">
                </div>
                &nbsp;&nbsp;&nbsp;От&nbsp;&nbsp;&nbsp;
                <div class="col-md-3">
                    <input @blur="typeDate" required="required" placeholder="" v-model="contract_date" class="form-control" type="date">
                    <input v-model="contract_date1" name="contract_date" type="hidden">
                </div>
                <hr>
            </div>


            <div id="police" class="row labels">
                <div class="col-md-4">Полис №</div>
                <div class="col-md-3">
                    <input v-model="police" required="required" name="police" placeholder="0123456" class="form-control" type="number">
                </div>
            </div>
            <div id="ins_period" class="row labels">
                <div class="col-md-4">Период договора страхования</div>
                <div class="col-md-8 form-inline">
                    C
                    <hr>
                    <input @blur="typeDate" required="required" v-model="ins_per_start" class="form-control" type="date">
                    <input v-model="ins_per_start1" name="ins_period_start" type="hidden">
                    <hr>по
                    <hr>
                    <input required="required" @blur="insPerDiff" v-model="ins_per_end" class="form-control" type="date">
                    <input v-model="ins_per_end1" name="ins_period_end" type="hidden">
                    <br>
                    <hr><input readonly="readonly" v-model="ins_per_diff" name="ins_per_diff" class="form-control" type="number">&nbsp;&nbsp;дней
                    <hr>
                </div>
            </div>
            <div id="term_date" class="row labels">
                <div class="col-md-4">Дата расторжения</div>
                <div class="col-md-3">
                    <input required="required" @blur="insPerCalc()" v-model="term_date"  class="form-control" type="date">
                    <input v-model="term_date1" name="term_date" type="hidden">
                </div>
            </div>
            <div id="term_cause" class="row labels">
                <div class="col-md-4">Причина расторжения</div>
                <div class="col"><input placeholder="В связи с..." required="required" v-model="term_cause" name="term_cause" class="form-control" type="text"></div>
            </div>
            <div id="calc_type" class="row labels">
                <div class="col-md-4">Возврат/Взаиморасчет</div>
                <div class="col-md-3">
                    <select required="required" v-model="calc_type" class="form-control" name="calc_type">
                        <option value="1" selected>Возврат</option>
                        <option value="0">Взаиморасчет</option>
                    </select>
                </div>
            </div>
            <hr>,
            <div id="paid_prem" class="row labels">
                <div class="col-md-4">Поступившая страховая премия</div>
                <div class="col-md form-inline">
                    <input required="required" @change="calcPrem" @blur="prepare" v-model="paid_prem" class="form-control" type="number">&nbsp;&nbsp; Сум
                    <input v-model="paid_prem1" name="paid_prem" type="hidden">
                </div>
            </div>
            <div id="expenses" class="row labels">
                <div class="col-md-4">Расходы на ведения дела</div>
                <div class="col-md form-inline">
                    <input required="required" @change="calcPrem" @blur="prepare" v-model="expenses_percent" name="expenses_percent" class="form-control" type="number">&nbsp;&nbsp; %
                </div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="expenses_amount" class="form-control" type="number">&nbsp;&nbsp; сум
                    <input v-model="expenses_amount1" name="expenses_amount" type="hidden">
                </div>
            </div>
            <div id="base_prem" class="row labels">
                <div class="col-md-4">Базовая страховая премия</div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="base_prem" class="form-control" type="number">&nbsp;&nbsp; сум
                    <input v-model="base_prem1" name="base_prem" type="hidden">
                </div>
                <div class="col-md form-inline">
                    за день:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input readonly="readonly" v-model="base_prem_a_day" class="form-control" type="number">&nbsp;&nbsp; сум
                    <input v-model="base_prem_a_day1" name="base_prem_a_day" type="hidden">
                </div>
            </div>
            <div id="exp_ins_period" class="row labels">
                <div class="col-md-4">Истекшая период страхования</div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="exp_ins_period" name="exp_ins_period" class="form-control" type="number">&nbsp;&nbsp; дней
                </div>
                <div id="rem_ins_period" class="col-md form-inline">
                    Осталось:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input readonly="readonly" v-model="rem_ins_period" name="rem_ins_period" class="form-control" type="number">&nbsp;&nbsp; дней
                </div>
            </div>
            <div id="used_ins_prem" class="row labels">
                <div class="col-md-4">Использованная часть страховой премии</div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="used_ins_prem"  class="form-control" type="number">&nbsp;&nbsp; Сум
                    <input v-model="used_ins_prem1" name="used_ins_prem" type="hidden">
                </div>
            </div>
            <div id="unused_ins_prem" class="row labels">
                <div class="col-md-4">Неиспользованная часть страховой премии</div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="unused_ins_prem" class="form-control" type="number">&nbsp;&nbsp; Сум
                    <input v-model="unused_ins_prem1" name="unused_ins_prem" type="hidden">
                </div>
            </div>
            <div id="ref_amount" class="row labels">
                <div class="col-md-4">Сумма Возврата</div>
                <div class="col-md form-inline">
                    <input readonly="readonly" v-model="ref_amount" class="form-control" type="number">&nbsp;&nbsp; Сум
                    <input v-model="ref_amount1" name="ref_amount" type="hidden">
                </div>
            </div>
            <hr>
            <div id="" class="row labels">
                <div id="insurar" class="col-md-4">
                    <label for="insurar">Страховщик ООО "GROSS INSURANCE"</label><br>
                    <input name="insurar" placeholder="Ангренский Филиал" class="form-control" type="text">
                    <textarea name="insurar_reqs" class="form-control" id="insurar_reqs" cols="30" rows="10"></textarea>
                    <input class="form-control" type="text" placeholder="Хайдаров У. А." name="insurar_sign">
                </div>
                <div id="insurant" class="col-md-4">
                    <label for="insurant">Страхователь</label>
                    <input name="insurant" class="form-control" type="text">
                    <textarea name="insurant_reqs" class="form-control" id="insurant_reqs" cols="30" rows="10"></textarea>
                    <input class="form-control" type="text"  name="insurant_sign">
                </div>
                <div id="beneficiary" class="col-md-4" v-if="tmpl == 3">
                    <label for="beneficiary">Выгодоприобретатель</label>
                    <input name="beneficiary" class="form-control" type="text">
                    <textarea name="beneficiary_reqs" class="form-control" id="beneficiary_reqs" cols="30" rows="10"></textarea>
                    <input class="form-control" type="text"  name="beneficiary_sign">
                </div>
                <div id="borrower" class="col-md-4" v-if="tmpl == 4">
                    <label for="borrower">Заемщик</label>
                    <input name="borrower" class="form-control" placeholder="" type="text">
                    <textarea name="borrower_reqs" class="form-control" id="borrower_reqs" cols="30" rows="10"></textarea>
                    <input class="form-control" type="text"  name="borrower_sign">
                </div>
            </div>
            <hr>
            <button  type="submit" class="btn col-12 btn-success">Получить договор</button>
        </div>
    </div>
</template>

<script>
    export default ({
        data: function (){
            return {
                contract: '',
                police: '',
                contract_date: '',
                ins_per_start: '',
                ins_per_end: '',
                ins_per_diff: 0,
                term_date: '',
                exp_ins_period: 0,
                rem_ins_period: 0,

                paid_prem: '',
                paid_prem1: '',
                expenses_percent: '',
                expenses_amount: 0,
                expenses_amount1: 0,
                base_prem: 0,
                base_prem1: 0,
                base_prem_a_day: 0,
                base_prem_a_day1: 0,
                used_ins_prem: 0,
                used_ins_prem1: 0,
                unused_ins_prem: 0,
                unused_ins_prem1: 0,
                ref_amount: 0,
                ref_amount1: 0,

                term_cause: '',
                calc_type: 0,

                ins_per_start1: '',
                ins_per_end1: '',
                contract_date1: '',
                term_date1: '',
                tmpl: 0,
                contract_type: ''
            }
        },
        computed: {},
        methods: {
            typeDate: function (){
                moment.locale('ru');
                this.ins_per_start = this.contract_date;

                this.contract_date1 = moment(this.contract_date,'YYYY-MM-DD').format('LL');
                this.ins_per_start1 = moment(this.ins_per_start,'YYYY-MM-DD').format('LL');
                this.ins_per_end1 = moment(this.ins_per_end,'YYYY-MM-DD').format('LL');
                this.term_date1 = moment(this.term_date,'YYYY-MM-DD').format('LL');
            },
            prepare: function(){
                this.paid_prem1 = this.correct(this.paid_prem);
                this.base_prem1 = this.correct(this.base_prem);
                this.expenses_amount1 = this.correct(this.expenses_amount);
                this.base_prem_a_day1 = this.correct(this.base_prem_a_day);
                this.used_ins_prem1 = this.correct(this.used_ins_prem);
                this.unused_ins_prem1 = this.correct(this.unused_ins_prem);
                this.ref_amount1 = this.correct(this.ref_amount);
            },
            insPerCalc: function (){
                if (this.term_date === 0) return 0;
                var diff = this.ins_per_diff,
                    exp = moment.duration(
                        moment(this.term_date) - moment(this.ins_per_start)
                    ).asDays() + 1,
                    rem = this.ins_per_diff - exp;
                this.exp_ins_period = exp;
                this.rem_ins_period = rem;
                this.typeDate();
            },
            insPerDiff: function (){
                if (this.ins_per_end === 0)return 0;

                this.ins_per_diff = moment.duration(
                    moment(this.ins_per_end) - moment(this.ins_per_start)
                ).asDays() + 1;
                this.typeDate();
            },
            calcPrem: function (){
                if (this.paid_prem === 0) return 0;

                var expenses_amount = ((this.paid_prem / 100) * this.expenses_percent),
                    base_prem = (this.paid_prem - expenses_amount),
                    base_prem_a_day = (base_prem / this.ins_per_diff),
                    used_ins_prem = (base_prem_a_day * this.exp_ins_period),
                    unused_ins_prem = (base_prem_a_day * this.rem_ins_period);

                this.expenses_amount = (expenses_amount).toFixed(2);
                this.base_prem = (base_prem).toFixed(2);
                this.base_prem_a_day = (base_prem_a_day).toFixed(2);
                this.used_ins_prem = (used_ins_prem).toFixed(2);
                this.unused_ins_prem = (unused_ins_prem).toFixed(2);
                this.ref_amount = this.unused_ins_prem;
            },
            getTmp: function (){
                var cCode = this.contract.split('/')[1];
                axios.get('ajaxcontract/'+cCode).then((response) => {
                    this.tmpl = response.data.tmp_prop;
                    this.contract_type = response.data.name;
                })
            },
            correct: function(number){
                return (((+number).toFixed(2)+ ' ').replace(/\B(?=(\d{3})+(?!\d))/g, ' ') + ntw(number)).replace(/\s\s+/g, ' ');
            }
        }
    })
</script>