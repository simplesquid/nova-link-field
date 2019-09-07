/*
 * Copyright (c) 2019 Matthew Poulter. All rights reserved.
 */

Nova.booting((Vue, router, store) => {
    Vue.component('icon-external-link', require('./components/ExternalLink'));
    Vue.component('index-link-field', require('./components/IndexField'));
    Vue.component('detail-link-field', require('./components/DetailField'));
    Vue.component('form-link-field', require('./components/FormField'))
});
