<template>
    <div>
        <h1>{{title}}</h1>
        <a href="/vue3">Back to index</a>
        <a href="/vue3/orders/create">| Create a order</a>
        <table>
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Price</th>
                <th>Acquisition Date</th>
                <th>Customer ID</th>
                <th>Employee ID</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order in orders">
                <td>{{ order.id }}</td>
                <td>{{ order.price }} €</td>
                <td>{{ order.acquisition_date }}</td>
                <td>{{ order.customer_id }}</td>
                <td>{{ order.employee_id }}</td>
                <td>{{ order.description }}</td>
                <td>
                    <button type="submit" @click="showElement(order.id)">Show</button>
                    <button type="submit" @click="editElement(order.id)">Edit</button>
                    <button type="submit" @click="deleteElement(order.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Order Section',
            orders:[]
        }
    },
    methods: {
        showElement(id) {
            location.href = "/vue3/orders/"+id;
        },
        editElement(id) {
            location.href = "/vue3/orders/"+id+"/edit";
        },
        deleteElement(id) {
            axios.delete('http://127.0.0.1/api/vue3/orders/'+id).then(location.reload())
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    mounted() {
        console.log('Component order mounted')
        axios.get('http://127.0.0.1/api/vue3/orders').then(response => this.orders = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
