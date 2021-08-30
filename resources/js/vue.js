Vue.component('dish', {
    props: ['dish'],
    template: `
        <div>
            <div class="space">
                <div class="flout">
                    <div class="image">
                        <img :src="dish.image" :alt="dish.image">
                    </div>
                </div>
            </div>
            <p class="desc">{{ dish.name }}</p>
            <p class="price">$ {{ dish.price }}</p>
            <p class="quantity">{{ dish.quantity }} Bowels available</p>
        </div>
    `
})
Vue.component('order-item', {
    props: ['dish'],
    template: `
        <div>
            <div class="row m-0 align-items-center">
                <div class="col-6 d-flex p-0">
                    <div>
                        <img v-bind:src="dish['image']" alt="">
                    </div>
                    <div class="mx-2">
                        <p class="m-0 name">{{ dish['name'] }} </p>
                        <p class="price">{{ dish['price'] }} $</p>
                    </div>
                </div>
                <div class="col-3 pr-0 text-center">
                    <input type="text" v-model="dish['quantity']" @keypress="isNumber($event)">
                </div>
                <div class="col-3 text-center">
                    <p class="sub-price">$ {{ countSubTotal(dish['price'], dish['quantity']) }}</p>
                </div>
                <div>
                </div>
            </div>
            <div class="row m-0 align-items-center pt-2">
                <div class="col-9 p-0">
                    <input type="text" class="text-justify" placeholder="Please, just a little bit spicy only.">
                </div>
                <div class="col-3 text-center">
                    <button type="button" class="delete-item" @click="deleteDish(dish['id'])">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `,
    methods: {
        deleteDish: function (disheId) {
            this.$emit("delete-dish", disheId)
        },
        countSubTotal: function (price, quantity) {
            return (price * quantity).toFixed(2);
        },
        isNumber: function (evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                evt.preventDefault();;
            } else {
                return true;
            }
        }
    }
})
new Vue({
    // TODO: make a teplates
    // TODO: make handle any errors
    el: '#content',
    data() {
        return {
            dishes: {},
            selectedDishes: [],
            total: 0,
            search: '',
            alertTimer: null,
            apiUrl: window.location.origin + '/api/data'
        }
    },
    mounted() {
        axios
            .get(this.apiUrl)
            .then(response => (this.dishes = response.data.dishes))
            // TODO: print the error
            .catch(error => console.log(error))
    },
    computed: {
        filteredDishes: function () {
            return Object.values(this.dishes).filter((dish) => dish.name.toLowerCase().includes(this.search.toLowerCase()))
        }
    },
    watch: {
        selectedDishes: {
            handler: function () {
                let subTotal = 0;
                this.selectedDishes.forEach((dish) => subTotal += parseFloat(dish.price * dish.quantity));
                this.total = subTotal.toFixed(2);
            },
            deep: true
        }
    },
    methods: {
        addDish: function (dish) {
            const hasBeenAdded = this.selectedDishes.find((dishelooped) => dishelooped['id'] == dish.id);
            if (hasBeenAdded) {
                // TODO: show a msg appear that this dish has already been added
                this.showAlert('The dish already added to the order list', 'failed', 'pop-out');
            } else {
                this.selectedDishes.push(dish);
                this.showAlert('The dish has been added to the order list', 'success', 'pop-up');
            }
        },
        deleteDish: function (dishId) {
            this.selectedDishes = this.selectedDishes.filter((dish) => dish['id'] != dishId);
            this.showAlert('The dish has been removed from the order list', 'success', 'pop-out');
        },
        submitOrder: function () {
            document.querySelector('.btn-submit ~ .loader').style.display = "flex"
            setTimeout(() => {
                this.selectedDishes = [];
                document.querySelector('.btn-submit ~ .loader').style.display = "none"
                var myModal = new bootstrap.Modal(document.getElementById("orderSubmissionAlert"), {});
                myModal.show();
                document.querySelector('#orders').classList.add('hidden'); // in small screen close the order list after submission
            }, 1000)
        },
        openOrderList: function (open) {
            if (open)
                document.querySelector('#orders').classList.remove('hidden');
            else
                document.querySelector('#orders').classList.add('hidden');
        },
        showAlert: function (msg, status, audio) {
            const alertBox = document.querySelector('#fixed-alert-box');
            alertBox.querySelector('p').innerHTML = msg;
            alertBox.className = '';
            alertBox.classList.add(status);
            
            (new Audio(`../audio/${audio}.mp3`)).play();

            clearTimeout(this.alertTimer);
            this.alertTimer = setTimeout(() => {
                alertBox.className = 'hidden';
            }, 3000)
        }
    }
})