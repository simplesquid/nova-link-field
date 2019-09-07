<!--
  - Copyright (c) 2019 Matthew Poulter. All rights reserved.
  -->

<template>
    <div class="flex border-b border-40">
        <div class="w-1/4 py-4">
            <slot>
                <h4 class="font-normal text-80">
                    {{ field.name }}
                </h4>
            </slot>
        </div>
        <div class="w-3/4 py-4">
            <slot name="value">
                <p class="text-90" v-if="field.value">
                    <a :class="field.classes ? field.classes : defaultClasses" :href="field.href"
                       :target="field.blank ? field.blank : '_self'">
                        {{ field.text ? field.text : field.value }}
                    </a>
                </p>
                <p v-else>&mdash;</p>
            </slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],

        data: () => ({
            defaultClasses: [
                'no-underline',
                'dim',
                'text-primary',
                'font-bold'
            ]
        })
    }
</script>
