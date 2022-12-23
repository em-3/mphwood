<script setup>

import { ref, computed } from "vue"
import ProductCard from "@/components/estimator/ProductCard.vue"
import ProductEstimateListItem from "@/components/estimator/ProductEstimateListItem.vue"

import productData from "@/productsList.json"

//Sort the array
productData.sort((a, b) => {
    //If A is in stock but B is not, sort it before B
    if(a.inStock && !b.inStock) {
        return -1
    }

    //If B is in stock but A is not, sort it before A
    if(!a.inStock && b.inStock) {
        return 1
    }

    //Otherwise sort by name
    let nameA = a.name.toUpperCase(); //Ignore upper and lowercase
    let nameB = b.name.toUpperCase(); //Ignore upper and lowercase
    if (nameA < nameB) {
        return -1;
    }
    if (nameA > nameB) {
        return 1;
    }

    return 0;
})

const estimateOpened = ref(false)
const products = ref(productData)
const selectedProducts = ref({})

const total = computed(() => {
    //For when someone (probably me) forgets how this works:
    //If there are no keys in selectedProducts, return 0. Otherwise, map the values of those keys to their estimates (produce an array containing only the estimate values), then sum them using reduce() and return that
    return hasProductsInEstimate.value ? Object.values(selectedProducts.value).map(product => product.estimate).reduce((currentTotal, estimate) => currentTotal + estimate) : 0
})

const hasProductsInEstimate = computed(() => {
    return Object.keys(selectedProducts.value).length > 0
})

function addToEstimate(id) {
    if(selectedProducts.value[id]) {
        return
    }

    //Lookup the product
    let selectedProduct = products.value.find((product) => product.id == id)

    if(!selectedProduct) {
        return
    }

    //Add it to the estimate
    selectedProducts.value[id] = {
        name: selectedProduct.name,
        price: selectedProduct.price,
        estimate: selectedProduct.price
    }

    //Open the estimate to show the user their new total
    estimateOpened.value = true
}

function removeFromEstimate(id) {
    if(selectedProducts.value[id]) {
        delete selectedProducts.value[id]
    }
}

</script>

<template>
    <div id="priceEstimator">
        <div class="productsContainer">
            <div>
                <ProductCard v-for="product in products" :key="product.id" :id="product.id" :name="product.name" :description="product.description" :in-stock="product.inStock" :stock="product.stock" :price="product.price" @add-to-estimate="addToEstimate" />
            </div>
        </div>
        <div :class="{ estimate: true, opened: estimateOpened }">
            <div class="mobileToggle" @click="estimateOpened = !estimateOpened"><span></span></div>
            <h2>Your Estimate</h2>
            <div class="productsList" v-if="hasProductsInEstimate">
                <ProductEstimateListItem v-for="(product, id) in selectedProducts" :key="id" :id="id" :name="product.name" :price="product.price" v-model="product.estimate" @remove-from-estimate="removeFromEstimate"></ProductEstimateListItem>
            </div>
            <div class="productsList empty" v-else>
                <span class="emptyEstimateIcon material-symbols-outlined">production_quantity_limits</span>
                <h3>No items in estimate!</h3>
                <p>Click "Add to Estimate" on any product to add it to your estimate!</p>
            </div>
            <div class="total">
                <h3>Total: ${{ total }}</h3>
                <p><a href="tel:503-449-2068" class="buttonLink">Questions or ready to order? Give us a call!</a></p>
                <p class="finePrint">These numbers are provided as an estimate, and may not accurately reflect current pricing. If you have questions or concerns, please call us.</p>
            </div>
        </div>
    </div>
</template>

<style>
    #priceEstimator {
        display: flex;
        align-items: flex-start;
        justify-content: space-around;
        gap: 10pt;

        /* Custom centering */
        max-width: 1700px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    #priceEstimator .productsContainer {
        width: 75%;
    }

    #priceEstimator .productsContainer>div {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 10pt;
    }

    #priceEstimator .estimate {
        position: sticky;
        top: 25px;
        bottom: 25px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10pt;
        width: 25%;
        min-height: 50vh;
        max-height: 75vh;
        overflow: hidden;
        background-color: var(--secondary-background-color);
        border-radius: 25px;
        padding: 25px;
    }

    #priceEstimator h2, h3 {
        margin: 0;
    }

    #priceEstimator .estimate .productsList {
        overflow-x: hidden;
        overflow-y: auto;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    #priceEstimator .estimate .productsList.empty {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #priceEstimator .estimate .productsList .emptyEstimateIcon {
        font-size: 50px;
    }

    #priceEstimator .estimate .total .finePrint {
        font-size: 0.75em;
    }

    #priceEstimator .estimate .mobileToggle {
        display: none;
        position: absolute;
        top: 0px;
        right: 0px;
        width: 100%;
        height: 50px;
        cursor: pointer;
    }

    #priceEstimator .estimate .mobileToggle>span {
        position: absolute;
        top: 35px;
        right: 35px;
        display: inline-block;
        width: 10px;
        height: 10px;
        border-top: 3px solid var(--primary-color);
        border-left: 3px solid var(--primary-color);
        transform: rotate(45deg);
        transition: 0.2s transform ease-in-out;
    }

    @media (min-width: 1400px) {
        #priceEstimator .productsContainer>div {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }

    @media (max-width: 1024px) {
        #priceEstimator {
            flex-direction: column;
            align-items: center;
        }

        #priceEstimator .productsContainer {
            width: 100%;
        }

        #priceEstimator .productsContainer>div {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        #priceEstimator .estimate {
            position: fixed;
            top: unset;
            bottom: 0px;
            width: 95%;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            min-height: 0;
            max-height: 130px;
            transition: 0.5s ease-in-out;
        }

        #priceEstimator .estimate.opened {
            max-height: 98vh;
        }

        #priceEstimator .estimate .mobileToggle {
            display: flex;
        }

        #priceEstimator .estimate.opened .mobileToggle>span {
            transform: rotate(-135deg);
        }

        #priceEstimator .estimate .total {
            position: static;
            padding: 0;
        }
    }

    @media (max-width: 750px) {
        #priceEstimator .productsContainer>div {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
    }
</style>