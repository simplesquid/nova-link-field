<!--
  - Copyright (c) 2019 Matthew Poulter. All rights reserved.
  -->

<template>
    <default-field :errors="errors" :field="field">
        <template slot="field">
            <input :class="errorClasses" :id="field.name"
                   :placeholder="field.name"
                   class="w-full form-control form-input form-input-bordered"
                   type="text"
                   v-model="value"
            />
        </template>
    </default-field>
</template>

<script>
    import {FormField, HandlesValidationErrors} from 'laravel-nova'

    export default {
        mixins: [FormField, HandlesValidationErrors],

        props: ['resourceName', 'resourceId', 'field'],

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                this.value = this.field.value || ''
            },

            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
                formData.append(this.field.attribute, this.value || '')
            },

            /**
             * Update the field's internal value.
             */
            handleChange(value) {
                this.value = value
            },
        },
    }
</script>
