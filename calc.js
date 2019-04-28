$(document).ready(function(){
// =============== calc ===============
// Определяем собственный фильтр валют "currency".
var demo = new Vue({
el: '#price',
data: {
searchString: "",

    services: [
                {
            name: 'Диагностика ПК',
            price: 1000,
            active: false
        },
        {
            name: 'Чистка компонентов ПК',
            price:  500,
            active: false
        },
        {
            name: 'Ремонт ПК',
            price: 1000,
            active: false
        },
        {
            name: 'Оптимизация ПК',
            price: 500,
            active: false
        },
        {
            name: 'Восстановление данных с носителей',
            price: 500,
            active: false
        },
        {
            name: 'Удаление вирусного ПО',
            price: 200,
            active: false
        },
        {
            name: 'Оптимизация игр',
            price: 200,
            active: false
        },
        {
            name: 'Сборка ПК на заказ',
            price: 1000,
            active: false
        },
        ],

    Discount:[
        {
            name:'Скидка',
            active:false,
            discount2:5,
            promo:"MISHA"
        }
    ]


}, 
methods: {
    countDiscoint: function(){
      if(this.searchString==this.Discount[0].promo){
            this.Discount[0].active = true;}   
    },
    toggleActive: function(s){
        s.active = !s.active;
    },
    toggleDiscount:function(s){
        s.active = !s.active;
    },

    total: function(){

        var total = 0;

        this.services.forEach(function(s){
            if (s.active){
                total+= s.price;
            }
        });

      if (this.Discount[0].active){
      total = total/100*(100-this.Discount[0].discount2);
       }
       return total;
    }
}
});
});