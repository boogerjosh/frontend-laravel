<template>
    <div class="container mb-5 border-l border-r border-gray-300">
        <div class="flex items-center mb-3 ml-2">
            <p class="mr-3 text-[#06C0C0]">Cost Detail</p>
            <i class="fa-solid fa-chevron-down text-[#06C0C0]"></i>
        </div>
        <table class="w-full border-collapse">
            <thead class="bg-gray-200 text-sm">
                <tr>
                <th class="py-2 px-3 font-normal text-left w-[16%]">Description</th>
                <th class="py-2 px-3 font-normal text-left w-[8%]">Qty</th>
                <th class="py-2 px-3 font-normal text-left w-[10%]">UOM</th>
                <th class="py-2 px-3 font-normal text-left w-[11%]">Unit Price</th>
                <th class="py-2 px-3 font-normal text-left">Discount(%)</th>
                <th class="py-2 px-3 font-normal text-left">VAT(%)</th>
                <th class="py-2 px-3 font-normal text-left w-[3%]"></th>
                <th class="py-2 font-normal text-left w-[10%]">Currency</th>
                <th class="py-2 px-3 font-normal text-left w-[10%]">VAT Amount</th>
                <th class="py-2 px-3 font-normal text-left w-[9%]">Sub Total</th>
                <th class="py-2 px-3 font-normal text-left">Total</th>
                <th class="py-2 px-3 font-normal text-left w-[19%]">Charge To</th>
                <th class="py-2 px-3 font-normal text-left"></th>
                </tr>
            </thead>
            <tbody class="text-sm border-b border-b-gray-300">
                <tr class="border-b border-b-gray-300">
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        label="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="description" 
                        placeholder="Description" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        label="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="qty" 
                        placeholder="Qty" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <SelectInput
                      :options="uomOptions"
                      label=""
                      width=""
                      name="UOM"
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        label="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="unitPrice" 
                        placeholder="Unit Price" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        label="" 
                        type="number" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="discount" 
                        placeholder="" 
                        value="0" 
                    />
                </td>
                <td class="py-3 pl-3">
                    <InputComponent 
                        label="" 
                        type="number" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="vat" 
                        placeholder="" 
                        value="0" 
                    />
                </td>
                <td class="text-center">
                    <i class="fa-solid fa-right-long text-center text-[#B8C0C6]"></i>
                </td>
                <td class="py-3 pr-1">
                    <SelectInput
                      :options="currencyOptions"
                      label=""
                      width=""
                      name="currency"
                    />
                </td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">
                    <SelectInput
                        :options="chargeToOptions"
                        label=""
                        width=""
                        name="chargeTo"
                        selectedText="Select an option"
                    />
                </td>
                <td class="py-3 pl-3 pr-3">
                    <button class="h-11 w-11 bg-[#E5E5E5] rounded">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </td>
                </tr>
                <tr class="border-b border-b-gray-300">
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        textLabel="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="description" 
                        placeholder="Description" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        textLabel="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="qty" 
                        placeholder="Qty" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <SelectInput
                      :options="uomOptions"
                      label=""
                      width=""
                      name="UOM"
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        textLabel="" 
                        type="text" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="unitPrice" 
                        placeholder="Unit Price" 
                        value="" 
                    />
                </td>
                <td class="py-3 pl-3 pr-1">
                    <InputComponent 
                        textLabel="" 
                        type="number" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="discount" 
                        placeholder="" 
                        value="0" 
                    />
                </td>
                <td class="py-3 pl-3">
                    <InputComponent 
                        textLabel="" 
                        type="number" 
                        inputClasses="w-full px-3 py-3 bg-gray-100 rounded" 
                        name="vat" 
                        placeholder="" 
                        value="0" 
                    />
                </td>
                <td class="text-center">
                    <i class="fa-solid fa-right-long text-center text-[#B8C0C6]"></i>
                </td>
                <td class="py-3 pr-1">
                    <SelectInput
                      :options="currencyOptions"
                      label=""
                      width=""
                      name="currency"
                    />
                </td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">0.00</td>
                <td class="py-3 pl-3 pr-1">
                    <SelectInput
                        :options="chargeToOptions"
                        label=""
                        width=""
                        name="chargeTo"
                        selectedText="Select an option"
                    />
                </td>
                <td class="py-3 pl-3 pr-3">
                    <button class="h-11 w-11 bg-[#E5E5E5] rounded">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </td>
                </tr>
                <tr>
                    <td class="pl-3" colspan="6" rowspan="2">Exchange Rate 1 USD = <input type="number" class="text-right bg-gray-100 w-[85px] py-1 rounded" value="3.675"> AED</td>
                    <td class="pl-3 pr-3"></td>
                    <td class="pl-3 border-b-4 border-b-white bg-[#F5F6F8] font-semibold">AED in Total</td>
                    <td class="pl-3 pr-1 border-b-4 border-b-white  bg-[#F5F6F8] font-semibold">0.00</td>
                    <td class="pl-3 pr-1 border-b-4 border-b-white  bg-[#F5F6F8] font-semibold">0.00</td>
                    <td class="pl-3 pr-1 border-b-4 border-b-white  bg-[#F5F6F8] font-semibold">0.00</td>
                    <td></td>
                    <td class="py-3 pl-3 pr-3" rowspan="2">
                        <button class="h-11 w-11 bg-[#00C0BF] rounded text-white">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="pl-3"></td>
                    <td class="pl-3 bg-[#F5F6F8] font-semibold">USD in Total</td>
                    <td class="pl-3 pr-1 bg-[#F5F6F8] font-semibold">0.00</td>
                    <td class="pl-3 pr-1 bg-[#F5F6F8] font-semibold">0.00</td>
                    <td class="pl-3 pr-1 bg-[#F5F6F8] font-semibold">0.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import '@fortawesome/fontawesome-free/css/all.css';
    import { mapGetters } from 'vuex';
    import InputComponent from './InputComponent.vue';
    import SelectInput from './SelectInput.vue';

    export default {
        name: 'ComponentB',
        components: {
        'InputComponent': InputComponent,
        'SelectInput': SelectInput,
        },
        computed: {
            ...mapGetters([
                'uomOptions',
                'currencyOptions',
                'chargeToOptions'
            ])
        },
        mounted() {
            this.$store.dispatch('fetchUomOptions');
            this.$store.dispatch('fetchCurrencyOptions');
            this.$store.dispatch('fetchChargeToOptions');
        }
    }
</script>