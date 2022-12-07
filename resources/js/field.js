Nova.booting((Vue, router) => {
    Vue.component('IndexAudio', require('./components/IndexField').default);
    Vue.component('DetailAudio', require('./components/DetailField').default);
    Vue.component('FormAudio', require('./components/FormField')).default;
})
