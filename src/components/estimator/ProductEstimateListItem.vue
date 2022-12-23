<script setup>

import { ref, computed } from "vue"

const props = defineProps(["id", "name", "price", "modelValue"])

const emit = defineEmits(["removeFromEstimate", "update:modelValue"])

const qty = ref(1)

const footWord = computed(() => {
    return qty.value > 1 ? "Feet" : "Foot"
})

const estimate = computed(() => {
    return qty.value * props.price
})

function updateQTY(event) {
    qty.value = event.target.value

    emit('update:modelValue', estimate.value)
}

</script>

<template>
    <div class="product">
        <h4>{{ name }}</h4>
        <div class="price">
            <p>
                <input min="1" max="99" :id="'qty-' + props.id" type="number" :value="qty" @input="updateQTY" />
                <label :for="'qty-' + props.id">Board {{ footWord }}</label>
            </p>
            <p>${{ estimate }}</p>
        </div>
        <p><a href="javascript:void(0);" @click="$emit('removeFromEstimate', props.id)">Remove from Estimate</a></p>
    </div>
</template>

<style>
    .product h4 {
        margin-bottom: 0;
    }

    .product p {
        margin: 0;
    }

    .product .price {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 20px 0;
    }

    .product .price input {
        display: inline-block;
        padding: 12px;
        margin-right: 5px;
        font: inherit;
        border: none;
        border-bottom: 2px solid var(--primary-color);
        color: var(--primary-color);
        background-color: var(--secondary-background-color);
        text-align: right;
        border-radius: 0;
    }

    .product .price input:focus {
        outline: none;
        border-bottom-color: var(--secondary-color);
    }
</style>