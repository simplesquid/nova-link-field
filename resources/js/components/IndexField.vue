<!--
  - Copyright (c) 2019 Matthew Poulter. All rights reserved.
  -->

<template>
    <span class="link-field">
        <a :class="field.classes ? field.classes : defaultClasses"
           :href="field.href"
           :target="field.blank ? field.blank : '_self'">
            <span v-if="field.icon"><icon :type="field.icon" height="24" view-box="0 0 24 24" width="24"/></span>
            <span v-else>{{ field.text ? field.text : field.value }}</span>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['resourceName', 'field'],

        data: () => ({
            defaultClasses: [
                'no-underline',
                'dim',
                'text-primary',
                'font-bold',
            ],
        })
    }
</script>
