Nova.booting((Vue, router) => {
    Vue.component('index-audio', require('./components/IndexField'));
    Vue.component('detail-audio', require('./components/DetailField'));
    Vue.component('form-audio', require('./components/FormField'));
})
